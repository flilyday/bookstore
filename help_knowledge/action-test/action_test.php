<?php
//=======core파일. 변경해선 안됨.==========

require 'action_init.php';
require 'action_custom.php';


var_dump($action_list);
//var_dump($action_list['5지점 진입직전']);

//========== CMS ==========

echo 1;
echo '<br>';
echo 2;
echo '<br>';
echo 3;
echo '<br>';
echo 4;
echo '<br>';
do_action('5지점진입직전');
echo 5;
echo '<br>';
do_action('5지점진입직후');
echo 6;
echo '<br>';
echo 7;
echo '<br>';
echo 8;
echo '<br>';
echo 9;
echo '<br>';
echo 10;
