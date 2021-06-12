<?php

class Word {
    private $english;
    private $pigLatin;
    public static $vowels = array("a","e","i","o");

    private function vowelPattern(array $vowels){
        $pattern = "/[";
        foreach ($vowels as $key => $char) {
            if ($key === array_key_last($vowels)){
                $pattern = $pattern . $char;
            }
            else{
                $pattern = $pattern . $char . ",";
            }
        }
        //case-insensitive
        $pattern = $pattern . "]/i";
        return $pattern;
    }

    private function translate(string $english){
        //Word to array of characters
        $chars = str_split($english);

        //Consonant which will be append to end of translated word
        $consonant = array();

        //creates pattern string for preg_match function
        $pattern = $this->vowelPattern(self::$vowels);
            
        foreach ($chars as $char) {
            if(preg_match($pattern,$char)){
                break;
            }
            else{
                //push char to consonant array
                array_push($consonant,$char);

                //remove first from chars array
                array_shift($chars);
            }
        }
        if(empty($consonant)){
            $result = implode($chars) . "'" . "yay";
        }
        else if(empty($chars)){
            $result = implode($consonant) . "ay";
        }
        else{
            $result = implode($chars) . "-" . implode($consonant) . "ay";
        }
        return $result;
    }

    public function setEnglish(string $english){
        $this->english = $english;
    }

    public function setPigLatin(string $english){
        $this->pigLatin = $this->translate($english);
    }

    public function getPigLatin(){
       return $this->pigLatin;
    }

    function __construct(string $word) {
        $this->setEnglish($word);
        $this->setPigLatin($word);
    }

}

?>