<?php
$rating = 4.8;
$ratingCount = 99;
$participants = 99;

$personalRating = 5;
$personalReview = "Everything on this course is a goldmine except for the GUI since it's specific for Jupyter Notebooks and it's missing the video for GUI Events. Still it was a nice introduction to GUI. Don't let that disappoint you though. THIS IS A MUST HAVE COURSE. I have already recommended it to few people and always will. Do yourself a favor and do this course if you want to learn Python 3. Thank you so much for this course, Jose-sensei!!";
?>

<body>
  <div class="h-full bg-white">

    <section id="dashboardReview" class="pl-20 py-20 flex items-center justify-center">
      <div class="container">
        <div class="flex flex-wrap space-y-6">
          <!-- Tombol back -->
          <div class="w-full self-start text-light-primary gap-2">
            <button onclick="window.location.href = '/dashboard';"
              class="flex items-center text-label-lg font-medium font-['Roboto'] leading-tight gap-2 p-2 hover:bg-fuschia-100">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M15 8.25H5.8725L10.065 4.0575L9 3L3 9L9 15L10.0575 13.9425L5.8725 9.75H15V8.25Z"
                  fill="#6750A4" />
              </svg>
              <p>Back</p>
            </button>
          </div>

          <!-- Foto Course -->
          <div class="flex w-full h-72 rounded-2xl justify-center items-center overflow-hidden">
            <img class="w-full h-auto rounded-3xl" src=<?php if ($course['url_img'] != null)
              echo $course['url_img'];
            else
              echo "https://via.placeholder.com/1504x298"; ?> />
          </div>

          <!-- Kartu Informasi -->
          <div
            class="bg-white grow shrink basis-0 self-stretch p-10 rounded-3xl border gap-8 border-stone-300 justify-start items-start flex">
            <div class="w-full grow shrink flex-col justify-start items-start gap-6 inline-flex">
              <div class="self-stretch text-black text-headline-md font-bold leading-9">
                <?= $course['name']; ?>
              </div>
              <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
                <div class="w-36 px-4 py-1.5 justify-center items-center gap-2 flex">
                  <div class="text-center text-light-primary text-label-lg font-medium  leading-tight tracking-normal">
                    Rp
                    <?= number_format($course['price'], 0, ',', '.'); ?>
                  </div>
                </div>
              </div>
              <div
                class="self-stretch text-sys-light-on-surface-variant text-body-lg text-body-lg leading-normal tracking-wide">
                <?= $course['desc']; ?>
              </div>
              <div class="justify-start items-center gap-2 inline-flex">
                <div class="w-24 flex-col justify-start items-center gap-1 inline-flex">
                  <div class="justify-start inline-flex">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                      ?>
                      <div class="w-5 h-5 px-1 flex-col justify-center items-center gap-1 inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                          <path
                            d="M8.79859 0.684925C9.09523 -0.0282765 10.1056 -0.0282753 10.4022 0.684926L12.153 4.89437C12.2781 5.19504 12.5608 5.40047 12.8854 5.42649L17.4299 5.79082C18.1998 5.85255 18.512 6.81343 17.9254 7.31594L14.463 10.2818C14.2157 10.4937 14.1077 10.8261 14.1832 11.1428L15.2411 15.5774C15.4203 16.3288 14.6029 16.9227 13.9437 16.52L10.053 14.1436C9.77514 13.9739 9.42564 13.9739 9.14774 14.1436L5.25705 16.52C4.59786 16.9227 3.78049 16.3288 3.95971 15.5774L5.01753 11.1428C5.09309 10.8261 4.98508 10.4937 4.73778 10.2818L1.27538 7.31594C0.688756 6.81343 1.00097 5.85255 1.77093 5.79082L6.31538 5.42649C6.63997 5.40047 6.92273 5.19504 7.04778 4.89437L8.79859 0.684925Z"
                            fill=<?php if ($i < round($rating))
                              echo "#E6B93D";
                            else
                              echo "grey"; ?> />
                        </svg>
                      </div>

                      <?php
                    }
                    ?>
                  </div>
                </div>
                <div
                  class="text-center text-sys-light-on-surface text-body-md font-body-lg pt-1 leading-tight tracking-tight">
                  <?= $rating; ?>/5
                </div>
                <div
                  class="text-center text-sys-light-on-surface text-body-md font-body-lg pt-1 leading-tight tracking-tight">
                  (
                  <?= $ratingCount; ?> ratings )
                </div>
              </div>
              <div
                class="self-stretch text-sys-light-on-surface-variant text-body-lg text-body-lg line-clamp-2 leading-normal tracking-wide">
                <?= $course['tags']; ?>
              </div>
            </div>
            <div class="border-l h-full mx-4"></div>
            <div class=" w-8/12 flex-col justify-start items-start gap-4 inline-flex">
              <div class="self-stretch text-sys-light-on-surface-variant text-body-lg leading-normal tracking-wide">
                <?= $course['locations']; ?>
              </div>
              <div class="self-stretch"><span
                  class="text-sys-light-on-surface-variant text-body-lg  leading-normal tracking-wide">Participants:
                </span><span
                  class="text-sys-light-on-surface-variant font-bold  leading-normal tracking-wide">99/100</span>
              </div>
              <div class="self-stretch h-16 flex-col justify-start items-start flex">
                <div class="self-stretch text-sys-light-on-surface-variant text-body-lg  leading-normal tracking-wide">
                  Schedule:
                </div>
                <span>
                  <?php foreach ($schedule as $scheduleItem): ?>
                    <ul class="list-disc text-sys-light-on-surface-variant text-body-lg  leading-normal">
                      <?= $scheduleItem['day']; ?> at
                      <?php echo date('H:i', strtotime($scheduleItem['time'])); ?>
                    </ul>
                  <?php endforeach ?>
                </span>
              </div>
            </div>
          </div>

          <!-- Review -->
          <div class="w-full p-[48px] bg-white border flex border-gray-200 rounded-2xl shadow">
            <div class="w-full space-y-6">
              <h6 class="text-black text-headline-md font-bold  leading-9">Reviews</h6>
              <div class="w-full p-[16px] bg-sys-light-surface border-[1px] border-gray-300 rounded-xl space-y-2">
                <div class="flex gap-4 items-center">
                  <div
                    class="flex items-center justify-center w-10 h-10 rounded-full bg-light-primary text-white text-xl">
                    A</div>
                  <div>
                    <p class="font-semibold">Aan Bejir</p>
                    <div class="justify-start items-center gap-2 inline-flex">
                      <div class="w-24 flex-col justify-start items-center gap-1 inline-flex">
                        <div class="justify-start inline-flex">
                          <?php
                          for ($i = 0; $i < 5; $i++) {
                            ?>
                            <div class="w-5 h-5 px-1 flex-col justify-center items-center gap-1 inline-flex">
                              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                                <path
                                  d="M8.79859 0.684925C9.09523 -0.0282765 10.1056 -0.0282753 10.4022 0.684926L12.153 4.89437C12.2781 5.19504 12.5608 5.40047 12.8854 5.42649L17.4299 5.79082C18.1998 5.85255 18.512 6.81343 17.9254 7.31594L14.463 10.2818C14.2157 10.4937 14.1077 10.8261 14.1832 11.1428L15.2411 15.5774C15.4203 16.3288 14.6029 16.9227 13.9437 16.52L10.053 14.1436C9.77514 13.9739 9.42564 13.9739 9.14774 14.1436L5.25705 16.52C4.59786 16.9227 3.78049 16.3288 3.95971 15.5774L5.01753 11.1428C5.09309 10.8261 4.98508 10.4937 4.73778 10.2818L1.27538 7.31594C0.688756 6.81343 1.00097 5.85255 1.77093 5.79082L6.31538 5.42649C6.63997 5.40047 6.92273 5.19504 7.04778 4.89437L8.79859 0.684925Z"
                                  fill=<?php if ($i < round($personalRating)) echo "#E6B93D"; else echo "grey"; ?> />
                              </svg>
                            </div>

                            <?php
                          }
                          ?>
                        </div>
                      </div>
                      <div
                        class="text-center text-sys-light-on-surface text-body-md font-body-lg pt-1 leading-tight tracking-tight">
                        <?= $personalRating; ?>/5
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-sys-light-on-surface text-body-lg">
                  <?= $personalReview; ?>
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </div>

</body>