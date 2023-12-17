<div class="pl-24 h-full w-full p-16 py-10 flex-col justify-start items-center gap-6 inline-flex">
  <div class="self-stretch h-10 flex-col justify-center items-start gap-6 flex">
    <a class="w-20 rounded-full flex-col justify-center items-center gap-3 flex"href="/courses">
      <div class="self-stretch grow shrink basis-0 pl-3 pr-4 py-2.5 justify-center items-center gap-2 inline-flex">
        <div class="w-5 h-5 relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M15 8.25H5.8725L10.065 4.0575L9 3L3 9L9 15L10.0575 13.9425L5.8725 9.75H15V8.25Z" fill="#6750A4"/>
</svg>
        </div>
        <div class="text-center text-light-primary text-base font-medium  leading-tight tracking-tight">Back</div>
      </div>
</a>
  </div>
  <!-- <img class="self-stretch h-72 px-44 rounded-3xl" src="/assets/Media.png" />  -->
  <div class=" self-stretch justify-start items-start gap-12 inline-flex">
    <div class="bg-white grow shrink basis-0 self-stretch p-10 rounded-3xl border gap-8 border-stone-300 justify-start items-start flex">
      <div class="w-full grow shrink flex-col justify-start items-start gap-6 inline-flex">
        <div class="self-stretch text-black text-3xl font-bold leading-9"><?= $course['name']; ?></div>
        <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
          <div class="w-36 px-4 py-1.5 justify-center items-center gap-2 flex">
            <div class="text-center text-slate-500 text-sm font-medium  leading-tight tracking-tight">Rp <?= number_format($course['price'],0,',','.'); ?></div>
          </div>
        </div>
        <div class="self-stretch text-zinc-700 text-base font-normal  leading-normal tracking-wide"><?= $course['desc']; ?></div>
        <div class="justify-start items-start gap-2 inline-flex">
          <div class="w-24 flex-col justify-start items-center gap-1 inline-flex">
            <div class="justify-start inline-flex">
              <?php
              $x = floor(4.95);
              for ($i = 0; $i < $x; $i++) {
              ?>
                <div class="w-5 h-5 px-1 flex-col justify-center items-center gap-1 inline-flex">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                    <path d="M8.79859 0.684925C9.09523 -0.0282765 10.1056 -0.0282753 10.4022 0.684926L12.153 4.89437C12.2781 5.19504 12.5608 5.40047 12.8854 5.42649L17.4299 5.79082C18.1998 5.85255 18.512 6.81343 17.9254 7.31594L14.463 10.2818C14.2157 10.4937 14.1077 10.8261 14.1832 11.1428L15.2411 15.5774C15.4203 16.3288 14.6029 16.9227 13.9437 16.52L10.053 14.1436C9.77514 13.9739 9.42564 13.9739 9.14774 14.1436L5.25705 16.52C4.59786 16.9227 3.78049 16.3288 3.95971 15.5774L5.01753 11.1428C5.09309 10.8261 4.98508 10.4937 4.73778 10.2818L1.27538 7.31594C0.688756 6.81343 1.00097 5.85255 1.77093 5.79082L6.31538 5.42649C6.63997 5.40047 6.92273 5.19504 7.04778 4.89437L8.79859 0.684925Z" fill="#E6B93D" />
                  </svg>
                </div>
              
              <?php
              }
              ?>
              <?php
              $x = floor(4.95);
              for ($i = 0; $i < 5 - $x; $i++) {
              ?>
                <div class="w-5 h-5 px-1 flex-col justify-center items-center gap-1 inline-flex">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                    <path d="M8.79859 0.684925C9.09523 -0.0282765 10.1056 -0.0282753 10.4022 0.684926L12.153 4.89437C12.2781 5.19504 12.5608 5.40047 12.8854 5.42649L17.4299 5.79082C18.1998 5.85255 18.512 6.81343 17.9254 7.31594L14.463 10.2818C14.2157 10.4937 14.1077 10.8261 14.1832 11.1428L15.2411 15.5774C15.4203 16.3288 14.6029 16.9227 13.9437 16.52L10.053 14.1436C9.77514 13.9739 9.42564 13.9739 9.14774 14.1436L5.25705 16.52C4.59786 16.9227 3.78049 16.3288 3.95971 15.5774L5.01753 11.1428C5.09309 10.8261 4.98508 10.4937 4.73778 10.2818L1.27538 7.31594C0.688756 6.81343 1.00097 5.85255 1.77093 5.79082L6.31538 5.42649C6.63997 5.40047 6.92273 5.19504 7.04778 4.89437L8.79859 0.684925Z" fill="grey" />
                  </svg>
                </div>
              
              <?php
              }
              ?>
            </div>
          </div>
          <div class="text-center text-zinc-900 text-sm font-normal pt-1 leading-tight tracking-tight">4.95 / 5</div>
          <div class="text-center text-zinc-900 text-sm font-normal pt-1 leading-tight tracking-tight">(99 rating)</div>
        </div>
        <div class="self-stretch text-zinc-700 text-base font-normal line-clamp-2 leading-normal tracking-wide"><?= $course['tags']; ?></div>
      </div>
      <div class="border-l h-full mx-4"></div>
      <div class=" w-8/12 flex-col justify-start items-start gap-4 inline-flex">
        <div class="self-stretch text-zinc-700 text-base font-normal leading-normal tracking-wide"><?= $course['locations']; ?></div>
        <div class="self-stretch"><span style="text-zinc-700 text-base font-normal  leading-normal tracking-wide">Participants: </span><span style="text-zinc-700 text-base font-bold  leading-normal tracking-wide">99/100</span></div>
        <div class="self-stretch h-16 flex-col justify-start items-start flex">
          <div class="self-stretch text-zinc-700 text-base font-normal  leading-normal tracking-wide">Schedule:</div>
          <div class="self-stretch text-zinc-700 text-base font-normal  leading-normal tracking-wide">Kamis, at 13.00<br />Jumat, at 14.00</div>
        </div>
      </div>
    </div>
    <div class="self-stretch p-12 bg-white rounded-3xl border border-stone-300 flex-col justify-start items-start gap-6 inline-flex">
      <div class="text-black text-3xl font-bold  leading-9">Upcoming Activities</div>
      <div class="flex-col justify-start items-start gap-3 flex">
        <?php if (empty($schedule)) : ?>
          <div class="self-stretch text-zinc-900 text-base font-normal  leading-normal tracking-tight">No upcoming activities</div>
        <?php else : ?>
        <?php foreach ($schedule as $scheduleItem) : ?>
          <div class="w-full h-full rounded-xl justify-start items-start inline-flex">
            <div class="w-full h-full bg-fuchsia-50 rounded-xl border border-stone-300 justify-center items-center flex">
              <div class="w-96 h-full p-2.5">
                <div class="self-stretch text-zinc-900 text-base font-bold  leading-normal tracking-tight">Pertemuan <?= $i ?></div>
                <div class="self-stretch text-zinc-900 text-sm font-normal  leading-normal tracking-normal"><?= date("D, d M Y | h:i A", strtotime($scheduleItem['datetime'])) ?></div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
        <?php endif ?>        
      </div>
    </div>
  </div>
  <div class="self-stretch h-80 p-12 bg-white rounded-3xl border border-stone-300 flex-col justify-start items-start gap-6 flex">
    <div class="w-64 text-black text-3xl font-bold  leading-9">Featured Review</div>
    <div class="self-stretch rounded-xl justify-start items-start inline-flex">
      <div class="grow shrink basis-0 self-stretch p-4 bg-fuchsia-50 rounded-xl border border-stone-300 flex-col justify-start items-start gap-4 inline-flex">
        <div class="w-80 justify-start items-center gap-4 inline-flex">
          <div class="w-10 h-10 relative">
            <div class="w-10 h-10 left-0 top-0  bg-slate-500 rounded-full"></div>
            <div class="w-10 h-10 left-0 top-0  text-center text-fuchsia-50 text-base font-medium  leading-normal tracking-tight">A</div>
          </div>
          <div class="grow shrink basis-0 flex-col justify-start items-start gap-1 inline-flex">
            <div class="self-stretch text-zinc-900 text-base font-medium  leading-normal tracking-tight">Aan Bejir</div>
            <div class="w-32 justify-start items-start gap-2 inline-flex">
              <div class="w-24 h-5 flex-col justify-start items-center gap-1 inline-flex">
                <div class="justify-start items-center inline-flex">
                <?php
              $x = floor(5);
              for ($i = 0; $i < $x; $i++) {
              ?>
                <div class="w-5 h-5 px-1 flex-col justify-center items-center gap-1 inline-flex">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                    <path d="M8.79859 0.684925C9.09523 -0.0282765 10.1056 -0.0282753 10.4022 0.684926L12.153 4.89437C12.2781 5.19504 12.5608 5.40047 12.8854 5.42649L17.4299 5.79082C18.1998 5.85255 18.512 6.81343 17.9254 7.31594L14.463 10.2818C14.2157 10.4937 14.1077 10.8261 14.1832 11.1428L15.2411 15.5774C15.4203 16.3288 14.6029 16.9227 13.9437 16.52L10.053 14.1436C9.77514 13.9739 9.42564 13.9739 9.14774 14.1436L5.25705 16.52C4.59786 16.9227 3.78049 16.3288 3.95971 15.5774L5.01753 11.1428C5.09309 10.8261 4.98508 10.4937 4.73778 10.2818L1.27538 7.31594C0.688756 6.81343 1.00097 5.85255 1.77093 5.79082L6.31538 5.42649C6.63997 5.40047 6.92273 5.19504 7.04778 4.89437L8.79859 0.684925Z" fill="#E6B93D" />
                  </svg>
                </div>
              
              <?php
              }
              ?>
              <?php
              $x = floor(5);
              for ($i = 0; $i < 5 - $x; $i++) {
              ?>
                <div class="w-5 h-5 px-1 flex-col justify-center items-center gap-1 inline-flex">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                    <path d="M8.79859 0.684925C9.09523 -0.0282765 10.1056 -0.0282753 10.4022 0.684926L12.153 4.89437C12.2781 5.19504 12.5608 5.40047 12.8854 5.42649L17.4299 5.79082C18.1998 5.85255 18.512 6.81343 17.9254 7.31594L14.463 10.2818C14.2157 10.4937 14.1077 10.8261 14.1832 11.1428L15.2411 15.5774C15.4203 16.3288 14.6029 16.9227 13.9437 16.52L10.053 14.1436C9.77514 13.9739 9.42564 13.9739 9.14774 14.1436L5.25705 16.52C4.59786 16.9227 3.78049 16.3288 3.95971 15.5774L5.01753 11.1428C5.09309 10.8261 4.98508 10.4937 4.73778 10.2818L1.27538 7.31594C0.688756 6.81343 1.00097 5.85255 1.77093 5.79082L6.31538 5.42649C6.63997 5.40047 6.92273 5.19504 7.04778 4.89437L8.79859 0.684925Z" fill="grey" />
                  </svg>
                </div>
              
              <?php
              }
              ?>
                </div>
              </div>
              <div class="text-center text-zinc-900 text-sm font-normal pt-1 leading-tight tracking-tight">5/5</div>
            </div>
          </div>
        </div>
        <div class="self-stretch text-zinc-900 text-sm font-normal  leading-tight tracking-tight">Everything on this course is a goldmine except for the GUI since it's specific for Jupyter Notebooks and it's missing the video for GUI Events. Still it was a nice introduction to GUI. Don't let that disappoint you though. THIS IS A MUST HAVE COURSE. I have already recommended it to few people and always will. Do yourself a favor and do this course if you want to learn Python 3. Thank you so much for this course, Jose-sensei!!</div>
      </div>
    </div>
  </div>
  <div class="self-stretch justify-center items-start gap-6 inline-flex">
    <div class="grow shrink basis-0 self-stretch p-12 bg-white rounded-3xl border border-stone-300 flex-col justify-start items-start gap-2.5 inline-flex">
      <div class="w-64 text-black text-3xl font-bold  leading-9">What You'll Learn</div>
      <div class="self-stretch text-zinc-700 text-base font-normal  leading-normal tracking-wide"><?= $course['what_you_will_learn']; ?></div>
    </div>
    <div class="grow shrink basis-0 self-stretch p-12 bg-white rounded-3xl border border-stone-300 flex-col justify-start items-start gap-2.5 inline-flex">
      <div class="w-64 text-black text-3xl font-bold  leading-9">Course Content</div>
      <div class="self-stretch">
    <span style="text-zinc-700 text-base font-normal leading-normal tracking-wide">
        <?php
        // Memecah string berdasarkan nomor urutan
        $parts = preg_split('/(\d+\. )/', $course['course_content'], -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

// Menampilkan setiap elemen dalam format HTML dengan nomor urutan
echo '<ol>';
for ($i = 0; $i < count($parts); $i += 2) {
    echo '<li>' . $parts[$i] . $parts[$i + 1] . '</li>';
}
echo '</ol>';
        ?>
    </span>
</div>

    </div>
  </div>
  <div class="self-stretch h-full p-12 bg-white rounded-3xl border border-stone-300 flex-col justify-start items-start gap-6 flex">
    <div class="w-64 text-black text-3xl font-bold  leading-9">Description</div>
    <div class="self-stretch"><span style="text-zinc-700 text-base font-normal  leading-normal tracking-wide"><?= $course['desc']; ?></div>
  </div>
</div>