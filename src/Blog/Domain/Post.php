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
    
    private $body;
    private $limitBody = 2000;
    private $limitTitle = 50;
    private $validator;
    private $title;

    public function __construct($body, $title, Validation $validator)
    {
        $this->body = $body;
        $this->validator = $validator;
        $this->title = $title;

        $valid_body = $this->validator->validateLimitChars($body, $this->limitBody);
        $valid_title = $this->validator->validateLimitChars($title, $this->limitTitle);
        
        if($valid_body && $valid_title){
            return self;
        }
    }

    private function validateLimitChars($body, $limit){
        $bodyChars = strlen($body);
        if($bodyChars > $this->limitBody){
            return false;
        }
    }
    
}