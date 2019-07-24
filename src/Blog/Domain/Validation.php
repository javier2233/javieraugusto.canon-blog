<?php
namespace Blog\Domain;



class Validation
{
    const MIN_CHARS_PASS = 3;
    const MAX_CHARS_PASS = 25;

   public function validateLimitChars ($text, $limit){
       $countChars = strlen($text);
       
       if($countChars < $limit){
           return true;
       }
       return false;
   } 

   public function validateEmail($email){

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
   }

   public function validatePass($pass){

    $charsPass = strlen($pass);
    if($charsPass < self::MAX_CHARS_PASS && $charsPass > self::MIN_CHARS_PASS){
        return true;
    
    }
    return false;

   }
}
