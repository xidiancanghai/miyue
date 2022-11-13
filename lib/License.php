<?php

namespace PrivateBin;

class License {
    public static function GetLicense()  {
        $path =  dirname(__DIR__ ) . "/cfg/license.txt";
        if (!is_file($path)) {
            return array("max_num" => 0);
        }
        $content = file_get_contents($path);
        if ($content == "") {
            return array("max_num" => 0);
        }
        $data =  Ras::Decrypy($content);
        if ($data == "") {
            return array("max_num" => 0);
        }
        $arr = json_decode($data, true);
        return $arr;
    }
}