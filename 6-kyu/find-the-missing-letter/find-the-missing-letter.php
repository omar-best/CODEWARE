<?php
​
function find_missing_letter(array $array): string {
 for ($i = 0; $i < count($array) - 1; $i++) {
        // ord() تجلب الرقم التسلسلي للحرف
        if (ord($array[$i + 1]) - ord($array[$i]) !== 1) {
            // chr() تحول الرقم إلى حرف مرة أخرى
            return chr(ord($array[$i]) + 1);
        }
    }
    return '';
}