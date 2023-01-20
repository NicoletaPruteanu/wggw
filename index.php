<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Simple form</title>
</head>
<body>
  <?php
  $name =$surname =$email =$impactcourse = $tel= $info="";
  $nameErr =$surnameErr=$emailErr =$telErr=$impactcourseErr="";
  
  if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $name= test_input($_POST["name"]);
    $surname= test_input($_POST["surname"]);
    $email= test_input($_POST["email"]);
    $impactcourse= test_input($_POST["impactcourse"]);
    $info= test_input($_POST["info"]);
    $tel= test_input($_POST["tel"]);
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <p><span>*required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Name: <input type="text" name="name">
        <span>*<?php echo $nameErr;?></span>
        <br><br>
        Surname:<input type="text" name="surname">
        <span>*<?php echo $surnameErr;?></span>
        <br><br>
        Email: <input type="email" name="email">
        <span>*<?php echo $emailErr;?></span>
        <br><br>
        Tel: <input type="tel" name="tel">
        <span>*<?php echo $telErr;?></span>
        <br><br>
        Impact Course:<input type="text" name="impactcourse">
        <span>*<?php echo $impactcourseErr;?></span>
        <br><br>
       Aditional Info:<textarea name="info" cols="50" rows="7"></textarea><br>

        <input type="submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $surname;
echo "<br>";
echo $email;
echo "<br>"; 
echo $impactcourse;
echo "<br>"; 
echo $info;
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =$_REQUEST["name"];
    if(empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    if(empty($_POST["surname"])) {
        $surnameErr ="Surname is required";
    } else {
        $name = test_input($_POST["surname"]);
    }
    if(empty($_POST["email"])) {
        $emailErr= "Email is required";
    } else {
        $name = test_input($_POST["email"]);
    }
    if(empty($_POST["Impactcourse"])) {
        $impactcourseErr= "Impactcourse is required";
    } else {
        $impactcourseErr= test_input($_POST["impactcourse"]);
    }
    if(empty($_POST["info"])) {
   
        $info= test_input($_POST["info"]);
    }
    if(empty($_POST["tel"])) {
   
        $tel= test_input($_POST["tel"]);
    }
    if (empty($_POST["impactcourse"])) {
        $impactcourseErr="You must specify";
    }else{
        $impactcourse=test_input($_POST["impactcourse"]);
    }
    


   
    
}
 ?>

 

</body>
</html>
 
