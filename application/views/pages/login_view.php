<!DOCTYPE html >
<head>
   <title>Login</title>
</head>
<body>
   <h1>Login</h1>
     <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <br/>
     <input type="submit" value="Login"/>
      <?php echo validation_errors(); ?>
   </form>
 </body>
</html>