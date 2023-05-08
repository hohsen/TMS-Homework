<?php

include_once('./Interface/DocumentInterface.php');

class TextDocument implements DocumentInterface{
    private string $type;
    private string $title;
    private string $discription;

    public function __construct(string $type, string $title, string $discription,
    ){
        $this->type = $type;
        $this->title = $title;
        $this->discription = $discription;
    }

    protected function setType(string $type){
        $this->type = $type;
    }
    protected function setTitle(string $title){
        $this->title = $title;
    }
    protected function setDescription(string $discription){
        $this->discription = $discription;
    }

    public function getType(){
        return $this->type;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->discription;
    }

    public function getWordCount(){
        return str_word_count($this->discription, 0);
    }

    public function process(){
        return $this->title . $this->getType() . ' file is processing';
    }

    public function getInfo(){
        return [
            'type' => $this->getType(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'wordAmount' => $this->getWordCount(),
        ];
    }
}

?>