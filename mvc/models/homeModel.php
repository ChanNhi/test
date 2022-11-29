<?php
class HomeModel extends DB{
    function getsp(){
        $qr = 'SELECT * FROM sanpham';
        return mysqli_query($this->conn, $qr);
    }
    function chitiet(){
        $thongtin = [
            'tensp'=>'chuột',
            'giasp'=>'12345',
        ];
        return $thongtin;
    }
}
?>