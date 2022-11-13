<?php

namespace PrivateBin;

class Ras {
    public static function Decrypy($src)  {
        return  self::RSA_openssl($src,"encode");
    }
    
    
    public static function RSA_openssl($data, $operate = 'encode'){
        //RSA 公钥
        $rsa_public = 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDFRm523+lSQw1StmL2JqymO8ShnZX3i5kffEq+8wV3WjNlIjvNRKtNm9a1+SDmliHs5p/DN/nv2QS4w8QzJcSk+QlfU/lXF+LuXpBjAODGlpQai1T60zOk+Nx4KX18wKalh6mU/54iH3euGGgRjq2XW8Mrzk8Bv5p6zj1S6gbLewIDAQAB';
    
        //RSA 私钥
        $rsa_private = 'MIICeAIBADANBgkqhkiG9w0BAQEFAASCAmIwggJeAgEAAoGBAMVGbnbf6VJDDVK2YvYmrKY7xKGdlfeLmR98Sr7zBXdaM2UiO81Eq02b1rX5IOaWIezmn8M3+e/ZBLjDxDMlxKT5CV9T+VcX4u5ekGMA4MaWlBqLVPrTM6T43HgpfXzApqWHqZT/niIfd64YaBGOrZdbwyvOTwG/mnrOPVLqBst7AgMBAAECgYEAuwvz0xytAoV3DXTHUjMLQjarUr2zItqm3fagfHq6NRc+Yebaot84OUbIhxPnARtaoV9uHdBmV+cCFhnwXrqxvjvoPdRH2CeBIdW/JpBpf6zWjycWiI6kmtwToqFBXyznXwiulWzQPPq5HYKzoBNXeJ3y7L9wHe7uCAnudssbMJkCQQDmDN9UD9Ct7wnP40kwFcRuH6oL1qS4pHNalo0RdmNmOV/6gz+uXjwwY1/VCuLethS9JLDXmtxBSlgPJ0QueexNAkEA24cdoQ8y5E4rIlE+nYvuDEQnzTLBiw3H3UmYKrxX89AV0sSDLFZuIWGzAVkK+zI4u8Ou7vR1hS9b18QKsm3a5wJBAMOY6kGk+L8KYQNasp2pxEwFrCVIqOE9Ib9CBkt0p2sBGXP8KCbvhKl3tMGE8gR+N//htGJ9DwyMU3b+4d/KVnkCQFB+//dR2mhq3VgtEFe2uqgWyb1tchiqCfJzjO+Gtn15fLcXRb4ZRzLIX1oMK4GmjbUT8O5AB2O51OSORxncPFsCQQDZo237o+C+jYiKFc5H+vTIZs6AOBBDBT6kg6dFfjftqaoYCox1Dj1ukdSsjtaH6bZZBxs7KXdRkcwRFvIptg/f';
    
        //RSA 公钥加密
        if ('encode' == $operate) {
            $public_key = "-----BEGIN PUBLIC KEY-----\n" . wordwrap($rsa_public, 64, "\n", true) . "\n-----END PUBLIC KEY-----";
            $key = openssl_pkey_get_public($public_key);
            if (!$key) {
                echo '公钥不可用';
                return '';
            }
            $return_en = openssl_public_encrypt($data, $crypted, $key);
            if (!$return_en) {
                echo '公钥加密失败';
                return '';
            }
            return base64_encode($crypted);
        }
    
        //RSA 私钥解密
        if ('decode' == $operate) {
            $private_key = "-----BEGIN PRIVATE KEY-----\n" . wordwrap($rsa_private, 64, "\n", true) . "\n-----END PRIVATE KEY-----";
            $key = openssl_pkey_get_private($private_key);
            if (!$key) {
                echo '私钥不可用';
                return '';
            }
            $return_de = openssl_private_decrypt(base64_decode($data), $decrypted, $key);
            if (!$return_de) {
                echo '私钥解密失败';
                return '';
            }
            return $decrypted;
        }
        return '';
    } 
}

