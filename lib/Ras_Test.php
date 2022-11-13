<?php
    use PHPUnit\Framework\TestCase;
    use PrivateBin\Ras;

    include_once ("/Applications/MAMP/htdocs/miyue/lib/Ras.php"); 
    class TestRsa extends TestCase {
        public function testDecrypy():void {
            $arr = array(
                "max_num"=>3
            );
            $str =  json_encode($arr);
            echo $str;
            Ras::Decrypy($str);
        }

        public function testEncrypt():void {
            $path =  dirname(__DIR__ ) . "/cfg/license.txt";
            $content = file_get_contents($path);
            echo Ras::RSA_openssl($content, "decode");
        }
    }
?>