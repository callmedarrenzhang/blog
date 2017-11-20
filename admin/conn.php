<?php
/**
 * Created by PhpStorm.
 * User: TAO
 * Date: 2017/11/18
 * Time: 23:21
 */

$conn = @mysqli_connect('localhost', 'dbuser', '123', 'blog');

function alert($str, $url){
    return '<script>alert("'.$str.'");location.href="'.$url.'"</script>';
}