<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php //wp_head();
    ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/my-style.css'; ?>" type="text/css" media="all" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div>
        <header class="py-[20px] bg-[#313033ef] transition-all z-[999] left-0 top-0 w-full">
            <div class="w-[1200px] mx-auto">
                <div class="flex items-center text-white">
                    <div class="w-[130px]">
                        <a href="/" class="">
                            <img src="https://www.tsttourist.com/vnt_upload/weblink/Logo_TST_tourist.png"> </a>
                    </div>
                    <ul class="flex items-center ml-[50px] space-x-6">
                        <li class="">
                            <a href="/" class="uppercase text-[1rem] font-bold">Home</a>
                        </li>
                        <li class="relative group">
                            <a href="#" class="uppercase text-[1rem] font-bold">DESTINATIONS</a>
                            <ul class="absolute top-full left-0 bg-white w-max text-[#484649]  uppercase hidden group-hover:block">
                                <li class="">
                                    <a class="px-4 py-3 w-full flex hover:bg-[#f36f21] hover:text-white" href="/destination" class="">The north</a>
                                </li>
                                <li class="">
                                    <a class="px-4 py-3 w-full flex hover:bg-[#f36f21] hover:text-white" href="/destination" class="">The central</a>
                                </li>
                                <li class="">
                                    <a class="px-4 py-3 w-full flex hover:bg-[#f36f21] hover:text-white" href="/destination" class="">The south</a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="/travel-plan" class="uppercase text-[1rem] font-bold">Travel plan</a>
                        </li>
                        <li class="">
                            <a href="/news" class="uppercase text-[1rem] font-bold">Travel blog</a>
                        </li>
                        <li class="">
                            <a href="/ve-chung-toi" class="uppercase text-[1rem] font-bold">About us</a>
                        </li>
                        <li class="">
                            <a href="/lien-he" class="uppercase text-[1rem] font-bold">Contact us</a>
                        </li>
                        <!-- <li class="">
                            <a href="#" class="uppercase text-[1rem] font-bold flex justify-center items-center h-10 bg-[#F6A726] px-3">Enquire</a>
                        </li> -->

                    </ul>
                </div>
            </div>
        </header>
