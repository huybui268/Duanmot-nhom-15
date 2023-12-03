<div class="row">
    <div class="row formtitle mb10">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10 formds_loai">
                <table border="1" class="mb10">
                    <tr>
                        <th>STT</th>
                        <th>Tên tài khoản</th>
                        <th>Tên sản phẩm</th>
                        <th>Nội dung</th>
                        <th>Ngày bình luận</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php foreach ($binhluan as $key => $bl) {
                        extract($bl); ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $user ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $noidung ?></td>
                            <td><?php echo date("d/m/Y", strtotime($ngaybinhluan)) ?></td>
                            <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="index.php?act=deletebl&idbl=<?php echo $id ?>"><input type="button" value="Xóa"></a></td>
                        </tr>
                    <?php } ?>
                </table>
                </div>
               
        </form>
    </div>
</div>