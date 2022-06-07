<?php  
header('Content-Type:application/json; charset=utf-8');
$f='kk.txt'; //文件名
$a=file($f); //把文件的所有内容获取到数组里面
$n=count($a); //获得总行数
$rnd=rand(0,$n); //产生随机行号
$rnd_line=$a[$rnd]; //获得随机行
echo "$rnd_line"; //显示结果
?>