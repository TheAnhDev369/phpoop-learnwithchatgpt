<?php

//  Cách 2: Dùng __construct() sẽ gán luôn khi object được tạo mà không cần gán thủ công

class BanPhimCo {
    public $tenBanPhim;
    
    //  Hàm khởi tạo sẽ tự động chạy khi object được tạo
    //  Thay vì public function $tenBanPhim() {}, ta có thể sử dụng __construct($tenBanPhim) {}
    public function __construct($tenBanPhim) {
        //  Gán giá trị vào thuộc tính, nói cách khác:
        //  thuộc tính tên là tenBanPhim của object đang hoạt động được đại diện bởi $this được gán giá trị đầu vào 
        $this->tenBanPhim = $tenBanPhim;
    }
    public function goPhim() {
        echo "Dùng bàn phím $this->tenBanPhim để chuyên chơi game, gõ code,...";
    } 
}
$banPhim = new BanPhimCo("Zhoulang");// Gán ngay khi tạo Object
$banPhim->tenBanPhim;
$banPhim-> goPhim();