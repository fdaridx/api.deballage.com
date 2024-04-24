<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <meta name="description" content="Discover the latest fashion trends and shop for high-quality clothes at Deballage. Explore our wide range of stylish clothing for men, women, and kids. From casual wear to formal attire, find the perfect outfit for every occasion. Enjoy fast shipping, easy returns, and excellent customer service. Upgrade your wardrobe today with Deballage.">
    <meta name="keywords" content="Deballage, clothing, fashion, apparel, trendy clothes, stylish outfits, men's fashion, women's fashion, kids fashion, online shopping, fast shipping, easy returns">
    <meta name="author" content="Deballage">

    <!-- Open Graph meta tags for social media sharing -->
    <meta property="og:title" content="Category">
    <meta property="og:description" content="Discover the latest fashion trends and shop for high-quality clothes at Deballage. Explore our wide range of category to suite you need. Enjoy fast shipping, easy returns, and excellent customer service. Upgrade your wardrobe today with Deballage.">
    <meta property="og:image" content="https://web.facebook.com/photo/?fbid=105308502580765&set=a.105308552580760">
    <meta property="og:url" content="http://www.deballage.cm/pages/category.html">
    <meta property="og:type" content="website">

    <link rel="stylesheet" href="{{ asset('dist/output.css') }}">
    <title>Cart</title>
