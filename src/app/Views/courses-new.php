<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container h-full">
  <div class="row">
    <div class='flex flex-col my-5 gap-24 justify-end'>
      <!-- Image Header Input -->
      <div
        class='flex flex-row w-full h-fit outline outline-1 outline-sys-light-outline-variant gap-[10px] p-[48px] rounded-medium'>
        <div class='flex flex-col w-full h-fit gap-3'>
          <h1 class='font-sans font-bold text-headline-md'>Header Image</h1>
          <p class='font-sans text-body-lg'>Selected image: <span
              class='font-sans font-bold text-body-lg'>image.jpg</span></p>
        </div>
        <button
          class='bg-sys-dark-primary hover:bg-ref-primary-primary70 text-sys-dark-on-primary font-medium h-fit px-8 py-2.5 rounded-full'>Open</button>
      </div>

      <!-- General Informations -->
      <div
        class='flex flex-col w-full h-fit outline outline-1 outline-sys-light-outline-variant gap-24 p-[48px] rounded-medium'>
        <h1 class='font-sans font-bold text-headline-md leading-loose'>General Informations</h1>
        <!-- Course Name -->
        <div class="relative h-14 w-full">
          <label for="courseName"
            class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Course
            Name</label>
          <input type="text" id="courseName"
            class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-fit font-sans bg-white"
            placeholder="Course Name" autocomplete="off" />
        </div>
        <!-- Price with Prefix Rp-->
        <div class="relative h-14 w-full">
          <label for="price"
            class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Price</label>
          <input type="number" id="price"
            class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-fit font-sans bg-white"
            placeholder="Price in Rupiah (0 - 1000000)" autocomplete="off" />
        </div>
        <div class='flex flex-row gap-24 h-fit w-full'>
          <!-- Textarea of Tags and Locations -->
          <!-- Tags -->
          <div class="relative h-fit w-full">
            <label for="tags"
              class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Tags</label>
            <textarea type="text" id="tags"
              class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-[128px] resize-none font-sans bg-white"
              placeholder="Tags" autocomplete="off"></textarea>
          </div>
          <!-- Locations -->
          <div class="relative h-fit w-full">
            <label for="locations"
              class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Locations</label>
            <textarea type="text" id="locations"
              class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-[128px] resize-none font-sans bg-white"
              placeholder="Locations" autocomplete="off"></textarea>
          </div>
        </div>

      </div>

      <!-- Schedule -->
      <div
        class='flex flex-col w-full h-fit outline outline-1 outline-sys-light-outline-variant gap-24 p-[48px] rounded-medium'>
        <div class='flex flex-row w-full h-fit justify-between'>
          <h1 class='font-sans font-bold text-headline-md'>Schedule</h1>
          <button
            class='bg-sys-dark-primary hover:bg-ref-primary-primary70 text-sys-dark-on-primary font-medium h-fit px-8 py-2.5 rounded-full'>Add</button>
        </div>

        <!-- Schedule List -->
        <div
          class='flex flex-row w-full h-fit items-center bg-sys-light-surface p-[16px] gap-[8px] outline outline-1 outline-sys-light-outline-variant rounded-2xl'>
          <!-- Date -->
          <div class="relative h-14 w-full">
            <label for="date"
              class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-sys-light-surface w-fit">Date</label>
            <input type="date" id="date"
              class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-full resize-none font-sans bg-sys-light-surface"
              placeholder="Select date" autocomplete="off"></textarea>
          </div>
          <!-- Time -->
          <div class="relative h-14 w-full">
            <label for="time"
              class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-sys-light-surface w-fit">Time</label>
            <input type="time" id="time"
              class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-full resize-none font-sans bg-sys-light-surface"
              placeholder="Select time" autocomplete="off"></textarea>
          </div>
          <!-- Repeat Weekly For -->
          <div class="relative h-14 w-full">
            <label for="repeatWeeklyFor"
              class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-sys-light-surface w-fit">Repeat
              weekly for</label>
            <input type="number" id="repeatWeeklyFor"
              class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-full resize-none font-sans bg-sys-light-surface"
              placeholder="XX times" value=1 autocomplete="off"></textarea>
          </div>
          <!-- Delete Button -->
          <button
            class='bg-sys-light-error hover:bg-ref-error-error30 text-sys-light-on-error font-medium h-fit px-8 py-2.5 rounded-full'>Delete</button>
        </div>
      </div>

      <!-- Course Details -->
      <div
        class='flex flex-col w-full h-fit outline outline-1 outline-sys-light-outline-variant gap-24 p-[48px] rounded-medium'>
        <h1 class='font-sans font-bold text-headline-md'>Course Details</h1>
        <!-- What you will learn -->
        <div class="relative h-fit w-full">
          <label for="whatYouWillLearn"
            class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">What
            you will learn</label>
          <textarea type="text" id="whatYouWillLearn"
            class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 min-h-[240px] h-fit resize-none font-sans bg-white"
            placeholder="What you will learn" autocomplete="off"></textarea>
        </div>

        <!-- Course Content -->
        <div class="relative h-fit w-full">
          <label for="courseContent"
            class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Course
            Content</label>
          <textarea type="text" id="courseContent"
            class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 min-h-[320px] h-fit resize-none font-sans bg-white"
            placeholder="Course Content" autocomplete="off"></textarea>
        </div>

        <!-- Full Description -->
        <div class="relative h-fit w-full">
          <label for="fullDescription"
            class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Full
            Description</label>
          <textarea type="text" id="description"
            class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 min-h-[320px] h-fit resize-none font-sans bg-white"
            placeholder="Full Description" autocomplete="off"></textarea>
        </div>

      </div>

      <!-- Save -->
      <div class='flex flex-row gap-12 w-full justify-end'>
        <button
        class='outline outline-1 outline-sys-light-outline-variant hover:bg-sys-light-surface hover:text-sys-light-on-surface-variant font-medium h-fit px-8 py-2.5 rounded-full'>Cancel</button>
        <button
          class='bg-sys-light-primary hover:bg-ref-primary-primary30 text-sys-light-on-primary font-medium h-fit px-8 py-2.5 rounded-full'>Save</button>
      </div>

    </div>
  </div>
</div>