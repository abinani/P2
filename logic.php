<?php
function get_password($password_length)
{
    return "xxxxx".$password_length;
}

if(isset($_POST['get_password']))
{
    $password_length = $_POST["how_many"];
    $password = get_password($password_length);
} 


