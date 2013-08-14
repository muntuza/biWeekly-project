<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validate</title>
</head>

<body>
<?php
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $re_password = $_POST['re-password'];

  if (!eregi('^[a-zA-Z]+$', $name))
   {
       echo "<p>You have entered an invalid name!</p>";
        
  }
  else
	   
 if (!eregi('^[a-zA-Z]+$', $surname))
      {
         echo "<p>You have entered an invalid surname!</p>";
        
      }
	   
if (!eregi('^[a-zA-Z0-9].+$', $username))
   {
       echo "<p>You have entered an invalid Username!</p>";    
   }

if (!eregi('^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email))
	 {
        echo "<p>You have entered an invalid e-mail!</p>";
	 }

			  
			  
//reference http://www.phpjabbers.com/php-validation-and-verification-php27.html 	  
 if(!preg_match("/^.*(?=.{10,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $password))
	   {
	      echo "Password must be at least 10 characters and must contain at least one lower case letter, 1 upper case letter and 1 digit";
	     } 
		 			  
	if ($password != $re_password)
	 {
		echo"Please enter the previous password!!";
      }
?>
</body>
</html>