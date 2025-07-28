<?php
class course
{
    private $title;
    private $instructor;
   public function __construct($instructor, $title)
    {
        $this->instructor = $instructor;
        $this->title = $title;
    }
    public function describe()
    {
        echo "instructor name is " . $this-> instructor ." and title is " . $this->title ;
    }
}

$course1 = new course("shimaa", "programming");
$course1->describe();
