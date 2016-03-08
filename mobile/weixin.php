<?php

/**
 * $Author: justbitguy $
 * $Id: weixin.php  2016/3/7 15:57:55 $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

$smarty->display("weixin.html");

?>