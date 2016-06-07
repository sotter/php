<?php

function parse_conversation_id($conversation_id) {
	$min_id = ($conversation_id >> 32);
    $max_id = ($conversation_id & 0xFFFFFFFF);

    print "$min_id, $max_id \n";
}

if($argc < 2) {
	print "userage: parse conversation_id \n";
	return;
}

parse_conversation_id($argv[1]);

?>