@include('layouts.app')
<?php
function horseRace($horses) {
    $numRounds = 5; // จำนวนรอบในการแข่ง
    $numHorsesPerRound = 5; // จำนวนม้าในแต่ละรอบ

    for ($i = 0; $i < $numRounds; $i++) {
        $roundHorses = array_chunk($horses, $numHorsesPerRound)[$i];
        $winner = array_reduce($roundHorses, function($fastest, $horse) {
            return $fastest === "" || $horse < $fastest ? $horse : $fastest;
        }, "");
        echo "รอบที่ " . ($i + 1) . ": ผู้ชนะคือ {$winner}<br>";
    }

    echo "ผู้ชนะครั้งสุดท้าย: {$winner}<br>";
}

// สร้างรายชื่อม้า
$horses = ["ม้า 1", "ม้า 2", "ม้า 3", "ม้า 4", "ม้า 5", "ม้า 6", "ม้า 7", "ม้า 8", "ม้า 9", "ม้า 10", "ม้า 11", "ม้า 12", "ม้า 13", "ม้า 14", "ม้า 15", "ม้า 16", "ม้า 17", "ม้า 18", "ม้า 19", "ม้า 20", "ม้า 21", "ม้า 22", "ม้า 23", "ม้า 24", "ม้า 25"];

// เริ่มการแข่งม้า
horseRace($horses);


?>
