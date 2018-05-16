<?php

namespace Home\Controller;

use Think\Controller;
use Aliyun\Core\Config;
use Aliyun\Core\Profile\DefaultProfile;
use Aliyun\Core\DefaultAcsClient;
use Aliyun\Api\Sms\Request\V20170525\SendSmsRequest;
use Aliyun\Api\Sms\Request\V20170525\QuerySendDetailsRequest;
use \think\Db;


class IndexController extends Controller
{

    public function index()
    {
        $student = M("user");
        $code = $_GET['code'];
        $_SESSION['code'] = $code;

        if ($_SESSION['code'] == "") {
            $this->redirect('code');
        }


        $get_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx27346fc444b2c118&secret=a6efc3c4bf4c08a8642aa3a03ac64c51&code=" . $code . "&grant_type=authorization_code";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $get_token_url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $res = curl_exec($ch);

        curl_close($ch);
        $json_obj = json_decode($res, true);

        $openid = $json_obj["openid"];

        $_SESSION['openid'] = $openid;
        $info = $student->where("openid='$openid'")->find();
        if ($info) {

            $this->display();
        } else {


            $access_token = $this->taken();


            $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=" . $access_token . "&openid=" . $openid;
            $json = file_get_contents($url);//这个地方不能用file_get_contents
            $json_obj = json_decode($json, true);

            /*
            $get_token_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=" . $access_token . "&openid=" . $openid;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $get_token_url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
            $res = curl_exec($ch);
            curl_close($ch);
            $json_obj = json_decode($res, true);*/
//var_dump($json_obj);
//exit;
            if ($json_obj['subscribe'] == 0) {
                $this->error("你没关注公众号,请关注", "https://mp.weixin.qq.com/s/goPjEau9h9uQp65nuIHdPA", 1);
            } else {
                $nickname = $json_obj['nickname'];
                $headimgurl = $json_obj['headimgurl'];
                $student->username = $nickname;
                $student->openid = $openid;
                $student->headimgurl = $headimgurl;
                if ($student->add()) {
                    $this->redirect('index');
                }
            }
        }

    }


    function code()
    {
        $appid = "wx27346fc444b2c118";
//        a6efc3c4bf4c08a8642aa3a03ac64c51
        header("Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=" . $appid .
            "&redirect_uri=http://fwpt.ineusoft.com.cn/che&response_type=code&scope=snsapi_userinfo&STATE=1#wechat_redirect");
    }


    function taken()
    {
        $appid = 'wx27346fc444b2c118';
        $secret = 'a6efc3c4bf4c08a8642aa3a03ac64c51';

        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . $appid . "&secret=" . $secret;
        $json = file_get_contents($url);//这个地方不能用file_get_contents
        $json_obj = json_decode($json, true);

        //var_dump($json_obj);
        //exit;
        /*
        $get_token_url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . $appid . "&secret=" . $secret;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $get_token_url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        $res = curl_exec($ch);
        curl_close($ch);
        $json_obj = json_decode($res, true);
*/
        return $json_obj['access_token'];
    }


    function wxpay($id)
    {
        if (!session("?openid")) {
            $this->redirect('code');
        }
        $ybj = M("ybj");
        $bjprice = M("bjprice");
        $info = $ybj->where("ybid='$id'")->find();
        $infos = $bjprice->field($info['lingjian'])->where("did='" . $info['did'] . "'")->find();
        $this->assign("infos", $infos);
        $this->display();
    }


    function href($type)
    {
        if (!session("?openid")) {
            $this->redirect('code');
        }
        if ($type == "by") {
            $by = M("by");
            $info = $by->where("rands='" . $_SESSION['rands'] . "'")->find();
            $_SESSION['rands'] = "";
            $by->create();
            $by->ybid = $info['ybid'];
            $by->zhuangtai = 2;
            if ($by->save()) {
                $this->success("支付成功", "index");
            } else {
                $this->error("支付成功，但是因为网络问题，写入失败，请联系管理员", "index");
            }
        } elseif ($type == "bj") {
            $by = M("ybj");
            $info = $by->where("rands='" . $_SESSION['rands'] . "'")->find();
            $_SESSION['rands'] = "";
            $by->create();
            $by->ybid = $info['ybid'];
            $by->zhuangtai = 2;
            if ($by->save()) {
                $this->success("支付成功", "index");
            } else {
                $this->error("支付成功，但是因为网络问题，写入失败，请联系管理员", "index");
            }

        } else {
            $this->error("支付失败", "code");
        }
    }

function  First($fid){

//    $tm=M('phonetype')->where("bid='$bid'")->find();
//    $ty=M('phonepart')->where("fid='$fid'")->find();
//        $this->assign('tm',$tm);
//        $this->assign('ty',$ty);
//        $this->display();
    $ty=M('phonepart');
    $dd=M('discount');
    $ds=M('repaires');
    $tm=$ty->table('phonepart part,phonetype type')->where("part.bid=type.bid and part.fid='$fid'")->find();
    $tb=$dd->select();
    $da=$ds->where("id='$fid'")->find();
    $this->assign('da',$da);
    $this->assign('tb',$tb);
    $this->assign('tm',$tm);
    $this->display();
}
    function  First_2($fid){

//        $tm=M('phonetype')->where("bid='$bid'")->find();
//        $ty=M('phonepart')->where("fid='$fid'")->find();
//        $this->assign('tm',$tm);
//        $this->assign('ty',$ty);
//        $this->display();
        $ty=M('phonepart');
        $dd=M('discount');
        $ds=M('repaires');
        $tm=$ty->table('phonepart part,phonetype type')->where("part.bid=type.bid and part.fid='$fid'")->find();
        $tb=$dd->select();
        $da=$ds->where("id='$fid'")->find();
        $this->assign('da',$da);
        $this->assign('tb',$tb);
        $this->assign('tm',$tm);
        $this->display();
    }

