                     <li><?php if (!isset($_SESSION['user'])) { 
                           ?>
                                <a href="index.php?act=login"><i class="fa fa-user"></i> Login</a>
                        <?php
                            }else { extract($_SESSION['user'])
                            ?>
                            <div class="trangtri1">
                                                    <div class="boxcontent1 formtk">
                                                        <p>Xin chào</p>
                                                        <p>
                                                            <?php echo $user ?>
                                                        </p>                                              
                                                        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                                        <li><a href="index.php?act=doimk">Đổi mật khẩu</a></li>
                                                        <li><a href="index.php?act=edit_tk&idtk=<?php echo $id ?>">Cập nhật thông tin</a></li>
                                                        <?php if($role==1){ ?>
                                                        <li><a href="../admin/index.php">Đăng nhập trang Admin</a></li>
                                                        <?php } ?>
                                                        <button><a href="index.php?act=logout" style="color:black;">Đăng xuất</a></button>
                                                    </div>
                                                </div>
                                
                            <?php
                            }
                            ?>