<?php
function loadall_hotel() {
    $sql ="SELECT * from hotels order by hotel_id desc";
    $listhotel=pdo_query($sql);
    return $listhotel;
}
function loadone_hotel($hotel_id){
    $sql = "select * from hotels where id = $hotel_id";
    $result = pdo_query_one($sql);
    return $result;
}
function hard_delete($hotel_id){
    $sql = "DELETE FROM hotels WHERE id =" .$hotel_id;
    pdo_execute($sql);
}

?>