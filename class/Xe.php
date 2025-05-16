<?php

class Xe
{
    public $hangXe;          //   Thuộc tính (Property)
    public function chay()
    { //  Phương thức (Method)
        echo "Xe đang chạy";
    }
}// Tạo object (đối tượng) từ class (lớp)
$xeOto = new Xe();//    new = từ khoá để tạo object
$xeOto->hangXe = "Honda";// Gán giá trị cho thuộc tính
$xeOto->chay();//   Gọi phương thức chạy