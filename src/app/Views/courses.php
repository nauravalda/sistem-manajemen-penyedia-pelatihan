<body>
  <div class="h-full bg-white">
    <section id="dashboardReview" class="pl-20 py-20 flex items-center justify-center">
      <div class="container">

        <div class="flex w-full h-full min-h-screen flex-col justify-start items-start gap-24 ">
          <div class="text-black text-display-md font-medium">Your Course</div>



          <?php if (!empty($course) && is_array($course)): ?>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-24">
              <?php foreach ($course as $courseItem): ?>
                <div class="w-full h-full bg-sys-light-surface rounded-xl justify-start items-start inline-flex">
                  <div
                    class="w-full h-full rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="self-stretch grow shrink basis-0 flex-col justify-start items-center inline-flex">
                      <div class="self-stretch h-16 pl-6 pr-1 py-3 justify-start items-center inline-flex">
                        <div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex">
                          <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                            <div
                              class="self-stretch font-medium text-sys-light-on-surface text-title-md font-sans  leading-normal tracking-tight">
                              <?= $courseItem['provider_name']; ?>
                            </div>
                            <div class="text-sys-light-on-surface text-body-md font-sans font-normal  leading-tight tracking-tight">
                              Bandung</div>
                          </div>
                        </div>
                      </div>
                      <?php if ($courseItem['url_img'] != null): ?>
                        <div class="w-full h-40  rounded-lg justify-center items-center inline-flex overflow-hidden">
                          <img class="w-full h-auto" src="<?= $courseItem['url_img']; ?>" />
                        </div>
                      <?php else: ?>
                        <div class="w-full h-40  rounded-lg justify-center items-center inline-flex overflow-hidden">
                          <img class="w-full h-auto" src="assets/Media.png" />
                        </div>
                      <?php endif ?>
                      <div class="self-stretch h-fit p-4 flex-col justify-start items-start gap-24 flex">
                        <div class="self-stretch h-fit flex-col justify-start items-start gap-3 flex">
                          <div class="self-stretch h-fit flex-col justify-start items-start flex">
                            <div class="w-80 text-sys-light-on-surface text-title-md font-sans font-bold leading-normal tracking-wide">
                              <?= $courseItem['name']; ?>
                            </div>
                          </div>
                          <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
                            <div class="w-fit px-4 py-1.5 justify-center items-center gap-2 flex">
                              <div
                                class="ext-center text-light-primary text-label-lg font-medium  leading-tight tracking-normal">
                                Rp
                                <?= number_format($courseItem['price'], 0, ',', '.'); ?>
                              </div>
                            </div>
                          </div>
                          <div
                            class="self-stretch line-clamp-2 text-sys-light-on-surface-variant text-body-lg leading-normal tracking-tight">
                            <?= $courseItem['desc'] ?>
                          </div>
                        </div>
                        <div class="self-stretch justify-end items-start gap-2 inline-flex">
                          <a class="h-10 rounded-full border border-light-primary flex-col justify-center items-center gap-2 inline-flex"
                            href="/courses/<?= $courseItem['id'] ?>/edit">
                            <div
                              class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                              <div
                                class="text-center text-light-primary text-sm font-sans font-medium  leading-tight tracking-tight">
                                Edit</div>
                            </div>
                          </a>
                          <a class="h-10 bg-light-primary rounded-full flex-col justify-center items-center gap-2 inline-flex"
                            href="/courses/<?= $courseItem['id'] ?>">
                            <div
                              class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                              <div
                                class="text-center text-white text-sm font-sans font-medium  leading-tight tracking-tight">
                                View</div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endforeach ?>
            </div>
          <?php else: ?>
            <h3>No Courses</h3>
            <p>Unable to find any courses for you.</p>
          <?php endif ?>



        </div>
      </div>
    </section>
  </div>
</body>