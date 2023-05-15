<?php
class Book{
   
    private string $title;
    private int $author_id;
    private bool $is_available;

    public function __construct(string $title, int $author_id, bool $is_available,
    ){
        $this->title = $title;
        $this->author_id = $author_id;
        $this->is_available = $is_available;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setAuthorId(int $author_id){
        $this->author_id = $author_id;
    }
    public function setIsAvailable(bool $is_available){
        $this->is_available = $is_available;
    }

    public function getTitle() : string{
        return $this->title;
    }
    public function getAuthorId() : int{
        return $this->author_id;
    }
    public function getIsAvailable() : bool{
        return $this->is_available;
    }
}

?>