<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<html>
<head>    
    <title>Edit User Data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="formStyle.css" type="text/css">
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
        <div class="row">
          <div class="col-25">
            <label for="name">Nama</label>
          </div>
          <div class="col-75">
            <input type="text" name="name" value=<?php echo $name;?>>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="email">Email</label>
          </div>
          <div class="col-75">
            <input type="text" name="email" value=<?php echo $email;?>>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="mobile">Nomor HP</label>
          </div>
          <div class="col-75">
            <input type="text" name="mobile" value=<?php echo $mobile;?>>
          </div>
        </div>
        <br>
        <div class="row">
          <input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
          <input type="submit" name="update" value="Update"></td>
        </div>
        </table>
    </form>
</body>
</html>