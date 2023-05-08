<?php

include_once('./Interfaces/DocumentInterface.php');

class VideoDocument implements DocumentInterface{
    private string $type;
    private string $title;
    private string $discription;
    private float $duration;

    public function __construct(string $type, string $title, string $discription, float $duration
    ){
        $this->type = $type;
        $this->title = $title;
        $this->discription = $discription;
        $this->duration = $duration;
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
    protected function setDuration(string $duration){
        $this->duration = $duration;
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

    public function getDuration(){
        return $this->duration . 'min';
    }

    public function process(){
        return $this->title . $this->getType() . ' file is processing';
    }

    public function getInfo(){
        return [
            'type' => $this->getType(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'duration' => $this->getDuration(),
        ];
    }
}

?>