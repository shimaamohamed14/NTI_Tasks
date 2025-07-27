<?php
header("Content-Type: application/json");
include "../../db.php" ;

$courses=[] ;
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $stmt=mysqli_prepare($conn,"SELECT * from courses  where id=?") ;
    mysqli_stmt_bind_param($stmt,"i",$id) ;
    mysqli_stmt_execute($stmt) ;
    $result=mysqli_stmt_get_result($stmt);

}else{
    $sql="SELECT * from courses" ;
    $result=mysqli_query($conn,$sql) ;
}
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $courses[]=$row;
    }

}
else{
    $courses[]=array("error"=>"No courses found");
}
echo json_encode($courses);
?>
