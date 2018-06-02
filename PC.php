<?php
$arrayName = array(
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5af945677f0ec.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5af9457cdea25.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5af945817a496.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5afe6831f2056.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5afe6833e0f63.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5aff90f0bec88.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5aff90f864c80.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5aff90fa715ca.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5aff90fc87f35.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5261.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5262.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5263.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5264.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5265.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5266.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5267.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5268.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5269.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5270.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5271.jpg',
'https://coding.net/u/mc666666/p/CDN/git/raw/master/5272.jpg',

);
$id = count($arrayName)-1;
$ids = rand(0,$id);
//Result Generate
$result['code']='200';
$result['imgurl']=''.$arrayName[$ids].'';
 
//Type Choose
$type=$_GET['return'];
switch ($type)
{   
    
//JSON
case 'json':
header('Content-type:text/json');
echo json_encode($result, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
break;
 
//302 Redirect
case '302':
header("Location:".$result['imgurl']);
break;
    
//IMG
default:
header("Location:".$result['imgurl']);
break;
}