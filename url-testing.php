<?php
function getDomain($url){
    // Tambahkan http:// kalau user tidak menulis protokol
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }

    $parse = parse_url($url);
    return $parse['host'] ?? 'URL tidak valid';
}

echo "Masukkan URL: ";
$url = trim(fgets(STDIN));

$domain = getDomain($url);
echo "Nama domain terdeteksi: " . $domain . PHP_EOL;
?>
