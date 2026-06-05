<?php


class User {


    public $grade;

    public function __set($property, $value) {
        if($property === "grade" && ($value < 0 || $value > 100)) {
            echo "Grade must be between 0 and 100";
            return;
        }

        echo $this->$property = $value;
   }

}
$user1 = new User();
$user1->grade = 85; // MM SET value
echo $user1->grade; // GET value
echo "<br>";

?>