</head>
<body>
    <nav class="relative">
        <!-- secondary navbar -->
        <div class="bg-slate-800 py-3 hidden md:block px-6 2xl:px-0">
            <div class="2xl:max-w-[1480px] mx-auto flex justify-between text-sm">
                <div class="flex text-white md:gap-x-3 lg:gap-7">
                    <a href="#">English</a>
                    <a href="#">French</a>
                </div>
                <div class="second-nav-items text-slate-50 flex md:gap-x-4 lg:gap-7 lg:text-sm">
                    <a href="" class="block">Shop grocery</a>
                    <a href="" class="block">Merchant Center</a>
                    <a href="" class="block">Source Suppliers</a>
                    <a href="" class="block">Order tracking</a>
                    <span class="block"><a href="#">Register</a> or <a href="#">Login</a></span>
                </div>
            </div>
        </div>
        <!-- Primary navbar -->
        <div class="bg-black py-[7px] hidden lg:block">
            <div class="2xl:max-w-[1480px] mx-auto flex  justify-center items-center">
                <div class="logo w-[12.5%] flex justify-center">
                    <a href="/index.html"><img src="{{ asset('images/pngs/deballage-logo.png') }}" alt="deballage logo" /></a>
                </div>
                <div class="search-bar flex w-[75%] px-[15px]">
                    <div class="search w-full mr-2">
                        <input class="block caret-red-800 pl-7 py-[10px] w-full h-full rounded-[3.56px] " type="search" placeholder='Rechercher des produits, des marques, des catégories sur deballage.com' />
                    </div>
                    <a href='#' class=" hover:bg-red-600 transition-all w-[15%] flex items-center h-[inherit] px-[14px] py-[5.43px] gap-1 bg-red-700 text-white rounded-[3.56px]"><span class='inline-block'>CHERCHER</span> <img src="{{ asset('images/svgs/search.svg') }}" alt="search an item" /></a>
                </div>
                <div class="icons-set flex gap-2 w-[12.5%]">
                    <a href="" class="block"><img src="{{ asset('images/svgs/fillter.svg') }}" alt="filtrer vos produits" /></a>
                    <a href="" class="block"><img src="{{ asset('images/svgs/favorite.svg') }}" alt="consulter vos favoris" /></a>
                    <a href="" class="block"><img src="{{ asset('images/svgs/cart.svg') }}" alt="regarder votre panier" /></a>
                </div>
            </div>
        </div>
        <!-- mobile navbar -->
        <div class="p-4 lg:px-0 bg-black lg:hidden">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <button class="menuToggle"><img id="openIcon" src="{{ asset('images/svgs/icon_menu.svg') }}" alt=""></button>
                    <div class="w-[120px] h-auto"><a href="/index.html"><img src="{{ asset('images/pngs/deballage-logo.png') }}" alt=""></a></div>
                </div>
                <div class="cart"><img src="{{ asset('images/svgs/cart.svg') }}" alt=""></div>
            </div>
            <div class="flex py-3">
                <input class="p-2 rounded-[3.95px] rounded-tr-none rounded-br-none w-[87%]" placeholder="Rechercher des produits, des marques" type="search" name="" id="">
                <button class="bg-red-700 w-[13%] flex justify-center items-center rounded-[3.95px] rounded-tl-none rounded-bl-none p-2"><img src="{{ asset('images/svgs/search.svg') }}" alt=""></button>
            </div>

            {{-- <div id="menuItems" class="h-screen w-full bg-black bg-opacity-40 absolute top-0 left-0 menu shadow-lg translate-x-[-100%]">

                <ul class="w-[65%] h-screen bg-white p-[21px] flex flex-col gap-y-[20px] ">
                    <div class="flex items-center justify-between pb-4">
                        <span class="block"><img src="{{ asset('images/pngs/logo-white.png') }}" alt=""></span>
                        <button class="menuToggle block" ><img id="closeIcon" src="{{ asset('images/svgs/icon-close.svg') }}" alt=""></button>
                    </div>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="#" class="text-gray-600 truncate w-[168px]">Men's & Women Fashion</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="#" class="text-gray-600 truncate w-[168px]">Laptops and Phone</a>
                    </span>
                    <img src="/"{{ asset('images/svgs/caret-right.svg') }}" alt="">
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="#" class="text-gray-600 truncate w-[168px]">Beauty & Personal Care</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="#" class="text-gray-600 truncate w-[168px]">Lugage, Bags & Cases</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="#" class="text-gray-600 truncate w-[168px]">Toys, Kids & Babies</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="#" class="text-gray-600 truncate w-[168px]">Electrical Equipments</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="#" class="text-gray-600 truncate w-[168px]">Health & Medical supplies</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="#" class="text-gray-600 truncate w-[168px]">Agriculture / Food & Bevarages</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                    </li>
                </ul>
            </div> --}}
        </div>
        <!-- Primary navbar ends here -->

        <!-- category navbar -->
        <div class="bg-white overflow-x-scroll">
            <ul class='2xl:max-w-[1480px]  md:py-2 lg:py-0 h-fit mx-auto flex md:gap-x-1 lg:gap-x-3 md:justify-center lg:items-center'>
                <li class="flex items-center">
                    <a  data-dropdown="dropdown1" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="#">Chaussures</a>
                    <div id="dropdown1" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown2" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="#">Hoodie</a>

                    <div id="dropdown2" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown3" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="#">Chapeau</a>
                    <div id="dropdown3" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown4" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="#">Cullotes</a>

                    <div id="dropdown4" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown5" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="#">Over-sized</a>

                    <div id="dropdown5" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown6" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="#">T-shirt</a>

                    <div id="dropdown6" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown7" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="#">Sweaters</a>

                    <div id="dropdown7" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown8" class="dropdown-toggle px-[12px] relative text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block" href="#">Jogging</a>

                    <div id="dropdown8" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="#">Pull overs</a></li>
                                <li><a href="#">Zip upHoodies</a></li>
                                <li><a href="#">Fitted Hoodie</a></li>
                                <li><a href="#">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="px-4">
        <div class="x:max-w-[1500px] lg:max-w-[1200px] mx-auto py-[60px] lg:py-[100px]">
            <div class="w-full">
              <ol class="lining-nums w-full bg-white py-4 justify-center lg:py-0 lg:bg-gray-100 flex rounded-md lg:rounded-none">
                <li class="w-[25%]">
                    <span class="text-red-700 lg:hidden w-full flex justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg></span>
                    <button class="py-6 hidden bg-white px-5 w-full font-semibold lg:block">My Cart</button>
                </li>
                <li class="w-[25%]">
                    <span class="text-gray-400 lg:hidden w-full flex justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map"><polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"/><line x1="9" x2="9" y1="3" y2="18"/><line x1="15" x2="15" y1="6" y2="21"/></svg></span>
                    <button class="py-6 hidden bg-red-50 px-5 w-full font-semibold lg:block">Delivery info</button>
                </li>
                <li class="w-[25%]">
                    <span class="text-gray-400 lg:hidden w-full flex justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg></span>
                    <button class="py-6 hidden bg-red-50 px-5 w-full font-semibold lg:block">Payment</button>
                </li>
                <li class="w-[25%]">
                    <span  class="text-gray-400 lg:hidden w-full flex justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle-2"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg></span>
                    <button class="py-6 hidden bg-red-50 px-5 w-full font-semibold lg:block">Confirmation</button>
                </li>
              </ol>
              <div class="bg-white mt-2 lg:mt-0 py-4 px-5 rounded-md lg:rounded-none">
                <div class="">
                    <div class="hidden lg:flex gap-x-4 text-left border-b-[1px] border-gray-300 py-5">
                        <span class="block w-[40%] font-bold">Product</span>
                        <span class="block w-[12%] font-bold">Price</span>
                        <span class="block w-[12%] font-bold">Tax</span>
                        <span class="block w-[12%] font-bold">Total Price</span>
                        <span class="block w-[12%] font-bold">Quantity</span>
                        <span class="block w-[12%] font-bold">Remove</span>
                    </div>
                   <div class="">
                        <ul class="flex flex-wrap lg:flex-nowrap space-y-5 items-center gap-x-4 py-8 lg:py-5 border-b-[1px] border-gray-300">
                            <li class="w-[100%] lg:w-[40%]">
                                <div class="flex gap-x-2">
                                    <img class="w-10 h-10" src="{{ asset('images/pngs/phone-1.png') }}" alt="">
                                    <p class="text-[12px] lg:text-[16px]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, iusto.</p>
                                </div>
                            </li>
                            <li class="w-[33.3%] lg:w-[12%]">5, 500 XAF</li>
                            <li class="w-[20.3%] lg:w-[12%]">0 XAF</li>
                            <li class="w-[30.3%] lg:w-[12%] text-red-700 font-medium">66 000 XAF</li>
                            <li class="w-[60%] lg:w-[12%]">
                                <div class="flex rounded-[6px] overflow-hidden w-fit">
                                    <button class="py-0 px-[8px] bg-red-600 text-white text-center">+</button>
                                    <span class="py-1 px-2 shadow-sm w-fit text-center">2</span>
                                    <button class="py-0 px-[8px] bg-red-600 text-white text-center">-</button>
                                </div>
                            </li>
                            <li class="w-[20%] lg:w-[12%]">
                                <button class="text-red-600 p-2 bg-red-100 rounded flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2">
                                    <path d="M3 6h18" />
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                    <line x1="10" x2="10" y1="11" y2="17" />
                                    <line x1="14" x2="14" y1="11" y2="17" />
                                    </svg>
                                </button>
                            </li>
                        </ul>

                        <div class="flex justify-between py-4">
                            <span class="font-semibold block">Subtotal</span>
                            <span class="font-semibold block">66 000 XAF</span>
                        </div>
                   </div>
                   <div class="flex justify-between items-center mt-5">
                    <button class="text-black lg:flex gap-x-2 hidden">
                        <span class="block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-left"><path d="M6 8L2 12L6 16"/><path d="M2 12H22"/></svg></span>
                        <span class="block ">Return to shop</span>
                    </button>
                    <button class="bg-red-700 px-4 py-2 block w-full lg:w-fit rounded-md text-white font-semibold">Continue to shopping</button>
                   </div>
                </div>
              </div>
            </div>
            <div></div>
        </div>
    </section>

    <footer class="bg-black px-4 md:px-6 lg:px-4">
        <div class="2xl:max-w-[1480px] mx-auto lg:px-0">
           <div class="flex flex-col items-center lg:items-start lg:grid lg:grid-cols-3">
                <div class="footer-box-container">
                    <div class="footer-box bg-slate-800 text-white px-[49px] py-[49px] h-[400.2px] w-[340px]">
                            <div class="">
                                <span class="font-thin">Got questions, call us 24/7</span>
                                <span class='lg:text-[26px] text-[24.5px] font-bold block'>(+237) 651 127 927</span>
                            </div>
                            <div class="mt-[20.5px]">
                                <span>Mobile apps soon available on:</span>
                                <div class="">
                                    <img src="{{ asset('imagespngs/google-apple.png') }}" alt="download our app from the google apple store" />
                                </div>
                            </div>
                            <h4 class='lg:text-[24px] capitalize text-[18px] font-bold pt-[14px]'>Office contact information</h4>
                            <p class="text-white text-[14px] font-light">0237, Silicon Mountain, Buea, South West Region-Cameroon</p>
                            <!-- Add icons here -->
                        </div>
                </div>
                <div class="footer-link text-white lg:col-span-2 lg:flex lg:flex-col lg:gap-y-[21px]">
                    <div class="lg:flex lg:justify-start py-[49px] grid grid-cols-2 gap-y-3">
                        <div class="pr-4">
                            <h4 class='text-4 lg:text-[18px] font-semibold'>Informations utiles</h4>
                            <ul class='font-thin text-[13px] lg:text-[13px] pt-[14px]'>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="#">Payer avec Aleipay (deballagepay)</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="#">deballage pour les enfants</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="#">Adhésions fournisseurs</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="#">Options et délais de livraison</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="">Intelligence artificielle pour les PME</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="#">Programme de distribution deballage</a></li>
                            </ul>
                        </div>
                        <div class="px-4">
                            <h4 class='text-4 lg:text-[18px] font-semibold'> Apprendre et Grandir</h4>
                            <ul class='font-thin text-[13px] lg:text-[13px] pt-[14px]'>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">Académie des affaires d'deballage</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">deballage pour les enfants</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">Expérience d'achat VR/AR</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">Make money with Aleicon</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="">Programme d'affiliation deballage</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">Publicité et promotion</a></li>
                            </ul>
                        </div>
                        <div class="px-4">
                            <h4 class='text-4 lg:text-[18px] font-semibold'>Explorer Resources</h4>
                            <ul class='font-thin text-[13px] lg:text-[13px] pt-[14px]'>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">deballage pour les Entreprises</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">À propos de deballage.com</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">Success Stories</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">Customer Service</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">deballage Return Policy</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">Help Center</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="#">Terms & condition</a></li>
                            </ul>
                        </div>
                        <div class="px-4">
                            <h4 class='text-4 lg:text-[18px] font-semibold'>Buyers Zone</h4>
                            <ul class='font-thin text-[13px] lg:text-[13px] pt-[14px]'>
                                <li class='py-[8.47px] pr-[59px]'><a href="#">My Account</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="#">Order Tracking</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="#">Wish List</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="#">Frequent Questions</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="#">Product Warranty</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="#">API Développeur</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="#">Product Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-[14px] font-thin pr-[59px] pb-[41.5px]">
                        <p>deballage est une startup de commerce électronique basée au Cameroun qui tire parti de la technologie et de l'innovation pour servir
    ¸d'entremetteur pour les entreprises, les fabricants et les consommateurs. deballage.com fournit une plate-forme simple et sécurisée qui
    permet aux clients d'acheter des produits en vrac à des prix imbattables, tout en permettant aux fabricants d'atteindre plus de
    consommateurs dans différentes zones géographiques en même temps.</p>
                    </div>
                </div>
           </div>
           <div class="flex flex-col gap-y-3 md:gap-y-0 md:flex-row w-full md:justify-between md:py-[7px] lg:py-0">
                <div class="logo text-white  lg:text-white text-[12px]">© Deballage Global Marketplace - All rights Reserved.</div>
                <div class="pb-5 md:p-0">
                    <span class='inline-block'><img src="{{ asset('images/pngs/mobile-money.png') }}" alt="" /></span>
                    <span class='inline-block'><img src="{{ asset('images/pngs/om.png') }}" alt="" /></span>
                    <span class='inline-block'><img src="{{ asset('images/pngs/uba.png') }}" alt="" /></span>
                    <span class='inline-block'><img src="{{ asset('images/pngs/cash.png') }}" alt="" /></span>
                    <span class='inline-block'><img src="{{ asset('images/pngs/aws.png') }}" alt="" /></span>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('scripts/app.js') }}"></script>
    <script src="{{ asset('scripts/dropdown.js') }}"></script>
</body>
</html>

