<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Edutrack</title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico">
  <link rel="stylesheet" href="<?= base_url() ?>/css/app.css?v=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>

<body>

  <div class="w-full h-fit min-h-screen p-24 px-44 bg-fuchsia-50 justify-start items-start inline-flex">
    <div class="flex h-fit w-full rounded-3xl shadow-2xl items-center overflow-hidden bg-light-primary">
      <div class="flex flex-col h-full w-full p-[100px] items-center justify-center bg-light-primary">
        <div class='flex flex-col w-full h-full'>
          <div class="text-sans text-white text-4xl font-bold">Join Us Now on EduTrack!</div>
          <div class="text-sans my-4  text-purple-200 textxl font-normal">Tired of managing your training
            schedule? Get your own dashboard app!</div>
        </div>

        <img class=" left-[127px] top-[424px]" src="/assets/Distanceworking.png" />
      </div>
      <div class="flex flex-col w-full h-fit px-[15%] rounded-l-3xl py-24 gap-[40px] bg-white items-center ">
        <div class="flex h-fit w-fit py-[20px] px-[40px] shadow-lg justify-center items-center flex-col rounded-full">
          <img class="h-12" src="/assets/Brand.png" />
        </div>
        <div class="flex w-fit text-gray-600 text-2xl font-normal font-sans leading-10 items-center">Create
          Account
        </div>
        <!-- <div class="self-stretch h-14 rounded-tl rounded-tr flex-col justify-start items-start flex"> -->
        <form class="flex flex-col w-full gap-[40px]" action="/register" method="POST">
          <div class='flex flex-col w-full'>
            <div class="flex flex-col w-full h-fit my-2">
              <label for="name" class="block font-sans text-sm font-medium leading-6 text-zinc-900">Company Name</label>
              <div class="relative rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M12 5.9a2.1 2.1 0 110 4.2 2.1 2.1 0 010-4.2m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"
                      fill="black" />
                  </svg>
                </div>
                <input type="text" name="name" id="name"
                  class="block w-full rounded font-sans border border-zinc-500 py-1.5 pl-12 pr-0 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-zinc-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-12"
                  placeholder="Enter your company name">
              </div>
            </div>

            <div class="flex flex-col w-full h-fit my-2">
              <label for="email" class="block font-sans text-sm font-medium leading-6 text-zinc-900">Email</label>
              <div class="relative rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 18H4V8L12 13L20 8V18ZM12 11L4 6H20L12 11Z"
                      fill="black" />
                  </svg>
                </div>
                <input type="email" name="email" id="email"
                  class="block w-full rounded font-sans border border-zinc-500 py-1.5 pl-12 pr-0 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-zinc-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-12"
                  placeholder="Enter your email address">
              </div>
            </div>

            <div class="flex flex-col w-full h-fit my-2">
              <label for="phone" class="block font-sans text-sm font-medium leading-6 text-zinc-900">Phone
                Number</label>
              <div class="relative rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"
                      fill="black" />
                  </svg>
                </div>
                <input type="phone" name="phone" id="phone"
                  class="block w-full rounded font-sans border border-zinc-500 py-1.5 pl-12 pr-0 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-zinc-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-12"
                  placeholder="Enter your phone number">

              </div>
            </div>

            <div class="flex flex-col w-full h-fit my-2">
              <label for="password" class="block font-sans text-sm font-medium leading-6 text-zinc-900">Password</label>
              <div class="relative rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M2 17H22V19H2V17ZM3.15 12.95L4 11.47L4.85 12.95L6.15 12.2L5.3 10.72H7V9.22H5.3L6.15 7.75L4.85 7L4 8.47L3.15 7L1.85 7.75L2.7 9.22H1V10.72H2.7L1.85 12.2L3.15 12.95ZM9.85 12.2L11.15 12.95L12 11.47L12.85 12.95L14.15 12.2L13.3 10.72H15V9.22H13.3L14.15 7.75L12.85 7L12 8.47L11.15 7L9.85 7.75L10.7 9.22H9V10.72H10.7L9.85 12.2ZM23 9.22H21.3L22.15 7.75L20.85 7L20 8.47L19.15 7L17.85 7.75L18.7 9.22H17V10.72H18.7L17.85 12.2L19.15 12.95L20 11.47L20.85 12.95L22.15 12.2L21.3 10.72H23V9.22Z"
                      fill="black" />
                  </svg>
                </div>
                <input type="password" name="password" id="password"
                  class="block w-full rounded font-sans border border-zinc-500 py-1.5 pl-12 pr-0 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-zinc-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-12"
                  placeholder="Enter your password">

              </div>
            </div>


          </div>
          <div
            class="self-stretch h-10 mt-3 bg-light-primary rounded-full flex-col justify-center items-center gap-2 flex">

            <button type="submit"
              class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
              <div class=" font-sans text-center text-white text-sm font-medium  leading-tight tracking-tight">Create
                Account</div>
            </button>
          </div>
        </form>
        <div class="py-2 justify-center w-full items-center gap-2.5 inline-flex">
          <div class=" font-sans text-gray-600 text-base font-normal  leading-normal tracking-wide">Already have an
            account?</div>
          <button onclick="window.location.href='/login'"
            class="font-sans text-violet-900 text-base font-bold  leading-normal tracking-wide">Login</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>