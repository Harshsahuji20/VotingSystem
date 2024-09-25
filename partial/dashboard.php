<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}
$data = $_SESSION['data'];
if($_SESSION['status']==1)
{
    $status = '<b class = "success">Voted</b>';
}
else{
    $status = '<b class = "fail">Not Voted</b>';
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System - dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="../"><button class = "btn" >Back</button></a>
<a href="logout.php"><button class = "btn" >Logout</button></a>
<h1>Voting System</h1>
<div class="full">
    <!--Left Container-->
<div class="left">
    <?php
        if(isset( $_SESSION['groups']))
        {
            $groups = $_SESSION['groups'];
            for($i=0;$i<count($groups);$i++){
                ?>
          
                <!--groups-->
                <div class="l1">
                    <!--image here-->
                </div>
                <div class="l2">
                    <strong>
                        <p class ="grp">Group Name :</p>
                        <?php echo $groups[$i]['name'] ?>
                        <br>
                        <p class = "grp">Votes :</p>
                        <?php echo $groups[$i]['votes'] ?>
                        <br>
                    </strong>
                    <form action="../actions/voting.php" method="post">
                        <input type ="hidden" name="groupvotes" value = "<?php echo $groups[$i]['votes'] ?>">
                        <input type ="hidden" name="groupid" value = "<?php echo $groups[$i]['id'] ?>"> 
                        <?php
                        if($_SESSION['status']==1){
                            ?>
                            <button class="bg_success">Voted</button>
                            <?php
                        }
                        else{
                            ?>
                            <button class="bg_danger" status="submit" >Vote</button>
                            <?php
                        }
                        ?>
                </form>
                </div>
               <br><br>
                <hr>
                <br>
               <?php
            }
        }else{
            ?>
            <div class="n1">
                <p>NO GROUPS TO DISPLAY</p>
            </div>
             <?php
        }
        
    ?>
</div>
    <!--right container-->
   <div class="right">
    <!--user info-->
    <div class="r1">
        <!--profile photo-->
    </div>
       <br>
       <div class="r2">
        <strong>
            <p class ="grp">Name :</p> 
            <?php
                echo $data['name'];
                ?>
            <br>
            <p class = "grp">Mobile :</p>
            <?php
                echo $data['mobile'];
                ?>
            <br>
            <p class = "grp">Status :</p>
            <?php
                echo $status;
                ?>
                <br>
        </strong>
       </div>
       
   </div>

 </div>
    

</body>
</html>
