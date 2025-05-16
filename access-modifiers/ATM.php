<?php
class ATM {
    private function kiemTraSoDu() {
        echo "👉 Kiểm tra số dư thành công! Bạn còn 5.000.000đ\n";
    }

    public function rutTien() {
        echo "💳 Bạn đang rút tiền...\n";
        $this->kiemTraSoDu(); // Gọi private method từ bên trong class
        echo "💸 Đã rút thành công 1.000.000đ\n";
    }
}

$mayATM = new ATM();
$mayATM->rutTien(); // GỌI PUBLIC function → gọi được cả private bên trong

/**
 * 📌 Giải thích ngắn gọn:
 * Thành phần	                        Giải thích
 * private function kiemTraSoDu()	    Hàm riêng tư — không thể gọi từ bên ngoài class
 * public function rutTien()	        Hàm công khai — có thể gọi từ bên ngoài
 * $this->kiemTraSoDu()	                Gọi private từ bên trong — ✅ HỢP LỆ
 * 
 * ✅ Kết luận dễ nhớ:
 * Bạn không thể gọi private từ bên ngoài class trực tiếp,
 * nhưng bạn có thể dùng public làm cầu nối để gọi private từ bên trong class.
 */