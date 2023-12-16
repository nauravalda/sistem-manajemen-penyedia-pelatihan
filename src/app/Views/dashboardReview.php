<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduTrack</title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/app.css?v=1.0">
  </head>

  <body>
<div class="h-full bg-white">

    <section id="dashboardReview" class="pt-10 p-[72px]">
        <div class="container">
            <div class="flex flex-wrap space-y-6">
                <!-- Tombol back -->
                <div class="w-full self-start text-light-primary gap-2">
                    <a href="/dashboard" class="flex items-center text-sm font-semibold leading-tight">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                    </svg>Back
                    </a>
                </div>

                <!-- Foto Course -->
                <div class="w-full">
                    <img class="flex self-stretch h-72 rounded-3xl" src="https://via.placeholder.com/1504x298" />
                </div>

                <!-- Kartu Informasi -->
                <div class="w-full p-[48px] bg-white border flex border-gray-200 rounded-2xl shadow">
                    <div class="w-[1200px] space-y-6">
                        <h6 class="text-xl font-bold text-gray-900"><?= $name; ?></h6>
                        <?php
                                // Menggunakan number_format untuk memformat harga menjadi format mata uang rupiah
                                $formattedPrice = 'Rp' . number_format($price, 0, ',', '.');
                            ?>
                        <p class="text-sm flex justify-center items-center font-bold text-light-primary w-24 h-8 border-2 border-gray-200 rounded-lg"><?= $formattedPrice; ?></p>
                        <p class="text-sm text-gray-500"><?= $desc; ?></p>
                        <p class="text-sm text-gray-500"><span class="font-bold">Rating :</span> 5/5 (99 Rating)</p>
                        <p class="text-sm text-gray-500"><?= $tags; ?></p>
                    </div>
                    <div class="w-[100px] border-r border-gray-200 h-auto"></div>
                    <div class="w-[100px] border-l border-gray-200 h-auto"></div>
                    <div class="w-auto h-auto space-y-4">
                        <p class="text-sm text-gray-500"><?= $locations; ?></p>
                        <p class="text-sm text-gray-500">Participants: <span class="font-bold"><?= $participants; ?>/100</span></p>
                        <p class="text-sm text-gray-500">Schedule:</p>
                        <span>
                            <p class="whitespace-nowrap text-sm text-gray-500">> Kamis, at 13.00</p>
                            <p class="whitespace-nowrap text-sm text-gray-500">> Jumat, at 14.00</p>
                        </span>
                    </div>
                </div>

                <!-- Review -->
                <div class="w-full p-[48px] bg-white border flex border-gray-200 rounded-2xl shadow">
                    <div class="w-[1200px] space-y-6">
                        <h6 class="text-xl font-bold text-gray-900">Reviews</h6>
                        <?php foreach ($data_review as $review) : ?>
                        <div class="w-full p-[16px] bg-light-secondary border-[1px] border-gray-300 rounded-md space-y-2">
                            <div class="flex gap-4 items-center">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-light-primary text-white text-xl"><?= substr($review['name'], 0, 1) ?></div>
                                <div>
                                    <p class="font-semibold"><?= $review['name']; ?></p>
                                    <p class="text-gray-700">Rating : <?= $review['rating']; ?>/5</p>
                                </div>
                            </div>
                            <p class="text-gray-700"><?= $review['desc']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

</body>
</html>