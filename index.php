<?php

require("class.php");

class Post {

    public $titolo;
    public $categoria;
    public $tag;

   public function __construct($titolo, Category $categoria, $tag){

        $this->titolo=$titolo;
        $this->categoria=$categoria;
        $this->tag=$tag;

    }

    public function category(){
       echo $this->categoria->getMyCategory();
    }

    public function string(){
        echo "this->titolo, this->category, this->tag\n";
    }

 };

$post1 = new Post ("aaa", new Sport, "#tag");
echo $post1->category();