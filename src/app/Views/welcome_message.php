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

<div class="w-full h-screen p-24 bg-fuchsia-50 justify-start items-start inline-flex">
<div class="grow shrink basis-0 rounded-xl self-stretch px-44 bg-black inline-flex gap-10 ">
    <div class="px-10 py-5 bg-white w-full h-full items-center justify center">
    <img class="h-12 my-8" src="/assets/Brand.png" />
    <div class="text-gray-600 my-8 text-2xl font-normal leading-10 items-center">Hello! Welcome back</div>
      <!-- <div class="self-stretch h-14 rounded-tl rounded-tr flex-col justify-start items-start flex"> -->
      <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
  <div class="relative mt-2 rounded-md shadow-sm">
    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 18H4V8L12 13L20 8V18ZM12 11L4 6H20L12 11Z" fill="black"/>
</svg>
    </div>
    <input type="text" name="price" id="price" class="block w-full rounded-md border-0 py-1.5 pl-6 pr-0 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter your email address">
    <div class="absolute inset-y-0 right-0 flex items-center">
    </div>
  </div>
           
    <div class="self-stretch justify-between items-center inline-flex">
      <div class="justify-center items-center gap-1 flex">
        <div class="p-1 flex-col justify-center items-center inline-flex">
          <div class="p-2.5 rounded-full justify-center items-center inline-flex">
            <div class="w-6 h-6 relative" />
            <div class="w-4 h-4 bg-slate-500 rounded-sm" />
          </div>
        </div>
        <div class="text-gray-600 text-base font-normal  leading-normal tracking-wide">Remember me</div>
      </div>
      <div class="px-3.5 justify-start items-center gap-2.5 flex">
        <div class="text-violet-900 text-base font-bold  leading-normal tracking-wide">Forgot Password?</div>
      </div>
    </div>
  </div>
  <div class="self-stretch h-10 bg-slate-500 rounded-full flex-col justify-center items-center gap-2 flex">
    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
      <div class="text-center text-white text-sm font-medium  leading-tight tracking-tight">Login</div>
    </div>
  </div>
  <div class="justify-center items-center gap-2.5 inline-flex">
    <div class="text-gray-600 text-base font-normal  leading-normal tracking-wide">Don’t have an account?</div>
    <div class="text-violet-900 text-base font-bold  leading-normal tracking-wide">Create Account</div>
  </div>
    </div>
    <div class="bg-red w-full h-full">tes</div>
</div>
</div>

</body>
</html>
