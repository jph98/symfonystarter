<?php
class Proxy
{
    private $curl;
 
    public function __construct(Curl $curl)
    {
        $this->curl = $curl;
    }
 
    public function hello()
    {
        echo "Proxy::__construct called...<br/>";
        return $this->curl->doGet();
    }
}
