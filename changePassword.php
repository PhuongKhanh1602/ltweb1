<?php
    require_once 'init.php';
    $title = 'Đổi mật khẩu';
    
    if(isset($_POST['current_password']) && isset($_POST['newpassword']) && isset($_POST['confirm_password']))
    {
        $currentPW=$_POST['current_password'];
        $newPW=$_POST['newpassword'];
        $confirmPW=$_POST['confirm_password'];
        //$user=findUserByUsername($username);
        if($newPW!=$confirmPW)
        {
            $error='Confirm Password not match New Password!';
        }
        else
        {
            $stmt=$db->prepare("UPDATE register SET password=? WHERE username=?");
            $stmt->execute(array(password_hash($newPW, PASSWORD_DEFAULT), $currentUser['username']));
            $message='Changed password successfully!';
        }
    }
?>
<?php include 'header.php'; ?>
<br><br><br><br><br>
<?php if(isset($message)): ?>
    <div class="alert alert-success" role="alert">
       <?php echo $message; ?>
    </div>

<?php elseif(isset($error)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php else: ?>

<form action="changePassword.php" method="POST" class="form_layout">
    <div class="form-group">
        <label for="current_password" >Current Password</label>
        <input style="font-size: 20px;" type="text" class="form-control" id="current_password" name="current_password">
    </div>
    <div class="form-group">
        <label for="newpassword">New Password</label>
        <input style="font-size: 20px;" type="password" class="form-control" id="newpassword" name="newpassword">
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input style="font-size: 20px;" type="password" class="form-control" id="confirm_password" name="confirm_password">
    </div>
    <button type="submit" class="btn btn-primary">Change</button>
</form>
<?php endif; ?>

<?php include 'footer.php'; ?>

