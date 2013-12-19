<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'conf.php';
require_once 'functioanal.class.php';
$f = new Functional();

$loc=array(
    $conf['driver'][0],
    $conf['hostPref'],
    $conf['host'][0],
    $conf['dbPref'],
    $conf['dbName'][0],
    $conf['pass'][0],
    $conf['usrName'][0]
            );
//$loc1=array(
//    $conf['driver'][0],
//    $conf['hostPref'],
//    $conf['host'][1],
//    $conf['dbPref'],
//    $conf['dbName'][1],
//    $conf['pass'][1],
//    $conf['usrName'][1]
//            );
//
//$query = 'SELECT DISTINCT DATE(FROM_UNIXTIME(time)) as date FROM  operations_succes WHERE time between  UNIX_TIMESTAMP("2013-06-15") AND UNIX_TIMESTAMP("2013-09-17")';
//$query = 'SELECT date as date_count,utm_acount as count  FROM google_stats_data WHERE utm_source="l2top" AND utm_medium="none" AND utm_campaign=1 AND utm_action="Register"  AND utm_type="all" AND  date between "2013-06-15" AND "2013-06-19" ';
////echo $query; 
//$arr_date=$f->pdoFetch($query,$pdoObj);

// $utm_m='';
// $utm_s='';
// $json = '7,8,9,10,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44';
// $json=  explode(',',$json);
// $arr2 = $f->selectForGraff($arr_date, $pdoObj, $utm_m, $utm_s,$json);
// $arr3=$f->explodeArrayToGraff($arr2);
// $arr4 = $f->runUp($arr3,$conf['toGraff']);
// $arr5 = $f->arrayToGraffFormatJson($arr4,$conf['toGraff'],$json);
//
//print('<pre>');
//print_r($arr2);
//print('</pre>');

//$c=90;
//$c=91;
//$c=92;
//$c=93;
//$c=94;
//$c=95;
//$c=96;
//$c=97;
//$c=98;
//$c=99;
//$a = $f->selectForStattika($arr_date[$c]['date'],$pdoObj);
//print('<pre>');
//print_r($a);
//print('</pre>');
//$pdoObj = Functional::pdoConn($loc1);
////
//$b = $f->insertToStatistika($arr_date[$c]['date'],$a['count'][0]['string_count'],$pdoObj);
//print('<pre>');
//print_r($b);
//print('</pre>');

/*$query ='SELECT a.date_count,a.count FROM la2_Statistika as a WHERE a.date_count between  "2013-06-15" AND "2013-08-27" ';
$arr_=$f->pdoFetch($query,$pdoObj);
$arr1=$f->explodeArrayToGraff($arr_);
$arr2 = $f->runUp($arr1,$conf['toGraff']);
$json=array(0,1,2,3,4,5,6,7,8,9,10,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37);
$arr3 = $f->arrayToGraffFormatJson($arr2,$conf['toGraff'],$json);*/
//$d = $f->createArrayToGraff($x,$conf['toGraff']);
/*print('<pre> подготовка json');
print_r($arr2);
print('</pre>');*/

/*print('<pre> на json');
print_r($arr3);
print('</pre>');*/

/*$query = 'SELECT DISTINCT DATE(FROM_UNIXTIME(time)) as date FROM  webserver.operations_succes WHERE time  between  UNIX_TIMESTAMP("2013-07-18") AND UNIX_TIMESTAMP("2013-07-20") ';
$arr = $f->pdoFetch($query,$pdoObj);
$utm_m ='';
$utm_s='';
$arr1 = $f->selectForGraff($arr,$pdoObj,$utm_m,$utm_s);
print('<pre>');
print_r($arr1);
print('</pre>');*/


//$json = '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,46,47,48,49,50,51,52,53,54,55,56,57,58,59';
// $json=  explode(',',$json);


//$pdoObj = Functional::pdoConn($loc);
//$arr_date1=$f->selectForGraff($pdoObj, 'rate','l2top', $json, '2013-09-01', '2013-09-20') ;
//print('<pre>');
//print_r($arr_date1);
//print('</pre>');

//$arr1 = $f->arrayToGraffFormatJsonUTM($arr_date1, $conf['toGraff']);
//print('<pre>');
//print_r($arr1);
//print('</pre>');
//$a='2013-06-15';
//$c=86400;
//$b=floor((strtotime($c)-strtotime($a))/86400);
//$b=(strtotime($a)+$c+$c);
//$b=(strtotime($date_first));
//echo '<br> raznost_dat = : '.date('Y-m-d',$b).'<br>'; 
?>
