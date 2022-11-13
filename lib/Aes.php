<?php

namespace PrivateBin;

class Aes {

    const DefaultKey = "miyue_2022";

    public static function Encrypt($data) {
        $encrypt = openssl_encrypt($data, 'AES-128-ECB', Aes::DefaultKey, 0);
        return $encrypt;
    }

    public static function Decrypt($data) {
        $decrypt = openssl_decrypt($data, 'AES-128-ECB', Aes::DefaultKey, 0);
        return $decrypt;
    }
}

?>