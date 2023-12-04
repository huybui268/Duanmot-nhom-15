<div class="row">
    <div class="row formtitle mb10">
        <h1>DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10 formds_loai">
                <table border="1" class="mb10">
                    <tr>
                        <th>Mã danh mục</th>
                        <th>Tên Danh Mục</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php foreach ($listdm as $dm) {
                        extract($dm); ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td><a href="index.php?act=updatedm&iddm=<?php echo $id ?>"><input type="button" value="Sửa"></a> 
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="index.php?act=deletedm&iddm=<?php echo $id ?>"><input type="button" value="Xóa"></a></td>
                        </tr>
                    <?php } ?>
                </table>
                </div>
               
            <a href="index.php?act=adddm"><input type="button" value="Thêm mới"></a>
        </form>
    </div>
</div>