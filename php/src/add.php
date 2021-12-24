<html>
<head>
    <title>Add Users</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="formStyle.css" type="text/css">
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
        <div class="row">
            <div class="col-25">
                <label for="name">Nama</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="text" id="email" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="mobile">Nomor HP</label>
            </div>
            <div class="col-75">
                <input type="text" id="mobile" name="mobile">
            </div>
        </div>
        </table>
        <br>
        <div class="row">
            <input type="submit" name="Submit" value="Add">
        </div>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>