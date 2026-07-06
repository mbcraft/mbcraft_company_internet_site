<?php

$_visits_file = __DIR__ . '/../data/visits.json';
$_month = date('Y-m');

$_uri = strtok($_SERVER['REQUEST_URI'] ?? '', '?');
$_parts = array_filter(explode('/', trim($_uri, '/')));
$_last = end($_parts);
$_page = $_last ? preg_replace('/\.php$/', '', $_last) : 'index';
if ($_page === '' || $_page === 'it' || $_page === 'en') $_page = 'index';

// Raggruppa tutti gli elementi filosofia in un'unica voce
if (preg_match('/^[A-Z]_\d+$/', $_page)) {
    $_page = 'elementi';
}

$fp = @fopen($_visits_file, 'c+');
if ($fp) {
    flock($fp, LOCK_EX);
    $raw = stream_get_contents($fp);
    $data = [];
    if ($raw && $raw !== '{}') {
        $decoded = json_decode($raw, true);
        $data = is_array($decoded) ? $decoded : [];
    }
    if (!isset($data[$_month])) $data[$_month] = [];
    if (!isset($data[$_month][$_page])) $data[$_month][$_page] = 0;
    $data[$_month][$_page]++;
    fseek($fp, 0);
    ftruncate($fp, 0);
    fwrite($fp, json_encode($data, JSON_PRETTY_PRINT));
    flock($fp, LOCK_UN);
    fclose($fp);
}

unset($_visits_file, $_month, $_uri, $_parts, $_last, $_page, $fp, $raw, $data, $decoded);
