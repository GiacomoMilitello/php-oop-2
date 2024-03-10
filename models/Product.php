<?php

    class Product {
        public $title;
        public $price;
        public $category;
        public $type;
        public $image;

        function __construct($_title, $_price, $_category, $_type, $_image) {
            $this->title = $_title;
            $this->price = $_price;
            $this->category = $_category;
            $this->type = $_type;
            $this->image = $_image;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getCategory() {
            return $this->category;
        }

        public function getType() {
            return $this->type;
        }

        public function getImage() {
            return $this->image;
        }
    }
    
?>