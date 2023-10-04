<?php


abstract class Publication{
    public $id;
    public $title;
    public $content;
    public $preview;
    public $type;

    public function __construct($row){
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->content = $row['content'];
        $this->preview = $row['preview'];
        $this->type = $row['type'];
    }
    public function printGlobalItem(){
        echo 'Publications type is : '. $this->type;

    }
    abstract public function printItem();


}
class NewsPublication extends Publication{
    public $content;
public function printItem(){
    echo "<p>News</p>";
    $this->printGlobalItem();

}
}
class ArticlePublication extends Publication{
    public function printItem(){
        echo "<p>Article</p>";
        $this->printGlobalItem();

    }

}
class PhotoPublication extends Publication{
    public function printItem(){
        echo "<p>Photo</p>";
        $this->printGlobalItem();

    }

}

