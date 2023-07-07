<?php

namespace Boot;

interface Pages{
    function print();
}
class AdminPage implements Pages{
    public function print():string
    {
        return $this->$content;
    }
}
class UserPage implements Pages{
    private $content = "";
    public function __construct() {
        $this->content = "страница пользователя";
    }
    public function print():string
    {
        return $this->content;
    }
}

class Page
{
    public function getAbmin():?Pages
    {
        return new AdminPage();
    } 
    public function getUser():?Pages{

        return new UserPage();
    }
}
