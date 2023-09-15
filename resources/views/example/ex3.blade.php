@include('layouts.app')
<?php
function extractText($input) {
    $start = "Hello";
    $end = "world";

    $startPos = strpos($input, $start);
    $endPos = strpos($input, $end);

    if ($startPos === false || $endPos === false) {
        // หากไม่พบ "Hello" หรือ "world" ในข้อความ
        return "";
    }

    // ดึงข้อความที่อยู่ระหว่าง "Hello" กับ "world"
    $result = substr($input, $startPos + strlen($start), $endPos - $startPos - strlen($start));

    return trim($result);
}

// ตัวอย่างการใช้งาน
$text1 = "hellow 1 world";
$text2 = "peter Hello Thank you world Pan";

$result1 = extractText($text1); // ผลลัพธ์ควรเป็น "1"
$result2 = extractText($text2); // ผลลัพธ์ควรเป็น "Thank you"

echo $result1 . "\n";
echo $result2 . "\n";

?>

