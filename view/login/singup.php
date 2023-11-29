<style>
    .loginn {
        padding-top: 50px;
        padding-left: 600px;
        width: 900px;


    }

    li a {
        text-decoration: none;
    }

   

    .trangtri {
        padding-left: 70px;
        border: 1px solid black;
        border-radius: 5px;
        height: 600px;
    }
</style>
<div class="loginn">
  <div class="trangtri">
    <div class="boxtitle"><h2>Đăng ký thành viên</h2></div>
    <div class="boxcontent formtk">
      <form action="index.php?act=singup" method="post">
        <div>

<br>        <input type="email" name="email" placeholder="Email">
        </div><br>
        <div>
          <input type="text" name="user" placeholder="User">
        </div><br>
        <div>
          <input type="text" name="address" placeholder="Địa Chỉ">
        </div><br>
        <div>
          <input type="text" name="sdt" placeholder="Số Điện Thoại">
        </div><br>
        <div>
          <input type="password" name="pass" placeholder="Pass">
        </div>
        <div>

<br>        <input type="password" name="pass" placeholder="Nhập Lại Mật Khẩu">
        </div><br>
        <input type="submit" value="Đăng ký" name="dangky">
        <input type="reset" value="Nhập lại"><br><br>
        <button> <a href="index.php?act=login">Đăng Nhập</a></button>
        <p style="color:red;">
          <?php if (isset($thongbao)&& !empty($thongbao)) {
              echo $thongbao;
              } ?>
        </p>
      </form>
    </div>
  </div>
</div>
<br>