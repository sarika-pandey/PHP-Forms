<html>
<head><title>Sign in/Sign up</title>
<style type="text/css">
    .fieldset-auto-width {
         display: inline-block;
    }
    
</style>
</head>
<body>
<?php
$action1=$_POST["signin"];
$action2=$_POST["signup"];

?>

<form action="" method="post" >
<center><fieldset class="fieldset-auto-width">
<legend> SIGN IN</legend>
Username: <input type="text" name="username" placeholder="Your Username" ><span style="color:red" >*</span><br><br>
Password: <input type="text" name="pwd" placeholder="Your Password"><span style="color:red" >*</span><br><br>
<input type="submit" name="signin" value="Sign In">
<input type="submit" name="signin" value="Clear">
</fieldset><br>
<span style="color:red" >*</span>Required Fields
</center>
</form>
<br><br>

<center>
<div>Don't have an account yet?
<span style="color:red">Sign up</span> by filling your details below:</div>
</center>
<br><br>

<form action="" method="post" >
<center><fieldset class="fieldset-auto-width">
<legend> SIGN UP </legend>
Name: <input type="text" name="name" placeholder="Your Name" ><span style="color:red" >*</span><br><br>
Age: <input type="number" name="pwd" placeholder="Your Age"><span style="color:red" >*</span><br><br>
Gender:
 <input type="radio" name="gender" value="male">Male
 <input type="radio" name="gender" value="female">Female
 <input type="radio" name="gender" value="LBGQT">LBGQT<span style="color:red" >*</span><br><br>
Email: <input type="email" name="email" placeholder="YourEmail@something.com"><span style="color:red" >*</span><br><br>
Username: <input type="text" name="username" placeholder="Create Username" ><span style="color:red" >*</span><br><br>
Password: <input type="text" name="pwd" placeholder="Create Password"><span style="color:red" >*</span><br><br>
Re-enter Password: <input type="text" name="pwd" placeholder="Create Password"><span style="color:red" >*</span><br><br><br>
<input type="submit" name="signup" value="Sign Up">
<input type="submit" name="signup" value="Clear">
</fieldset><br>
<span style="color:red" >*</span>Required Fields
</center>
</form>


</body>
</html>