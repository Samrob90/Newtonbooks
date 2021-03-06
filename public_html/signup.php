<?php include('../private/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Newton Books Online | #1 Online Bookstore and Publishing House in Ghana | Christian Literature | Business Books | Leadership Books">
	<meta name="keyworlds" content="bookstore , bookshop, buy books in ghana ">
    <title>Newtonbooks | Sign Up</title>
   <?php include("include/head.php")?>
   <link rel="stylesheet" href="assets/css/registration.css">

</head>
<body>

<div class="wrapper fadeInDown">

<div class="logo">
    <img src="assets/images/logo/logo.png" alt="" width="260px" height="100px">
</div>

  <div id="formContent">

    <div class="fadeIn first">
     <h2>Sign Up</h2>
    </div>
 <br>

    <form  action="signup" method="post">
    <?php if(isset($full_name_error)){
            $c = count($full_name_error);
            
        }?>
    <input type="text" id="login" class="fadeIn second <?= ($c >0)? 'the_focuse' : 's' ;?>" name="Full_name" placeholder="Full Name">
    <?php 
            if(isset($full_name_error)){
                foreach($full_name_error as $name_error){
                    ?>
                            <p class="text-danger p-1"><?=$name_error?></p>
                    <?php
                }
            }
    ?>


<?php if(isset($email_error)){
            $c = count($email_error);
            
        }?>
      <input type="email" id="login" class="fadeIn second <?= ($c >0)? 'the_focuse' : 's' ;?>" name="email" placeholder="E-mail">
      <?php 
            if(isset($email_error)){
                foreach($email_error as $email_error){
                    ?>
                            <p class="text-danger p-1"><?=$email_error?></p>
                    <?php
                }
            }
    ?>

            
<?php if(isset($password_error)){
            $c = count($password_error);
            
        }?>
      <input type="password" id="password" class="fadeIn third <?= ($c >0)? 'the_focuse' : 's' ;?>" name="password" placeholder="Password">
      <?php 
            if(isset($password_error)){
                foreach($password_error as $password_error){
                    ?>
                            <p class="text-danger p-1"><?=$password_error?></p>
                    <?php
                }
            }
    ?>

<?php if(isset($confrim_password)){
            $c = count($confrim_password);
            
        }?>
      <input type="password" id="password" class="fadeIn third  <?= ($c >0)? 'the_focuse' : 's' ;?>" name="confirm_password" placeholder="Confirm Password">

    <?php 
            if(isset($confrim_password)){
                foreach($confrim_password as $confrim_password){
                    ?>
                            <p class="text-danger p-1"><?=$confrim_password?></p>
                    <?php
                }
            }
    ?>

<input type="submit" class="fadeIn fourth" name="signup" value="Sign Up">
    </form>
    <div id="formFooter">
      <span>Already have an account ?</span><a class="underlineHover" href="login">login </a>
    </div>

  </div>

</div>

<?php include('include/footer.php') ?>
</body>
</html>