    function  First_3($fid){

//        $tm=M('phonetype')->where("bid='$bid'")->find();
//        $ty=M('phonepart')->where("fid='$fid'")->find();
//        $this->assign('tm',$tm);
//        $this->assign('ty',$ty);
//        $this->display();
        $ty=M('phonepart');
        $dd=M('discount');
        $ds=M('repaires');
        $tm=$ty->table('phonepart part,phonetype type')->where("part.bid=type.bid and part.fid='$fid'")->find();
        $tb=$dd->select();
        $da=$ds->where("id='$fid'")->find();
        $this->assign('da',$da);
        $this->assign('tb',$tb);
        $this->assign('tm',$tm);
        $this->display();
    }

    function  First_4($fid){

//        $tm=M('phonetype')->where("bid='$bid'")->find();
//        $ty=M('phonepart')->where("fid='$fid'")->find();
//        $this->assign('tm',$tm);
//        $this->assign('ty',$ty);
//        $this->display();
        $ty=M('phonepart');
        $dd=M('discount');
        $ds=M('repaires');
        $tm=$ty->table('phonepart part,phonetype type')->where("part.bid=type.bid and part.fid='$fid'")->find();
        $tb=$dd->select();
        $da=$ds->where("id='$fid'")->find();
        $this->assign('da',$da);
        $this->assign('tb',$tb);
        $this->assign('tm',$tm);
        $this->display();
    }

    function add_repair(){
        $tw=M('repair');
        $address=$_POST['address'];
        $prices=$_POST['prices'];
        $time=$_POST['time'];
        $youhui=$_POST['youhui'];
        $intro=$_POST['intro'];
        $rand = date("YmdHis");
        //$type=$_POST['type'];
        $huihuai=$_POST['huihuai'];
        $hui=$_POST['hui'];

        $tw->create();
        $tw->r_address=$address;
        $tw->r_shangmentime=$time;
        $tw->r_intro=$intro;
        $tw->r_allprices=$prices;
        $tw->r_youhui=$youhui;
        $tw->rand=$rand;
        //$tw->bid=$type;
        $tw->fid=$huihuai;
        $tw->weixiutype='1';
        $tw->r_price=$hui;
        //$tw->open_id=$_SESSION['openid'];

        if($tw->add()){
            $this->redirect("Index/Four?rand=$rand");
        }
        else{
            $this->error("提交失败");
        }
    }

    function add_repair2(){
        $tw=M('repair');
        $name=$_POST['name'];
        $prices=$_POST['prices'];
        $phone=$_POST['phone'];
        $shop=$_POST['shop'];
        $server=$_POST['server'];
        $intro=$_POST['intro'];
        $dicso=$_POST['hui'];
        $rand = date("YmdHis");
       // $type=$_POST['type'];
        $huihuai=$_POST['huihuai'];
        $hui=$_POST['hui'];


        $tw->create();
        $tw->r_name=$name;
        $tw->r_tel=$phone;
        $tw->r_shopper=$shop;
        $tw->r_intro=$intro;
        $tw->r_allprices=$prices;
        $tw->r_youhui=$server;
        $tw->c_price=$dicso;
        $tw->open_id=1;
        $tw->rand=$rand;
        //$tw->bid=$type;
        $tw->fid=$huihuai;
        $tw->weixiutype='2';
        $tw->r_price=$hui;
        //$tw->open_id=$_SESSION['openid'];
        if($tw->add()){
            $this->redirect("six?id=$rand");
        }
        else{
            $this->error("提交失败");
        }

    }

    function add_repair3(){
        $tw=M('repair');
        $address=$_POST['address'];
        $prices=$_POST['prices'];
          $server=$_POST['server'];
          $intro=$_POST['intro'];
        $phone=$_POST['phone'];
        $hui=$_POST['hui'];
        $rand = date("YmdHis");

        $huihuai=$_POST['huihuai'];


        $tw->create();

        $tw->r_address=$address;
        $tw->r_intro=$intro;
        $tw->r_youhui=$server;
        $tw->r_tel=$phone;
        $tw->open_id=1;
        $tw->rand=$rand;
        $tw->r_allprices=$prices;
        $tw->fid=$huihuai;
        $tw->weixiutype='3';
        $tw->r_price=$hui;
        //$tw->open_id=$_SESSION['openid'];
        if($tw->add()){
            $this->redirect("six?id=$rand");
        }
        else{
            $this->error("提交失败");
        }
    }

