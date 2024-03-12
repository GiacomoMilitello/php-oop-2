<?php

    trait Discountable {
        private $discount = 0;

        public function setDiscount($discount) {
            if ($discount < 0 || $discount > 100) {
                throw new Exception('Il valore dello sconto deve essere compreso tra 0 e 100.');
            }
            $this->discount = $discount;
        }

        public function applyDiscount() {
            return $this->price - ($this->price * $this->discount / 100);
        }
    }
    
?>