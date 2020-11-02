<?php
    require_once 'init.php';
    $title = 'Đăng ký';

    if(isset($_POST['_username']) && isset($_POST['_password']) && isset($_POST['_fullName']) && isset($_POST['email']))
    {
        $username=$_POST['_username'];
        $password=$_POST['_password'];
        $fullName = $_POST['_fullName'];
        $email = $_POST['email'];
        $user=findUserByUsername($username);
        if(!$user)
        {
            $user=createAccount($username, $password, $fullName, $email);   
            header('Location: login.php');
            exit();
            $message = 'Your account has been registed sucessfully, login now!';
        }
        else
        {
            $error = 'This username already exists';
        }
    }
?>
<?php include 'header.php'; ?>
<br><br><br>
<?php if(isset($error)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php else: ?>
    <form action="register.php" method="POST" class="form_layout ">
    <div class="form-group form2">
        <label for="_username">Username</label>
        <input class="form-control" type="text" placeholder="abc1602" id="_username" name="_username">
    </div>
    <div class="form-group form2">
        <label for="_password">Password</label>
        <input style="font-size: 20px;" type="password" class="form-control" id="_password" name="_password">
    </div>
    <div class="form-group form2">
        <label for="_fullName">Full Name</label>
        <input class="form-control" type="text" placeholder="Nguyen Van A" id="_fullName" name="_fullName">
    </div>  
    <div class="form-group form2">
    <label for="_email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="abc@example.com">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
    <button type="submit" class="btn btn-primary reg">Register</button>
</form>
<?php endif; ?>
<?php include 'footer.php'; ?>