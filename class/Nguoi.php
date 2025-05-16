<?php

class ConNguoi {
    public $ten;
    public function chao() {
       echo "Xin chào, tôi là $this->ten"; 
    }
}

$nguoi = new ConNguoi();
$nguoi->ten = "JohnDev";
$nguoi->chao();//   Output: Xin chào, tôi là JohnDev.
/**
 *  Giải nghĩa:
 * Từ khóa	    Nghĩa tiếng Việt	                            Chức năng
 * class	    lớp	                                            Khai báo class
 * public	    công khai	                                    Cho phép truy cập ở bất cứ đâu
 * $this        object(đối tượng hiện tại đang hoạt động)       Đại diện cho chính object đang hoạt động bên trong class
 * $this->ten	"thuộc tính ten của chính đối tượng hiện tại"   Truy cập thuộc tính từ bên trong class
 * new	        mới(tạo mới)                                    Tạo một object mới
 * ->	        dấu mũi tên	                                    Truy cập thuộc tính hoặc phương thức
**/

/**
 * 📘 Giải nghĩa từ khóa và ký hiệu trong OOP PHP:
 * 
 * Từ khóa       Nghĩa tiếng Việt                            Chức năng
 * -------------------------------------------------------------------------------
 * class         lớp                                         Khai báo một lớp (class)
 * public        công khai                                   Cho phép truy cập từ bất kỳ đâu
 * $this         đối tượng hiện tại                          Đại diện cho chính object đang hoạt động bên trong class
 * $this->ten    "thuộc tính ten của object hiện tại"        Truy cập thuộc tính từ bên trong class
 * new           tạo mới                                     Khởi tạo một object từ class
 * ->            dấu mũi tên                                 Truy cập thuộc tính hoặc phương thức từ object
 */