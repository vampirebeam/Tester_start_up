@include('layouts.app')
<?php
class Bottle
{
    public $name;
    public $poisonous = false;
    public $wine = false;
    public $teleported = false;

    public function __construct($name, $poisonous, $wine)
    {
        $this->name = $name;
        $this->poisonous = $poisonous;
        $this->wine = $wine;
    }

    public function drink()
    {
        if ($this->poisonous) {
            echo "{$this->name} กินแล้วเป็นยาพิษ<br>";
            $this->teleported = true;
        } elseif ($this->wine) {
            echo "{$this->name} กินแล้วเป็นไวน์ธรรมดา<br>";
        } else {
            echo "{$this->name} กินแล้วไม่เกิดอะไรขึ้น<br>";
            $this->teleported = true;
        }
    }
}

// สร้างขวด
$bottles = [
    new Bottle("ขวด 1", true, false),
    new Bottle("ขวด 2", false, true),
    new Bottle("ขวด 3", true, false),
    new Bottle("ขวด 4", true, false),
    new Bottle("ขวด 5", false, true),
    new Bottle("ขวด 6", false, false),
    new Bottle("ขวด 7", true, false),
];

// กินขวดตามลำดับ
foreach ($bottles as $bottle) {
    $bottle->drink();
}

// หาขวดที่วาร์ปไปข้างหน้าและกลับบ้าน
$teleportedForward = null;
$teleportedBackHome = null;

foreach ($bottles as $bottle) {
    if ($bottle->teleported && !$teleportedForward) {
        $teleportedForward = $bottle;
    } elseif ($bottle->teleported && $teleportedForward) {
        $teleportedBackHome = $bottle;
    }
}

// แสดงผลลัพธ์
echo "<br>ขวดที่วาร์ปไปข้างหน้าคือ: {$teleportedForward->name}<br>";
echo "ขวดที่วาร์ปกลับบ้านคือ: {$teleportedBackHome->name}<br>";

?>

