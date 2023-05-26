<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <form action="/notes/update" method="POST">
        <input type="hidden" name="method" value="PATCH">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <div class="mb-2">
            <label for="title" class="block">Title</label>
            <input type="text" 
                name="title" id="title" placeholder="Enter your title name;" 
                class="p-2 focus:outline-none active:outline-none"
                value="<?= $note['name'] ?>"
            >
            <?php if(isset($errors['title'])) : ?>
            <p class="text-red-400">
                <?= $errors['title'] ?>
            </p>
            <?php endif; ?>
        </div>
        <button class="px-4 py-2 bg-blue-400 text-white-400 rounded-md">Update Note</button>
    </form>
</div>
</main>
<?php require base_path('views/partials/footer.php') ?>