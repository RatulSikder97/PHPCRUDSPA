<?php

$host = 'localhost';
$db = "crud";
$user = "root";
$password = "";

$conn = mysqli_connect($host,$user,$password,$db);

if($conn){
    echo "Successful";
}



// if(isset($_REQUEST['createUser'])){
//     echo "here";
//     $createQuery = "INSERT INTO user(`name`,`email`,`phone`,`image`) VALUES ('a','a','a','a')";
//     mysqli_query($conn,$createQuery);
// }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- style -->
    <link rel="stylesheet" href="style.css">
    <title>PHP CRUD</title>
</head>
<body>

<!-- users table section start -->
<section class="user-table">
    <table border="1">

    </table>
</section>
<!-- users table section End -->

<!-- create user section start -->
<section class="create-user">
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="phone">Phone No.</label>
            <input type="text" name="phone" id="phone">
        </div>

        <div class="input-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>
        <input type="submit" name="createUser" value="Create">
    </form>
</section>
<!-- create user section end -->

<!-- edit user section start -->
<section class="create-user">

</section>
<!-- edit user section end -->
    
</body>
</html>