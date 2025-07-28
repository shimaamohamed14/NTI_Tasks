<?php
class student
{
    public $email;
    public function __construct($email)
    {
        $this->email = $email;
    }
    public function showEmail()
    {
        echo "email is: $this->email";
    }
}
$student = new Student("shimaa@g.c");
$student->showEmail();
