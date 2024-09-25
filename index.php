<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">

</head>
<body>
    <img class ="bvp" src="bvp.jpg" alt="Bharti Vidyapeeth">
    <div class="container">
        <br><br>  <br><br>
        <h1>Welcome to Voting System</h1>
        <br><br>
        <br>
        <p> Login </p>
        <br><br>
        <br><br>
        <form action="./actions/login.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="mobile" id="mobile" placeholder="Enter your Mobile Number">
            <input type="password" name="password" id="password" placeholder="Enter your Password">
            <br><br>
            <select name="std" >
                <option value="voter"> Voter</option>
                <option value="group">Group</option>
            </select>
            <br><br>
            <button class="btn">Login</button> 
            <br><br>
            <p1>Don't have an account?</p1>
            <br>
            <a href="./partial/registration.php">Register Here</a>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>