<?php

    include_once __DIR__ . '/Product.php';

    class Cibo extends Product {
        public $type = 'cibo';

        public function getType() {
            return $this->type;
        }
    }
    
?>