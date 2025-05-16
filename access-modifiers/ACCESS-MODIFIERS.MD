#  Access Modifiers

## 🧠 3 từ khoá chính:

| Modifier  |Ý Nghĩa     |Có thể truy cập ở đâu?                                   |
|-----------|----------- |---------------------------------------------------------|
|public     |công khai   |✨ Truy cập mọi nơi (trong class, ngoài class)           |
|protected  |được bảo vệ |✅ Truy cập trong class và class con thôi                |
|private    |riêng tư    |🚫 Chỉ dùng trong chính class đó                         |      

-   🔧 Ví dụ đơn giản minh hoạ:
```php
class Nguoi {
    public $ten = "Anh";                // Ai cũng truy cập được
    protected $tuoi = 22;               // Chỉ class Nguoi và con của nó mới truy cập
    private $matKhau = "123456";        // Chỉ dùng bên trong class Nguoi
}
```

-   ✅ Nếu thử gọi từ bên ngoài:
```php
$nguoi = new Nguoi();
echo $nguoi->ten;        // ✅ OK
echo $nguoi->tuoi;       // ❌ Lỗi
echo $nguoi->matKhau;    // ❌ Lỗi
```