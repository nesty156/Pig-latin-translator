<?php

class Text {
    private $text;
    private $translatedText;

    private function translateText(string $text){
        //Result
        $result = "";

        //Separate words and special characters. 
        preg_match_all('/[\W]|\w+/', $_GET["text"], $matches);
        foreach ($matches[0] as $match){
            if(preg_match('/\w+/',$match)){
                $word = new Word($match);
                $result = $result . $word->getPigLatin();
            }
            else{
                $result = $result . $match[0];
            }
        }
        return $result;
    }

    public function setText(string $text){
        $this->text = $text;
    }

    public function setTranslatedText(string $text){
        $this->translatedText = $this->translateText($text);
    }

    public function getTranslatedText(){
        return $this->translatedText;
    }

    function __construct(string $text) {
        $this->setText($text);
        $this->setTranslatedText($text);
    }
}

?>