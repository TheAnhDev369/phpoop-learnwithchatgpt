<?php
/**
 * ✍️ Bài tập nhỏ cho bạn:
 * Hãy thử viết một class tên là MayTinh, có:
 * Thuộc tính: thuongHieu
 * Phương thức: batMay() → in ra "Máy tính [thương hiệu] đang khởi động..."
 */

class MayTinh {
    public $thuongHieu; //  Thuộc tính
    public function batMay() {
        echo "Máy tính $this->thuongHieu đang khởi động...";
        //echo "Máy tính $mayTinh->thuongHieu đang khởi động...";(*)
        
    }
}
$mayTinh = new MayTinh();// Tạo object mayTinh tu class MayTinh{}
$mayTinh->thuongHieu = "Lenovo";//  Gán tên cho thuộc tính $thuongHieu
$mayTinh->batMay();//   Gọi phương thức batMay();

// Bên trong class, nếu viết: echo $this->thuongHieu;
// Thì PHP hiểu: echo $mayTinh->thuongHieu;