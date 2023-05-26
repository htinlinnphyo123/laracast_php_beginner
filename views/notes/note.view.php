<?php require base_path('views/partials/header.php') ?>
  <?php require base_path('views/partials/nav.php') ?>
  <?php require base_path('views/partials/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <a href="/notes" class="text-blue-300 underline">Go Back Home</a>
        <p class="bold mt-5">
            <?php
                echo htmlspecialchars($note['name']);
            ?>
        </p>
        <form action="notes/edit" method="GET">
          <input type="hidden" name="id" value="<?= $note['id'] ?>">
          <button class="bg-blue-500 px-3 py-2 border border-2 rounded-md mt-3">Edit</button>
        </form>
        <form action="notes/delete" method="POST">
          <input type="hidden" name="method" value="DELETE">
          <input type="hidden" name="id" value="<?= $note['id'] ?>">
          <button class="bg-red-300 px-3 py-2 border border-2 rounded-md mt-3">Delete</button>        
        </form>


    </div>
  </main>
  <?php require base_path('views/partials/footer.php') ?>
