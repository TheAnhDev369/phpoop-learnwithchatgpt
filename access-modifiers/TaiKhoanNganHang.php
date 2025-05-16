<?php

/**
 * 🧪 Bài tập nhỏ cho bạn:
 * Hãy viết một class tên TaiKhoanNganHang như sau:
 * Có các thuộc tính:
 * tenChuTaiKhoan (public)
 * soDu (protected)
 * maPIN (private)
 * Tạo hàm xemThongTin() để in ra toàn bộ 3 thông tin trên từ bên trong class.
 */

class TaiKhoanNganHang
{
    public $tenChuTaiKhoan;
    protected $soDu;
    private $maPIN;

    public function __construct($tenChuTaiKhoan, $soDu, $maPIN)
    {
        $this->tenChuTaiKhoan = $tenChuTaiKhoan;
        $this->soDu           = $soDu;
        $this->maPIN          = $maPIN;
    }

    public function xemThongTin()
    {
        echo "Thông tin TKNH của chủ tài khoản có tên $this->tenChuTaiKhoan, với số dư là $this->soDu và mã pin truy cập TK: $this->maPIN .";
    }
}

$taiKhoanCuaToi = new TaiKhoanNganHang("Nguyễn Thế Anh", 300000.0, 123456);

//  Chỉ dòng này được phép chạy, in ra và không lỗi do phạm vi truy cập là public
echo $taiKhoanCuaToi->tenChuTaiKhoan;

//  2 dòng này gây lỗi , không thể trực tiếp in ra do phạm vi truy cập là private và private
// echo $taiKhoanCuaToi->soDu;

// echo $taiKhoanCuaToi->maPin;//   Truy cập trực tiếp từ bên ngoài class và in ra -> maPIN là private -> KHÔNG ĐƯỢC PHÉP
//  => PHP báo lỗi: Cannot access private property TaiKhoanNganHang::$maPIN

//  Gọi hàm(method) để in ra thông tin
$taiKhoanCuaToi->xemThongTin();


/**Không gây lỗi vì:
 * Ta không truy cập trực tiếp vào $maPIN
 * Mà ta đang gọi một hàm public nằm trong class
 * Và bên trong class thì $this->maPIN hoàn toàn được phép dùng (vì class nắm quyền truy cập vào chính nội bộ của nó)
 * 
 * Vậy nên khi xemThongTin() chạy bên trong class, nó có toàn quyền truy cập cả:
 * public
 * protected
 * private
 * Và nó in ra được giá trị $this->maPIN một cách hợp lệ 100%.
 * 
 * Tóm gọn dễ nhớ:
 * Tình huống	Có được phép không?
 * Gọi private/protected TỪ NGOÀI class	        ❌ Không được
 * Gọi private/protected TỪ TRONG class	        ✅ Được
 * Gọi phương thức public	                    ✅ Luôn được
 * Phương thức public gọi private	            ✅ Miễn là bên trong class
 * 
 * Kết luận dễ nhớ:
 * Bạn không thể gọi private từ bên ngoài,
 * nhưng bạn có thể dùng public làm cầu nối để gọi private từ bên trong class.
 */
