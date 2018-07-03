<?php 
header('content-type:text/html;charset=utf-8');
$info = ['id'=>10001, 'name'=>'张飞', 'age'=>21, 'gender'=>'男'];
print_r($info);

$list = [
  0=>['id'=>1, 'name'=>'zs', 'age'=>20, 'gender'=>'男'],
  1=>['id'=>2, 'name'=>'ls', 'age'=>21, 'gender'=>'女'],
  2=>['id'=>3, 'name'=>'ww', 'age'=>19, 'gender'=>'女'],
];
print_r($list);

?>