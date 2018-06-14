<?php
    
    class Jelovnik extends DatabaseObject{
        static protected $table_name = 'meni';
        static protected $db_columns = ['id', 'jelo', 'cena'];
        
        public $id;
        public $jelo;
        public $cena;
        
        public function __construct($args = []){
            $this->id = $args['id'] ?? '';
            $this->jelo = $args['jelo'] ?? '';
            $this->cena = $args['cena'] ?? '';
        }
        
       protected function validate(){
        $this->errors = [];
        if(is_blank($this->jelo)){
            $this->errors[] = "Morate uneti ime jela!";
      }
      if(is_blank($this->cena)){
          $this->errors[] = "Morate uneti cenu jela!";
      }
  }
        
    }

?>