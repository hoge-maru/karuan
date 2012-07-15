<?php

function encrypt($plaintext, $key){

        $len = strlen($plaintext);
        $enc = "";
        for($i = 0; $i < $len; $i++){
                $asciin = ord($plaintext[$i]);
                $enc .= chr($asciin ^ ord($key[$i]));
        }
        $enc = base64_encode($enc);
        return $enc;
}

function decrypt($encryptedText, $key){
        $enc = base64_decode($encryptedText);
        $plaintext = "";
        $len = strlen($enc);
        for($i = 0; $i < $len; $i++){
                $asciin = ord($enc[$i]);
                $plaintext .= chr($asciin ^ ord($key[$i]));
        }
        return $plaintext;
}

$plainText = $argv[1];
echo "plaintext:".$plainText."\n";

$key="PHPisGreatLanguageInTheWorld!PHPisGreatLanguageInTheWorld!!";


$encryptedText = encrypt($plainText, $key);
echo "encrypted:".$encryptedText."\n";
$decryptedText = decrypt($encryptedText, $key);

echo "decrypted:".$decryptedText."\n"
?>

