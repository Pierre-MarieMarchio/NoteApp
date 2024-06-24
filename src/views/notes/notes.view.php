<?php
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../partials/navbar.php';
?>

<?php require __DIR__ . '/../../partials/header.php'; ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <ul>
      <?php foreach ($notes as $note) : ?>
        <li>
          <a href="/NoteApp/note?id=<?= $note['id'] ?>" class="hover:underline"> <?= htmlspecialchars($note['note_Title']) ?></a>
        </li>
      <?php endforeach ?>
    </ul>

    <p class="mt-6">
      <a href="/NoteApp/notes/note-create" class="text-blue-500 hover:underline">Create Note</a>

    </p>


  </div>
</main>

<?php require __DIR__ . '/../../partials/foot.php'; ?>