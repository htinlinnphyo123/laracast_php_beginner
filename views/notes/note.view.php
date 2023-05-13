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
    </div>
  </main>
  <?php require base_path('views/partials/footer.php') ?>
