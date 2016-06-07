<?php 

function gen_conversation_id($user_id, $conntact_id) {

	$min_id = 0;
	$max_id = 0;
	if($user_id < $conntact_id) {
		$min_id = $user_id;
		$max_id = $conntact_id;
	} else {
		$min_id = $conntact_id;
		$max_id = $user_id;
	}

	return  (($min_id << 32) | $max_id);
}

if($argc < 3) {
	print  "useage gen_conversation_id userid1 userid2\n";
	return ;
}

$conversation_id = gen_conversation_id($argv[1], $argv[2]);

print $conversation_id."\n";

?>