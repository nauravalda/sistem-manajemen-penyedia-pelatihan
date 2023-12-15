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

<section id="dashboard" class="p-[72px]">
        <div class="container">
            <div class="flex flex-wrap space-y-6">

              <!-- Tulisan Judul -->
              <div class="space-y-[8px]">
                <h1 class="w-full text-4xl font-semibold">EduTrack Dashboard</h1>
                <div class="flex gap-6 text-xs text-gray-700">
                  <p>Kamis, 12 Januari 2024</p>
                  <p>19.00 WIB</p>
                </div>
              </div>
                
              <!-- Kartu Informasi -->
              <div class="flex w-full gap-6">
                <div class="w-9/12 p-9 space-y-6 bg-white border border-gray-200 rounded-2xl shadow">
                  <h6 class="text-xl font-bold text-gray-900">Stats</h3>
                  <div class="flex justify-between h-auto gap-6">
                    <div class="p-4 w-1/3 rounded-lg space-y-20 shadow border border-gray-200 bg-light-primary">
                      <h6 class="text-xs font-semibold text-gray-50">Participants <span class="text-[#D0BCFF]">/ This month</span></h6>
                      <div>
                        <div class="flex justify-between gap-5">
                            <h6 class="text-2xl font-semibold text-gray-50">43</h6>
                            <div>
                              <p class="text-xs text-[#D0BCFF]">+ 32%</p>
                              <p class="text-xs text-gray-50 font-semibold">New participants</p>
                            </div>
                        </div>
                        <div class="flex justify-between gap-5">
                            <h6 class="text-2xl font-semibold text-gray-50">336</h6>
                            <div>
                              <p class="text-xs text-[#D0BCFF]">+ 14%</p>
                              <p class="text-xs text-gray-50 font-semibold">Total participants</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="p-4 w-1/3 rounded-lg space-y-16 shadow border border-gray-200 bg-light-secondary">
                      <h6 class="text-xs font-semibold text-gray-900">Ratings <span class="text-light-primary">/ This month</span></h6>
                      <div class="space-y-3">
                          <div class="flex justify-between gap-5">
                            <div class="flex items-end gap-1 text-yellow-400">
                              <h6 class="text-2xl font-semibold text-gray-900">4.5</h6>
                              <p class="text-xs text-gray-900">/5</p>
                              <span class="inline-block">&#9733;</span>
                            </div>
                            <div>
                              <p class="text-xs text-light-primary">+ (0.1)</p>
                              <p class="text-xs text-gray-900 font-semibold">Overall rating</p>
                            </div>
                          </div>
                          <div class="w-full bg-light-primary rounded-xl p-3">
                            <p class="text-xs font-bold text-gray-50">Course A</p>
                            <p class="text-xs text-gray-50"><span class="font-bold">4.9 / 5</span> (99 ratings)</p>
                          </div>
                      </div>
                    </div>
                    <div class="p-4 w-1/3 rounded-lg shadow border border-gray-200 bg-light-secondary">
                      <h6 class="text-xs font-semibold text-gray-900">Revenue <span class="text-light-primary">/ Last 5 months</span></h6>
                      <img class="mt-6" src="/assets/Grafik.png" alt="Grafik Revenue 5 Bulan">
                    </div>
                  </div>
                </div>

                <!-- Upcoming Activities Card -->
                <div class="w-3/12 bg-white border border-gray-200 rounded-2xl shadow p-9">
                        <h6 class="text-xl font-bold text-gray-900">Upcoming Activities</h6>
                        <div class="mt-5 space-y-4">
                            <div class="w-full bg-light-secondary border border-gray-200 rounded-xl p-4">
                                <p class="text-xs font-bold text-gray-900">Course A Pertemuan 1</p>
                                <p class="text-xs text-gray-900">12.00 at Jl.Asap Kebakaran No. 7</p>
                            </div>
                            <div class="w-full bg-light-secondary border border-gray-200 rounded-xl p-4">
                                <p class="text-xs font-bold text-gray-900">Course A Pertemuan 2</p>
                                <p class="text-xs text-gray-900">12.00 at Jl.Asap Kebakaran No. 7</p>
                            </div>
                            <div class="w-full bg-light-secondary border border-gray-200 rounded-xl p-4">
                                <p class="text-xs font-bold text-gray-900">Course A Pertemuan 3</p>
                                <p class="text-xs text-gray-900">12.00 at Jl.Asap Kebakaran No. 7</p>
                            </div>
                        </div>
                </div>
              </div>


                <!-- Tabel Course Overview -->
                <div class="w-full p-9 space-y-6 bg-white border border-gray-200 rounded-2xl shadow">
                  <h6 class="text-xl font-bold text-gray-900">Course Overview</h6>
                  <div class="relative overflow-x-auto">
                      <table class="w-full text-sm text-center border border-separate">
                          <!-- Header -->
                          <thead class="text-xs text-gray-900 bg-[#EADDFF] uppercase">
                              <tr>
                                  <th scope="col" class="px-6 py-3">
                                      Course Name
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Price
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Participants
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Margin
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Rating
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Reviews
                                  </th>
                              </tr>
                          </thead>
                          <!-- Konten Isi -->
                          <tbody class="text-left">
                            <?php foreach ($data_courses as $kursus) : ?>
                            <?php
                                // Menggunakan number_format untuk memformat harga menjadi format mata uang rupiah
                                $formattedPrice = 'Rp' . number_format($kursus['price'], 0, ',', '.');
                            ?>
                            <?php
                                // Menggunakan number_format untuk memformat margin menjadi format mata uang rupiah
                                $formattedMargin = 'Rp' . number_format($kursus['margin'], 0, ',', '.');
                            ?>
                              <tr class="text-gray-900">
                                  <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap bg-light-secondary">
                                      <?= $kursus['course_name']; ?>
                                  </th>
                                  <td class="px-6 py-4">
                                      <?= $formattedPrice; ?>
                                  </td>
                                  <td class="px-6 py-4 bg-light-secondary">
                                      <?= $kursus['participants']; ?>
                                  </td>
                                  <td class="px-6 py-4">
                                      <?= $formattedMargin; ?>
                                  </td>
                                  <td class="px-6 py-4 bg-light-secondary">
                                      <?= $kursus['rating']; ?>
                                  </td>
                                  <td class="flex px-6 py-4">
                                      <?= $kursus['reviews']; ?>
                                      <a href='/dashboardReview/<?= $kursus['id']; ?>' class="rounded-full ml-2 bg-light-primary text-white text-xs px-2">See Review</a>
                                  </td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>

                </div>

            </div>
        </div>
    </section>
