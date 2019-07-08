<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 6/07/2019
 * Time: 8:56 PM
 */

namespace Blog\Domain;


class Post
{
    /* 2000*/
    private $body;
    /* 50*/
    private $title;

    public function __construct($body, $title)
    {
        $this->body = $body;
        $this->title= $title;
    }
}