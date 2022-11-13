<?php 

namespace PrivateBin;

class Token {
    public static function GenerateToken($name) {
        $arr = array(
            "name" => $name
        );
        $dataStr = json_encode($arr);
        $token =  Aes::Encrypt($dataStr);
        return base64_encode($token);
    }

    public static function ParseToken($data) {
        $data = base64_decode($data);
        $token = Aes::Decrypt($data);
        return json_decode($token);
    }
}
?>