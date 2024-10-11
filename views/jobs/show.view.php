<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/jobs" class="text-blue-500 underline">go back...</a>
        </p>

        <p></p>

        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" >
            <button class="text-sm text-red-500">Delete</button>
        </form>
        <form class="mt-6" method="POST">
            <input type="hidden" name="__method" value="take it">
            <input type="hidden" name="id" >
            <button class="text-sm text-red-500">Delete</button>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>



