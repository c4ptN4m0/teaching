<?php
include "includes/app.php";

load_view("Template/top.php");
load_view("Template/navbarnew.php");

$a=false;
echo $a;



if(false){

	$e=new Email();
	$e->sendMessage("mohitsaini1196@gmail.com", "Hey This is Drama", "Go to hell", "Mohit Saini");
	print_r($e);


	print_r(gets("login"));

	$a=Funs::getTeacherTimeSlotsForDay(22,6,2015,3);

	print_r($a);

	$a=Sql::getArray("select * from timeslot where tid=3");

	foreach($a as $i=>$row){
		$a[$i]["starttime"]=Fun::timetostr($row["starttime"]);
	}

	Disp::disp_table($a);
}





load_view("Template/footernew.php");
load_view("Template/bottom.php");

closedb();
?>