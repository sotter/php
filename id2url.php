<?php

function idtourl($id, $version = 1) { //[idtourl]
    if(!is_array($id) && strlen($id) == 24) {
        return $id;
    }

    if(is_array($id)){
        foreach ($id as $key=>$value) {

            if(is_array($value) || in_array($key,needautoconvert())) {
                $id[$key] = idtourl($value);
            }

        }
        return $id;
    }
    elseif(intval($id)>0){

        switch($version) {
            case 1:
                static $convert;
                if(isset($convert[$id])) {
                    $url = $convert[$id];
                }else {
                    $url = $version . base_convert($id * 2 + 56, 10,36);
                    $convert[$id] = $url;
                }
                break;
            default:
                $url = false;
                break;
        }
        return $url;
    }
    return $id;
}

if($argc < 2) {
	print "Usage: idtourl id\n";
	return;
}

$url_id = idtourl($argv[1]);

print  $argv[1]." -> ".$url_id."\n";

?>