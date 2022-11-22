<html>

<head>
    <title>
        
    </title>
</head>

    <?php

  define ("BR","<BR>");

  function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }

  function name_input($data) {
    $data = strtolower($data);
    $data = ucwords($data);
    return $data;
  }

  $name=$email=$ip=$dob=$mbl=$pass=$gender=$comment=$website="";
  $name_err=$email_err=$ip_err=$dob_err=$mbl_err=$pass_err=$gender_err=$comment_err=$agreeErr=$website_err="";

  if ($_SERVER["REQUEST_METHOD"]=="POST") {

    if (empty($_POST["name"])) {
      $name_err = "Name cannot be left blank.";
    }
    else {
      $name = name_input(test_input($_POST["name"]));
      if (!preg_match("/^[a-zA-Z+\s]*$/",$name)) {
        $name_err = "Name is not in valid format, Only alphabets and whitespace are allowed.[upto25]";
      }
    }
  

    if (empty($_POST["pass"])) {
        $pass_err = "Password cannot be left blank.";
      }
    else {
        $pass = test_input($_POST["pass"]);
          if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$pass)) {
          $pass_err = "password is not in valid format, can contain only letters.";
        }
      }


    if (empty($_POST["email"])) {
      $email_err = "Email cannot be left blank.";
      }
    else {
        $email = test_input($_POST["email"]);
        if (!preg_match("/^[a-z\d\._-]+@([a-z\d-])+\.+[a-z]{2,6}$/i",$email)) {
          $email_err = "Email format is not correct.";
      }
    }
  

    if (empty($_POST["ip"])) {
        $ip_err = "IP address cannot be left blank."; 
      }
      else {
        $ip = test_input($_POST["ip"]);            #!filter_var($ip,FILTER_VALIDATE_IP])) {
        if (!preg_match("/^((2[0-4]|1\d|[1-9])?\d|25[0-5])(\.(?1)){3}\z/",$ip)) {
          $ip_err = "IP address is not in valid format, can contain only value like this 192.168.0.1";
        }
      }

    

    if (!empty($_POST["website"])) {
      $website = test_input($_POST["website"]);
    }
# if (($website,FILTER_VALIDATE_URL)){
    else {
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {  
        $website_err = "Website format is not correct.";
      }

    }

    if (empty($_POST["mbl"])) {  
      $mbl_err = "Mobile no is required";  
    } 
    else {  
          $mbl = test_input($_POST["mbl"]);  
            if (!preg_match("/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/",$mbl)) {
          $mbl_err = "Mobile Number is not in valid format, can contain only 11/(+)+13 digits";  
          }  

      
    if (empty($_POST["dob"])) {
      $dob_err = "Date of Birth cannot be left blank.";
    }
  else {
      $dob = test_input($_POST["dob"]);
      if (!preg_match("/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/",$dob)) {
        $dob_err = "Date of Birth is not in valid format, can contain only letters.";
      }
    }


    if (empty ($_POST["gender"])) {  
      $gender_err = "Gender is required";  
    } 
    else {  
          $gender = test_input($_POST["gender"]);  
    }  

    //Checkbox Validation  
    if (!isset($_POST['agree'])){  
          $agreeErr = "Accept terms of services before submit.";  
    } 
    else {  
          $agree = test_input($_POST["agree"]);  
    }  
  }


}


?>


    <body>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" target="_self">

            Name: <input type="text" name="name" id="name" minlength="5" maxlength="8" value="<?php echo $name; ?>">
            <br>
            <span style="color:red"> <?php echo $name_err; ?></span><br>

            Email:<input type="text" name="email" id="email" value="<?php echo $email; ?>"><br>
            <span style="color:red"> <?php echo $email_err; ?></span><br>

            Password: <input type="password" name="pass" id="pass" value=" <?php echo $pass; ?>"> <br>
            <span style="color:red"> <?php echo $pass_err; ?></span><br>

            IP address of your router:<input type="text" name="ip" id="ip" value="<?php echo $ip; ?>"><br>
            <span style="color:red"> <?php echo $ip_err; ?></span><br>

            Website URL:<input type="text" name="website" id="website" value="<?php echo $website; ?>"><br>
            <span style="color:red"> <?php echo $website_err; ?></span><br>

            Date of Birth:<input type="text" name="dob" id="dob" value="<?php echo $dob; ?>"><br>
            <span style="color:red"> <?php echo $dob_err; ?></span><br>

            Gender:<br>
            <input type="radio" name="gender" id="female" value="female"
                <?php if ($gender=="female") {echo "checked";} ?>>Female
            <input type="radio" name="gender" id="male" value="male"
                <?php if ($gender=="male") {echo "checked";} ?>>Male
            <input type="radio" name="gender" id="other" value="other"
                <?php if ($gender=="other") {echo "checked";} ?>>other<br><br>
            <span style="color:red"> <?php echo $gender_err; ?></span><br>

            <br>

            Agree to Terms of Service:
            <input type="checkbox" name="agree">
            
            <span class="error">* <?php echo $agreeErr; ?> </span>
            <br>

            Mobile Number:<input type="text" name="mbl" id="mbl" value="<?php echo $mbl ?>"><br>
                <span style="color:red"> <?php echo $mbl_err; ?></span><br>

                Brif Info:
                <textarea name="comment" id="comment" value="" cols="35" rows="20"><?php echo $comment; ?></textarea>
                <br><br><br>

                <span style="color:red"> <?php echo $comment_err; ?></span><br>

                <input type="submit" value="Submit" name="submit">

        </form>

<?php

if(isset($_POST['submit'])) {  
  if ($name_err=="" && $email_err=="" && $website_err=="" && $ip_err=="" && $dob_err=="" && $mbl_err=="" &&
   $pass_err=="" && $gender_err=="" && $agreeErr=="" && $comment_err==""){
          echo BR.BR."Submission Successful: ".BR.BR;
          echo 'Name: '.$name.BR;
          echo 'E-mail: '.$email.BR;
          echo 'Mobile: '.$mbl.BR;
          echo 'IP: '.$ip.BR;
          echo 'DOB: '.$dob.BR;
          echo 'Personal web link: '.$website.BR;
          echo 'Gender: '.$gender.BR;


  } 
  else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
      }  
  } 
?>
    </body>
</html>