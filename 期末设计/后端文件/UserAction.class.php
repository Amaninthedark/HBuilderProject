<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
      public function qimo(){

    $nation = D("xufeng");
    $a = $nation->select();
    echo json_encode($a);
  }
   public function tianjiaq(){
     $data['xuehao']  = $_GET['xuehao'];
     $data['name']  =$_GET['name'];
    $re = M('xufeng')->add($data);
    
    echo $re;
  }
   public function delete(){
     $id  = $_GET['id'];
    $res =M('xufeng') ->where("id=$id") ->delete();
    echo $res;
  }
    public function upset(){
     $User = M("xufeng"); // 实例化User对象
    // 要修改的数据对象属性赋值
      $id=$_GET['id'];
    $User->xuehao = $_GET['xuehao'];
    $User->name =  $_GET['name'];
   $User->where("id=$id")->save(); // 根据条件更新记录
  }
}