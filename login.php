<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'test') or die(mysqli_error());
if(isset($_POST["submit"])){
 $sql = "SELECT * FROM userpass WHERE user = '".$_POST["name"]. "' AND pass = '" .$_POST["pass"]."'";
 $query = mysqli_query($conn, $sql);
 $res = mysqli_fetch_assoc($query);
 if($res)
 {
 if(!empty($_POST["remember"]))
 {
 setcookie ("user", $_POST["name"], time() + (10 * 365 * 24 * 60 * 60));
 setcookie ("pass", $_POST["pass"], time() + (10 * 365 * 24 * 60 * 60));
 }
 else
 {
 if(isset($_COOKIE["user"]))
 {
 setcookie ("user", "");
 }
 if(isset($_COOKIE["pass"]))
 {
 setcookie ("pass", "");
 }
 }
 header("Location:welcome.php");
 }
 else
 {
 $msg = "Invalid Username or Password";
 }
function died($error){
    echo "We are very sorry,but there were error(s) found with the form you sumitted.";
    echo "There errors appears below.<br/><br/>";
    echo $error."<br/><br/>";
    echo "Please go back and fix these errors.<br/><br/>";
    die();
}
if(!isset($_POST["name"])||
    !isset($_POST["captcha"])||!isset($_POST["pass"])){
    died('We are sorry,but there appears to be a problem with the form you submitted.');
    
}
}
$name=$_POST['name'];
$captcha=$_POST['captcha'];
$correctsum=$_POST['correctsum'];



