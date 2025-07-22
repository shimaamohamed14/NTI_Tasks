<?php
           include "nav.php" ;
$folder = 'logs/' . date('Y-m-d') . '/';
$files = glob($folder . '*'); 

if (isset($_GET['delete'])) {
    $file = $_GET['delete']; 
    if (file_exists($file)) {
        unlink($file); 
        header("Location: gallery.php");    
        exit;
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="mb-4">Image Gallery</h2>

    <?php if (!empty($files)): ?>
        <table class="table table-bordered table-dark text-center">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($files as $file): ?>
                    <tr>
                        <td><img src="<?= $file ?>" width="100" height="100"></td>
                        <td><?= $file ?></td> 
                        <td><?= pathinfo($file, PATHINFO_EXTENSION) ?></td>
                        <td><?= filesize($file) / 1024 ?></td> 
                        <td>
                            <a href="?delete=<?= $file ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>