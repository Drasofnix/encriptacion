<?php
    include './Crypt/RSA.php';

    $rsa = new Crypt_RSA();
    echo "imprimo mi objeto rsa".$rsa."<br/>";
    extract($rsa->createKey());
    
    $plaintext = 'terrafrost';
    echo "encriptar: ".$plaintext."<br/><br/>";

    $rsa->loadKey($privatekey);
    echo "llave privada: "."<br/>".$privatekey."<br/><br/>";
    $ciphertext = $rsa->encrypt($plaintext);
    echo "variable encriptada: <br/>".$ciphertext."<br/><br/>";

    $rsa->loadKey($publickey);
    echo "variable desencriptada: ".$rsa->decrypt($ciphertext);
?>