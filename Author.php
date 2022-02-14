<?php 
    class Author{
        public $name;
        public $image;
        public $songs;
        public $year_birth;
        
        function __construct($name, $image, $songs, $year_birth) {
              $this->name = $name;
              $this->image = $image;
              $this->songs = $songs;
              $this->year_birth = $year_birth;
            
        }


        function print_names(){
            var_dump($this->name);
        }

    }


    