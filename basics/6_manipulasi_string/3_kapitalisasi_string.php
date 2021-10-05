<?php

echo '<pre>';

// ---------------------------------------------------------------------------
echo '<h1>Kapitalisasi string</h1>';
// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='mengkonversi-string-ke-huruf-kecil'>Mengubah karakter string ke huruf kecil</h2>";

echo '<i>strtolower()</i>', PHP_EOL;
$text = "INI ADALAH CONTOH TEKS YANG SAYA BUAT";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasil Konversi: ' . strtolower($text), PHP_EOL;  // Output: hello world

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='mengkonversi-string-ke-huruf-besar'>Mengubah karakter string ke huruf besar</h2>";

echo '<i>strtoupper()</i>', PHP_EOL;
$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasil Konversi: ' . strtoupper($text), PHP_EOL;  // Output: 7

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='mengubah-karakter-pertama-string-ke-huruf-besar-awal-kalimat'>Mengubah karakter pertama string ke huruf besar (Awal kalimat)</h2>";

echo '<i>ucfirst()</i>', PHP_EOL;
$text = "ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo "Hasil Konversi: " . ucfirst($text), PHP_EOL;

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='mengubah-karakter-pertama-string-ke-huruf-kecil-awal-kalimat'>Mengubah karakter pertama string ke huruf kecil (Awal Kalimat)</h2>";

echo '<i>lcfirst()</i>', PHP_EOL;
$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo "Hasil Konversi: " . lcfirst($text), PHP_EOL;

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='mengubah-karakter-pertama-string-ke-huruf-kecil-tiap-kata'>Mengubah karakter pertama string ke huruf besar (Tiap Kata)</h2>";

echo '<i>ucwords()</i>', PHP_EOL;
$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo "Hasil Konversi: " . ucwords($text), PHP_EOL;

echo '</pre>';