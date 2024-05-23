<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/landingPage.css'); ?>" />
</head>
<body class="bg-[#f1f4f5] font-['Poppins'] bg-lp">
    <div class="w-full text-indigo-950 fixed top-0 bg-[#f1f4f5] shadow-lg py-3 px-5 z-50">
        <div class="flex flex-row max-w-5xl mx-auto justify-between items-center">
            <a href="" class="font-['Clash_Display'] items-center text-2xl">
                TravelinAja
            </a>
            <div class="flex flex-row px-5  top-5">
                <ul class="flex flex-row  text-indigo-950  mx-auto gap-x-4 items-center ">
                    <li>
                        <a href="#home" class="text-base  hover:text-violet-600 hover:font-semibold">
                            Booking Sekarang
                        </a>
                    </li>
                    <li>
                        <a href="#about" class="text-base  hover:text-violet-600 hover:font-semibold">
                            Open Trip
                        </a>
                    </li>
                    <li>
                        <a href="#project" class="text-base  hover:text-violet-600 hover:font-semibold">
                            2D1N
                        </a>
                    </li>
                    <li>
                        <a href="" class="text-base  hover:text-violet-600 hover:font-semibold">
                            About Us
                        </a>
                    </li>
                </ul>
                
            </div>
            <div class="flex flex-rows gap-x-2 items-center">
                <a href="#" class="bg-indigo-900 text-white px-5 py-2 rounded-full hover:bg-violet-700">
                    Masuk
                </a>
                <a href="#" class="bg-violet-700 text-white px-5 py-2 rounded-full hover:bg-indigo-900">
                    Daftar
                </a>
                
                
            </div>
        </div>
    </div>

    <section class="w-full bg-indigo-950/30">
        <div class="max-w-5xl mx-auto py-48 justify-center item-center flex flex-col gap-y-4">
            <h1 class="font-['Clash_Display'] text-center  text-[#f1f4f5] text-[60px] font-bold leading-none">
                JELAJAH WISATA <br/>
                INDONESIA
            </h1>
            <p class="text-center flex mx-auto shadow-lg w-1/2  text-[14px] font-light font-['Poppins'] text-[#f1f4f5]">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore accusamus rerum cumque voluptates vero quibusdam repellendus molestias qui odio dolorum! Eum ex praesentium nisi voluptatibus, quae quos? Mollitia, totam est!
            </p>
            <a href="#paket"  class="w-fit  flex mx-auto text-xl  bg-indigo-900 text-white px-6 py-2 rounded-full hover:bg-violet-600  shadow-lg">
                Explore Now!
            </a>
        </div>
    </section>
    <section class="w-full  bg-[#f1f4f5] ">
        <div class="relative max-w-2xl mx-auto bg-[#f1f4f5]/40 backdrop-blur-lg  rounded-2xl h-[25vh] shadow-md -top-[80px] z-10" #f1f4f5="">
            <div class="flex px-12 py-8  items-center flex-row w-full gap-x-16">
                <div class="flex mx-auto flex-col gap-y-2 ">
                    <svg class="flex mx-auto"  width="64" height="64" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="128" height="128" fill="url(#pattern0_8607_3)"/>
                        <defs>
                        <pattern id="pattern0_8607_3" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_8607_3" transform="scale(0.0078125)"/>
                        </pattern>
                        <image id="image0_8607_3" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                    <span >
                        Wisata
                    </span>
                </div>
                <div class="flex flex-col  mx-auto gap-y-2">
                    <svg class="flex mx-auto" width="64" height="64" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="128" height="128" fill="url(#pattern0_8607_6)"/>
                        <defs>
                        <pattern id="pattern0_8607_6" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_8607_6" transform="scale(0.0078125)"/>
                        </pattern>
                        <image id="image0_8607_6" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                    <span >
                        Tour Guide
                    </span>
                </div>
                <div class="flex flex-col gap-y-2 mx-auto">
                    <svg class="flex mx-auto"  width="64" height="64" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="128" height="128" fill="url(#pattern0_8607_2)"/>
                        <defs>
                        <pattern id="pattern0_8607_2" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_8607_2" transform="scale(0.0078125)"/>
                        </pattern>
                        <image id="image0_8607_2" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                    <span >
                        Akomodasi
                    </span>
                </div>
                <div class="flex mx-auto ">
                    <div class="flex bg-[#f1f4f5] shadow-lg p-4 mx-auto rounded-full">
                        <svg class="text-white" width="32" height="32" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="64" height="64" transform="matrix(-1 0 0 1 64 0)" fill="url(#pattern0_8608_7)"/>
                            <defs>
                            <pattern id="pattern0_8608_7" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_8608_7" transform="scale(0.0078125)"/>
                            </pattern>
                            <image id="image0_8608_7" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        <div id="paket" class="max-w-5xl flex mx-auto flex flex-col gap-y-12">
            <h1 class="font-['Clash_Display'] text-3xl text-indigo-950 font-bold flex mx-auto">
                Paket Wisata
            </h1>
            <div class="cards w-full justify-between flex flex-wrap">
            <?php
                // Mendapatkan nilai 'id' dari segment URI
                $id_from_url = $this->uri->segment(3);

                // Mengecek apakah 'id' ada dalam URI
                if ($id_from_url !== null) {
                    // Jika 'id' ada dalam URI, tampilkan detail paket wisata
                ?>
                    <div class="flex flex-row gap-x-12">
                        <div class="img">
                            <img class="w-[540px] h-[400px] shadow-sm rounded-md" src="<?php echo base_url('uploads/' . $data[0]->photo) ?>" alt="">
                        </div>
                        <div class="body flex flex-col gap-y-4">
                            <span class="text-xl font-bold"><?php echo $data[0]->destinasi; ?></span>
                            <span class="text-sm"><?php echo 'Rp ' . number_format($data[0]->budget, 0, ',', '.'); ?>
                            </span>
                            <span class="text-sm">Jumlah Peserta : <?php echo $data[0]->jml_org ?>
                            </span>
                            <span class="text-sm w-96 text-justify"><?php echo $data[0]->deskripsi ?>
                            </span>
                            
                            <a href="#" class=" text-center bg-violet-700 text-white px-5 py-2 rounded-full hover:bg-indigo-900">
                                Booking
                            </a>
                            <a href="<?php echo site_url('travel/landing_page')?>" class="text-center bg-indigo-900 text-white px-5 py-2 rounded-full hover:bg-violet-700">
                                Cancel
                            </a>
                            
                        </div>
                    </div>
                <?php
                } else {  
                    // Jika 'id' tidak ada dalam URI, tampilkan daftar paket wisata
                    if (isset($trl) && !empty($trl)) {
                        foreach ($trl as $item) {
                ?>
                            <a href="<?php echo site_url('travel/landing_page/'.$item->id)?>">
                                <div class="card flex flex-col gap-y-4 pb-6">
                                    <div class="img">
                                        <img class="w-[240px] h-[180px] shadow-sm rounded-md" src="<?php echo base_url('uploads/' . $item->photo) ?>" alt="">
                                    </div>
                                    <div class="body flex flex-col justify-between h-[50px]">
                                        <span class="text-[16px] font-bold "><?php echo $item->destinasi; ?></span>
                                        <span class="text-sm"><?php echo 'Rp ' . number_format($item->budget, 0, ',', '.'); ?></span>
                                    </div>
                                </div>
                            </a>
                <?php
                        } 
                    } else {
                        // Jika tidak ada paket wisata yang tersedia
                ?>
                        <span>
                            <center>
                                Paket wisata kosong
                            </center>
                        </span>
                <?php
                    } 
                }
                ?>
    
                    
            </div>
        </div>

        <div class="w-full mt-12 py-12 bg-indigo-950">
            <div class="max-w-5xl mx-auto flex flex-col gap-y-8">
                <div class="flex flex-row justify-between">
                    <div class="kiri flex flex-col">
                        <h1 class="font-['Clash_Display'] font-bold text-2xl text-[#f1f4f5]">
                            TravelinAja
                        </h1>
                        <p class="mt-4 max-w-xs text-[#f1f4f5]">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non cupiditate quae nam
                        molestias.
                        </p>
                        <ul class="mt-8 flex gap-6">
                            <li>
                                <a
                                href="#"
                                rel="noreferrer"
                                target="_blank"
                                class="text-gray-700 transition hover:opacity-75"
                                >
                                <span class="sr-only">Facebook</span>

                                <svg class="h-6 w-6" fill="#f1f4f5" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                    fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd"
                                    />
                                </svg>
                                </a>
                            </li>

                            <li>
                                <a
                                href="#"
                                rel="noreferrer"
                                target="_blank"
                                class="text-gray-700 transition hover:opacity-75"
                                >
                                <span class="sr-only">Instagram</span>

                                <svg class="h-6 w-6" fill="#f1f4f5" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                    fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd"
                                    />
                                </svg>
                                </a>
                            </li>

                            <li>
                                <a
                                href="#"
                                rel="noreferrer"
                                target="_blank"
                                class="text-gray-700 transition hover:opacity-75"
                                >
                                <span class="sr-only">Twitter</span>

                                <svg class="h-6 w-6" fill="#f1f4f5" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                                    />
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="kanan flex flex-row gap-x-16 md:gap-x-32">
                        <div class="satu">
                            <h1 class="font-['Clash_Display'] text-1xl text-[#f1f4f5]">
                                Useful Links
                            </h1>
                            <ul class="text-[#f1f4f5]">
                                <li>
                                    <a href="">
                                        coba
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        coba
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        coba
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        coba
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="satu">
                            <h1 class="font-['Clash_Display'] text-1xl text-[#f1f4f5]">
                                Others
                            </h1>
                            <ul class="text-[#f1f4f5]">
                                <li>
                                    <a href="">
                                        coba
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        coba
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        coba
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        coba
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="text-sm text-[#f1f4f5]">&copy; 2024. Made by Afifah & Tiara. All rights reserved.</p>
            </div>
            
        </div>
    </section>
    
</body>
</html>