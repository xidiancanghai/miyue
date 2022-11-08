<?php

function Decrypy($src)  {
    // $rsa_private = '-----BEGIN privateKey-----
    // MIIEpgIBAAKCAQEA+cuo69XmMTnuf9gCb05jR130/O0D2GuYp2EvCmfGxYgyBF0M
    // VZF+l7hi4ZXNC5j3pbpSAsSqY+rdyVls6XOmibANcXwM2gJFRT/eiU3cAfCVGG+Q
    // Hw26VP5CdrWyvzN4AVFtwat30H2XZM9fZjKzQU+jdOO4F51EymWBWAO12yQKL09x
    // iVevgIVKZCoIHt08Fo60D1BhYkF9XlNvUB4O8N0VZ7EIfRp7iIvb+NyuqPksPYTN
    // h8vp/fYomU2aOXeFO+ur6ENIJSffBJ/5Jg1tiT8pl1/esI9vt1gp6hVk6ehV0HVU
    // 0Hed7dihuIN+iQ+rzFp3EAx3+po6PpWI8aTRXQIDAQABAoIBAQCDCExB+eBYbjUn
    // pt4QGSSG6Uh77LCZtEdNdfNBGBLyx3DFTTINKNcpKzXjc7stnD48FzKx9QwUgb15
    // w4kYJOx1SX6jyxjKu2ou20QW7lq8QcFUIiGNyJu3vfCLaOCs34jR2C8k6pddLKRf
    // 40/9wha56daqmFGXQY42RWzGCJw6qPHH6BOxv5nN7ZrcFFJkv1ut5XoDV6coQ1Qm
    // uojtCDibFLA0NPQFSVs3dWQoprL5iP0PuxiJgB2SlYhafJz0JkZbLYSVE076LKs1
    // TfX9A3HkZqfrIwiCsOwgyTe8ccEQfav2aTLZ18Z5tQIZrEmzr57s0dJJ8smpY42Q
    // +Sh/HrHBAoGBAP5cDtouaa8O87bhKLTEOPNKiblYIg8kS+oNAjWqfFOA9HEqnvie
    // 3ppU0OWfNDP+KRK0RZI1s4QFUaVIXjBynFDigs1Oj3eiwnyQW8959sld6A5omQLD
    // aWey9KY4jSMQf96Wrau7+0tlq9aEPHZOUf/EDzQ6HZ44SKLnsw5l+lWZAoGBAPto
    // ERHiGyWAZE9NkwXP1qo/vwqV7UOLA2h/x3NJfl0It/2bM7+yK1/NsTH3sug//7Gx
    // 7yYUFwFY54K8ND0yFBfJwBYO9S44tPa7RL+24+h8Wv2uRVH8t1p/hByifm5sQ89g
    // 0kUb2maRNEG4Nr5b8WgWDL7xW7zwdr4h451RuOxlAoGBAN9uPh2pZ2w+1hZu8jLX
    // qq8Laq9Em6ZxW73cb3R0rYEsZYyCw+Hgq+klV9pcXp7NQ4cKk5I7WdU+Vtm5GAO2
    // qVjjn8J4n82XSv/gTsWRfRalRpJhjwa+YHiW2hCo3FFQzQHZmfSgy70PMkLdJb9G
    // TQE+V5yo8BtrlWKD5OVg7uUBAoGBALxr7I84pRvgNE3zWAN9F+gVSrtGTsLWh0Fk
    // szlGlbxocm1SSuCbSkLNSMaoXKAQhzTIpPInEG7kEO882vIafFCv1pUxtLRlr8tT
    // 41zEV9/Ag/mpCS8/drQO6hcD+joMTm44pJ9DFtbUcRPoWq8k/bMDA56ACj97AaPS
    // hmM8Apq5AoGBAMuTf5hwqhCoJmfKQ1uyydRySGl3O/lF3Vam2D/h3kETI+ebZ0nI
    // 1QLz0bObt5YgXZl7nmnW4dlxBMWRvpyF54afG7X7F2ddDgwF7tydGMLb/+XpYEXJ
    // F1VY5dv1sasQfsINXbxPojAxAe/hlZgZOhWpKtB06Db7KStCpBv8pDGe
    // -----END privateKey-----';
    // $private_key = openssl_pkey_get_private($rsa_private);
    // if (!$private_key) {
    //     return('私钥不可用');
    // } 
    // return "不可用";
    echo RSA_openssl($src,"encode");
}


function RSA_openssl($data, $operate = 'encode'){
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

