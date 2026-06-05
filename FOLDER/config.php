<?php

class User {

    private $data = [
        "name" => "John Doe",
        "balance" => 1000,
        "email" => "john.doe@example.com"
    ];

    public function __get($property) {
        if (isset($this->data[$property])) {
            return $this->data[$property];
        }

        return "Property not found";
    }

     public function __set($property, $value) {
        if($property === "grade" && ($value < 0 || $value > 100)) {
            echo "Grade must be between 0 and 100";
            return;
        }

        $this->data[$property] = $value;
   }

}



$user1 = new User();
echo $user1->balance; // GET value
echo $user1->email; // GET value
echo $user1->name; // GET value




?>