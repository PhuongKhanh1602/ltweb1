<?php
    require_once 'init.php';
    $title = 'Đăng nhập';
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $user=findUserByUsername($username);
        var_dump($user['password']);
        if(!$user)
        {
            $error='Không tìm thấy người dùng';
        }
        else
        {
            if(!password_verify($password, $user['password']))
            {
                $error='Mật khẩu không chính xác';
            }
            else
            {
                //gán user vào session
                $_SESSION['userId'] = $user['id'];
                header('Location: index.php');
                exit();
            }
        }
    }
?>
<?php include 'header.php'; ?>
<br><br><br><br><br>

<?php if(isset($error)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php else: ?>

<form action="login.php" method="POST" class="form_layout">
    <div class="form-group">
        <label for="username" >Username</label>
        <input style="font-size: 20px;" type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input style="font-size: 20px;" type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
<?php endif; ?>

<?php include 'footer.php'; ?>

