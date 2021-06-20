
<?php


if(isset($_POST['submit'])){

    //Validate the entries
    echo 'form submitted';

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <div class="new-user">

        <h2>Create new user</h2>

        <!-- The server super global refers to the current file path -->
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

            <label >Username:</label>
            <input type="text" name="username">


            <label>Email:</label>
            <input type="text" name="email">


            <input type="submit" value="submit" name="submit">


        </form>

    </div>
    
</body>
</html>