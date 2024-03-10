<?php

    class Shop {
        public $products = [];

        function addProduct(Product $product) {
            $this->products[] = $product;
        }

        public function getProducts() {
            return $this->products;
        }
    }
    
?>