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

    <div class="w-full h-fit p-16 px-24 flex-col justify-start items-start gap-6 ">
        <div class="text-black text-4xl font-medium mx-6 leading-10">Your Course</div>
        
        

        <?php if (! empty($course) && is_array($course)): ?>
            <div class="grid grid-cols-3 justify-evenly mx-6 my-10 py-4 gap-9">
            <?php foreach ($course as $courseItem): ?>
            <div class="w-96 h-full bg-fuchsia-50 rounded-xl justify-start items-start inline-flex">
                <div class="w-96 h-full rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="self-stretch grow shrink basis-0 flex-col justify-start items-center inline-flex">
                        <div class="self-stretch h-16 pl-6 pr-1 py-3 justify-start items-center inline-flex">
                            <div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex">
                                <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                    <div class="self-stretch text-zinc-900 text-base font-medium  leading-normal tracking-tight"><?= $courseItem['provider_name']; ?></div>
                                    <div class="text-zinc-900 text-sm font-normal  leading-tight tracking-tight">Bandung</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-96 h-40 justify-center items-center inline-flex">
                            <img class="w-96 h-40" src="assets/Media.png" />
                        </div>
                        <div class="self-stretch h-60 p-4 flex-col justify-start items-start gap-8 flex">
                            <div class="self-stretch h-36 flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-11 flex-col justify-start items-start flex">
                                    <div class="w-80 text-zinc-900 text-base font-normal  leading-normal tracking-wide"><?= $courseItem['name']; ?></div>
                                </div>
                                <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
                                    <div class="w-fit px-4 py-1.5 justify-center items-center gap-2 flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Rp <?= $courseItem['price'] ?></div>
                                    </div>
                                </div>
                                <div class="self-stretch line-clamp-2 text-zinc-700 text-sm font-normal  leading-tight tracking-tight"><?= $courseItem['desc'] ?></div>
                            </div>
                            <div class="self-stretch justify-end items-start gap-2 inline-flex">
                                <div class="h-10 rounded-full border border-light-primary flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Edit</div>
                                    </div>
                                </div>
                                <a class="h-10 bg-light-primary rounded-full flex-col justify-center items-center gap-2 inline-flex" href="/course/<?= $courseItem['id'] ?>">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-white text-sm font-medium  leading-tight tracking-tight">View</div>
                                    </div>
            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach ?></div>
            <?php else : ?>
            <h3>No Courses</h3>
            <p>Unable to find any courses for you.</p>
            <?php endif ?>

            
        
    </div>
</body>

</html>