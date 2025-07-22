          <?php 
           include"nav.php" ;
?>
<?php
$logFile = 'logs/log.csv';
$rows = [];

if (file_exists($logFile)) {
    $rows = array_map('str_getcsv', file($logFile));
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <table class="table table-bordered table-striped table-dark text-center">
        <thead>
            <tr>
                <?php foreach ($rows[0] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i < count($rows); $i++): ?>
                <tr>
                    <?php foreach ($rows[$i] as $cell): ?>
                        <td><?= htmlspecialchars($cell) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>