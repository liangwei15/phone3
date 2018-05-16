<?php
namespace Admin\Controller;

use Think\Controller;

vendor("wxapi.lib.WxPay#Api");

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

    function abc(){
$carbrand=M("carbrand");
$info=$carbrand->table("sw_carbrand carbrand,sw_carmodel carmodel, sw_displacement displacement, sw_shijia shijia")->
where("carbrand.id=carmodel.bid and carmodel.mid=displacement.mid and displacement.did=shijia.did")->select();
var_dump($info);
    }

    function addlogin1()
    {
        $manager = M('Manager');
        $username = $_POST["username"];
        $pwd = $_POST["password"];
        $pro = $manager->where("mg_num='%s' and mg_pwd='%s'" , array($username, md5($pwd)))->find();
        if($pro && $pro['zhuangtai']==1) {
            session('name', $pro["mg_num"]);
            session('relname', $pro["mg_rame"]);
            session('mg_id', $pro["mg_id"]);
            $this->redirect('Index/main1');
        }

        else {

            $this->error('账号或者密码错误或者你已离职');
        }
    }

    function login1()
    {
        $name=$_POST['name'];
        $password=$_POST['password'];
        $ty=M('admin');
        $tm=$ty->where("a_name='$name'")->find();
        dump($name) ;
        //var_dump($tm);

        if($tm){
            if($tm['a_password']==md5($password)){
                $this->redirect("Index/form-amazeui");
            }
            else{
                $this->error("密码错误");

            }
        }
        else{
            $this->error("用户名不存在");
        }
        $this->display();
    }



    public function addbrand()
    {
//        if ($_FILES['pic']['error'] == 0) {
//            $photoinfo = $this->upload();
//            $pic = $photoinfo['logo']['savename'];
//            $phonebrand = M("phonebrand");
//            $phoneName = $_POST['phonename'];
//            $phonebrand->create();
//            $phonebrand->firstword = substr(pinyin1($phoneName), 0, 1);
//            $phonebrand->logo = $pic;
//            if ($phonebrand->add()) {
//                $this->success("添加成功");
//            } else {
//                $this->error("添加失败");
//            }
//
//        }
//        else{
//            $this->error("请检查图片");
//        }

        if ($_FILES['pic']['error'] == 0) {
            $photoinfo = $this->upload();
            $pic = $photoinfo['logo']['savename'];
            $phonebrand = M("phonebrand");
            $phoneName = $_POST['phonename'];
            $phonebrand->create();
            $phonebrand->brand = substr($phoneName,0,500);
            $phonebrand->logo = $pic;
            if ($phonebrand->add()) {
               var_dump($phoneName);
               // $this->success("添加成功");
              //  dump($phonebrand);
            } else {
               // $this->error("添加失败");
            }

        }
        else{
            $this->error("请检查图片");
        }



        }

    public function brondlist()
    {
        $phonebrand = M("phonebrand");
        $count = $phonebrand->count();
        $p = getpage($count, 10);
        $list = $phonebrand->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();

    }

    public function userlist()
    {
        $userlist = M("users");
        $count = $userlist->count();
        $p = getpage($count, 10);
        $list = $userlist->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();

    }

    public function brondlist2()
    {
        $carbrand = M("carbrand");
        $count = $carbrand->count();
        $p = getpage($count, 10);
        $list = $carbrand->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();

    }

    public function brondlist3()
    {
        $phonebrand = M("phonebrand");
        $count = $phonebrand->count();
        $p = getpage($count, 10);
        $list = $phonebrand->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();

    }

    public function delbrand($id)
    {
        $carbrand = M("phonebrand");
        if ($carbrand->delete($id)) {
            $this->success("删除成功");
        } else {
            $this->error("删除失败");
        }
    }

    public function savebrand($id)
    {
        $carbrand = M("phonebrand");
        $info = $carbrand->where("b_id='$id'")->find();
        $this->assign("info", $info);
        $this->display();


    }

    function brandsave()
    {
        $carbrand = M("carbrand");
        $carbrand->create();
        $carbrand->id = $_POST['id'];
        $carbrand->carname = $_POST['carname'];
        if ($carbrand->save()) {
            $this->success("保存成功");
        } else {
            $this->error("保存失败");
        }
    }

    function carmodel($id)
    {
        $phonebrand = M("phonebrand");
        $info = $phonebrand->where("b_id='$id'")->find();
        $this->assign("info", $info);
        $this->display();
    }

    function addcarmodel()
    {
        $phonetype = M("phonetype");
        $phonetype->create();
        if ($phonetype->add()) {
            $this->success("型号添加成功");
        } else {
            $this->error("型号添加失败");
        }
    }

    function modellist($id)
    {
        $carbrand = M("phonebrand");
        $info = $carbrand->where("b_id='$id'")->find();

        $phonemodel = M("phonetype");
        $count = $phonemodel->where("b_id='$id'")->count();
        $p = getpage($count, 10);
        $list = $phonemodel->where("b_id='$id'")->limit($p->firstRow, $p->listRows)->select();
//        $list = $phonemodel->table("phonebrand n ,phonetype m")->where("n.b_id=m.b_id and m.b_id='$id'")->limit($p->firstRow, $p->listRows)->select();
        //where("m.u_id=u.u_id  and reply.m_id =m.m_id and m.m_id='$m_id'")
        $this->assign('info', $list); // 赋值数据集
        $this->assign("infos", $info);
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }


    function modellist2($id)
    {
        $carbrand = M("carbrand");
        $info = $carbrand->where("id='$id'")->find();

        $carmodel = M("carmodel");
        $count = $carmodel->where("bid='$id'")->count();
        $p = getpage($count, 10);
        $list = $carmodel->where("bid='$id'")->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $list); // 赋值数据集
        $this->assign("infos", $info);
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }

    function modellist3($id)
    {
        $carbrand = M("phonebrand");
        $info = $carbrand->where("b_id='$id'")->find();

        $carmodel = M("phonetype");
        $count = $carmodel->where("b_id='$id'")->count();
        $p = getpage($count, 10);
        $list = $carmodel->where("b_id='$id'")->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $list); // 赋值数据集
        $this->assign("infos", $info);
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }

    public function delmodel($id)
    {
        $carmodel = M("phonetype");
        if ($carmodel->delete($id)) {
            $this->success("删除成功");
        } else {
            $this->error("删除失败");
        }
    }

    public function savemodel($id)
    {
        $carbrand = M("carmodel");
        $info = $carbrand->where("mid='$id'")->find();
        $this->assign("info", $info);
        $this->display();


    }

    function modelsave()
    {
        $carmodel = M("carmodel");
        $carmodel->create();
        $carmodel->mid = $_POST['mid'];
        $carmodel->modelname = $_POST['modelname'];
        if ($carmodel->save()) {
            $this->success("保存成功");
        } else {
            $this->error("保存失败");
        }
    }

    function displacement($id)
    {
        $phonetype = M("phonetype");
        $info = $phonetype->where("b_id='$id'")->find();
        $this->assign("info", $info);
        $this->display();
    }

    function addphonetype()
    {
        $displacement = M("phonetype");
        $id=$_POST['b_id'];
       $displacement->create();

        //dump($id) ;
        $displacement->b_id=$id;
        if ($displacement->add()) {
            $this->success("手机型号添加成功");
        } else {
            $this->error("手机型号添加失败");
        }
    }

    function displacementlist($id)
    {
//        $carmodel = M("carmodel");
//        $info = $carmodel->where("mid='$id'")->find();
//
//        $displacement = M("displacement");
//        $count = $displacement->where("mid='$id'")->count();
//        $p = getpage($count, 10);
//        $list = $displacement->where("mid='$id'")->limit($p->firstRow, $p->listRows)->select();
//        $this->assign('info', $list); // 赋值数据集
//        $this->assign("infos", $info);
//        $this->assign('page', $p->show()); // 赋值分页输出
//        $this->display();
    }

    function displacementlist2($id)
    {
//        $carmodel = M("carmodel");
//        $info = $carmodel->where("mid='$id'")->find();
//
//        $displacement = M("displacement");
//        $count = $displacement->where("mid='$id'")->count();
//        $p = getpage($count, 10);
//        $list = $displacement->where("mid='$id'")->limit($p->firstRow, $p->listRows)->select();
//        $this->assign('info', $list); // 赋值数据集
//        $this->assign("infos", $info);
//        $this->assign('page', $p->show()); // 赋值分页输出
//        $this->display();
    }
    
    function displacementlist3($id)
    {
        $carmodel = M("phonemodel");
        $info = $carmodel->where("mid='$id'")->find();

        $displacement = M("displacement");
        $count = $displacement->where("mid='$id'")->count();
        $p = getpage($count, 10);
        $list = $displacement->where("mid='$id'")->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $list); // 赋值数据集
        $this->assign("infos", $info);
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }

    public function deldisplacement($id)
    {
//        $displacement = M("displacement");
//        if ($displacement->delete($id)) {
//            $this->success("删除成功");
//        } else {
//            $this->error("删除失败");
//        }


    }

    public function savedisplacement($id)
    {
//        $carbrand = M("displacement");
//        $info = $carbrand->where("did='$id'")->find();
//        $this->assign("info", $info);
//        $this->display();


    }

    function displacementsave()
    {
//        $displacement = M("displacement");
//        $displacement->create();
//        $displacement->did = $_POST['did'];
//        $displacement->modelname = $_POST['displacementname'];
//        if ($displacement->save()) {
//            $this->success("保存成功");
//        } else {
//            $this->error("保存失败");
//        }
    }

    function addcomponent()
    {
//        $component = M("component");
//        $component->create();
//        if ($component->add()) {
//            $this->success("添加成功");
//        } else {
//            $this->error("添加失败");
//        }
    }

    function componentsadd($id)
    {
//        $component = M("component");
//        $info = $component->select();
//        $this->assign("info", $info);
//        $this->assign("id", $id);
//        $this->display();
    }

    function banjinpriceadd($id)
    {
        $bjprice = M("phonepart");
        $info = $bjprice->where("fid='$id'")->find();
        $this->assign("info", $info);
        $this->assign("id", $id);
        $this->display();
    }

    function dcadd()
    {
//        $dc = M("dc");
//        $dc->create();
//        if ($dc->add()) {
//            $this->success("添加成功");
//        } else {
//            $this->error("添加失败");
//        }
    }

    function displacementview($id)
    {
        $displacement = M("displacement");
        $info = $displacement->where("did='$id'")->find();
        $dc = M("dc");
        $count = $dc->where("did='$id'")->count();
        $p = getpage($count, 10);
        $list = $dc->table('sw_dc dc, sw_displacement displacement,sw_component component')->where("dc.did = displacement.did and dc.did='$id' and dc.cid=component.cid")->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $list); // 赋值数据集
        $this->assign("infos", $info);
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }
    function deldc($id)
    {
//        $dc = M("dc");
//        if ($dc->delete($id)) {
//            $this->success("删除成功");
//        } else {
//            $this->error("删除失败");
//        }
    }
    function componentsave($id)
    {
//        $component = M("component");
//        $info = $component->select();
//        $dc = M("dc");
//        $infos = $dc->where("dcid='$id'")->find();
//        $this->assign("info", $info);
//        $this->assign("infos", $infos);
//        $this->display();
    }
    function dcsave()
    {
//        $dc = M("dc");
//        $dc->create();
//        $dc->dcid = $_POST['dcid'];
//        if ($dc->save()) {
//            $this->success("保存成功");
//        } else {
//            $this->error("保存失败");
//        }
    }
    function shijiayuyue()
    {

        $displacement = M('displacement');
        $info = $displacement->table("sw_carbrand carbrand,sw_carmodel carmodel,sw_displacement displacement,sw_shijia shijia")->where("carbrand.id=carmodel.bid  and carmodel.mid =displacement.mid and shijia.did=displacement.did and zhuangtai=1 ")->order("yid desc")->select();
        $this->assign("info", $info);
        $this->display();
    }

    function bjyuyue()
    {
//        $bjprice = M("bjprice");
//        $displacement = M('displacement');
//        $info = $displacement->table("sw_carbrand carbrand,sw_carmodel carmodel,sw_displacement displacement,sw_ybj ybj")->where("carbrand.id=carmodel.bid  and carmodel.mid =displacement.mid and ybj.did=displacement.did and zhuangtai!=0")->order("ybid desc")->select();
//        foreach ($info as $n => $val) {
//            $info[$n]['voo'] = $bjprice->field($val['lingjian'])->where("did='" . $val['did'] . "'")->select();
//        }
//        $this->assign("info", $info);
//        $this->display();
    }

    function baoyangyuyue()
    {
//        $dc = M("dc");
//        $by = M('by');
//        $info = $by->table("sw_carbrand carbrand,sw_carmodel carmodel,sw_displacement displacement,sw_by bys")->where("carbrand.id=carmodel.bid  and carmodel.mid =displacement.mid and bys.did=displacement.did and zhuangtai!=0")->order("ybid desc")->select();
//        foreach ($info as $n => $val) {
//
//            $info[$n]['voo'] = $dc->where("dcid in (" . $val['lingjian'] . ")")->select();
//        }
//        $info1=$by->table("sw_ybj ybj,sw_xuqiu xuqiu,sw_dc dc")->where("ybj.ybid=xuqiu.ybid and xuqiu.dcid=dc.dcid")->select();
//        $this->assign("info1",$info1);
//        $this->assign("info", $info);
//        $this->display();
    }

    function weixiuyuyue()
    {
//        $dc = M("dc");
        $by = M('by');
        $info = $by->table("sw_carbrand carbrand,sw_carmodel carmodel,sw_displacement displacement,sw_wx wx")->where("carbrand.id=carmodel.bid  and carmodel.mid =displacement.mid and wx.did=displacement.did and zhuangtai!=0")->order("wid desc")->select();
        $info1=$by->table("sw_wx wx,sw_xuqiu xuqiu,sw_dc dc")->where("wx.wid=xuqiu.wid and xuqiu.dcid=dc.dcid")->select();
        $this->assign("info1",$info1);
        $this->assign("info", $info);
        $this->display();
    }

    function bjadd()
    {
        $bjprice = M("phonepart");

//        $info = $bjprice->where("bid='" . $_POST['did'] . "'")->find();
        $info = $bjprice->where("bid='" . $_POST['id'] . "'")->find();
        if (!$info) {
            $bjprice->create();
            if ($bjprice->add()) {
                $this->success("增加成功");
            } else {
                $this->error("增加失败");
            }
        } else {
            $bjprice->create();
            $bjprice->fid = $info['fid'];
            if ($bjprice->save()) {
                $this->success("修改成功");
            } else {
                $this->error("修改失败");
            }
        }
    }

    function addadmin()
    {
        $uid = I("post.uid");
        $user = M("user");
        $user->create();
        $user->uid = $uid;
        $user->role1 = I("post.sjadmin");
        $user->role2 = I("post.byadmin");
        $user->role3 = I("post.wxadmin");
        $user->role4 = I("post.bjadmin");
        if ($user->save()) {
            $this->success("分配权限成功");
        } else {
            $this->error("分配权限失败");
        }
    }
