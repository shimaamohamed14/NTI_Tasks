<?php
class Shape
{

    public function draw() {}
}
class Circle extends Shape
{
    public function draw()
    {
        echo "this is a circle <br> ";
    }
}
class Rectangle extends Shape
{
    public function draw()
    {
        echo "this is a rectangle <br> ";
    }
}
$Shape = [new Circle(), new Rectangle()];
foreach ($Shape as $shape) {
    $shape->draw();
}
