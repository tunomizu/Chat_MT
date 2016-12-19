<?php
$dsn  = 'mysql:dbname=rpgdb;host=127.0.0.1';
$user = 'root'; 
$pw   = 'H@chiouji1';

$sql = 'SELECT * FROM ChatId';

$dbh = new PDO($dsn, $user, $pw);  
//接続 
$sth = $dbh->prepare($sql);             
//SQL準備 
$sth->execute();  
//実⾏

//結果を取得 
while( ($buﬀ = $sth->fetch()) !== false ){ 
   print $buﬀ['id']; 
 print "¥n"; 
}
