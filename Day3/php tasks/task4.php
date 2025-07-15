<?php
$grade = 70;
if (!isset($grade))
    echo "أدخل الدرجة";
else if ($grade >= 50)
    echo "ناجح";
else
    echo "راسب";
