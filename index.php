<?php
    require_once 'init.php';
    $title = 'Trang chủ';


?>
<?php include 'header.php'; ?>
<br><br><br><br><br>

<?php if($currentUser): ?>
    <div class="alert alert-success" role="alert">
        Chào <?php echo $currentUser['username']; ?>, chúc bạn một ngày tốt lành
    </div>
<?php else: ?>
    <div class="alert alert-secondary" role="alert">
        Bạn chưa đăng nhập
    </div>
<?php endif; ?> 

<?php include 'footer.php'; ?>

