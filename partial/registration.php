<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Registration</title>
    <link rel="stylesheet" href="style2.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">

</head>
<body>
    <img class ="bvp" src="bvp.jpg" alt="Bharti Vidyapeeth">
    <div class="container">
        <br><br>  <br><br>
        <h1>Voting System</h1>
        <br><br>
        <br>
        <p> Registration </p>
        <br><br>
        <br><br>
        <form action="../actions/register.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="mobile" id="mobile" placeholder="Enter your Mobile Number">
            <input type="password" name="password" id="password" placeholder="Enter your Password">
            <input type="password" name="cpassword" id="cpassword2" placeholder="Confirm Password">
            <br><br>
            <select name="std" >
                <option value="voter"> Voter</option>
                <option value="group">Group</option>
            </select>
            <br><br>
            <button class="btn">Register</button> 
            <br><br>
            <p1>Already have an account?</p1>
            <br>
            <a href="../">Login Here</a>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>