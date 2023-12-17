<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class=" min-h-screen container h-full">
  <div class="row">
    <div class='flex flex-col my-5 gap-24'>
      <h1 class="font-sans  text-4xl font-bold ">Schedule</h1>

      <div class="flex flex-row">
        <div class='flex w-fit outline outline-1 outline-sys-light-outline-variant rounded-full overflow-hidden gap-0 p-0'>
          <!-- if days then button bg-sys-light-secondary-container -->
          <?php if ($day == 3) : ?>
            <button class='bg-sys-light-secondary-container focus:bg-sys-light-secondary-container hover-text-purple-900 outline outline-1 outline-sys-light-outline-variant w-[100px] py-[10px] gap-[8px]'>
            <?php else : ?>
              <button class='hover:bg-sys-light-secondary-container focus:bg-sys-light-secondary-container hover-text-purple-900 outline outline-1 outline-sys-light-outline-variant w-[100px] py-[10px] gap-[8px]' onclick="window.location.href='/schedule/3'">
              <?php endif; ?>
              <label class='font-sans font-medium text-label-lg'>
                3 Days
              </label>
              </button>

              <?php if ($day == 5) : ?>
                <button class='bg-sys-light-secondary-container focus:bg-sys-light-secondary-container hover-text-purple-900 outline outline-1 outline-sys-light-outline-variant w-[100px] py-[10px] gap-[8px]'>
                <?php else : ?>
                  <button class='hover:bg-sys-light-secondary-container focus:bg-sys-light-secondary-container hover-text-purple-900 outline outline-1 outline-sys-light-outline-variant w-[100px] py-[10px] gap-[8px]' onclick="window.location.href='/schedule/5'">
                  <?php endif; ?>
                  <label class='font-sans font-medium text-label-lg'>
                    5 Days
                  </label>
                  </button>

                  <?php if ($day == 7) : ?>
                    <button class='bg-sys-light-secondary-container focus:bg-sys-light-secondary-container hover-text-purple-900 outline outline-1 outline-sys-light-outline-variant w-[100px] py-[10px] gap-[8px]'>
                    <?php else : ?>
                      <button class='hover:bg-sys-light-secondary-container focus:bg-sys-light-secondary-container hover-text-purple-900 outline outline-1 outline-sys-light-outline-variant w-[100px] py-[10px] gap-[8px]' onclick="window.location.href='/schedule/7'">
                      <?php endif; ?>
                      <label class='font-sans font-medium text-label-lg'>
                        7 Days
                      </label>
                      </button>

        </div>
      </div>

      <div class='flex flex-col w-full h-fit outline outline-1 outline-sys-light-outline-variant gap-24 p-[48px] rounded-medium'>

        <?php if (empty($schedule)) : ?>
          <div class='flex flex-col w-full h-fit bg-sys-light-surface p-[16px] gap-[8px] outline outline-1 outline-sys-light-outline-variant rounded-2xl'>
            <h2 class='font-sans font-medium text-title-md'>No Schedule Available</h2>
          </div>
        <?php endif; ?>
        <?php for ($i = 0; $i < count($schedule); $i++) : ?>
          <div class='flex flex-col gap-24'>
            <div class='flex flex-row w-full items-center'>

              <?php if ($i == 0) : ?>
                <div class='bg-sys-light-primary hover-text-white w-fit px-[24px] py-[10px] gap-[8px] rounded-full'>
                  <label class='font-sans font-medium text-sm text-white items-center'>
                    <?= $schedule[$i]['date'] ?>
                  </label>
                </div>
                <div class='flex-grow border-2 border-sys-light-primary rounded-r-full'></div>
              <?php else : ?>
                <div class='bg-slate-300 hover-text-white w-fit px-[24px] py-[10px] gap-[8px] rounded-full'>
                  <label class='font-sans font-medium text-sm text-white items-center'>
                    <?= $schedule[$i]['date'] ?>
                  </label>
                </div>
                <div class='flex-grow border-2 border-slate-300 rounded-r-full'></div>
              <?php endif; ?>
            </div>
            <div class='flex flex-col pl-[48px] gap-12'>
              <div class='flex flex-col w-full h-fit bg-sys-light-surface p-[16px] gap-[8px] outline outline-1 outline-sys-light-outline-variant rounded-2xl'>
                <h2 class='font-sans font-medium text-title-md'><?= $schedule[$i]['name'] ?></h2>
                <p class='font-sans text-body-md leading-none'><?= $schedule[$i]['time'] ?> at <?= $schedule[$i]['locations'] ?></p>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</div>