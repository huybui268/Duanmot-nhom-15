<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="css.css">
</head>

<body>
  <div class="container">
    <input type="checkbox" id="check">
    <?php if (!isset($_SESSION['user'])) { 
        ?>
    <div class="login form">
      <header>Login</header>
      <form action="index.php?act=login" method="post">
        <input type="text" name="user" placeholder="User">
        <input type="password" name="pass" placeholder="Password">
        <a href="#">Forgot password?</a>
        <input type="button" class="button" value="Đăng nhập" name="dangnhap">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
          <label for="check">Signup</label>
        </span>
      </div>
    </div>

    <?php } else { extract($_SESSION['user']) ?>
    <div class="login form">

      <p>Xin chào</p>
      <p>
        <?php echo $user ?>
      </p>
      <li><a href="index.php?act=body">Mua Hàng</a></li>
      <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
      <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
      <li><a href="index.php?act=doimk">Đổi mật khẩu</a></li>
      <li><a href="index.php?act=edit_tk&idtk=<?php echo $id ?>">Cập nhật thông tin</a></li>
      <?php if($role==1){ ?>
      <li><a href="../admin/index.php">Đăng nhập trang Admin</a></li>
      <?php } ?>
      <button><a href="index.php?act=logout" style="color:black;">Đăng xuất</a></button>

    </div>
    <?php } ?>

    
  </div>
</body>

</html>