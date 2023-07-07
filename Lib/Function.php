<?php
function url_get(string $name = ''):string
{
    if(isset($_GET[$name])) {
        return htmlspecialchars(trim(strip_tags($_GET[$name])));
    } else {
        return "";
    } 
}

function url_post(string $name = ''):string
{
    if($_POST[$name]) return htmlspecialchars(trim(strip_tags($_POST[$name])));
    else return "0";
}

function is_login():bool
{
    if(isset($_SESSION['login']) && $_SESSION['login'] == "1") return true;
    else return false;
}

function template_view(string $name = ''):string
{
    return include(__DIR__ .'/Template/'.$name);
}