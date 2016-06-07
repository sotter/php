<?php 

function urltoid($url, $check=false) { //[urltoid]

    if(strlen($url)==24 && preg_match('/^[0-9a-f]+$/',$url) ) return $url;  //兼容MongoId
    if(is_array($url)){
        foreach ($url as $key=>$value) {
            $url[$key] = urltoid($value);
        }
        return $url;
    }
    elseif( false!==stripos($url, ',') ){
        $url = explode(',',$url);
        foreach ($url as $key=>$value) {
            if( empty($value) ){
                unset($url[$key]);
                continue;
            }

            $url[$key] = urltoid($value);
        }
        return implode(',',$url);
    }
    else{
        if($check && preg_match('/^(null|undefined)$/i', $url)){
            return false;
        }

        $version = intval(substr($url, 0, 1));

        switch($version) {
            case 1:
                $id =  (intval(base_convert(substr($url, 1), 36, 10)) - 56)/2;
                break;

            case 2:  //防止扫用户;
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                $id = 0;
                break;

            default:
                $id = $url;
                break;
        }
        return 0<$id ? intval($id) : 0;
    }
}

if($argc < 2) {
	print "Usage: urltoid urlid\n";
	return;
}

$id = urltoid($argv[1]);

print  $argv[1]." -> ".$id."\n";

?>