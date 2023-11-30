<div class="row">
    <div class="row formtitle mb10">
        <h1>THỐNG KÊ ĐƠN HÀNG</h1>
    </div>
    <div class="row formcontent">
        <form action="#" method="post">
            <div class="row mb10 formds_loai">
                <table border="1" class="mb10">
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Khách hàng</th>
                        <th>Số lượng hàng</th>
                        <th>Tổng giá tiền</th>
                        <th>Ngày đặt</th>
                        <th>Thanh toán</th>
                        <th>Tình trạng</th></th>
                        <th>Chức năng</th>
                        <td></td>
                    </tr>
                    <?php foreach ($listbill as $bill) {
                        extract($bill);
                        $countsp=loadall_cart_count($id);
                        $ttdh=get_ttdh($bill_status);
                        $pttt=get_pttt($bill_pttt); ?>
                        <tr>
                            <td>DA1-<?php echo $id ?></td>
                            <td>
                                <?php echo $bill_name ?><br>
                                <?php echo $bill_email ?><br>
                                <?php echo $bill_address ?><br>
                                <?php echo $bill_tel ?>
                            </td>
                            <td><?php echo $countsp ?></td>
                            <td><?php echo number_format($total) ?> VND</td>
                            <td><?php echo date("d/m/Y", strtotime($ngaydathang)) ?></td>
                            <td><?php echo $pttt ?></td>
                            <td><?php echo $ttdh ?></td>
                            <td><a href="index.php?act=updatebill&iddh=<?php echo $id ?>"><input type="button" value="Sửa"></a>
                           
                        </td>
                        <td><a href="index.php?act=listcart&idbill=<?php echo $id ?>"><input type="button" value="Chi Tiết Đơn"></a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
           
        </form>
    </div>
</div>