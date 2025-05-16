<?php
class TestAccess {
    public function congKhai() {
        echo "Tôi là hàm PUBLIC\n";
    }

    protected function baoVe() {
        echo "Tôi là hàm PROTECTED\n";
    }

    private function riengTu() {
        echo "Tôi là hàm PRIVATE\n";
    }

    public function goiNoiBo() {
        echo "Tôi là hàm gọi nội bộ khác: \n";
        $this->baoVe();
        $this->riengTu();
    }
}

$obj = new TestAccess();

$obj->congKhai();     // ✅ OK
// $obj->baoVe();     // ❌ Error
// $obj->riengTu();   // ❌ Error

$obj->goiNoiBo();     // ✅ OK (nó gọi protected & private bên trong class)
