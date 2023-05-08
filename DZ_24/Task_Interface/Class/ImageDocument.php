<?php

include_once('./Interface/DocumentInterface.php');

class ImageDocument implements DocumentInterface{
    private string $type;
    private string $title;
    private string $discription;
    private float $hight;
    private float $width;

    public function __construct(string $type, string $title, string $discription, float $hight, float $width,
    ){
        $this->type = $type;
        $this->title = $title;
        $this->discription = $discription;
        $this->hight = $hight;
        $this->width = $width;
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
    protected function setHight(string $hight){
        $this->hight = $hight;
    }
    protected function setWidth(string $width){
        $this->width = $width;
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
    public function getHight(){
        return $this->hight;
    }
    public function getWidth(){
        return $this->width;
    }

    public function getDimensions(){
        return 'Hight: ' . $this->getHight() . 'px, Width: ' . $this->getWidth() . 'px';
    }

    public function process(){
        return $this->title . $this->getType() . ' file is processing';
    }

    public function getInfo(){
        return [
            'type' => $this->getType(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'dimensions' => $this->getDimensions(),
        ];
    }
}

?>