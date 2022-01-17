<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <?php include_once './components/navbar.php' ?>

        <form action="user_signup.php" method="POST"class="form">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="User Name">
            <input type="text" placeholder="Password">

            <label for="">Gender</label>
            <input name="gender" type="radio" value="Male"> Male
            <input type="radio" name="gender" > Female
        </form>
    </div>
</body>
</html>