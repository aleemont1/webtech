<?php
$themeClass = '';
if (!empty($_COOKIE['theme'])) {
    if ($_COOKIE['theme'] == 'dark') {
        $themeClass = 'dark';
    } else if ($_COOKIE['theme'] == 'light') {
        $themeClass = 'light';
    }
}
?>