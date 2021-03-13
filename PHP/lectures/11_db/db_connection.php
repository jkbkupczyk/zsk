<?php
$connect = @new mysqli("localhost", "root", "", "zsk_4c_gr1");

print_r($connect);

if (!$connect->connect_errno) {
    $sql = "SELECT * FROM 'customers'";
    $result = $connect->query($sql);

    //print_r($result);
    //$customer->fetch_assoc();
    while ($customer = $result->fetch_assoc()) {
        echo <<<CUSTOMER
            Name and surname: $customer[name] $customer[surname]<br>
            birthday: $customer[birthday]
            <hr>
            CUSTOMER;
    }
} else {
    echo 'Connection error: ', $connect->connect_errno;
}
