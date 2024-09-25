<?php
include('connect.php');

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword= $_POST['cpassword'];
$std= $_POST['std'];

if($password != $cpassword){
  echo '<script>
alert("Password not match");
window.location="../partial/registration.php";
</script>';
}
else{
    $sql="INSERT INTO `userdata`(name,mobile,password,standard,status,votes) values ('$name','$mobile','$password','$std',0,0)";

    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>
alert("Registration Successful");
window.location="../";
</script>';
    }
    else {
        echo '<script>
alert("Registration Failed");
window.location="../partial/registration.php";
</script>';
    }
}


?>
