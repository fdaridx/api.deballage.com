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
    <link rel="stylesheet" href="{{ asset('styles/index.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/pages/product-detail.css') }}">
    <title>Product detail page</title>
</head>
<body class="bg-[#F2F3F7]">
    <nav class="relative">
        <!-- secondary navbar -->
        <div class="bg-slate-800 py-3 hidden md:block px-6 2xl:px-0">
            <div class="2xl:max-w-[1480px] mx-auto flex justify-between text-sm">
                <div class="flex text-white md:gap-x-3 lg:gap-7">
                    <a href="{{ Route('index') }}">English</a>
                    <a href="{{ Route('index') }}">French</a>
                </div>
                <div class="second-nav-items text-slate-50 flex md:gap-x-4 lg:gap-7 lg:text-sm">
                    <a href="" class="block">Shop grocery</a>
                    <a href="" class="block">Merchant Center</a>
                    <a href="" class="block">Source Suppliers</a>
                    <a href="" class="block">Order tracking</a>
                    <span class="block"><a href="{{ Route('index') }}">Register</a> or <a href="{{ Route('index') }}">Login</a></span>
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
                    <a href="" class="block"><img src="{{ asset('images/svgs/favorite.svg') }}"alt="consulter vos favoris" /></a>
                    <a href="" class="block"><img src="{{ asset('images/svgs/cart.svg') }}"alt="regarder votre panier" /></a>
                </div>
            </div>
        </div>
        <!-- mobile navbar -->
        <div class="p-4 lg:px-0 bg-black lg:hidden">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <button class="menuToggle"><img id="openIcon" src="{{ asset('images/svgs/icon_menu.svg') }}" alt=""  w=150></button>
                    <div class="w-[120px] h-auto"><a href="/index.html"><img src="{{ asset('images/pngs/deballage-logo.png') }}" alt=""  w=150></a></div>
                </div>
                <div class="cart"><img src="{{ asset('images/svgs/cart.svg') }}" alt=""  w=150></div>
            </div>
            <div class="flex py-3">
                <input class="p-2 rounded-[3.95px] rounded-tr-none rounded-br-none w-[87%]" placeholder="Rechercher des produits, des marques" type="search" name="" id="">
                <button class="bg-red-700 w-[13%] flex justify-center items-center rounded-[3.95px] rounded-tl-none rounded-bl-none p-2"><img src="{{ asset('images/svgs/search.svg') }}" alt=""  w=150></button>
            </div>

            <div id="menuItems" class="h-screen w-full bg-black bg-opacity-40 absolute top-0 left-0 menu shadow-lg translate-x-[-100%]">

                <ul class="w-[65%] h-screen bg-white p-[21px] flex flex-col gap-y-[20px] ">
                    <div class="flex items-center justify-between pb-4">
                        <span class="block"><img src="{{ asset('images/pngs/logo-white.png') }}" alt=""  w=150></span>
                        <button class="menuToggle block" ><img id="closeIcon" src="{{ asset('images/svgs/icon-close.svg') }}" alt=""  w=150></button>
                    </div>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Men's & Women Fashion</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt=""  w=150>
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Laptops and Phone</a>
                    </span>
                    <img src="/{{ asset('images/svgs/caret-right.svg') }}" alt=""  w=150>
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Beauty & Personal Care</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt=""  w=150>
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Lugage, Bags & Cases</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt=""  w=150>
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Toys, Kids & Babies</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt=""  w=150>
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Electrical Equipments</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt=""  w=150>
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Health & Medical supplies</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt=""  w=150>
                    </li>
                    <li class="flex justify-between items-center gap-[6px]">
                    <span class="flex gap-1 items-center">
                        <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                        <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Agriculture / Food & Bevarages</a>
                    </span>
                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt=""  w=150>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Primary navbar ends here -->

        <!-- category navbar -->
        <div class="bg-white overflow-x-scroll">
            <ul class='2xl:max-w-[1480px]  md:py-2 lg:py-0 h-fit mx-auto flex md:gap-x-1 lg:gap-x-3 md:justify-center lg:items-center'>
                <li class="flex items-center">
                    <a  data-dropdown="dropdown1" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="{{ Route('index') }}">Chaussures</a>
                    <div id="dropdown1" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown2" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="{{ Route('index') }}">Hoodie</a>

                    <div id="dropdown2" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown3" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="{{ Route('index') }}">Chapeau</a>
                    <div id="dropdown3" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown4" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="{{ Route('index') }}">Cullotes</a>

                    <div id="dropdown4" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown5" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="{{ Route('index') }}">Over-sized</a>

                    <div id="dropdown5" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown6" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="{{ Route('index') }}">T-shirt</a>

                    <div id="dropdown6" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown7" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block' href="{{ Route('index') }}">Sweaters</a>

                    <div id="dropdown7" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a data-dropdown="dropdown8" class="dropdown-toggle px-[12px] relative text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block" href="{{ Route('index') }}">Jogging</a>

                    <div id="dropdown8" class="dropdown absolute z-10 bg-white shadow-lg rounded mt-2">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                        <div>
                            <h2 class="font-bold mb-3">Caots and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-3">Coats and Jackets</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Men's Underwear</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="font-bold mb-4">Top & Tees Collection</h2>
                            <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                <li><a href="{{ Route('index') }}">Pull overs</a></li>
                                <li><a href="{{ Route('index') }}">Zip upHoodies</a></li>
                                <li><a href="{{ Route('index') }}">Fitted Hoodie</a></li>
                                <li><a href="{{ Route('index') }}">Sleeveless hoodie</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section x-data='xproduct({{ $id }})' class="px-4 md:px-6 lg:px-4 py-6">
        <div class="2xl:max-w-[1480px] xl:max-w-[1410px] mx-auto 2xl:px-0">
            <div class="flex gap-x-2 text-[12px] items-center">
                <a class="inline-block" href="">Home  &n> </a>
                <a class="inline-block py-1 px-2 font-bold transition-all rounded-full  hover:bg-red-100 text-red-500" href="">All Categories ></a>
                <a class="inline-block py-1 px-2 font-bold transition-all rounded-full hover:bg-red-100 text-red-500" href="">Electronics ></a>
                <a class="inline-block" href="">Olax AX9 ></a>
            </div>
            <div class="w-full flex flex-col lg:flex-row items-start gap-x-5">
                <div class="w-full lg:w-[72%]  overflow-hidden rounded-md">
                    {{-- Debut details produit --}}
                    <div class="productdetail flex flex-col lg:flex-row gap-x-8 py-3 lg:py-8 px-3 lg:px-8 bg-white w-full">
                        <div class="w-full lg:w-[50%] relative">
                            <div class="w-full h-[400px] lg:h-[550px] rounded overflow-hidden">
                              <img src="{{ asset('images/jpgs/beauty-care.jpeg') }}" alt="Image 1" class="w-full relative h-full object-cover">
                            </div>
                            <div class="flex w-[100%] justify-between absolute top-[50%] translate-y-[-50%]">
                                <button id="prevBtn" class="w-[60px] rounded-full h-[60px] bg-black text-white">&lt;</button>
                                <button id="nextBtn" class="w-[60px] rounded-full h-[60px] bg-black text-white">&gt;</button>
                            </div>
                        </div>
                        <div class="info w-full lg:w-[50%] py-8">
                            <h1 class="text-[24px] lg:text-[32px] font-bold" x-text='ucword(product.name)'>Olax AX9 Pro Universal Router, 300Mbps & battery</h1>
                            <small>(0 Customer review)</small>
                            <div class="flex py-2">
                                <span class="bg-black px-4 text-white py-1 font-semibold">Sold by</span>
                                <span class="bg-gray-100 text-gray-600 px-4 py-1 font-semibold">CODEC</span>
                            </div>
                            <span class="text-[18px] pt-2 block lg:text-[24px] font-bold text-black" x-text='`${product.price} XAF`'>40 000XAF / <span class="text-gray-400 text-[18px]">PC</span></span>
                            <div class="py-3">
                                <span class="block pb-2 font-semibold">Order Quantity</span>
                                <div class="flex w-full rounded-[6px] mt-4 overflow-hidden lg:w-fit">
                                    <button x-on:click='plus()' class="py-0 px-4 bg-black text-white">+</button>
                                    <span x-text='quantite' class="py-2 px-4 shadow-sm w-[80%] lg:w-[200px] text-center"></span>
                                    <button x-on:click='moin()' class="py-0 px-4 bg-black text-white">-</button>
                                </div>
                            </div>
                            <div class="">
                                <span>Total payable</span>
                                <span class="text-[18px] lg:text-[28px] font-bold block" x-text='`${total} XAF`'>66 500 XAF</span>
                            </div>
                            <div class="">
                                <div class="flex flex-col text-center lg:flex-row gap-2 mt-4">
                                    <a href="" class="inline-block py-2 px-3 border-2 rounded-lg text-[14px] lg:text-[initial] border-gray-300 text-red-600">purchase now</a>
                                    <a href="" class="inline-block py-2 px-3 rounded-lg text-[14px] lg:text-white bg-gray-600 text-white">Add to basket</a>
                                    <a href="" class="inline-block py-2 px-3 rounded-lg text-[14px] lg:text-white bg-gray-600 text-white">Order on whatsaapp</a>
                               </div>
                            </div>
                        </div>
                    </div>
                    {{-- Fin produit --}}

                    <div class="">
                        <section class="">
                            <div class="w-full bg-white my-[28px] rounded-md">
                                <div class="flex items-center">
                                    <h2 class="text-[20px] py-4 px-4 border-b-2 w-[100%] lg:w-[100%] font-bold uppercase">TROUVER DES PRODUITS PAR MARQUE</h2>
                                </div>
                                <div id="sliderContainer" class="whitespace-nowrap grid grid-cols-2 md:grid-cols-3 grid-flow-row-dense px-4 py-4 gap-y-3 lg:flex lg:flex-row lg:overflow-hidden items-center gap-x-[10px]">
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Jacket + Vest + Pants)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">High-end Groom Formaluated suites</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">10 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">70 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Repeat the above code for other products -->

                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/one_more_product.png') }}" alt="" width="105"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(One More Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of one more product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">3 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">30 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="">
                        <section class="">
                            <div class="w-full bg-white my-[28px] rounded-md">
                                <div class="flex items-center">
                                    <h2 class="text-[20px] py-4 px-4 border-b-2 w-[100%] lg:w-[100%] font-bold uppercase">TROUVER DES PRODUITS PAR MARQUE</h2>
                                </div>
                                <div id="sliderContainer" class="whitespace-nowrap grid grid-cols-2 md:grid-cols-3 grid-flow-row-dense px-4 py-4 gap-y-3 lg:flex lg:flex-row lg:overflow-hidden items-center gap-x-[10px]">
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Jacket + Vest + Pants)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">High-end Groom Formaluated suites</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">10 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">70 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Repeat the above code for other products -->

                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(Another Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">50 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-[11.86px] rounded-md shadow-md bg-white">
                                        <span class="block"><img src="{{ asset('images/pngs/one_more_product.png') }}" alt="" width="105"></span>
                                        <div>
                                            <p class="text-gray-500 text-sm">(One More Product)</p>
                                            <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of one more product</p>
                                            <div class="flex justify-between items-center py-1">
                                                <small class="font-semibold text-[12px] text-gray-600">3 set</small>
                                                <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                                            </div>
                                            <div class="flex items-center justify-between gap-x-2">
                                                <span class="block font-bold text-sm">30 000 FCFA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <aside class="w-full lg:w-[28%] relative">
                    <div class="bg-white rounded-md">
                        <h2 class="py-2 px-3 border-b-[1px] font-bold border-gray-300">Delivery & return</h2>
                        <ul class="py-4 px-3">
                            <li class="flex gap-x-4 my-4">
                                <span class="w-16 h-11 rounded-[6px] border-[1px] border-gray-00 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="current"></path>
                                    <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path>
                                    <path d="M12 12l8 -4.5"></path>
                                    <path d="M12 12l0 9"></path>
                                    <path d="M12 12l-8 -4.5"></path>
                                    <path d="M16 5.25l-8 4.5"></path>
                                    </svg>
                                </span>
                                <p class="text-[14px]">Enjoy cheaper shipping fees when you select a PickUp Station at checkout</p>
                            </li>
                            <li class="flex gap-x-4 my-4">
                                <span class="w-16 h-11 rounded-[6px] border-[1px] border-gray-00 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck-delivery" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="current"></path>
                                        <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                                        <path d="M3 9l4 0"></path>
                                    </svg>
                                </span>
                                <p class="text-[14px]">Enjoy cheaper shipping fees when you select a PickUp Station at checkout</p>
                            </li>
                            <li class="flex gap-x-4 my-4">
                                <span class="w-16 h-11 rounded-[6px] border-[1px] border-gray-00 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-id-badge-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="current"></path>
                                        <path d="M7 12h3v4h-3z"></path>
                                        <path d="M10 6h-6a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h16a1 1 0 0 0 1 -1v-12a1 1 0 0 0 -1 -1h-6"></path>
                                        <path d="M10 3m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
                                        <path d="M14 16h2"></path>
                                        <path d="M14 12h4"></path>
                                    </svg>
                                </span>
                                <p class="text-[14px]">Enjoy cheaper shipping fees when you select a PickUp Station at checkout</p>
                            </li>
                            <li class="flex gap-x-4 my-4">
                                <span class="w-16 h-11 rounded-[6px] border-[1px] border-gray-00 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-id-badge-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="current"></path>
                                        <path d="M7 12h3v4h-3z"></path>
                                        <path d="M10 6h-6a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h16a1 1 0 0 0 1 -1v-12a1 1 0 0 0 -1 -1h-6"></path>
                                        <path d="M10 3m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
                                        <path d="M14 16h2"></path>
                                        <path d="M14 12h4"></path>
                                    </svg>
                                </span>
                                <p class="text-[14px]">Enjoy cheaper shipping fees when you select a PickUp Station at checkout</p>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white my-5 rounded-md relative lg:sticky top-[10px] left-0">
                        <ul>
                            <li class="py-2 px-3 border-gray-200 flex items-center gap-x-2 hover:bg-gray-100 transition-all ease-in-out  border-b-[2px]">
                                <span class="block text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-collapse"><path d="m3 10 2.5-2.5L3 5"/><path d="m3 19 2.5-2.5L3 14"/><path d="M10 6h11"/><path d="M10 12h11"/><path d="M10 18h11"/></svg></span>
                                <a href="{{ Route('index') }}">Product details</a>
                            </li>
                            <li class="py-2 px-3 border-gray-200  flex items-center gap-x-2 hover:bg-gray-100 transition-all ease-in-out  border-b-[2px]">
                                <span class="block text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rainbow"><path d="M22 17a10 10 0 0 0-20 0"/><path d="M6 17a6 6 0 0 1 12 0"/><path d="M10 17a2 2 0 0 1 4 0"/></svg></span>
                                <a href="{{ Route('index') }}">Specifications</a>
                            </li>
                            <li class="py-2 px-3 border-gray-200  flex items-center gap-x-2  hover:bg-gray-100 transition-all ease-in-out border-b-[2px]">
                                <span class="block text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-images"><path d="M18 22H4a2 2 0 0 1-2-2V6"/><path d="m22 13-1.296-1.296a2.41 2.41 0 0 0-3.408 0L11 18"/><circle cx="12" cy="8" r="2"/><rect width="16" height="16" x="6" y="2" rx="2"/></svg></span>
                                <a href="{{ Route('index') }}">Product showcase</a>
                            </li>
                            <li class="py-2 px-3 border-gray-200  flex items-center gap-x-2 hover:bg-gray-100 transition-all ease-in-out  border-b-[2px]">
                                <span class="block text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-messages-square"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z"/><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/></svg></span>
                                <a href="{{ Route('index') }}">Buyers feedback</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-md">
                        <h2 class="py-3 px-3 border-b-2 border-gray-300">Seller information</h2>
                        <div class="px-3 py-3">
                            <div class="">
                                <span class="block font-semibold text-[20px]" x-text='uppercase(product.shop.intitule)'>CODEC SHOP</span>
                                <span class="block text-gray-400 text-[15px]">Logbessou, Douala</span>
                            </div>
                            <div class="">
                                <div class="flex flex-col gapy-2 py-12">
                                    <ul class="flex gap-x-1 items-center justify-center">
                                        <li class="text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        </li>
                                        <li class="text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        </li>
                                        <li class="text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        </li>
                                        <li class="text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        </li>
                                        <li class="text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        </li>
                                    </ul>
                                    <span class="flex  text-gray-400 justify-center items-center">0 customer reviews</span>
                                </div>
                                <div class="flex justify-between">
                                    <a class="inline-block py-2 px-8 rounded-lg text-center bg-red-100 text-red-600 font-semibold" href="{{ Route('index') }}">Our shop</a>
                                    <a class="inline-block py-2 px-8 rounded-lg text-center bg-red-100 text-red-600 font-semibold" href="{{ Route('index') }}">Message</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="bg-white mt-4 p-8 flex gap-x-8 rounded-md">
                        <img class="w-[100px] h-[100px]" src="{{ asset('images/pngs/phone 6000.png') }}" alt="imag of a phone">
                        <div class="flex flex-col gap-y-2">
                            <p>Lorem ipsum dolor sit amet.</p>
                            <span class="text-red-600 font-bold">5 500 XAF</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="px-4 lg:px-4 2xl:px-0">
        <div class="w-full bg-white my-[28px] 2xl:max-w-[1480px] mx-auto rounded-lg">
            <div class="flex items-center">
                <h2 class="text-[20px] py-4 px-4 border-b-2 w-[100%] lg:w-[100%] font-bold uppercase">TROUVER DES PRODUITS PAR MARQUE</h2>
            </div>
            <div id="sliderContainer" class="whitespace-nowrap grid grid-cols-2 md:grid-cols-3 grid-flow-row-dense px-4 py-4 gap-y-3 lg:flex lg:flex-row lg:overflow-hidden items-center gap-x-[10px]">
                <div class="p-[11.86px] rounded-md shadow-md bg-white">
                    <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                    <div>
                        <p class="text-gray-500 text-sm">(Jacket + Vest + Pants)</p>
                        <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">High-end Groom Formaluated suites</p>
                        <div class="flex justify-between items-center py-1">
                            <small class="font-semibold text-[12px] text-gray-600">10 set</small>
                            <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <span class="block font-bold text-sm">70 000 FCFA</span>
                        </div>
                    </div>
                </div>

                <!-- Repeat the above code for other products -->

                <div class="p-[11.86px] rounded-md shadow-md bg-white">
                    <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                    <div>
                        <p class="text-gray-500 text-sm">(Another Product)</p>
                        <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                        <div class="flex justify-between items-center py-1">
                            <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                            <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <span class="block font-bold text-sm">50 000 FCFA</span>
                        </div>
                    </div>
                </div>
                <div class="p-[11.86px] rounded-md shadow-md bg-white">
                    <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                    <div>
                        <p class="text-gray-500 text-sm">(Another Product)</p>
                        <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                        <div class="flex justify-between items-center py-1">
                            <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                            <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <span class="block font-bold text-sm">50 000 FCFA</span>
                        </div>
                    </div>
                </div>
                <div class="p-[11.86px] rounded-md shadow-md bg-white">
                    <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                    <div>
                        <p class="text-gray-500 text-sm">(Another Product)</p>
                        <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                        <div class="flex justify-between items-center py-1">
                            <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                            <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <span class="block font-bold text-sm">50 000 FCFA</span>
                        </div>
                    </div>
                </div>
                <div class="p-[11.86px] rounded-md shadow-md bg-white">
                    <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                    <div>
                        <p class="text-gray-500 text-sm">(Another Product)</p>
                        <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                        <div class="flex justify-between items-center py-1">
                            <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                            <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <span class="block font-bold text-sm">50 000 FCFA</span>
                        </div>
                    </div>
                </div>
                <div class="p-[11.86px] rounded-md shadow-md bg-white">
                    <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                    <div>
                        <p class="text-gray-500 text-sm">(Another Product)</p>
                        <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                        <div class="flex justify-between items-center py-1">
                            <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                            <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <span class="block font-bold text-sm">50 000 FCFA</span>
                        </div>
                    </div>
                </div>
                <div class="p-[11.86px] rounded-md shadow-md bg-white">
                    <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                    <div>
                        <p class="text-gray-500 text-sm">(Another Product)</p>
                        <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                        <div class="flex justify-between items-center py-1">
                            <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                            <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <span class="block font-bold text-sm">50 000 FCFA</span>
                        </div>
                    </div>
                </div>
                <div class="p-[11.86px] rounded-md shadow-md bg-white">
                    <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                    <div>
                        <p class="text-gray-500 text-sm">(Another Product)</p>
                        <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                        <div class="flex justify-between items-center py-1">
                            <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                            <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <span class="block font-bold text-sm">50 000 FCFA</span>
                        </div>
                    </div>
                </div>
                <div class="p-[11.86px] rounded-md shadow-md bg-white">
                    <span class="block"><img src="{{ asset('images/pngs/jacket.png') }}" alt="" width="105" class="w-full object-cover h-full"></span>
                    <div>
                        <p class="text-gray-500 text-sm">(Another Product)</p>
                        <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of another product</p>
                        <div class="flex justify-between items-center py-1">
                            <small class="font-semibold text-[12px] text-gray-600">5 set</small>
                            <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <span class="block font-bold text-sm">50 000 FCFA</span>
                        </div>
                    </div>
                </div>

                <div class="p-[11.86px] rounded-md shadow-md bg-white">
                    <span class="block"><img src="{{ asset('images/pngs/one_more_product.png') }}" alt="" width="105"></span>
                    <div>
                        <p class="text-gray-500 text-sm">(One More Product)</p>
                        <p class="w-full lg:w-[189px] text-xs text-gray-500 truncate">Description of one more product</p>
                        <div class="flex justify-between items-center py-1">
                            <small class="font-semibold text-[12px] text-gray-600">3 set</small>
                            <span class="font-bold inline-block text-[12px] text-gray-600">Other</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <span class="block font-bold text-sm">30 000 FCFA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 lg:px-4 2xl:px-0 my-10 overflow-hidden">
        <div class="2xl:max-w-[1480px] mx-auto bg-white rounded-lg">
            <h2 class="text-[20px] font-bold py-4 px-4 border-b-[1px] uppercase">A Brief about this vendor</h2>
            <p class="px-4 py-4 text-gray-500">The XYZ Smartwatch is a stylish and advanced wearable device that combines the functionality of a smartwatch with the elegance of a traditional timepiece. With its sleek design and cutting-edge features, it's the perfect companion for those who want to stay connected and enhance their active lifestyle.

                <span class="block"><br><strong>Key Features:</strong></span>

                <br>- Fitness Tracking: The XYZ Smartwatch comes equipped with a built-in heart rate monitor, pedometer, and sleep tracker. It helps you stay on top of your fitness goals by monitoring your daily activity levels and providing valuable insights into your health and well-being.

                <br><br>- Notifications and Connectivity: Stay connected on the go with the XYZ Smartwatch. Receive call, message, and social media notifications directly on your wrist, so you never miss an important update. It also offers Bluetooth connectivity, allowing you to sync it with your smartphone for seamless integration.

                <br> <br>- Customizable Watch Faces: Express your personal style with a wide range of customizable watch faces. Choose from various designs, colors, and complications to match your mood and outfit, ensuring that your XYZ Smartwatch always reflects your unique personality.

                <br><br>- Water and Dust Resistance: Designed to withstand your active lifestyle, the XYZ Smartwatch is water and dust resistant. Whether you're sweating it out at the gym or caught in the rain, you can wear it with confidence, knowing it can handle the elements.

                <br><br>- Long Battery Life: With its efficient power management system, the XYZ Smartwatch offers an impressive battery life. You can enjoy using it throughout the day without worrying about frequent recharging.

                <br><br>- Compatibility: The XYZ Smartwatch is compatible with both iOS and Android devices, making it a versatile option for users across different platforms. Simply download the companion app and sync it with your smartphone to unlock its full potential.

                Experience the future of wearable technology with the XYZ Smartwatch. Stay connected, monitor your health, and elevate your style with this feature-packed smartwatch.</p>
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
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="{{ Route('index') }}">Payer avec Aleipay (deballagepay)</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="{{ Route('index') }}">deballage pour les enfants</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="{{ Route('index') }}">Adhésions fournisseurs</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="{{ Route('index') }}">Options et délais de livraison</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="">Intelligence artificielle pour les PME</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="{{ Route('index') }}">Programme de distribution deballage</a></li>
                            </ul>
                        </div>
                        <div class="px-4">
                            <h4 class='text-4 lg:text-[18px] font-semibold'> Apprendre et Grandir</h4>
                            <ul class='font-thin text-[13px] lg:text-[13px] pt-[14px]'>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">Académie des affaires d'deballage</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">deballage pour les enfants</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">Expérience d'achat VR/AR</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">Make money with Aleicon</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="">Programme d'affiliation deballage</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">Publicité et promotion</a></li>
                            </ul>
                        </div>
                        <div class="px-4">
                            <h4 class='text-4 lg:text-[18px] font-semibold'>Explorer Resources</h4>
                            <ul class='font-thin text-[13px] lg:text-[13px] pt-[14px]'>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">deballage pour les Entreprises</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">À propos de deballage.com</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">Success Stories</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">Customer Service</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">deballage Return Policy</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">Help Center</a></li>
                                <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">Terms & condition</a></li>
                            </ul>
                        </div>
                        <div class="px-4">
                            <h4 class='text-4 lg:text-[18px] font-semibold'>Buyers Zone</h4>
                            <ul class='font-thin text-[13px] lg:text-[13px] pt-[14px]'>
                                <li class='py-[8.47px] pr-[59px]'><a href="{{ Route('index') }}">My Account</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="{{ Route('index') }}">Order Tracking</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="{{ Route('index') }}">Wish List</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="{{ Route('index') }}">Frequent Questions</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="{{ Route('index') }}">Product Warranty</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="{{ Route('index') }}">API Développeur</a></li>
                                <li class='py-[8.47px] pr-[59px]'><a href="{{ Route('index') }}">Product Support</a></li>
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
                    <span class='inline-block'><img src="{{ asset('images/pngs/mobile-money.png') }}" alt=""  w=150 /></span>
                    <span class='inline-block'><img src="{{ asset('images/pngs/om.png') }}" alt=""  w=150 /></span>
                    <span class='inline-block'><img src="{{ asset('images/pngs/uba.png') }}" alt=""  w=150 /></span>
                    <span class='inline-block'><img src="{{ asset('images/pngs/cash.png') }}" alt=""  w=150 /></span>
                    <span class='inline-block'><img src="{{ asset('images/pngs/aws.png') }}" alt=""  w=150 /></span>
                </div>
            </div>
        </div>
    </footer>

    <script defer src="{{ asset('scripts/alpine.js') }}"></script>
    <script src="{{ asset('scripts/jquery.js') }}"></script>
    <script src="{{ asset('scripts/axios.js') }}"></script>
    <script src="{{ asset('scripts/index.js') }}"></script>

    <script src="{{ asset('scripts/app.js') }}"></script>
    <script src="{{ asset('scripts/dropdown.js') }}"></script>
    <script src="{{ asset('scripts/product-detail.js') }}"></script>
</body>
</html>