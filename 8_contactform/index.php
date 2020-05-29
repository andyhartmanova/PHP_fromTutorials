<?php
//Message Vars
$msg = '';
$msgClass = '';
//Check For Submit
if(filter_has_var(INPUT_POST, 'submit')){
   //Get The Form Data
   $name= htmlspecialchars($_POST['name']);
   $email= htmlspecialchars($_POST['email']);
   $message= htmlspecialchars($_POST['message']);

   //Check Required Fields
   if(!empty($name) && !empty($email) && !empty($message)){
       //passed
         //check e-mail
         if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
          //failed   
          $msg = 'Please fill in a valid e-mail';
          $msgClass = 'alert-danger';
         }else{
         //passed
            $toEmail = 'hartmanov.andrea@gmail.com';
            $subject = 'Contact RRequest From '.$name;
            $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>E-mail</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';

                    //email headers
                    $headers = "MIME-Version: 1.0" ."\r\n";
                    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
                    //aditional headers
                    $headers .= "From: " .$name. "<".$email.">". "\r\n";

            if(mail($toEmail, $subject, $bodz, $headers)){
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            }else{
                $msg = 'Your email has was not sent';
                $msgClass = 'alert-danger';
            }
         }
     } else {
     //failed
     $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Contact Us</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>


    <div class="container">
        <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '' ; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['name']) ? $message : '' ; ?></textarea>
            </div><br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>