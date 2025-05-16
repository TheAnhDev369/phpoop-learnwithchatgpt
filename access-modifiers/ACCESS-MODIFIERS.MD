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

-   Trong PHP, function (hàm) trong class có thể có 3 mức độ truy cập giống như biến (thuộc tính):
       
|Từ khóa        |Gọi từ bên ngoài object          |Gọi từ bên trong class |
|---------------|---------------------------------|-----------------------|
|public	        |✅ Được gọi	                    |✅ Được gọi            |
|protected	    |❌ Không được gọi	            |✅ Được gọi            |
|private	    |❌ Không được gọi	            |✅ Được gọi            |

-   ✅ Tóm gọn dễ hiểu
-   ✅ public function: Ai gọi cũng được — kể cả code ngoài class.
-   🔐 protected function: Chỉ gọi được bên trong class hoặc class con kế thừa.
-   🔒 private function: Chỉ gọi được bên trong chính class đó, không truyền ra ngoài hay dùng từ class con được.

-   🎁 Mẹo nhớ cực đơn giản:
    +   public → ai cũng biết
    +   protected → chỉ nội bộ và con cháu biết
    +   private → chỉ một mình tôi biết 😎