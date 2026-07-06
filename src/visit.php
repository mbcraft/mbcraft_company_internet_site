<?php

$visits_file = __DIR__ . '/data/visits.json';

$data = [];
if (file_exists($visits_file)) {
    $raw = @file_get_contents($visits_file);
    if ($raw !== false) {
        $decoded = json_decode($raw, true);
        if (is_array($decoded)) {
            $data = $decoded;
        } else {
            @file_put_contents($visits_file, '{}');
        }
    }
}

// Unifica elem_A, elem_B, ecc. in "elementi"
foreach ($data as $month => $pages) {
    $elem_total = 0;
    foreach ($pages as $key => $count) {
        if (preg_match('/^elem_/', $key)) {
            $elem_total += $count;
            unset($data[$month][$key]);
        }
    }
    if ($elem_total > 0) {
        $data[$month]['elementi'] = ($data[$month]['elementi'] ?? 0) + $elem_total;
    }
}

krsort($data);

$all_pages = [];
foreach ($data as $pages) {
    foreach (array_keys($pages) as $p) {
        if (!in_array($p, $all_pages)) $all_pages[] = $p;
    }
}
sort($all_pages);

$grand_totals = array_fill_keys($all_pages, 0);
$grand_total = 0;

?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Visite mensili</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 15px; padding: 30px; background: #f5f5f5; }
        h1 { font-size: 20px; margin-bottom: 20px; }
        table { border-collapse: collapse; background: #fff; }
        th, td { border: 1px solid #ccc; padding: 8px 16px; text-align: center; white-space: nowrap; }
        th { background: #87CEEB; font-weight: bold; }
        td.month { text-align: left; font-weight: bold; }
        tr:nth-child(even) { background: #f0f8ff; }
        .total-row { font-weight: bold; background: #d0ecff; }
        td.zero { color: #bbb; }
    </style>
</head>
<body>
    <h1>Visite mensili — mbcraft.it</h1>
    <?php if (empty($data)): ?>
        <p>Nessuna visita registrata.</p>
    <?php else: ?>
    <table>
        <tr>
            <th>Mese</th>
            <?php foreach ($all_pages as $p): ?>
                <th><?= htmlspecialchars($p) ?></th>
            <?php endforeach; ?>
            <th>TOTALE</th>
        </tr>
        <?php foreach ($data as $month => $pages):
            $row_total = array_sum($pages);
            $grand_total += $row_total;
        ?>
        <tr>
            <td class="month"><?= htmlspecialchars($month) ?></td>
            <?php foreach ($all_pages as $p):
                $count = $pages[$p] ?? 0;
                $grand_totals[$p] += $count;
            ?>
                <td class="<?= $count ? '' : 'zero' ?>"><?= $count ?: '-' ?></td>
            <?php endforeach; ?>
            <td><?= $row_total ?></td>
        </tr>
        <?php endforeach; ?>
        <tr class="total-row">
            <td>TOTALE</td>
            <?php foreach ($all_pages as $p): ?>
                <td><?= $grand_totals[$p] ?></td>
            <?php endforeach; ?>
            <td><?= $grand_total ?></td>
        </tr>
    </table>
    <?php endif; ?>
    <br />
    <small>IT + EN sommati &mdash; aggiornato in tempo reale.</small>
</body>
</html>
