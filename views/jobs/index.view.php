<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <?php foreach ($jobs as $job) : ?>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
                <div class="flex flex-col justify-center">
                    <div class="max-w-xl mb-6">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                            <?= $job['job-name']; ?>
                            <span class="relative px-1">
                            <div class="absolute inset-x-0 bottom-0 h-3 transform -skew-x-12 bg-teal-accent-400"></div>
                            <span class="relative inline-block text-deep-purple-accent-400">in <?= $job['location']; ?></span>
                        </span>
                        </h2>
                        <p class="text-base text-gray-700 md:text-lg">
                            <?= $job['requirements']; ?>
                        </p>
                    </div>
                    <div class="grid gap-5 row-gap-8 sm:grid-cols-2">
                        <div class="bg-white border-l-4 shadow-sm border-deep-purple-accent-400">
                            <div class="h-full p-5 border border-l-0 rounded-r">
                                <a class="mb-2 font-semibold leading-5">
                                    <?= $job['company-name']; ?>
                                </a>
                                <p class="text-sm text-gray-900">
                                    <?= $job['salary']; ?> $
                                </p>
                            </div>
                        </div>
                        <div class="bg-white border-l-4 shadow-sm border-deep-purple-accent-400">
                            <div class="h-full p-5 border border-l-0 rounded-r">
                                <h6 class="mb-2 font-semibold leading-5">
                                    <?php
                                    if ($job['validation'] === 0) {
                                        echo "The job is available";
                                    } else {
                                        echo "The job is not available";
                                    }
                                    ?>
                                </h6>
                                <p class="text-sm text-gray-900">
                                    <?= $job['start-in']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" alt="" />
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</main>

<?php require base_path('views/partials/footer.php') ?>
