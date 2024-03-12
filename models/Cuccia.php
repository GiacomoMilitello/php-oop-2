<?php

    include_once __DIR__ . '/Product.php';

    class Cuccia extends Product {
        public $type = 'cuccia';

        public function getType() {
            return $this->type;
        }
    }
    
?>