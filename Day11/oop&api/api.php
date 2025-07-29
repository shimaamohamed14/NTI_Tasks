<?php
class Student
{
    public $name;
    public $email;
    public $age;
    private $isActive = false;

    public function __construct($name, $email, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function activate()
    {
        $this->isActive = true;
    }

    public function getStatus()
    {
        return $this->isActive ? "active" : "not active";
    }

    public function toJson()
    {
        return json_encode([
            "name" => $this->name,
            "email" => $this->email,
            "age" => $this->age,
            "status" => $this->getStatus()
        ]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $student = new Student($data['name'], $data['email'], $data['age']);
    $student->activate();
    echo $student->toJson();
}
?>