<?php


namespace Iiko\Biz\Api;

class Response
{
    private $content;

    public function __construct($content)
    {
        $this->content = $content;
    }
}