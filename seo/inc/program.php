<?php
header("Content-type:text/html; charset=utf-8");
date_default_timezone_set('PRC');
define('ROU',str_replace('\\','/',__DIR__));//定义当前文件路径
$sth_url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];//完整的url地址
$time = $_SERVER["REQUEST_TIME"];//获取访问者请求时间
$type = array('.html','.shtml','.xsl','.asp','.php','.xml');

if (!file_exists(dirname(dirname(__FILE__)) . '/司徒浩免费分享.json')) {
	echo 'FlashProxy免流seo优化';
	exit;
}


$sth_k_name = file_name(ROU.'/key/');//获取关键词目录下文件名
$sth_k_num = file_num(ROU.'/key/');//获取关键词目录文件数量
$sth_key = text(ROU.'/key/'.$sth_k_name[mt_rand(0,$sth_k_num - 1)]);//随机获取某一个关键词文件，随机排序输出关键词
$sth_c_name = file_name(ROU.'/content/');//获取内容目录下文件名
$sth_c_num = file_num(ROU.'/content/');//获取内容目录下文件数量
$sth_content = text(ROU.'/content/'.$sth_c_name[mt_rand(0,$sth_c_num - 1)]);//随机获取某一个内容文件，随机排序输出内容

$sth_u_name = file_name(ROU.'/url/');//获取内容目录下文件名
$sth_u_num = file_num(ROU.'/url/');//获取内容目录下文件数量
$sth_url1 = text(ROU.'/url/'.$sth_u_name[mt_rand(0,$sth_u_num - 1)]);//随机获取某一个内容文件，随机排序输出内容










//读取文件夹下的所有文件名称
function file_name($path){
    $arr = [];//存放文件名
	$handler = opendir($path);//当前目录中的文件夹下的文件夹
    while (($filename = readdir($handler)) !== false) {
        if ($filename != "." && $filename != "..") {
            array_push($arr, $filename);
        }
    }
    shuffle($arr);
    closedir($handler);
    return $arr;
}

//读取文件夹下的文件数量
function file_num($wjj){
	$handle = opendir($wjj);
	$i = 0;
	while(false !== $file=(readdir($handle))){
	    if($file !== '.' && $file != '..'){
	    	$i++;
	   	}
	}
	closedir($handle);
	return $i;
}
//读取关键词内容URL
function text($url){
	$text = file_get_contents($url);
	$text = explode("\r\n",$text);
	$text = array_filter($text);//删除数组中的空值或false
	shuffle($text);//置数组随机
	return $text;
}
//生成随机字母数字
function rand_n($length){   
   $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
   $str = '';
   for($i = 0; $i < $length; $i++){
   	$str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
   }
    return $str;   
}
//汉字转UTF-8编码
function u8_unicode($str) {
  $encode='';
  for($i=0;$i<strlen($str);$i++) {
    if(ord(substr($str,$i,1))> 0xa0) {
      $encode.='&#'.htou(substr($str,$i,3)).';';
      $i+=2;
    } else {
      $encode.='&#'.ord($str[$i]).';';
    }
  }
  return $encode;
}
function htou($c) {
  $n = (ord($c[0]) & 0x1f) << 12;
  $n += (ord($c[1]) & 0x3f) << 6;
  $n += ord($c[2]) & 0x3f;
  return $n;
}
?>