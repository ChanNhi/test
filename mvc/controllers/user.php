<?php
class User{
    static function show(){
        echo 'user-show';
    }
    static function thongtin($ho='', $ten=''){
        echo 'Họ là: '.$ho.', Tên là: '.$ten;
    }
}