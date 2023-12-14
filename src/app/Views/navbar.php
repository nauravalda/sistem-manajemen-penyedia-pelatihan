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

    <div class="w-20 h-screen bg-fuchsia-50 flex-col justify-start items-center inline-flex fixed left-0">
        <div class="self-stretch h-20 justify-center items-center inline-flex">
            <div class="w-10 h-10 justify-center items-center flex">
                <div class="origin-top-left rotate-[-15deg] w-8 h-8 relative">
                    <img class="w-8 h-8 left-[0.02px] top-[0.08px] absolute origin-top-left" src="/assets/BrandLogo.png" />
                </div>
            </div>
        </div>
        <div class="w-20 grow shrink basis-0 pt-11 pb-14 flex-col justify-start items-center gap-10 flex">
            <div class="h-14 flex-col justify-start items-center gap-1 flex">
                <div class="rounded-2xl justify-start items-start gap-2.5 inline-flex">
                    <button class="bg-red-100 rounded-2xl shadow justify-center items-center flex">
                        <div class="text-2xl p-2 px-3 justify-center items-center flex ">+
                        </div>
                    </button>
                </div>
            </div>
            <div class="h-48 flex-col justify-center items-center gap-3 flex">
                <div class="self-stretch h-14 px-0.5 pb-1 flex-col justify-start items-center gap-1 flex">
                    <button class=" rounded-full justify-center items-center inline-flex">

                        <div class="px-4 py-1 justify-center items-center flex">
                            <div class="w-6 h-6 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 5L18.6574 9.83688L16.1145 17.6631H7.8855L5.3426 9.83688L12 5Z" fill="black" />
                                </svg>
                            </div>
                        </div>
                    </button>
                    <div class="self-stretch text-center text-zinc-900 text-xs font-semibold  leading-none tracking-wide">Home</div>
                </div>
                <div class="self-stretch h-14 px-0.5 pb-1 flex-col justify-start items-center gap-1 flex">
                    <button class=" rounded-full justify-center items-center inline-flex">

                        <div class="px-4 py-1 justify-center items-center flex">
                            <div class="w-6 h-6 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M9.17 6L11.17 8H20V18H4V6H9.17ZM10 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V8C22 6.9 21.1 6 20 6H12L10 4Z" fill="#1D192B" />
                                </svg>
                            </div>
                        </div>
                    </button>
                    <div class="self-stretch text-center text-zinc-900 text-xs font-semibold  leading-none tracking-wide">Courses</div>
                </div>
                <div class="self-stretch h-14 px-0.5 pb-1 flex-col justify-start items-center gap-1 flex">
                    <button class=" rounded-full justify-center items-center inline-flex">

                        <div class="px-4 py-1 justify-center items-center flex">
                            <div class="w-6 h-6 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19 4H18V2H16V4H8V2H6V4H5C3.89 4 3 4.9 3 6V20C3 21.1 3.89 22 5 22H19C20.1 22 21 21.1 21 20V6C21 4.9 20.1 4 19 4ZM19 20H5V9H19V20ZM6.5 13C6.5 11.62 7.62 10.5 9 10.5C10.38 10.5 11.5 11.62 11.5 13C11.5 14.38 10.38 15.5 9 15.5C7.62 15.5 6.5 14.38 6.5 13Z" fill="#49454F" />
                                </svg>
                            </div>
                        </div>
                    </button>
                    <div class="self-stretch text-center text-zinc-900 text-xs font-semibold  leading-none tracking-wide">Schedule</div>
                </div>
            </div>
        </div>
        <div class="pt-11 pb-14 flex-col justify-start items-center gap-10 flex">
            <div class="h-32 flex-col justify-center items-center gap-3 flex">
                <div class="self-stretch h-14 px-0.5 pb-1 flex-col justify-start items-center gap-1 flex">
                    <button class="rounded-full flex-col justify-center items-center flex">
                        <div class="px-4 py-1 justify-center items-center inline-flex">
                            <div class="w-6 h-6 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM18.36 16.83C16.93 15.09 13.46 14.5 12 14.5C10.54 14.5 7.07 15.09 5.64 16.83C4.62 15.49 4 13.82 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 13.82 19.38 15.49 18.36 16.83ZM8.5 9.5C8.5 7.56 10.06 6 12 6C13.94 6 15.5 7.56 15.5 9.5C15.5 11.44 13.94 13 12 13C10.06 13 8.5 11.44 8.5 9.5Z" fill="#49454F" />
                                </svg>
                            </div>
                        </div>
                    </button>
                    <div class="self-stretch text-center text-zinc-700 text-xs font-medium  leading-none tracking-wide">Profile</div>
                </div>
                <div class="self-stretch h-14 px-0.5 pb-1 flex-col justify-start items-center gap-1 flex">
                    <button class="rounded-full flex-col justify-center items-center flex">
                        <div class="px-4 py-1 justify-center items-center inline-flex">
                            <div class="w-6 h-6 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M19 7V11H6.83L10.41 7.41L9 6L3 12L9 18L10.41 16.59L6.83 13H21V7H19Z" fill="#49454F" />
                                </svg>
                            </div>
                        </div>
                    </button>
                    <div class="self-stretch text-center text-zinc-700 text-xs font-medium  leading-none tracking-wide">Logout</div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>