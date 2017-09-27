<?php

$hostname = "192.168.1.166"; //������ʵ
$user = "sa"; //���ͼ����
$password = "sa"; //���ʼ�ҹ
$dbname = "risk_new"; //���Ͱҹ������
mysql_connect($hostname, $user, $password) or die("เชื่อฐานข้อมูลไม่ได้");
mysql_select_db($dbname) or die("เลือกฐานข้อมูลไม่ได้");
mysql_query("SET NAMES UTF8");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
$c = mysql_connect($hostname, $user, $password) or die("เชื่อมต่อฐานข้อมูลไม่ได้");
?>