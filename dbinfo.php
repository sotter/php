<?php

function table_index($user_id) {
	return ($user_id % 1024);
}

function db_index($user_id) {
	return intval(floor((table_index($user_id) / 128)));
}

if($argc < 2) {
	print  "useage dbinfo key\n";
	return ;
}


$db_index = db_index($argv[1]);
$table_index = table_index($argv[1]);

print "Key".$argv[1]."->dbindex:".$db_index." table_index:".$table_index."\n";

?>