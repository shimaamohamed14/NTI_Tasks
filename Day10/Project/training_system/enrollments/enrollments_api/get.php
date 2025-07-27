<?php
header("Content-Type: application/json");
include "../../db.php" ;

$enrollments=[] ;
if(isset($_GET['id'])){
 $id=$_GET['id'] ;
$stmt=mysqli_prepare($conn,"SELECT students.name , courses.title,courses.description,courses.hours ,
enrollments.enrollment_date FROM enrollments 
JOIN students ON enrollments.student_id = students.id
JOIN courses ON enrollments.course_id = courses.id 
WHERE id =? " ) ;
mysqli_stmt_bind_param($stmt ,"i",$id) ;
 mysqli_stmt_execute($stmt);
 $result=mysqli_stmt_get_result($stmt) ;
}
else{
    $sql="SELECT students.name , courses.title,courses.description,courses.hours ,
enrollments.enrollment_date FROM enrollments 
JOIN students ON enrollments.student_id = students.id
JOIN courses ON enrollments.course_id = courses.id  " ;
    $result=mysqli_query($conn,$sql) ;
}
if(mysqli_num_rows($result)>0){
   while( $row=mysqli_fetch_assoc($result)){
    $enrollments[]=$row;
   }
}
else {
  $enrollments[]=array("error"=>"No Students Found");
}
echo json_encode ($enrollments);

?>