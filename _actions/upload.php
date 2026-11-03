<?php
 include("../vendor/autoload.php");
 use Libs\Database\MySQL;
 use Libs\Database\UsersTable;
 use Helpers\HTTP;
 use Helpers\Auth;

 $auth=Auth::check();//userစစ်တာ
 

 
 $name=$_FILES['photo']['name'];
 $type=$_FILES['photo']['type'];
 $tmp_name=$_FILES['photo']['tmp_name'];

 if($type == "image/jpeg"or $type =="image/png"){
    move_uploaded_file($tmp_name,"photos/$name"); //သိမ်းလိုက်တာ

    $table=new UsersTable(new MySQL);
    $table->updatePhoto($auth->id,$name);

    $auth->photo=$name;//assign လုက်လိုက်တာ

    HTTP::redirect("/profile.php");


 }else{
    HTTP::redirect("profile.php","error=type");
 }


