<?php
session_start();
include('connect.php');

$votes = $_POST['groupvotes'];
$totalvotes = $votes+1;

$gid = $_POST['groupid'];
$uid=$SESSION['id'];

$updatevotes=mysqli_query($con,"update `userdata` set votes='$totalvotes'where id ='$gid'");

$updatevotes=mysqli_query($con,"update `userdata` set status = 1 where id = '$uid'");

if($updatevotes and $updatevotes){

    $getgroups=mysqli_query($con,"Select name,votes,id from`userdata` where standard = 'group'");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;

    echo '<script>
    alert("Voting Successfull")
    window.location="../partial/dashboard.php";
    </script>';
}
else{
    echo '<script>
    alert("Techincal Error !!")
    window.location="../partial/dashboard.php";
    </script>';
}
?>