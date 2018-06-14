<?php

    class Clanovi extends DatabaseObject{
        static protected $table_name = 'clanovi';
        static protected $db_columns = ['id', 'imeprezime', 'mejladresa'];
        
        public $id;
        public $imeprezime;
        public $mejladresa;
        
       // const GENDER = ['male', 'female'];
        
        public function __construct($args = []) {
            $this->id = $args['id'] ?? '';
            $this->imeprezime = $args['imeprezime'] ?? '';
            $this->mejladresa = $args['mejladresa'] ?? '';
            $this->gender = $args['gender'] ?? '';
        }
        
        public function name(){
            return "{$this->imeprezime}";
        }
        
        public function mail(){
            return "{$this->mejladresa}";
        }
        
       protected function validate(){
      $this->errors = [];
     if(is_blank($this->imeprezime)){
          $this->errors[] = "Name and lsat name cannot be blank!";
      }
      if(is_blank($this->mejladresa)){
          $this->errors[] = "Mail address cannot be blank!";
      }
       }
       
    }