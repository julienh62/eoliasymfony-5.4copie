<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;


class CartService {

    protected $session;

    public function __construct(SessionInterface $session){
       $this->session= $session;
    }

   public function add(int $id) {
      // on récupère le panier actuel
        $cart = $this->session->get("cart", []);

        if(!empty($cart[$id])){
            $cart[$id]++;
        }else{
            $cart[$id] = 1;
        }
        //on sauvegarde dans la session
        $this->session->set("cart", $cart);

    }
    public function remove(int $id) {

    }
  //  public function getFullCart() : array {
//
//    //}
//    //public function getTotal(): float  {
//
//    //}
}