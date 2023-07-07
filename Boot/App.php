<?php


namespace Boot;
use Boot\Page;
class App{
    function __construct(string $url = '') {
        print "Конструктор начальной точки";
        var_dump($url);
    }
    public function print(){
        $page = (new Page())->getUser();
        print $page->print();
    }
}