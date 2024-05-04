<?php
// لینک به ایستگاه رادیویی
$radio_url = "http://www.radiofaaz.com:8000/radiofaaz.m3u";

// دریافت محتوای رادیو
$audio_content = file_get_contents($radio_url);

if ($audio_content === false) {
    header("HTTP/1.1 500 Internal Server Error");
    echo "خطا در اتصال به رادیو.";
} else {
    // ارسال هدر مناسب برای محتوای صوتی
    header("Content-Type: audio/mpeg");
    header("Content-Disposition: inline; filename=\"radiofaaz.m3u\"");

    // ارسال محتوای صوتی به کاربر
    echo $audio_content;
}
