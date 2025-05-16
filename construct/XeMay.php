<?php
/**
 * 🎯 Bài tập tự luyện:
 * Viết một class XeMay có các thuộc tính: 
 * $hangXe (hãng xe)
 * $mauSac (màu sắc)
 * 
 * Dùng __construct() để gán 2 thuộc tính này khi khởi tạo
 * Rồi viết method moTa() để in ra như sau:
 *  "Đây là xe của hãng Yamaha, màu đỏ."
 */
class XeMay {
    public $xeMay;
    public $mauSac;
    
    public function __construct($xeMay, $mauSac) {
        $this->xeMay = $xeMay;
        $this->mauSac = $mauSac;
    }
    public function moTa() {
        echo "Đây là xe của hãng $this->xeMay, $this->mauSac";
    }
}
$xemay = new XeMay("Yamaha", "Màu đỏ");
echo "<br/>" . $xemay->xeMay;
echo "<br/>" . $xemay->mauSac ."<br/>";
$xemay->moTa();

