<?php
    use PHPUnit\Framework\TestCase;
    use PrivateBin\Aes;

    include_once ("/Applications/MAMP/htdocs/miyue/lib/Aes.php"); 
    class TestAes extends TestCase {
        public function testAesEncrypt():void {
            $arr = array(
                "max_num"=>3
            );
            $str =  json_encode($arr);
            echo $str;
            echo Aes::Encrypt($str);
        }

        public function testAesDecrypt():void {
            $data = "QXt86zzdZE6h3wvBWuo8XQ==";
            echo Aes::Decrypt($data);
        }
    }
?>