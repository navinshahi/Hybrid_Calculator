<?php
$conn=new mysqli('sql202.epizy.com','epiz_27851771','CAJXlroOFSc','epiz_27851771_hybridcalculator_contact') or die(mysqli_error($conn));
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$name=mysqli_real_escape_string($conn,$name);
$email=mysqli_real_escape_string($conn,$email);
$comment=mysqli_real_escape_string($conn,$comment);
$user_registration_query ="insert into contact(name,email,comment) values('$name','$email','$comment')";
$user_registration_submit=mysqli_query($conn,$user_registration_query) or die(mysqli_error($conn));
?>
<script type="text/javascript"> 
alert("Your comment is successfully recieved by us...");
window.location.href="index.php";
</script> 
<?php
?>