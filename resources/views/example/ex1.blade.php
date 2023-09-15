@include('layouts.app')
@section('content')
<?php

$cat = 0;
$turtle = 0;
$table = 0;

for ($cat = 0; $cat <= 170; $cat++) {
    for ($turtle = 0; $turtle <= 170; $turtle++) {
        for ($table = 0; $table <= 170; $table++) {
            if ($table == $turtle + (170 - $cat) && $table == $cat + (130 - $turtle)) {
                echo "cat = $cat, turtle = $turtle, table = $table";
                exit();
            }
        }
    }
}

echo "ไม่พบคำตอบ";
?>
@endsection

