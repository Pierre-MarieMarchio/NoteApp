<?php
require __DIR__ . '/../partials/head.php'; 
require __DIR__ . '/../partials/navbar.php';
?>

<?php require __DIR__ . '/../partials/header.php'; ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

      <?php foreach ($notes as $note) : ?>
        <li>
          <a href="/NoteApp/note?id=<?=$note['id']?>" class="hover:underline"> <?= $note['note_Title'] ?></a>
        </li>
      <?php endforeach ?>


      <!-- Your content -->
    </div>
  </main>

<?php require __DIR__ . '/../partials/foot.php'; ?>