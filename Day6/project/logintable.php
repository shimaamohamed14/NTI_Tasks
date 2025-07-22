<?php
$rows = [];
$file = 'logs/login_status.csv';
if (file_exists($file)) {
    $rows = array_map('str_getcsv', file($file));
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">

    <?php if (!empty($rows)): ?>
    <table class="table table-bordered table-dark text-center">
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
                    <td><?= htmlspecialchars($rows[$i][0]) ?></td>
                    <td><?= htmlspecialchars($rows[$i][1]) ?></td>
                    <td class="<?= $rows[$i][2] === 'fail' ? 'text-danger' : 'text-success' ?>">
                        <?= htmlspecialchars($rows[$i][2]) ?>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <?php endif; ?>
</div>