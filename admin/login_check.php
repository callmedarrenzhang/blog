<?php
/**
 * Created by PhpStorm.
 * User: TAO
 * Date: 2017/11/18
 * Time: 23:19
 */
require 'conn.php';

//接收数据
$username = $_POST['username'];
$password = $_POST['password'];

//构造sql语句，核实账号密码
$sql = "select * from admin where username = '$username' and password = '$password'";

$rs = $conn->query($sql);

if ($row = mysqli_fetch_row($rs)){
    //登录成功，写session，跳转到首页
    session_start();
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['flag'] = $row['flag'];
    alert("登录成功", "index,php");
}
else{
    alert("登录失败，请检查用户名和密码", "login.php");
}


