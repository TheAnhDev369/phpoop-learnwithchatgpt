<?php
//  Cách 1: Khi chưa sử dụng __construct, ta phải gán thủ công từng dòng các giá trị cho Thuộc tính
class TaiNghe {
    public $tenTaiNghe;
    public function ngheNhac() {
        echo "Nghe nhạc cực kỳ êm tai với $this->tenTaiNghe";
    }
}
$taiNghe = new TaiNghe();
$taiNghe->tenTaiNghe = "Ugreen";//  Phải gán riêng
$taiNghe->ngheNhac();