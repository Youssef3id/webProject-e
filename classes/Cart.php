<?php
class Cart {
    private $items = [];
    
    public function add($product_id, $quantity = 1) {
        if (isset($this->items[$product_id])) {
            $this->items[$product_id] += $quantity;
        } else {
            $this->items[$product_id] = $quantity;
        }
    }
    
    public function remove($product_id) {
        unset($this->items[$product_id]);
    }
    
    public function getItems() {
        return $this->items;
    }
} 