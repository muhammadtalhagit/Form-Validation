<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</head>
<body>
   
    
    <div class="container">
    <?php
    echo "<body style='background-color:yellow'>";
    ?>
    <h1>CREATING DATA-BASE BY FORM VALIDATION:</h1>
    <br>
        <form action="connect.php" method ="post" >
            
        <label for="validationDefault01" class="form-label"><b>Name</b></label>
        <input type="text" class="form-control" name="name" id="validationDefault01" placeholder="Enter the name first" required>
            <br> 
            <label for="validationDefault01" class="form-label"><b>Age</b></label>
            <input type="text" class="form-control" name="age" id="validationDefault01"  placeholder="Enter the age" required>
            <br> 
            <label for="validationDefault01" class="form-label"><b>Gender</b></label>
           <input type="text" class="form-control" name="gender" id="validationDefault01"  placeholder="Enter the gender" required>
            <br> 
            <label for="validationDefault01" class="form-label"><b>Password</b></label>
           <input type="password" class="form-control"name="password" id="validationDefault01"  placeholder="Enter the password" required> 
            <br>
            
            <button type="login" name ="submit" class="btn btn-danger">login</button>
        </form>
    </div>

<?php
// print_r($_POST) . "<br>";

 
if(isset($_POST['submit'])){
   
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

$for = "INSERT INTO `login/submit` (`name`, `age`, `gender`, `password`) VALUES ('$name', ' $age', '$gender', '$password')";
$result = mysqli_query($conn,$for);

if(!$result){
 echo "query failed";

}
else{
    echo "query connect";
}




header('location:http://localhost:80/FormValidation/success.php');



}

 







?>




</body>
</html>