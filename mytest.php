<?php
namespace lorr\my_test;

    require 'vendor/autoload.php';
    use lorr\my_customer_generator\CustomerGenerator;

    $c = CustomerGenerator::GenerateCustomer();

    printf("Generated a customer with UUID %s", $c->id);

?>