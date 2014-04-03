<?php
class App
{
    private $proxy;
 
    public function __construct(Proxy $proxy)
    {
        echo "App::__construct called...<br/>";
        $this->proxy = $proxy;
    }
 
    public function hello()
    {
        return $this->proxy->hello();
    }
}
