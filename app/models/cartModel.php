<?php
class CartModel
{
    public function addToCart($book)
    {
        if (!isset($_SESSION['carts'])) {
            $_SESSION['carts'] = array();
        } else {
            $_SESSION['carts'][] = $book;
        }
    }
    public function delOneCart($index)
    {
        unset($_SESSION['carts'][$index]);

    }
}
