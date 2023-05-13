  <?php require base_path('views/partials/header.php') ?>
  <?php require base_path('views/partials/nav.php') ?>
  <?php require base_path('views/partials/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <?php if(isset($insertSuccess)) : ?>
        <p class="inline-block my-3 px-3 py-2 bg-green-300 text-white-300 rounded-md"><?= $insertSuccess ?></p>
      <?php endif; ?>
      <ul class="list-disc">
        <?php foreach($notes as $note) : ?>
          <li>
            <a href="/note?id=<?= $note['id'] ?>"><?php echo htmlspecialchars($note['name']) ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <a href="/notes/create" class="inline-block mt-3 text-blue-400 bg-grey-900 px-3 py-1 border-2">
        Create New Note
      </a>
    </div>
  </main>
  <?php require base_path('views/partials/footer.php') ?>
