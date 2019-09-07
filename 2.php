<?php

function isPasswordValid($password)
{
    return preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/", $password) ? TRUE : FALSE;

}


var_dump(isPasswordValid("123Qwer_"));



