<?php
function tongdonhang(){
$tong=0;
foreach($_SESSION['mycart'] as $cart){
$tongtien=$cart[3]*$cart[4]+30000;
$tong+=$tongtien;
}
return $tong;
}
function add_bill($iduser,$name,$address,$tel,$email,$pttt,$ngaydathang,$tongdonhang){
$sql="INSERT INTO bill(iduser,bill_name,bill_address,bill_tel,bill_email,bill_pttt,ngaydathang,total) VALUES ('$iduser','$name','$address','$tel','$email','$pttt','$ngaydathang','$tongdonhang')";
return pdo_execute_return_lastInsertId($sql);
}
function add_cart($iduser,$idpro,$img,$name,$mau,$price,$soluong,$thanhtien,$idbill){
$sql="INSERT INTO cart (iduser,idpro,img,name,mau,price,soluong,thanhtien,idbill) VALUES ('$iduser','$idpro','$img','$name','$price','$mau','$soluong','$thanhtien','$idbill')";
pdo_execute($sql);
}
function deletebill($id){
   $sql="DELETE FROM bill where iddh = $id" ;

    pdo_execute($sql);
}
function deletecart($id){
    $sql="DELETE FROM cart where id = $id" ;
 
     pdo_execute($sql);
 }
 function deletemycart(){
    $sql="DELETE FROM cart " ;
 
     pdo_execute($sql);
 }
function loadone_bill($id){
$sql="SELECT * FROM bill where id=$id";
$bill=pdo_query_one($sql);
return $bill;
}
function loadone_cart($id){
    $sql="SELECT * FROM cart where id=$id";
    $cart=pdo_query_one($sql);
    return $cart;
    }
    function loadone_cart1($idbill){
        $sql="SELECT * FROM cart where idbill=$idbill";
        $cart=pdo_query_one($sql);
        return $cart;
        }
function loadall_cart($id){
$sql="SELECT * FROM cart where id=$id";
$bill=pdo_query($sql);
return $bill;
}
function loadall_cart1($idbill){
    $sql="SELECT * FROM cart where idbill=$idbill";
    $bill=pdo_query($sql);
    return $bill;
    }
function deletecart1($id){
    $sql="DELETE FROM cart where idb = $id" ;
     pdo_execute($sql);
 }
function loadalll_cart(){
    $sql="SELECT c.id,c.name,c.img,c.price,c.mau,c.soluong,c.thanhtien,b.bill_status FROM cart c join bill b on  c.idbill = b.id ";
    $billl=pdo_query($sql);
    return $billl;
    }
function loadall_cart_count($idbill){
    $sql="SELECT * FROM cart where idbill=$idbill";
    $bill=pdo_query($sql);
    return count($bill);
}
function loadall_bill($iduser){
    $sql="SELECT * FROM bill where iduser=$iduser";
    $listbill=pdo_query($sql);
    return $listbill;
}
function loadall_billdh(){
    $sql="SELECT * FROM bill order by iduser desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function loadall_billdh1(){
    $sql="SELECT * FROM bill ";
    $listbill=pdo_query($sql);
    return $listbill;
}
function update_bill($id, $bill_status){
    $sql = "UPDATE bill SET `bill_status` ='$bill_status' WHERE id = $id";
    pdo_execute($sql);
}
function update_cart($id, $bill_status){
    $sql = "UPDATE cart SET `bill_status` ='$bill_status' WHERE id = $id";
    pdo_execute($sql);
}
function get_ttdh($n){
switch ($n){
    case '0':
        $tt="Chờ Duyệt Đơn";
        break;
    case '1':
        $tt="Người Gửi Đang Chuẩn Bị Hàng";
        break;
    case '2':
        $tt="Đang giao hàng";
        break;
    case '3':
        $tt="Hoàn tất";
        break;
        case '4':
            $tt="Đơn hàng đã hủy";
            break;  
    default:
        $tt="Đơn hàng mới";
        break;
}
return $tt;
}
function get_pttt($n){
switch ($n){
    case '1':
        $tt="Thanh toán trực tiếp";
        break;
    case '2':
        $tt="Chuyển khoản";
        break;
    case '3':
        $tt="Thanh toán online";
        break;
    default:
        $tt="Chưa nhận phương thức thanh toán";
        break;
}
return $tt;
}

function updatebill($id){
$sql= "UPDATE bill set `bill_status` = 4 where id=$id";
pdo_execute($sql);

}
?>