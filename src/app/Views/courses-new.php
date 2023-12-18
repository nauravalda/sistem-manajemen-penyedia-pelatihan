<body>
  <div class="h-full bg-white">
    <section id="dashboardReview" class="pl-20 py-20 flex items-center justify-center">
      <div class="container">
        <div class=" min-h-screen container h-full">
          <div class="flex flex-col gap-24">
            <form id="newCourseForm" action="/courses/new" method="POST" enctype="multipart/form-data">
              <div class='flex flex-col my-5 gap-24 justify-end'>
                <!-- Image Header Input -->
                <div
                  class='flex flex flex-col w-full h-fit gap-3 outline outline-1 outline-sys-light-outline-variant p-[48px] rounded-medium'>
                  <h1 class='font-sans font-bold text-headline-md leading-loose'>Image Header</h1>
                  <div class="relative h-14 w-full">
                    <label for="image"
                      class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Image</label>
                    <input type="file" id="image" name="userfile" class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-fit font-sans bg-white
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-sans file:font-medium file:text-sys-dark-on-primary
                    file:bg-sys-dark-primary file:outline-none file:cursor-pointer file:shadow-sm file:transition-colors file:duration-200 file:ease-in-out
                    file:placeholder-sys-dark-on-primary file:placeholder-opacity-50 file:placeholder-shown:opacity-100 file:placeholder-shown:transition-opacity file:placeholder-shown:duration-200 file:placeholder-shown:ease-in-out
                    file:hover:bg-ref-primary-primary70" placeholder="Image" autocomplete="off" accept="image/*" />
                  </div>
                </div>

                <!-- General Informations -->
                <div
                  class='flex flex-col w-full h-fit outline outline-1 outline-sys-light-outline-variant gap-24 p-[48px] rounded-medium'>
                  <h1 class='font-sans font-bold text-headline-md leading-loose'>General Informations</h1>
                  <!-- Course Name -->
                  <div class="relative h-14 w-full">
                    <label for="course_name"
                      class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Course
                      Name</label>
                    <input type="text" id="course_name" name="course_name"
                      class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-fit font-sans bg-white"
                      placeholder="Course Name" autocomplete="off" />
                  </div>
                  <!-- Price with Prefix Rp-->
                  <div class="relative h-14 w-full">
                    <label for="price"
                      class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Price</label>
                    <input type="number" id="price" name="price"
                      class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-fit font-sans bg-white"
                      placeholder="Price in Rupiah (0 - 1000000)" autocomplete="off" />
                  </div>
                  <div class='flex flex-row gap-24 h-fit w-full'>
                    <!-- Textarea of Tags and Locations -->
                    <!-- Tags -->
                    <div class="relative h-fit w-full">
                      <label for="tags"
                        class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Tags</label>
                      <textarea type="text" id="tags" name="tags"
                        class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-[128px] resize-none font-sans bg-white"
                        placeholder="Tags" autocomplete="off"></textarea>
                    </div>
                    <!-- Locations -->
                    <div class="relative h-fit w-full">
                      <label for="locations"
                        class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Locations</label>
                      <textarea type="text" id="locations" name="locations"
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
                    <button type="button" id="scheduleAddButton" onclick="addScheduleEntry()"
                      class='bg-sys-dark-primary hover:bg-ref-primary-primary70 text-sys-dark-on-primary font-medium h-fit px-8 py-2.5 rounded-full'>Add</button>
                  </div>

                  <!-- Schedule List -->
                  <div id="scheduleEntries" class='flex flex-col gap-24'>
                    <!-- Schedule input fields will be added here dynamically -->
                  </div>
                </div>

                <!-- Course Details -->
                <div
                  class='flex flex-col w-full h-fit outline outline-1 outline-sys-light-outline-variant gap-24 p-[48px] rounded-medium'>
                  <h1 class='font-sans font-bold text-headline-md'>Course Details</h1>
                  <!-- What you will learn -->
                  <div class="relative h-fit w-full">
                    <label for="what_you_will_learn"
                      class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">What
                      you will learn</label>
                    <textarea type="text" id="what_you_will_learn" name="what_you_will_learn"
                      class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 min-h-[240px] h-fit resize-none font-sans bg-white"
                      placeholder="What you will learn" autocomplete="off"></textarea>
                  </div>

                  <!-- Course Content -->
                  <div class="relative h-fit w-full">
                    <label for="course_content"
                      class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Course
                      Content</label>
                    <textarea type="text" id="course_content" name="course_content"
                      class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 min-h-[320px] h-fit resize-none font-sans bg-white"
                      placeholder="Course Content" autocomplete="off"></textarea>
                  </div>

                  <!-- Full Description -->
                  <div class="relative h-fit w-full">
                    <label for="desc"
                      class="absolute -top-[5px] left-4 px-1 font-sans text-sys-light-on-surface-variant leading-none bg-white w-fit">Full
                      Description</label>
                    <textarea type="text" id="desc" name="desc"
                      class="border border-sys-light-on-surface-variant rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 min-h-[320px] h-fit resize-none font-sans bg-white"
                      placeholder="Full Description" autocomplete="off"></textarea>
                  </div>

                </div>

                <!-- Save -->
                <div class='flex flex-row gap-24 h-fit w-full justify-end'>
                  <button type="button" onclick="onCancel()"
                    class='outline outline-1 outline-sys-light-outline-variant hover:bg-sys-light-surface hover:text-sys-light-on-surface-variant font-medium h-fit px-8 py-2.5 rounded-full'>Cancel</button>
                  <button type="button" onclick="onSave()" 
                    class='bg-sys-light-primary hover:bg-ref-primary-primary30 text-sys-light-on-primary font-medium h-fit px-8 py-2.5 rounded-full disabled:opacity-50 disabled:cursor-not-allowed'>Save</button>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

<!-- Confirmation modal -->
<div id="confirmationModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
  <div class="fixed inset-0 bg-black bg-opacity-20" id="confirmationModalBackdrop"
    onclick="closeModal()"></div>
  <div class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-xl">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
          <h3 class="text-lg leading-6 font-medium" id="modalTitle">$modalTitle</h3>
          <div class="mt-2">
            <p class="text-sm" id="modalText">$modalText</p>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-12">
        <button id="confirmationButton" type="button" onclick="modalAction()"
          class="font-medium h-fit px-8 py-2.5 rounded-full">
          <!-- Button text will be updated dynamically -->
        </button>
        <button onclick="closeModal()" type="button"
          class="outline outline-1 outline-sys-light-outline-variant hover:bg-sys-light-surface hover:text-sys-light-on-surface-variant font-medium h-fit px-8 py-2.5 rounded-full">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Function to add a new schedule entry
  function addScheduleEntry() {
    var scheduleEntries = document.getElementById('scheduleEntries');
    var lastScheduleEntry = scheduleEntries.lastElementChild;


    if (lastScheduleEntry !== null) {
      // Check if the last schedule entry is filled
      var inputs = lastScheduleEntry.querySelectorAll('input[type="date"], input[type="time"], input[type="number"]');
      var isFilled = Array.from(inputs).every(input => input.value.trim() !== '');
      if (!isFilled) {
        alert('Please fill the last schedule entry first!');
        return;
      }
    }
    // Create schedule entry elements
    var scheduleEntry = document.createElement('div');
    scheduleEntry.classList.add('schedule-entry', 'flex', 'items-center', 'bg-sys-light-surface', 'p-[16px]', 'gap-[8px]', 'outline', 'outline-1', 'outline-sys-light-outline-variant', 'rounded-2xl');

    var dateInput = document.createElement('input');
    dateInput.type = 'date';
    dateInput.name = 'dates[]';
    dateInput.classList.add('h-14', 'border', 'border-sys-light-on-surface-variant', 'rounded-md', 'focus:border-gray-500', 'focus:shadow-sm', 'w-full', 'p-3', 'h-full', 'resize-none', 'font-sans', 'bg-sys-light-surface', 'mr-2');

    var timeInput = document.createElement('input');
    timeInput.type = 'time';
    timeInput.name = 'times[]';
    timeInput.classList.add('h-14', 'border', 'border-sys-light-on-surface-variant', 'rounded-md', 'focus:border-gray-500', 'focus:shadow-sm', 'w-full', 'p-3', 'h-full', 'resize-none', 'font-sans', 'bg-sys-light-surface', 'mr-2');

    var repeatInput = document.createElement('input');
    repeatInput.type = 'number';
    repeatInput.name = 'repeatNums[]';
    repeatInput.classList.add('h-14', 'border', 'border-sys-light-on-surface-variant', 'rounded-md', 'focus:border-gray-500', 'focus:shadow-sm', 'w-full', 'p-3', 'h-full', 'resize-none', 'font-sans', 'bg-sys-light-surface', 'mr-2');

    var deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.type = 'button';
    deleteButton.classList.add('bg-sys-light-error', 'hover:bg-ref-error-error30', 'text-sys-light-on-error', 'font-medium', 'h-fit', 'px-8', 'py-2.5', 'rounded-full');
    deleteButton.onclick = function () {
      scheduleEntries.removeChild(scheduleEntry);
      validateSchedule();
    };

    // Append elements to the schedule entry
    scheduleEntry.appendChild(dateInput);
    scheduleEntry.appendChild(timeInput);
    scheduleEntry.appendChild(repeatInput);
    scheduleEntry.appendChild(deleteButton);

    // Append the schedule entry to the schedule entries section
    scheduleEntries.appendChild(scheduleEntry);
  }

  function openModal(title, text, buttonType, buttonText) {
    <?php
      log_message('debug', 'CoursesNew::openModal() | Modal opened');
    ?>
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalText').innerText = text;
    var confirmationButton = document.getElementById('confirmationButton');
    confirmationButton.innerText = buttonText;
    <?php
      log_message('debug', 'CoursesNew::openModal() | Choosing button color');
    ?>
    
    if (buttonType === 'delete') {
      confirmationButton.classList.add('bg-sys-light-error', 'hover:bg-ref-error-error30', 'text-sys-light-on-error');
    } else if (buttonType === 'save') {
      confirmationButton.classList.add('bg-sys-light-primary', 'hover:bg-ref-primary-primary30', 'text-sys-light-on-primary');
    }

    document.getElementById('confirmationModal').classList.remove('hidden');
    <?php
      log_message('debug', 'CoursesNew::openModal() | Modal opened');
    ?>
  }
  
  function closeModal() {
    document.getElementById('confirmationModal').classList.add('hidden');
    var confirmationButton = document.getElementById('confirmationButton');
    confirmationButton.classList.remove('bg-sys-light-error', 'hover:bg-ref-error-error30', 'text-sys-light-on-error');
    confirmationButton.classList.remove('bg-sys-light-primary', 'hover:bg-ref-primary-primary30', 'text-sys-light-on-primary');
  }

  function modalAction() {
    var confirmationButton = document.getElementById('confirmationButton');
    if (confirmationButton.innerText === 'Save') {
      document.getElementById('newCourseForm').submit();
    } else if (confirmationButton.innerText === 'Go Back') {
      window.location.href = '/courses';
    }
  }
  
  function onSave() {
    <?php
      log_message('debug', 'CoursesNew::onSave() | Running validation');
    ?>
    // check if there is an empty input
    var form = document.getElementById("newCourseForm");
    var inputs = form.querySelectorAll("input, textarea");

    // console.log(inputs);

    for (var i = 0; i < inputs.length; i++) {
      var inputType = inputs[i].type.toLowerCase();
      if (
        (inputType === "text" || inputType === "number" || inputType === "date" || inputType === "time" || inputs[i].nodeName.toLowerCase() === "textarea") &&
        inputs[i].value.trim() === ""
      ) {
        inputs[i].scrollIntoView({ behavior: "smooth", block: "center" });
        inputs[i].focus();
        return;
      }
    }

    // check if there is at least one schedule entry
    var scheduleEntries = document.getElementById('scheduleEntries');
    var scheduleEntry = scheduleEntries.lastElementChild;
    if (scheduleEntry === null) {
      var scheduleAddButton = document.getElementById('scheduleAddButton');
      scheduleAddButton.scrollIntoView({ behavior: "smooth", block: "center" });
      return;
    }

    <?php
      log_message('debug', 'CoursesNew::onSave() | Proceeding to modal');
    ?>
    
    // opening confirmation modal
    openModal('Simpan?', 'Apakah Anda yakin ingin menyimpan kursus ini?', 'save', 'Save');
  }

  function onCancel() {
    // check if there is a filled input
    var form = document.getElementById("newCourseForm");
    var inputs = form.querySelectorAll("input, textarea");
    var isFilled = false;

    for (var i = 0; i < inputs.length; i++) {
      var inputType = inputs[i].type.toLowerCase();
      if (
        (inputType === "text" || inputType === "number" || inputType === "date" || inputType === "time" || inputs[i].nodeName.toLowerCase() === "textarea") &&
        inputs[i].value.trim() !== ""
      ) {
        isFilled = true;
        openModal('Batal?', 'Apakah Anda yakin ingin membatalkan pembuatan kursus ini?', 'delete', 'Go Back');
      }
    }

    if (!isFilled) {
      window.location.href = '/courses';
    }
  }

</script>