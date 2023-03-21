<?php
function passwordGenerator($length)
{
        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password = $password . $caratteri[rand(0, strlen($caratteri))-1];
        }
        return $password;
}

?>