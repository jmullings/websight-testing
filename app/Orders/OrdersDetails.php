<?php

namespace App\Orders;
use App\Billing\PaymentGateway;

class OrdersDetails 
{
    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }    

    public function all(){

        $this->paymentGateway->setDiscount(500);

        return [
            'name' => 'Jason',
            'address' => 'Gold St'
        ];
    }

}