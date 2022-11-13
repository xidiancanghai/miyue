<?php
    use PHPUnit\Framework\TestCase;
    use PrivateBin\Aes;
    use PrivateBin\Token;

    include_once ("/Applications/MAMP/htdocs/miyue/lib/Token.php"); 
    include_once ("/Applications/MAMP/htdocs/miyue/lib/Aes.php"); 
    class TestToken extends TestCase {
        public function testGenerateToken():void {
            echo Token::GenerateToken("1234");
        }

        public function testParseTokent():void {
            $data = "WUJUdGM3SjduTC82TTdPZHhDQkFGZz09";
            var_dump(Token::ParseToken($data));
        }
    }
?>