//    function  addadmin1(){
//        $uid=$_POST['uid'];
//        $user = M("user");
//        $user->create();
//        $user->uid=$uid;
//        $user->role1=$_POST['sjadmin'];
//        $user->role2=$_POST['byadmin'];
//        $user->role3=$_POST['wxadmin'];
//        $user->role4=$_POST['bjadmin'];
//        if($user->save()){
//            $this->success("分配权限成功");
//        }
//        else{
//            $this->error("分配权限失败");
//        }
//    }

    function yz()
    {
        ini_set('date.timezone', 'Asia/Shanghai');
        error_reporting(E_ERROR);
        if (isset($_REQUEST["out_trade_no"]) && $_REQUEST["out_trade_no"] != "") {
            $out_trade_no = $_REQUEST["out_trade_no"];
            $input = new \WxPayOrderQuery();
            $input->SetOut_trade_no($out_trade_no);
//           var_dump(\WxPayApi::orderQuery($input));
            if (\WxPayApi::orderQuery($input)['trade_state'] == "SUCCESS") {
                for ($i = 1; $i <= 4; $i++) {
                    if ($i == 1) {
                        $heyan = M("shijia");
                    }
                    if ($i == 2) {
                        $heyan = M("by");
                    }
                    if ($i == 3) {
                        $heyan = M("ybj");
                    }
                    if ($i == 4) {
                        $heyan = M("wx");
                    }
                    $info = $heyan->where("rands='" . $_REQUEST["out_trade_no"] . "'")->find();
                    if ($info && $info['zhuangtai'] != 99) {
                        $heyan->create();
                        if ($i == 1) {
                            $heyan->yid = $info['yid'];
                        }
                        if ($i == 2) {
                            $heyan->ybid = $info['ybid'];
                        }
                        if ($i == 3) {
                            $heyan->ybid = $info['ybid'];
                        }
                        if ($i == 4) {
                            $heyan->wid = $info['wid'];
                        }
                        $heyan->zhuangtai = 99;
                        if ($heyan->save()) {
                            $this->success("核验成功");
                        } else {
                            $this->error("核验失败");
                        }
                    } elseif ($info && $info['zhuangtai'] == 99) {
                        $this->error("此订单已经消费，不能再次消费");
                    } elseif ($info && $info['zhuangtai'] == 4) {
                        $this->error("此订单已经取消，不能消费");
                    } else {
                        continue;
                    }
                }
                if ($i == 4) {
                    $this->error("微信返回数据正常，系统内无此核验码，请进行退款处理");
                }
                $this->success("核验成功");
            } else {
                $this->error("微信返回数据无此订单，核验失败");
            }
            exit();

        }
    }

    function tk()
    {
        ini_set('date.timezone', 'Asia/Shanghai');
        error_reporting(E_ERROR);
        if (isset($_REQUEST["out_trade_no"]) && $_REQUEST["out_trade_no"] != "") {
            $out_trade_no = $_REQUEST["out_trade_no"];
            $total_fee = $_REQUEST["total_fee"] * 100;
            $refund_fee = $_REQUEST["refund_fee"] * 100;
            $input = new \WxPayRefund();
            $input->SetOut_trade_no($out_trade_no);
            $input->SetTotal_fee($total_fee);
            $input->SetRefund_fee($refund_fee);
            $input->SetOut_refund_no(\WxPayConfig::MCHID . date("YmdHis"));
            $input->SetOp_user_id(\WxPayConfig::MCHID);
            if (\WxPayApi::refund($input)['result_code'] == "SUCCESS") {
                $this->success("退款提交成功，等待微信处理");
                exit();
            } else {
                $this->error("退款失败");
            }
        }
    }

    function upload()
    {
        $upload = new \Think\Upload();
        $upload->maxSize = 20971520;
        $upload->exts = array('png', 'jpg', 'jpeg', 'gif');
        $upload->rootPath = './Public/Home/img/';
        $upload->autoSub = false;
        $info = $upload->upload();
        if (!$info) {
            $this->error($upload->getError(),500);
        } else {
            return $info;
        }
    }
    function  onsiterepair()
    {
        $sql=M("onsiterepair");
        $info=$sql->table("repair r,users u,discount d,phonebrand pb,phonetype pt,cdkey c,phonepart pp")->where("r.open_id=u.openid AND d.discountid=r.r_youhui and r.fid=pp.fid and pp.bid=pt.bid and pb.b_id=pt.b_id and r.weixiutype=1")->order("r_id desc")->select();
        $this->assign("info", $info);
        //var_dump($info);
        $this->display();
    }
    function shoprepair()
    {
        $sql=M("shoprepair");
        $info=$sql->table("repair r,users u,discount d,phonebrand pb,phonetype pt,cdkey c,phonepart pp")->where("r.open_id=u.openid AND d.discountid=r.r_youhui and r.fid=pp.fid and pp.bid=pt.bid and pb.b_id=pt.b_id and r.weixiutype=2")->order("r_id desc")->select();
        $this->assign("info", $info);
        //var_dump($info);
        $this->display();
    }
    function postrepair()
    {
        $sql=M("shoprepair");
        $info=$sql->table("repair r,users u,discount d,phonebrand pb,phonetype pt,cdkey c,phonepart pp")->where("r.open_id=u.openid AND d.discountid=r.r_youhui and r.fid=pp.fid and pp.bid=pt.bid and pb.b_id=pt.b_id and r.weixiutype=3")->order("r_id desc")->select();
        $this->assign("info", $info);
        //var_dump($info);
        $this->display();
    }
    function localerepair()
    {
        $sql=M("localerepair");
        $info=$sql->table("repair r,users u,phonebrand pb,phonetype pt,cdkey c,phonepart pp")->where("r.open_id=u.openid   and r.fid=pp.fid and pp.bid=pt.bid and pb.b_id=pt.b_id and r.weixiutype=4")->order("r_id desc")->select();
        $this->assign("info", $info);
        //var_dump($info);
        $this->display();
    }

}