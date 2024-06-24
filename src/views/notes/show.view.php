<?php
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../partials/navbar.php';
?>

<?php require __DIR__ . '/../../partials/header.php'; ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p><?= htmlspecialchars($note['note_Body']) ?></p>
  </div>
</main>

<?php require __DIR__ . '/../../partials/foot.php'; ?>