##   ✅ __construct() – Hàm khởi tạo tự động

-   Dùng để tự động gán giá trị ban đầu cho object khi nó được tạo ra, không cần gán từng dòng thủ công.

##  🧠 Giải nghĩa chi tiết:
| Từ khóa / ký hiệu | Nghĩa tiếng Việt                        | Chức năng                                                  |
|-------------------|------------------------------------------|-------------------------------------------------------------|
| `__construct()`   | hàm khởi tạo (constructor)               | Tự động chạy khi object được `new` ra                       |
| `$this->`         | tôi đang truy cập thuộc tính của chính mình | Dùng để gán hoặc lấy thuộc tính của object                  |
| Tham số trong `()`| giá trị đầu vào                          | Dùng để truyền giá trị cho object khi khởi tạo              |

## 🛠️ Ví dụ 1: So sánh trước và sau khi dùng __construct()
-   🐌 Cách cũ – phải gán từng dòng:
```php
class MayTinh {
    public $thuongHieu;

    public function batMay() {
        echo "Máy tính $this->thuongHieu đang khởi động...";
    }
}

$mt = new MayTinh();
$mt->thuongHieu = "Asus"; // 👈 phải gán riêng
$mt->batMay();
```

-   ⚡ Cách mới – dùng __construct() gán luôn khi tạo:
```php
class MayTinh {
    public $thuongHieu;

    // Hàm khởi tạo sẽ tự động chạy khi object được tạo
    public function __construct($thuongHieu) {
        $this->thuongHieu = $thuongHieu; // gán giá trị vào thuộc tính
    }

    public function batMay() {
        echo "Máy tính $this->thuongHieu đang khởi động...";
    }
}

$mt = new MayTinh("Asus"); // 👈 Gán ngay khi tạo object
$mt->batMay();
```

##  📦 Giải nghĩa đoạn quan trọng:
```php
public function __construct($thuongHieu) {
    $this->thuongHieu = $thuongHieu;
}
```

##  🧠 Ý nghĩa:

-   function __construct(...) → là hàm tự chạy đầu tiên khi object được tạo.

-   $thuongHieu trong () là giá trị đầu vào khi new.

-   $this->thuongHieu = $thuongHieu; → gán giá trị đầu vào vào thuộc tính bên trong class.

##  ✅ Kết luận dễ nhớ:
-   __construct() giúp đỡ bạn gán thuộc tính nhanh chóng ngay lúc tạo object.

-   Nó tự động được gọi, bạn không cần gọi nó thủ công.

-   Rất tiện khi class có nhiều thuộc tính cần gán.