<?php

    $filename = "/Users/tianshan/php/im_redis.json";
    $json_string = file_get_contents($filename);

    // echo print_r($json_string,true);  //打印文件的内容

    $obj=json_decode($json_string,true);

    // if (!is_array($obj)) {
    	// die('no successful');
    // }

    print_r($obj, true);
    
    // echo print_r($obj["im_redis_unread"]);
    // echo print_r($obj["im_redis_subscribe"]);

    return; 
?>