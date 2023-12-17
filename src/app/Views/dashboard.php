<?php
$timezone = 'Asia/Jakarta';

$time = new DateTime('now', new DateTimeZone($timezone));
?>

<body>
  <div class="min-h-screen h-full bg-white">

    <section id="dashboard" class="pl-20 py-20 flex items-center justify-center">
      <div class="container">
        <div class="flex flex-wrap space-y-6">

          <!-- Tulisan Judul -->
          <div class="space-y-[8px]">
            <h1 class="w-full text-display-md font-medium"><?= $user; ?> Dashboard</h1>
            <div class="flex gap-6 text-body-md text-sys-light-secondary">
              <p>
                <?php echo $time->format('l, j F Y'); ?>
              </p>
              <p>
                <?php echo $time->format('H:i'); ?>
              </p>
              <p>
                <?php echo $timezone; ?>
              </p>
            </div>

          </div>

          <!-- Kartu Informasi -->
          <div class="flex w-full gap-6">
            <div class="flex flex-col h-full w-9/12 p-9 space-y-6 bg-white border border-gray-200 rounded-2xl shadow">
              <h6 class="text-display-sm font-bold text-black">Stats</h3>
                <div class="flex justify-between h-full gap-6">
                  <div class="flex flex-col content-between p-4 w-1/3 rounded-lg shadow border border-gray-200 bg-light-primary">
                    <h6 class="text-title-md font-semibold text-gray-50">Participants <span class="text-[#D0BCFF]">/ This
                        month</span></h6>
                    <div class="flex h-full"></div>
                    <div class='flex flex-col h-fit gap-2 '>
                      <div class="flex justify-between items-center gap-5">
                        <h6 class="text-display-md font-semibold text-gray-50">43</h6>
                        <div>
                          <p class="text-title-md text-[#D0BCFF]">+ 32%</p>
                          <p class="text-title-md text-gray-50 font-semibold">New participants</p>
                        </div>
                      </div>
                      <div class="flex justify-between items-center gap-5">
                        <h6 class="text-display-md font-semibold text-gray-50">336</h6>
                        <div>
                          <p class="text-title-md text-[#D0BCFF]">+ 14%</p>
                          <p class="text-title-md text-gray-50 font-semibold">Total participants</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex flex-col content-between p-4 w-1/3 rounded-lg shadow border border-gray-200 bg-light-secondary">
                    <h6 class="text-title-md font-semibold text-gray-900">Ratings <span class="text-light-primary">/ This
                        month</span></h6>
                    <div class="flex h-full"></div>
                    <div class="space-y-3">
                      <div class="flex justify-between items-center gap-5">
                        <div class="flex items-center gap-4 text-yellow-400">
                          <h6 class="text-display-md font-semibold text-gray-900">4.5</h6>
                          <div>
                            <p class="text-title-md text-gray-900"> /5</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                              <path
                                d="M8.79859 0.684925C9.09523 -0.0282765 10.1056 -0.0282753 10.4022 0.684926L12.153 4.89437C12.2781 5.19504 12.5608 5.40047 12.8854 5.42649L17.4299 5.79082C18.1998 5.85255 18.512 6.81343 17.9254 7.31594L14.463 10.2818C14.2157 10.4937 14.1077 10.8261 14.1832 11.1428L15.2411 15.5774C15.4203 16.3288 14.6029 16.9227 13.9437 16.52L10.053 14.1436C9.77514 13.9739 9.42564 13.9739 9.14774 14.1436L5.25705 16.52C4.59786 16.9227 3.78049 16.3288 3.95971 15.5774L5.01753 11.1428C5.09309 10.8261 4.98508 10.4937 4.73778 10.2818L1.27538 7.31594C0.688756 6.81343 1.00097 5.85255 1.77093 5.79082L6.31538 5.42649C6.63997 5.40047 6.92273 5.19504 7.04778 4.89437L8.79859 0.684925Z"
                                fill="#E6B93D"/>
                            </svg>
                          </div>
                        </div>
                        <div>
                          <p class="text-title-md text-light-primary">+ (0.1)</p>
                          <p class="text-title-md text-gray-900 font-semibold">Overall rating</p>
                        </div>
                      </div>
                      <div class="w-full bg-light-primary rounded-xl p-3">
                        <p class="text-title-md font-bold text-gray-50">Course A</p>
                        <p class="text-title-md text-gray-50"><span class="font-bold">4.9 / 5</span> (99 ratings)</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex flex-col content-between p-4 w-1/3 rounded-lg shadow border border-gray-200 bg-light-secondary">
                    <h6 class="text-title-md font-semibold text-gray-900">Revenue <span class="text-light-primary">/ Last 5
                        months</span></h6>
                    <img class="h-full mt-6" src="/assets/Grafik.png" alt="Grafik Revenue 5 Bulan">
                  </div>
                </div>
            </div>

            <!-- Upcoming Activities Card -->
            <div class="w-3/12 bg-white border border-gray-200 rounded-2xl shadow p-9">
              <h6 class="text-display-sm font-bold text-black">Upcoming Activities</h6>
              <div class="mt-5 space-y-4">

                <?php if (empty($schedule)): ?>
                  <div
                    class='flex flex-col w-full h-fit bg-sys-light-surface p-[16px] gap-[8px] outline outline-1 outline-sys-light-outline-variant rounded-2xl'>
                    <h2 class='font-sans font-medium text-title-md'>No Schedule Available</h2>
                  </div>
                <?php endif; ?>
                <?php for ($i = 0; $i < count($schedule); $i++): ?>
                  <div class="w-full bg-light-secondary border border-gray-200 rounded-xl p-4">
                    <p class="text-title-md font-bold text-gray-900">
                      <?= $schedule[$i]['name'] ?>
                    </p>
                    <p class="text-body-md text-gray-900">
                      <?= $schedule[$i]['time'] ?> at
                      <?= $schedule[$i]['locations'] ?>
                    </p>
                  </div>
                <?php endfor; ?>
              </div>
            </div>
          </div>


          <!-- Tabel Course Overview -->
          <div class="w-full p-9 space-y-6 bg-white border border-gray-200 rounded-2xl shadow">
            <h6 class="text-display-sm font-bold text-black">Course Overview</h6>
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-center rounded-medium overflow-hidden outline outline-1 outline-sys-light-outline-variant">
                <!-- Header -->
                <thead class="font-sans text-title-sm text-gray-900 bg-sys-light-primary-container border border-sys-light-outline-variant">
                  <tr>
                    <th scope="col" class="px-6 py-4 border border-sys-light-outline-variant">
                      Course Name
                    </th>
                    <th scope="col" class="px-6 py-4 border border-sys-light-outline-variant">
                      Price
                    </th>
                    <th scope="col" class="px-6 py-4 border border-sys-light-outline-variant">
                      Participants
                    </th>
                    <th scope="col" class="px-6 py-4 border border-sys-light-outline-variant">
                      Margin
                    </th>
                    <th scope="col" class="px-6 py-4 border border-sys-light-outline-variant">
                      Rating
                    </th>
                    <th scope="col" class="px-6 py-4 border border-sys-light-outline-variant">
                      Reviews
                    </th>
                  </tr>
                </thead>
                <!-- Konten Isi -->
                <tbody class="text-left">

                  <?php if (empty($course)): ?>
                    <div
                      class='flex flex-col w-full h-fit bg-sys-light-surface p-[16px] gap-[8px] outline outline-1 outline-sys-light-outline-variant rounded-2xl'>
                      <h2 class='font-sans font-medium text-title-md'>No Course Available</h2>
                    </div>
                  <?php endif; ?>
                  <?php for ($i = 0; $i < count($course); $i++): ?>
                    <tr class="text-gray-900">
                      <th scope="row" class="px-6 py-4 border border-sys-light-outline-variant font-medium whitespace-nowrap">
                        <?= $course[$i]['name'] ?>
                      </th>
                      <td class="px-6 py-4 border border-sys-light-outline-variant">
                        Rp
                        <?= number_format($course[$i]['price'], 0, ',', '.'); ?>
                      </td>
                      <td class="px-6 py-4 border border-sys-light-outline-variant">
                        belom ada
                      </td>
                      <td class="px-6 py-4 border border-sys-light-outline-variant">
                        blm ada
                      </td>
                      <td class="px-6 py-4 border border-sys-light-outline-variant">
                        blm ada
                      </td>
                      <td class="px-6 border border-sys-light-outline-variant">
                        <a class="rounded-full py-2 bg-light-primary text-white text-body-md px-4" href="/courses/<?= $course[$i]['id'] ?>/review">See Review</a>
                      </td>
                    </tr>
                  <?php endfor; ?>
                </tbody>
              </table>
            </div>

          </div>

        </div>
      </div>
    </section>