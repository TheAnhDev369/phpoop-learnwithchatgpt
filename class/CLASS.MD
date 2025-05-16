# 🔰 Bài 1: Làm quen với class và object trong PHP
## 🎯 Mục tiêu:
-   Biết class là gì, object là gì

-   Hiểu cú pháp tạo class

-   Thực hành tạo object và gọi hàm (method)

## 📚 Giải thích khái niệm:
-   ✅ class (lớp):

    +   Là bản thiết kế để tạo ra nhiều đối tượng (object) cùng loại.

-   Ví dụ thực tế:

    +   class ```Xe```  giống như **bản thiết kế một chiếc xe**, bạn có thể tạo ra nhiều xe khác nhau từ bản thiết kế đó.


-   ✅ object (đối tượng):
    +   Là một thể hiện cụ thể từ class

##  🧠 Cú pháp và giải thích chi tiết:

```php
<?php
class Xe {
    public $hang; // Thuộc tính (property)

    public function chay() { // Phương thức (method)
        echo "Xe đang chạy...";
    }
}

// Tạo object từ class
$xeOto = new Xe(); // new = từ khóa để tạo object
$xeOto->hang = "Honda"; // Gán giá trị thuộc tính
$xeOto->chay(); // Gọi phương thức
?>
```

##  📖 Giải nghĩa từng dòng:

-   class Xe {}    -   Khai báo một lớp tên là Xe

-   public $hangXe; -  Tạo một thuộc tính công khai (ai cũng truy cập được) tên là hangXe

-   public function chay() {...} - Tạo một method (hàm trong class) tên là chay() (hàm trong lớp sẽ gọi là phương thức)

-   $xeOto = new Xe(); - Dùng từ khóa new để tạo object từ class Xe

-   $xeOto->hang = "Honda";	- Dùng -> để truy cập thuộc tính hang của object $xeOto

-   $xeOto->chay(); - Gọi phương thức chay() của object

##  🧠 $this-> là gì?

-   ✅ Định nghĩa ngắn gọn:
+   $this là từ khóa đặc biệt trong class, đại diện cho chính object hiện tại đang hoạt động.
+   $this->thuongHieu có nghĩa là:
-   👉 "Hãy lấy giá trị thuộc tính thuongHieu của object hiện tại."

##  🛠 Công thức ghi nhớ:
-   Bên ngoài class       -     Bên trong class
-   $object->thuoc_tinh	        $this->thuoc_tinh
-   $object->ham()	            $this->ham()
-   Bên trong class của cùng 1 file(*), không nên sử dụng trực tiếp $object vào bên trong class, mà thay vào đó hay sử dụng $this bên trong class như 1 đại diện thay thế cho $object.

##  🔍 Minh họa trực quan:
-   📌 Trong class – OK
```php
class MayTinh {
    public $ten;
    public function xinChao() {
        echo "Xin chào, tôi là $this->ten";
    }
}
```

-   🚫 Ngoài class – Không OK
```php
$this->ten = "Lenovo"; // ❌ Sai vì không nằm trong class (cùng 1 file)
```

##  ✅ Kết luận dễ nhớ:
-   Bên trong class nghĩa là: nằm trong dấu {} của class TênClass { ... }
-   ✅ $this chỉ dùng được bên trong class — để nói "tôi là đại diện cho object hiện tại đang hoạt động
-   ❌ $this không thể dùng bên ngoài class, vì bên ngoài class không có object nào đang hoạt động trực tiếp để đại diện cho cả "tôi"

## 🧠 Ghi nhớ dễ như nói chuyện:
-   Trong class: $this = "tôi là object đang chạy"

-   Ngoài class: "Không ai đang chạy cả, lấy gì mà đại diện?" → $this bị lỗi