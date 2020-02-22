<?php
function check($username,$password)
{
    if(preg_match('/^[a-z][a-z_]{5,8}+$/',$username)){
        echo 'Username Valid ';
    }else{
        echo "Username Invalid ";
    }

    if(preg_match('/[a-zA-Z0-9!]{9}+$/',$password)){
        echo 'Password Valid ';
    }else{
        echo "Password Invalid ";
    }
}


$username = 'wastridf'; // ganti nilai variabel username untuk melakukan uji coba
$password = '7Wastridf!'; // ganti nilai variabel password untuk melakukan uji coba
check($username,$password);
?>