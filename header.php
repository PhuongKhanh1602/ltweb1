<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
    <style>
        h1{
            text-align: center;
            color: #e0ece4;
            font-size: 70px;
        }
        body{
            background-color: #51adcf;
        }
        #layout
        {
            padding-bottom: 130px;
            text-align: center;
            background-color: #b2deec;
        }
        .form_layout
        {
            font-size: 25px;
        }
        .form2
        {
            text-align: left;
        }
        .reg
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Lập trình Web 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php echo $title == 'Trang chủ' ? 'active': ''; ?>">
                    <a class="nav-link" href="index.php">Trang chủ <?php echo $title == 'Trang chủ' ? '<span class="sr-only">(current)</span>': ''; ?></a>
                </li>
                <li class="nav-item <?php echo $title == 'Cộng hai số' ? 'active': ''; ?>">
                    <a class="nav-link" href="sum.php">Tính tổng <?php echo $title == 'Cộng hai số' ? '<span class="sr-only">(current)</span>': ''; ?></a>
                </li>
                
                <?php if($currentUser): ?>
                    <li class="nav-item <?php echo $title == 'Đổi mật khẩu' ? 'active': ''; ?>">
                        <a class="nav-link" href="changePassword.php">Đổi mật khẩu<?php echo $title == 'Đổi mật khẩu' ? '<span class="sr-only">(current)</span>': ''; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Đăng xuất </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item <?php echo $title == 'Đăng nhập' ? 'active': ''; ?>">
                        <a class="nav-link" href="login.php">Đăng nhập<?php echo $title == 'Đăng nhập' ? '<span class="sr-only">(current)</span>': ''; ?></a>
                    </li>
                    <li class="nav-item <?php echo $title == 'Đăng ký' ? 'active': ''; ?>">
                        <a class="nav-link" href="register.php">Đăng ký<?php echo $title == 'Đăng ký' ? '<span class="sr-only">(current)</span>': ''; ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <h1><?php echo $title; ?></h1>
    <br>
    <div class="container" id="layout">