    function add_repair4(){
        $tw=M('repair');
        $prices=$_POST['prices'];
        $name=$_POST['name'];
        $lian=$_POST['lian'];
        $bian=$_POST['bian'];
        $server=$_POST['server'];
        $intro=$_POST['intro'];
        //$dicso=$_POST['hui'];
        $rand = date("YmdHis");
         //$type=$_POST['type'];
        $hui=$_POST['hui'];
        $huihuai=$_POST['huihuai'];


        $tw->create();
        $tw->r_name=$name;
        $tw->r_tel=$lian;
        $tw->r_allprices=$prices;
        $tw->r_bianhao=$bian;
        $tw->r_intro=$intro;
        $tw->r_youhui=$server;
        //$tw->c_price=$dicso;
        $tw->open_id=1;
        $tw->rand=$rand;
       // $tw->bid=$type;
        $tw->fid=$huihuai;
        $tw->weixiutype='4';
        $tw->r_price=$hui;
        //$tw->open_id=$_SESSION['openid'];
        if($tw->add()){
            $this->redirect("six?id=$rand");
        }
        else{
            $this->error("提交失败");
        }

    }

    function Four($rand){
        $ty=M('repair');
        $tm=$ty->where("rand='$rand'")->find();

        $this->assign('tm',$tm);
        $this->display();
    }


    function Five(){
        $ty=M('repair');
        //$tm=$ty->where("open_id='".$_SESSION['openid']."'")->select();
//        $tm=$ty->where("open_id='1'")->select();
        $tm=$ty->table('phonepart part,repair re,phonetype type')->where("part.bid=type.bid and re.fid=part.fid and open_id='1'")->select();
        $this->assign('tm',$tm);

        $this->display();
    }

    function edit(){
        $ty=M('cdkey');
        $name=$_GET['key'];
        $tm=$ty->where("c_key='$name'")->find();
       if($tm){
           echo json_encode($tm);
       }

    }


    function qxdd()
    {
        $dd = M("repair");
        $dd_id = $_POST['dd_id'];
        $yuanyin = $_POST['yuanyin'];
        $dd->create();
        $dd->r_id = $dd_id;
        $dd->r_yuanyin = $yuanyin;
        $dd->zhuangtai = 2;
        if ($dd->save()) {
            $this->success("订单取消成功");
        } else {
            $this->error('订单取消失败');
        }
    }

function red(){
        $id=$_POST['id'];
         $this->redirect("Index/First?fid=$id");



}
    function six($id){
        $ty=M('repair');
//        $tm=$ty->table('phonepart part,repair re,discount dis')->where("part.fid=re.fid and dis.discountid=re.r_youhui and rand='$id'")->find();
        $tm=$ty->table('repair r,discount d')->where("r.r_youhui=d.discountid and rand='$id'")->find();
        //var_dump($tm);
        $this->assign('tm',$tm);
        $this->display();

    }
    function zero(){

        $tp=M('phonetype');
        $tx=$_GET['bid'];

        $x=M('phonetype')->where("bid='$tx'")->find();

        $cate=$x['lid'];
        //dump($x);
        $where['lid'] = array('in',$cate);
        $orderinfo = M('repairlist')->where($where)->select();


        foreach ($orderinfo as $n => $val) {
            $orderinfo[$n]['voo'] = M('repaires')->where("lid='" . $val['lid'] . "'")->select();
        }
        $this->assign('orderinfo',$orderinfo);
//        dump($orderinfo);



        $tt=$tp->where("bid='$tx'")->find();
        $this->assign('tt',$tt);


        $tm=M('repaires')->where("bid='$tx' and lid='1'")->select();
        $this->assign('tm',$tm);


        $this->display();




    }


    function cha(){
        $ty=$_GET['key'];
        $tp=M('repaires')->where("cname='$ty'")->find();
        if($tp){
            echo json_encode($tp);
        }
    }


    function zero_2($id,$bid){
        $ty=M('repaires');
        $tm=$ty->where("lid='$id' and bid='$bid'")->select();
        $this->assign('tm',$tm);
        $this->display();
    }
function zero_1(){
        $ty=M('phonetype');
        $tm=$ty->select();
        $this->assign('tm',$tm);
    $this->display();
}
//    function add_repair3(){
//        $ty=M('repair');
//        $address=$_POST['address'];
//        $server=$_POST['server'];
//        $intro=$_POST['intro'];
//        $dicso=$_POST['hui'];
//        $rand = date("YmdHis");
//
//        $ty->create();
//        $ty->r_huijiaddress=$address;
//        $ty->r_youhui=$server;
//        $ty->r_intro=$intro;
//        $ty->open_id=1;
//        $ty->rand=$rand;
//
//        $ty->weixiutype='3';
//        //$tw->open_id=$_SESSION['openid'];
//        if($ty->add()){
//            $this->redirect("Index/Six?id=$rand");
//        }
//        else{
//            $this->error("提交失败");
//        }

   // }






}