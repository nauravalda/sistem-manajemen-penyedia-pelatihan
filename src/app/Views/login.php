<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Learn Sphere</title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico">
  <link rel="stylesheet" href="<?= base_url() ?>/css/app.css?v=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>

<body>

  <div class="w-full h-fit min-h-screen p-24 px-44 bg-fuchsia-50 justify-start items-start inline-flex">
    <div class="flex h-fit w-full rounded-3xl shadow-2xl items-center overflow-hidden bg-light-primary">
      <div class="flex flex-col w-full h-fit px-[10%] rounded-l-3xl py-24 gap-[40px] bg-white items-center ">
        <div class="flex h-fit w-fit py-[20px] px-[40px] shadow-lg justify-center items-center flex-col rounded-full">
          <img class="h-12" src="/assets/Brand.png" />
        </div>
        <div class="flex w-fit text-gray-600 text-2xl font-normal font-sans leading-10 items-center">Hello! Welcome back
        </div>
        <!-- <div class="self-stretch h-14 rounded-tl rounded-tr flex-col justify-start items-start flex"> -->


        <form class='flex flex-col w-full gap-[40px]' action="/login" method="POST">
          <div class='flex flex-col w-full'>
            <div class="flex flex-col w-full h-fit my-4">
              <label for="email" class="block font-sans text-sm font-medium leading-6 text-zinc-900">Email</label>
              <div class="relative mt-2 rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 18H4V8L12 13L20 8V18ZM12 11L4 6H20L12 11Z"
                      fill="black" />
                  </svg>
                </div>
                <input type="text" name="email" id="email"
                  class="block w-full rounded font-sans border border-zinc-500 py-1.5 pl-12 pr-0 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-zinc-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-12"
                  placeholder="Enter your email address">
              </div>
            </div>

            <div class="flex flex-col w-full h-fit my-4">
              <label for="password" class="block font-sans text-sm font-medium leading-6 text-zinc-900">Password</label>
              <div class="relative mt-2 rounded-md shadow-sm">
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

          <div class="px-2 self-stretch w-full justify-between items-center inline-flex">
            <div class="justify-center items-center gap-1 flex">
              <input type="checkbox" class="w-4 h-4 accent-violet-900 checked:bg-violet-900 ...">
              <div class="text-gray-600 text-base font-normal  leading-normal tracking-wide">Remember me</div>
              </input>
            </div>
            <button class="justify-start items-center gap-2.5 flex">
              <div class="text-violet-900 text-base font-bold leading-normal tracking-wide">Forgot Password?</div>
            </button>
          </div>
          <div class="self-stretch h-10 bg-light-primary rounded-full flex-col justify-center items-center gap-2 flex">

            <button 
            type="submit"
            class="self-stretch grow shrink basis-0 px-6  justify-center items-center gap-2 inline-flex">
              <div class=" font-sans text-center text-white text-sm font-medium  leading-tight tracking-tight">Login
              </div>
            </button>
          </div>
        </form>
        <div class="py-4 justify-center w-full items-center gap-2.5 inline-flex">
          <div class=" font-sans text-gray-600 text-base font-normal  leading-normal tracking-wide">Don’t have an
            account?</div>
          <button onclick="window.location.href='/register'"
            class=" font-sans text-violet-900 text-base font-bold  leading-normal tracking-wide">Create Account</button>
        </div>
      </div>

      <div class="flex flex-col h-full w-full p-[100px] items-center justify-center bg-light-primary">
        <div class='flex flex-col w-full h-full'>
          <div class="text-sans text-white text-4xl font-bold">Manage Your<br />Training Company</div>
          <div class="text-sans my-4  text-purple-200 textxl font-normal">Get your own dashboard app to manage your
            company training schedule</div>
        </div>
        <img class=" " src="/assets/Recruitmentcvs.png" />

      </div>
    </div>
  </div>
  </div>

</body>

</html>