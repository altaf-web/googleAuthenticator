<?php

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function index() {
        $g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
        echo 'Current Code is: ';

        echo "<br><br>";
        echo "<br><br>";


        $secret = $g->generateSecret();
        echo "<br><br>";
        if ($g->checkCode("KGUWX35L4XLRWMDP", "387787",0)) {
            echo "YES \n";
        } else {
            echo "NO \n";
        }
        echo "<br><br>";
        $secret = "KGUWX35L4XLRWMDP";

        echo "Get a new Secret: $secret \n";
        echo "<br><br>";

        echo "The QR Code for this secret (to scan with the Google Authenticator App: \n";
        echo "<br><br>";

        echo "<br><br>";

        echo \Sonata\GoogleAuthenticator\GoogleQrUrl::generate('Altaf', $secret, 'BrokerSource');
        echo "\n";
    }
}
