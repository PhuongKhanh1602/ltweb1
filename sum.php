<?php
    require_once 'init.php';
    $title = 'Cộng hai số';
    $currentUser=getCurrentUser();

    if(!$currentUser)
    {
        header('Location: login.php');
        exit();
    }

    if(isset($_POST['number1']) && isset($_POST['number2']))
    {
        $a = $_POST['number1'];
        $b = $_POST['number2'];
        $result = $a + $b;
    }
    
?>
<?php include 'header.php'; ?>
<br><br><br><br><br>

<?php if(isset($result)): ?>
    <div class="alert alert-primary" role="alert">
        Kết quả cộng hai số <?php echo $a; ?> và <?php echo $b ?> là: <?php echo $result; ?> 
    </div>
<?php else: ?>

<form action="sum.php" method="POST" class="form_layout">
    <div class="form-group">
        <label for="number1" >Số thứ nhất</label>
        <input style="font-size: 20px;" type="number" class="form-control" id="number1" name="number1">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="number2">Số thứ hai</label>
        <input style="font-size: 20px;" type="number" class="form-control" id="number2" name="number2">
    </div>
    <button type="submit" class="btn btn-primary">Gửi</button>
</form>
<?php endif; ?>

<?php include 'footer.php'; ?>

