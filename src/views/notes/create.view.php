<?php
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../partials/navbar.php';
?>

<?php require __DIR__ . '/../../partials/header.php'; ?>


<main>
    <div class="mx-auto py-6 px-6">


        <form method="POST">
            <div class="space-y-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">

                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                        <div class="mt-2">
                            <textarea id="title" name="title" rows="1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            <?php if (isset($errors['title'])) : ?>
                                <p class="text-red-500 text-xs mt-2"> <?= $errors['title'] ?></p>
                            <?php endif; ?>
                        </div>

                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                        <div class="mt-2">
                            <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            <?php if (isset($errors['body'])) : ?>
                                <p class="text-red-500 text-xs mt-2"> <?= $errors['body'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>



            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>

        </form>

    </div>
</main>


<?php require __DIR__ . '/../../partials/foot.php'; ?>