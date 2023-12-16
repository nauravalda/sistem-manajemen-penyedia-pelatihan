<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn Sphere</title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/app.css?v=1.0">
  </head>

  <body>
<div class="h-full bg-white">

    <section id="Info atas" class="pt-10 px-[72px]">
        <div class="container">
            <div class="flex flex-wrap space-y-6">
                <!-- Tombol back -->
                <div class="w-full self-start text-light-primary gap-2">
                    <button class="flex items-center text-sm font-semibold leading-tight">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                    </svg>Back
                    </button>
                </div>

                <!-- Foto Course -->
                <div class="w-full">
                    <img class="flex self-stretch h-72 rounded-3xl" src="https://via.placeholder.com/1504x298" />
                </div>

                <!-- Kartu Informasi -->
                <div class="flex w-full gap-6">
                    <div class="w-[724px] p-[48px] bg-white border flex border-gray-200 rounded-2xl shadow">

                        <div class="w-[448px] space-y-6">
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

                        <div class="w-[50px] border-r border-gray-200 h-auto"></div>
                        <div class="w-[50px] border-l border-gray-200 h-auto"></div>

                        <div class="w-[250px] h-auto space-y-4">
                            <p class="text-sm text-gray-500"><?= $locations; ?></p>
                            <p class="text-sm text-gray-500">Participants: <span class="font-bold"><?= $participants; ?>/100</span></p>
                            <p class="text-sm text-gray-500">Schedule:</p>
                            <span>
                                <p class="text-sm text-gray-500">> Kamis, at 13.00</p>
                                <p class="text-sm text-gray-500">> Jumat, at 14.00</p>
                            </span>
                        </div>

                    </div>

                    <!-- Upcoming Activities Card -->
                        <div class="w-full bg-white border border-gray-200 rounded-2xl shadow p-12">
                            <h6 class="text-2xl font-bold flex justify-center text-gray-900">Upcoming Activities</h6>
                            <div class="mt-5 space-y-4">
                                <div class="w-full bg-light-secondary border border-gray-200 rounded-xl p-4">
                                    <p class="text-sm font-bold text-gray-900">Pertemuan 1</p>
                                    <p class="text-sm text-gray-900">12.00 at Jl.Asap Kebakaran No. 7</p>
                                </div>
                                <div class="w-full bg-light-secondary border border-gray-200 rounded-xl p-4">
                                    <p class="text-sm font-bold text-gray-900">Pertemuan 2</p>
                                    <p class="text-sm text-gray-900">12.00 at Jl.Asap Kebakaran No. 7</p>
                                </div>
                                <div class="w-full bg-light-secondary border border-gray-200 rounded-xl p-4">
                                    <p class="text-sm font-bold text-gray-900">Pertemuan 3</p>
                                    <p class="text-sm text-gray-900">12.00 at Jl.Asap Kebakaran No. 7</p>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </section>

    <section id="Info Bawah" class="px-[72px] py-[24px]">
        <div class="container">
            <div class="flex flex-wrap space-y-6">
                <!-- Review -->
                <div class="w-full p-[48px] bg-white border flex border-gray-200 rounded-2xl shadow">
                    <div class="w-[1200px] space-y-6">
                        <h6 class="text-xl font-bold text-gray-900">Featured Review</h6>
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

                <div class="w-full flex gap-6">
                    <!-- Kartu Kurikulum dan Outcome -->
                    <div class="w-1/2 bg-white border border-gray-200 rounded-2xl shadow p-12 space-y-[10px]">
                        <h6 class="text-xl font-bold text-gray-900">What You'll Learn</h6>
                        <p><?= $courseBenefit; ?></p>
                    </div>

                    <div class="w-1/2 bg-white border border-gray-200 rounded-2xl shadow p-12 space-y-[10px]">
                        <h6 class="text-xl font-bold text-gray-900">Course Content</h6>
                        <p><?= $courseContent; ?></p>
                    </div>
                </div>

                <div class="w-full">
                    <div class="bg-white border border-gray-200 rounded-2xl shadow p-12 space-y-6">
                        <h6 class="text-xl font-bold text-gray-900">Description</h6>
                        <p class="text-gray-900"><?= $desc; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>