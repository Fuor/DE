<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller{

    public function __construct(){
        parent::__construct();
        // 购物车信息
        $Cart = new CartController();
        $totalPrice = $Cart->getPrice();
        $num = $Cart->getNum();
        $this->assign('totalPrice', $totalPrice);
        $this->assign('num', $num);
    }
    
    // 检测用户名是否存在
    function check_name(){
        $name = I("username");
        $z = M("User")->where("username='{$name}'")->find();
        if ($z) {
            $this->ajaxReturn(1);
        }
    }

    public function index(){
        if (! empty($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $u = M("User");
            $user = $u->where("user_id='{$_SESSION['user_id']}'")->find();
            
            $o = M("order");
            $order0 = $o->where("user_id='{$_SESSION['user_id']}' and status=0")->select();
            $order1 = $o->where("user_id='{$_SESSION['user_id']}' and status=1")->select();
            $order2 = $o->where("user_id='{$_SESSION['user_id']}' and status=2")->select();
            $order3 = $o->where("user_id='{$_SESSION['user_id']}' and status=3")->select();
            $uorder0 = count($order0);
            $uorder1 = count($order1);
            $uorder2 = count($order2);
            $uorder3 = count($order4);
            
            $this->assign('uorder0', $uorder0);
            $this->assign('uorder1', $uorder1);
            $this->assign('uorder2', $uorder2);
            $this->assign('uorder3', $uorder3);
            $this->assign('username', $username);
            $this->assign('user', $user);
            $this->display('Index/header');
            $this->display();
            $this->display('Index/footer');
        } else {
            $this->redirect('User/login');
        }
    }

    public function login(){
        if (! empty($_SESSION['username'])) {
            $this->redirect('index');
        } else {
            if (! empty($_POST)) {
                $verify = new \Think\Verify();
                // 验证码校验
                if (! $verify->check($_POST['captcha'])) {
                    $this->error('验证码错误。', U('login'));
                } else {
                    // 验证用户名密码，在model模型制作方法进行验证
                    $user = new \Model\UserModel();
                    $rst = $user->checkNamePwd($_POST['username'], MD5($_POST['password']));
                    if ($rst === false) {
                        $this->error('用户名或密码错误。', U('login'));
                    } else {
                        // 最后登录时间
                        $user = M("User");
                        $user->last_time = time();
                        $user->where("user_id='{$rst['user_id']}'")->save();
                        
                        // 激活
                        if ($rst['status'] == 0) {
                            require_once ("Home/Lib/mail/mail.php");
                            $subject = "账号激活";
                            $address = $rst['user_email'];
                            $token = $rst['token'];
                            $body = "亲爱的" . $rst['username'] . "：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。<br/>
    <a href='http://" . $_SERVER['HTTP_HOST'] . "/DE/index.php/Home/User/active/verify/" . $token . "' target=
'_blank'>http://" . $_SERVER['HTTP_HOST'] . "/DE/index.php/Home/User/active/verify/" . $token . "</a><br/>
    如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。";
                            $smail = new \mail();
                            $res = $smail->sendMail($subject, $address, $body);
                            
                            $this->error('该账户未激活，系统已向您的邮箱发送激活邮件，请在24小时内激活。', U('login'));
                        } elseif ($rst['status'] == 2) {
                            $this->error('该账户已被冻结，请联系客服处理。', U('login'));
                        } else {
                            // 验证通过，存入SESSION
                            session('username', $rst['username']);
                            $id = session('user_id', $rst['user_id']);
                            // 设置cookie
                            if (! empty($_POST['remember'])) {
                                cookie('username', $rst['username'], 604800); // 指定cookie保存时间;
                            } else {
                                cookie('username', null);
                            }
                            
                            // 未登录时加入购物车的商品转存至数据库
                            if (isset($_SESSION['cart'])) {
                                $car = $_SESSION['cart'];
                                $user_id = $rst['user_id'];
                                foreach ($car as $k => $v) {
                                    $goods_id = $v['goods_id'];
                                    $number = $v['number'];
                                    $goods_name = $v['goods_name'];
                                    $goods_price = $v['goods_price'];
                                    $Cart = new \Model\CartModel();
                                    $Cart->addItem($user_id, $goods_id, $number, $goods_name, $goods_price);
                                }
                            }
                            $this->redirect('index');
                            // $this->success('登录成功。',U('index'));
                        }
                    }
                }
            } else {
                $username = cookie('username');
                $this->assign('username', $username);
                $this->display('Index/header');
                $this->display();
                $this->display('Index/footer');
            }
        }
    }

    public function register(){
        if (! empty($_SESSION['username'])) {
            $this->redirect('index');
        } else {
            $user = new \Model\UserModel();
            // 判断表单是否提交
            if (! empty($_POST)) {
                if (! $user->create()) {
                    // var_dump($_POST);
                    // exit();
                    $this->error('验证失败，请重新输入', U('User/register')); // 验证失败
                } else {
                    $r = $user->getByUsername($_POST['username']);
                    $email = $user->getByUserEmail($_POST['user_email']);
                    if ($r) {
                        $this->error('用户名已存在，请换一个试试。', U('User/register'));
                    } else 
                        if ($email) {
                            $this->error('邮箱已经被注册，请换一个试试。', U('User/register'));
                        } else {
                            $user_time = $user->user_time = time();
                            $last_time = $user->last_time = time();
                            // 激活码
                            $token = md5($r . $_POST['password'] . $last_time);
                            $user->token = $token;
                            // 发激活邮件
                            require_once ("Home/Lib/mail/mail.php");
                            $subject = "账号激活";
                            $address = $_POST['user_email'];
                            $body = "亲爱的" . $_POST['username'] . "：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。<br/>
        <a href='http://" . $_SERVER['HTTP_HOST'] . "/DE/index.php/Home/User/active/verify/" . $token . "' target=
    '_blank'>http://" . $_SERVER['HTTP_HOST'] . "/DE/index.php/Home/User/active/verify/" . $token . "</a><br/>
        如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。";
                            $smail = new \mail();
                            $res = $smail->sendMail($subject, $address, $body);
                            if ($res) {
                                $user->password = MD5($_POST['password']);
                                $rst = $user->add();
                                if ($rst) {
                                    $this->redirect('success');
                                } else {
                                    $this->error('注册失败，请重试。', U('register'));
                                }
                            } else {
                                $this->error('该邮箱不能使用，请换一个尝试', U('User/register'));
                            }
                        }
                }
            } else {
                $this->display('Index/header');
                $this->display();
                $this->display('Index/footer');
            }
        }
    }
    // 账号激活
    function active(){
        if (! empty($_SESSION['username'])) {
            $this->redirect('index');
        }
        
        if ($_REQUEST) {
            $verify = stripslashes(trim($_GET['verify']));
            $now_time = time();
            $info = D("User");
            $where['_string'] = "(status =0) and (token ='{$verify}')";
            $user = $info->where($where)->find();
            if ($user) {
                // 判断当前时间是否过了有效期，24时=86400秒
                if ($now_time > $user['last_time'] + 86400) {
                    $this->error('您的激活有效期已过，请登录您的帐号重新发送激活邮件。', U('login'));
                } else {
                    $info->where("user_id='{$user['user_id']}'")->status = 1;
                    $info->where("user_id='{$user['user_id']}'")->token = null;
                    $z = $info->save();
                    if ($z) {
                        $this->success('激活成功，请登录。', U('login'));
                    }
                }
            } else {
                $this->error('没有查到。', U('login', 5));
            }
        } else {
            $this->error('链接错误。', U('User/login'));
        }
    }
    
    // 用户信息
    function info(){
        if (! empty($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $info = D("User");
            if (! empty($_POST)) {
                $info->create($user_id);
                $rst = $info->save();
                // var_dump();
                // exit();
                if ($rst) {
                    $this->error('更新成功。', U('info'));
                } else {
                    $this->error('更新失败。', U('info'));
                }
            } else {
                $username = $_SESSION['username'];
                $infos = $info->where("username='{$username}'")->find();
                // var_dump($user_id);
                // exit();
                
                $this->assign('username', $username);
                $this->assign('infos', $infos);
                $this->display('Index/header');
                $this->display();
                $this->display('Index/footer');
            }
        } else {
            $this->redirect('User/login');
        }
    }
    
    // 用户订单
    function myorder(){
        if (! empty($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $info = D("User");
            $user_id = $info->where("username='{$username}'")->getField("user_id");
            
            $orders = D("order");
            $myorder = $orders->where("user_id='{$user_id}'")->select();
            // var_dump($myorder);
            // exit();
            // 分页
            $total = $orders->where("user_id='{$user_id}'")->count();
            $per = 5;
            $page = new \Component\page($total, $per);
            $sql = "select * from sw_order where user_id='{$user_id}' " . $page->limit;
            $info = $orders->query($sql);
            $pagelist = $page->fpage();
            
            // var_dump($info);
            // exit();
            $this->assign('pagelist', $pagelist);
            $this->assign('username', $username);
            $this->assign('myorder', $myorder);
            $this->display('Index/header');
            $this->display();
            $this->display('Index/footer');
        } else {
            $this->redirect('User/login');
        }
    }
    
    // 我的评价
    function myreviews(){
        if (empty($_SESSION['username'])) {
            $this->redirect('login');
        }
        $username = $_SESSION['username'];
        $myreviews = new ReviewsController();
        $review = $myreviews->getReviews($username);
        
        // 查询评价的商品
        $good = M('Goods');
        foreach ($review as $k => $v) {
            $goods[] = $good->where("goods_id='{$v['goods_id']}'")->find();
        }
        // 根据商品ID找商品名称
        foreach ($goods as $k => $v) {
            $goods[$v['goods_id']] = $v['goods_name'];
        }
        
        $this->assign('review', $review);
        $this->assign('goods', $goods);
        $this->display('Index/header');
        $this->display();
        $this->display('Index/footer');
    }
    
    // 获取地址
    function getArea(){
        if (empty($_SESSION['username'])) {
            $this->redirect('login');
        }
        $where['parent_id'] = $_REQUEST['areaId'];
        $area = D('areas')->where($where)->select();
        $this->ajaxReturn($area);
    }
    
    // 用户地址
    function adress(){
        if (! empty($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $user_id = $_POST['user_id'];
            $info = D("User");
            if (! empty($_POST)) {
                // 组装地址
                $where['area_id'] = $_REQUEST['province'];
                $province = D('areas')->where($where)->getField("area_name");
                $where['area_id'] = $_REQUEST['city'];
                $city = D('areas')->where($where)->getField("area_name");
                $where['area_id'] = $_REQUEST['district'];
                $district = D('areas')->where($where)->getField("area_name");
                $detail = $_REQUEST['detail'];
                
                // 新地址
                if (isset($province, $city, $district, $detail)) {
                    $adress = $province . $city . $district . $detail;
                } else {
                    $adress = $info->where("user_id='{$user_id}'")->getField("adress");
                }
                // 创建数据
                $info->create();
                $info->adress = $adress;
                // var_dump($info);
                // exit();
                $rst = $info->save();
                if ($rst) {
                    $this->error('更新成功。', U('adress'));
                } else {
                    $this->error('更新失败。', U('adress'));
                }
            } else {
                // 获取省级地区
                $province = D('areas')->where(array(
                    'parent_id' => 1
                ))->select();
                // var_dump($province);
                // exit();
                $infos = $info->where("username='{$username}'")->find();
                $this->assign('province', $province);
                $this->assign('username', $username);
                $this->assign('infos', $infos);
                $this->display('Index/header');
                $this->display();
                $this->display('Index/footer');
            }
        } else {
            $this->redirect('User/login');
        }
    }
    
    // 用户修改密码
    function repass(){
        if (! empty($_SESSION['username'])) {
            $username = $_SESSION['username'];
            if (! empty($_POST)) {
                $user = new \Model\UserModel();
                $rst = $user->checkNamePwd($username, MD5($_POST['opassword']));
                if ($rst === false) {
                    $this->error('原密码错误，请重新输入。');
                } else {
                    $user->create();
                    $user->where("user_id='{$_SESSION['user_id']}'")->password = MD5($_POST['password']);
                    $z = $user->save();
                    if ($z) {
                        $this->error('修改成功，请新登录。', U('logout'));
                    } else {
                        $this->error('修改失败，请重试。');
                    }
                }
            } else {
                $this->assign('username', $username);
                $this->display('Index/header');
                $this->display();
                $this->display('Index/footer');
            }
        } else {
            $this->redirect('User/login');
        }
    }
    
    // 找回密码
    function getPass(){
        if (! empty($_SESSION['username'])) {
            $this->redirect('index');
        } else {
            if (! empty($_POST)) {
                $user = new \Model\UserModel();
                $info = $user->getByUserEmail($_POST['email']);
                if ($info) {
                    $last_time = $user->last_time = time();
                    $time = date("Y-m-d H:i:s", time());
                    $username = $user->username;
                    // 验证码
                    $token = md5($username . $info['user_email'] . $last_time);
                    $user->token = $token;
                    // 发找回邮件
                    require_once ("Home/Lib/mail/mail.php");
                    $subject = "找回密码";
                    $address = $info['user_email'];
                    $body = "亲爱的" . $username . "：<br/>您于" . $time . "申请找回密码，<br/>请点击链接激活您的帐号。<br/>
        <a href='http://" . $_SERVER['HTTP_HOST'] . "/DE/index.php/Home/User/setpass/verify/" . $token . "' target=
    '_blank'>http://" . $_SERVER['HTTP_HOST'] . "/DE/index.php/Home/User/setpass/verify/" . $token . "</a><br/>
        如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。";
                    // var_dump($body);exit();
                    $smail = new \mail();
                    $res = $smail->sendMail($subject, $address, $body);
                    if ($res) {
                        $z = $user->where("username='{$username}'")->save();
                        if ($z) {
                            // $this->redirect('User/login');
                            $this->success('请查收找回邮件。', U('login'));
                        } else {
                            $this->error('出错了，请重试。', U('User/login'));
                        }
                    } else {
                        // var_dump($smail);
                        // exit();
                        $this->error('哦哦，出错了，请重试。', U('User/login'));
                    }
                } else {
                    $this->error('邮箱未注册。', U('User/login'));
                }
            } else {
                $this->display('Index/header');
                $this->display();
                $this->display('Index/footer');
            }
        }
    }
    // 找回密码-新密码
    function setPass(){
        if (!empty($_SESSION['username'])) {
            $this->redirect('index');
        }
        if ($_REQUEST) {
            $verify = stripslashes(trim($_GET['verify']));
            $now_time = time();
            $info = D("User");
            $where['_string'] = "(token ='{$verify}')";
            $user = $info->where($where)->find();
            if ($user) {
                // 判断当前时间是否过了有效期，24时=86400秒
                if ($now_time > $user['last_time'] + 86400) {
                    $this->error('链接已经失效，请重新找回密码。', U('login'));
                } else {
                    if (! empty($_POST)) {
                        $info->where("user_id='{$user['user_id']}'")->password = MD5($_POST['password']);
                        $info->where("user_id='{$user['user_id']}'")->token = null;
                        $z = $info->save();
                        if ($z) {
                            $this->error('设置成功，请登录。', U('login'));
                        } else {
                            $this->error('设置失败，请重试。', U('login'));
                        }
                    } else {
                        $this->display('Index/header');
                        $this->display();
                        $this->display('Index/footer');
                    }
                }
            } else {
                $this->error('有错误，请重新申请找回。', U('login', 5));
            }
        } else {
            $this->error('链接错误。', U('User/login'));
        }
    }
    
    // 退出登录
    function logout(){
        session(null);
        $this->redirect('User/login');
        // $this->error('退出成功',U('User/login'));
    }
    // 验证码生成方法
    public function verifyImg(){
        $config = array(
            'fontSize' => 16, // 验证码字体大小(px)
            'imageH' => 35, // 验证码图片高度
            'imageW' => 140, // 验证码图片宽度
            'length' => 4, // 验证码位数
            'useCurve' => false
        ) // 是否画混淆曲线
;
        $verify = new \Think\Verify($config);
        // 生成验证码
        $verify->entry();
    }

    function _empty(){
        // 服务器繁忙提示
        $empty = new EmptyController();
        $empty->_empty();
    }

    function success(){
        $this->display('Index/header');
        $this->display();
        $this->display('Index/footer');
    }
}
?>