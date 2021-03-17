<?php

function order_pizza($pizza_type, $client)
{
    echo 'Creating new order... <br>';
    $price = calc_price($pizza_type);
    $address = 'unknown';

    switch ($client) {
        case "koen":
            $address = 'a peniche in Liège';
            break;
        case "nico":
            $address = 'somewhere in Belgium';
            break;
        case "students":
            $address = 'BeCode office';
            break;
        default:
            $address;
    }

    $to_print = "A {$pizza_type} pizza should be sent to {$client}. <br>The address: {$address}.<br>The bill is €{$price}.<br>Order finished.<br><br>";
    echo $to_print;
}

function calc_price($pizza_type)
{
    $price = 0;

    switch ($pizza_type) {
        case "marguerita":
            $price = 5;
            break;
        case "golden":
            $price = 100;
            break;
        case "calzone":
            $price = 10;
            break;
        case "hawai":
            throw new Exception('Computer says no');
            break;
        default:
            $price = 5;
    }

    return $price;
}

function order_pizza_all()
{
    order_pizza('calzone', 'nico');
    order_pizza('marguerita', 'nick');
    order_pizza('golden', 'students');
}

function make_all_happy($do_it)
{
    if ($do_it) {
        order_pizza_all();
    }
}

make_all_happy(true);
