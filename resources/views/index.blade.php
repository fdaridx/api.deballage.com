
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('dist/output.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/index.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Discover the latest fashion trends and shop for high-quality clothes at Deballage. Explore our wide range of stylish clothing for men, women, and kids. From casual wear to formal attire, find the perfect outfit for every occasion. Enjoy fast shipping, easy returns, and excellent customer service. Upgrade your wardrobe today with Deballage.">
    <meta name="keywords" content="Deballage, clothing, fashion, apparel, trendy clothes, stylish outfits, men's fashion, women's fashion, kids fashion, online shopping, fast shipping, easy returns">
    <meta name="author" content="Deballage">

    <!-- Open Graph meta tags for social media sharing -->
    <meta property="og:title" content="Deballage">
    <meta property="og:description" content="Discover the latest fashion trends and shop for high-quality clothes at Deballage. Explore our wide range of stylish clothing for men, women, and kids. From casual wear to formal attire, find the perfect outfit for every occasion. Enjoy fast shipping, easy returns, and excellent customer service. Upgrade your wardrobe today with Deballage.">
    <meta property="og:image" content="https://web.facebook.com/photo/?fbid=105308502580765&set=a.105308552580760">
    <meta property="og:url" content="http://www.deballage.cm">
    <meta property="og:type" content="website">
    {{-- <script src="https://kit.fontawesome.com/523af87d78.js') }}" crossorigin="anonymous"></script> --}}
    <title>Deballage</title>


</head>
<body class="bg-[#F2F3F7]">

    <!-- Header -->
    <header>
        <!-- Navbar starts here -->
        <nav class="relative">
            <!-- secondary navbar -->
            <div class="bg-slate-800 py-3 hidden md:block px-6 2xl:px-0">
                <div class="2xl:max-w-[1480px] mx-auto flex justify-between text-sm">
                    <div class="flex text-white md:gap-x-3 lg:gap-7">
                        <a href="">English</a>
                        <a href="">French</a>
                    </div>
                    <div class="second-nav-items text-slate-50 flex md:gap-x-4 lg:gap-7 lg:text-sm">
                        <a href="{{ Route('index') }}" class="block">Shop grocery</a>
                        <a href="{{ Route('index') }}" class="block">Merchant Center</a>
                        <a href="{{ Route('index') }}" class="block">Source Suppliers</a>
                        <a href="{{ Route('index') }}" class="block">Order tracking</a>
                        <span class="block"><a href="{{ Route('register') }}">Register</a> or <a href="{{ Route('login') }}">Login</a></span>
                    </div>
                </div>
            </div>
            <!-- Primary navbar -->
            <div class="bg-black py-[7px] hidden lg:block">
                <div class="2xl:max-w-[1480px] mx-auto flex  justify-center items-center">
                    <div class="logo w-[12.5%] flex justify-center">
                        <a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/deballage-logo.png') }}" alt="deballage logo" /></a>
                    </div>
                    <div class="search-bar flex w-[75%] px-[15px]">
                        <div class="search w-full mr-2">
                            <input class="block caret-red-800 pl-7 py-[10px] w-full h-full rounded-[3.56px] " type="search" placeholder='Rechercher des produits, des marques, des catégories sur deballage.com' />
                        </div>
                        <a href='{{ Route('index') }}' class=" hover:bg-red-600 transition-all w-[15%] flex items-center h-[inherit] px-[14px] py-[5.43px] gap-1 bg-red-700 text-white rounded-[3.56px]"><span class='inline-block'>CHERCHER</span> <img src="{{ asset('images/svgs/search.svg') }}" alt="search an item" /></a>
                    </div>
                    <div class="icons-set flex gap-2 w-[12.5%]">
                        <a href="{{ Route('index') }}" class="block"><img src="{{ asset('images/svgs/fillter.svg') }}" alt="filtrer vos produits" /></a>
                        <a href="{{ Route('index') }}" class="block"><img src="{{ asset('images/svgs/favorite.svg') }}" alt="consulter vos favoris" /></a>
                        <a href="{{ Route('index') }}" class="block"><img src="{{ asset('images/svgs/cart.svg') }}" title="regarder votre panier" /></a>
                    </div>
                </div>
            </div>
            <!-- mobile navbar -->
            <div class="p-4 lg:px-0 bg-black lg:hidden">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <button class="menuToggle"><img id="openIcon" src="{{ asset('images/svgs/icon_menu.svg') }}" alt=""></button>
                        <div class="w-[120px] h-auto"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/deballage-logo.png') }}" alt=""></a></div>
                    </div>
                    <div class="cart"><img src="{{ asset('images/svgs/cart.svg') }}" alt=""></div>
                </div>
                <div class="flex py-3">
                    <input class="p-2 rounded-[3.95px] rounded-tr-none rounded-br-none w-[87%]" placeholder="Rechercher des produits, des marques" type="search" name="" id="">
                    <button class="bg-red-700 w-[13%] flex justify-center items-center rounded-[3.95px] rounded-tl-none rounded-bl-none p-2"><img src="{{ asset('images/svgs/search.svg') }}" alt=""></button>
                </div>

                <div id="menuItems" class="h-screen w-full bg-black bg-opacity-40 absolute top-0 left-0 menu shadow-lg translate-x-[-100%]">

                    <ul class="w-[65%] h-screen bg-white p-[21px] flex flex-col gap-y-[20px] ">
                        <div class="flex items-center justify-between pb-4">
                            <span class="block"><img src="{{ asset('images/pngs/logo-white.png') }}" alt=""></span>
                            <button class="menuToggle block" ><img id="closeIcon" src="{{ asset('images/svgs/icon-close.svg') }}" alt=""></button>
                        </div>
                        <li class="flex justify-between items-center gap-[6px]">
                        <span class="flex gap-1 items-center">
                            <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                            <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Men's & Women Fashion</a>
                        </span>
                        <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                        </li>
                        <li class="flex justify-between items-center gap-[6px]">
                        <span class="flex gap-1 items-center">
                            <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                            <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Laptops and Phone</a>
                        </span>
                        <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                        </li>
                        <li class="flex justify-between items-center gap-[6px]">
                        <span class="flex gap-1 items-center">
                            <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                            <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Beauty & Personal Care</a>
                        </span>
                        <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                        </li>
                        <li class="flex justify-between items-center gap-[6px]">
                        <span class="flex gap-1 items-center">
                            <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                            <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Lugage, Bags & Cases</a>
                        </span>
                        <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                        </li>
                        <li class="flex justify-between items-center gap-[6px]">
                        <span class="flex gap-1 items-center">
                            <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                            <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Toys, Kids & Babies</a>
                        </span>
                        <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                        </li>
                        <li class="flex justify-between items-center gap-[6px]">
                        <span class="flex gap-1 items-center">
                            <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                            <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Electrical Equipments</a>
                        </span>
                        <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                        </li>
                        <li class="flex justify-between items-center gap-[6px]">
                        <span class="flex gap-1 items-center">
                            <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                            <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Health & Medical supplies</a>
                        </span>
                        <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                        </li>
                        <li class="flex justify-between items-center gap-[6px]">
                        <span class="flex gap-1 items-center">
                            <span class="w-8 h-8 bg-gray-200 rounded-full block"></span>
                            <a href="{{ Route('index') }}" class="text-gray-600 truncate w-[168px]">Agriculture / Food & Bevarages</a>
                        </span>
                        <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Primary navbar ends here -->

            <!-- category navbar -->
            <div class="bg-white overflow-x-scroll">
                <ul class='2xl:max-w-[1480px]  md:py-2 lg:py-0 h-fit mx-auto flex md:gap-x-1 lg:gap-x-3 md:justify-center lg:items-center'>
                    <li class="flex items-center">
                        <a data-dropdown="dropdown1" class='dropdown-toggle px-[12px] relative primary-btn-sub-link text-[12px] lg:px-[20.39px] lg:hover:bg-gray-600 lg:hover:text-white transition-all ease-in-out py-[4px] lg:py-[12.32px] block'>Chaussures</a>
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
        <!-- Navbar ends here -->

        <!-- Hero section -->
        <div class="2xl:max-w-[1480px] mx-auto flex flex-col md:flex-row lg:flex-row gap-x-4 pt-4 pb-8 px-4 lg:px-4 2xl:px-0">
            <div class="w-[23%] rounded-[6.13px] bg-white hidden lg:block relative">
                <ul class="p-[21px] flex flex-col gap-y-[20px] w-full main-container" x-data="xcategorie">
                    <template x-for="(categorie, index) in categories?.slice(-10)">
                        <li class="flex justify-between items-center gap-[6px]"> <!--main container-->
                            <div class="w-full sidebar-trigger"> <!--sidebar trigger-->
                                <span class="flex gap-1 justify-between items-center w-full toggle-button">
                                    <div class="flex items-center gap-1">
                                        <span class="w-8 h-8 bg-gray-200 rounded-full overflow-hidden block bg-cover bg-center">
                                            <img class="w-full h-full object-cover" src="{{ asset('images/pngs/woman.png') }}" alt="woman in a yellow gown">
                                        </span>
                                        <a aria-label="see more products on Men's category" class="text-gray-600 truncate w-[168px]" x-text='categorie.name'></a>
                                    </div>
                                    <img src="{{ asset('images/svgs/caret-right.svg') }}" alt="caret icon pointing to the right">
                                </span>
                                <div class="sidebar-menu absolute xl:w-[700px] 2xl:w-[700px] z-10 bg-white shadow-lg rounded mt-2">
                                    <div class="">
                                        <div class="">
                                            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4 p-4 dropdown-animation">
                                                <template x-for='c in categorie.categories?.length > 0 ? categorie.categories : []'>
                                                    <div>
                                                        <h2 class="font-bold mb-3" x-text='c.name'></h2>
                                                        <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                                            <template x-for='(product, index) in c.products?.slice(-5)'>
                                                                <li><a href="{{ Route('index') }}" x-text='ucword(product.name)' aria-label="visit more items within the Ordinateur category"></li>
                                                            </template>
                                                        </ul>
                                                    </div>
                                                </template>
                                                <template x-if='categorie.categories?.length == 0'>
                                                    <div>
                                                        <h2 class="font-bold mb-3">Products</h2>
                                                        <ul class="text-[14px] mt-0 flex flex-col gap-y-1">
                                                            <template x-for='(product, index) in categorie.products?.slice(-5)'>
                                                                <li><a x-bind:href='product.details' x-text='ucword(product.name)' aria-label="visit more items within the Ordinateur category"></li>
                                                            </template>
                                                        </ul>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </template>
                </ul>
            </div>
            <div class="w-full md:w-[70%] lg:w-[55%]">
                <!-- <div class="h-[200px] md:h-[226px] lg:h-[346.83px] bg-white rounded-[8px] overflow-hidden">
                    <img class="w-full object-fill lg:object-cover h-full" src="{{ asset('images/jpgs/deballage.jpg') }}" alt="">
                </div> -->
                <div class="slider w-full h-[200px] md:h-[226px] lg:h-[346.83px] bg-white rounded-[8px] overflow-hidden">
                    <div class="slide-container h-full">
                        <div class="slide"><img src="{{ asset('images/jpgs/deballage.jpg') }}" alt="Promotional slide featuring the unveiling of new sweatshirts and hoodies collection."></div>
                        <div class="slide"><img src="{{ asset('images/jpgs/image-slider-home-2.webp') }}" alt="Promotional slide featuring the unveiling of new sweatshirts and hoodies collection."></div>
                        <div class="slide"><img src="{{ asset('images/jpgs/deballage.jpg') }}" alt="Promotional slide featuring the unveiling of new sweatshirts and hoodies collection."></div>
                    </div>
                    <div class="slider-controls hidden">
                        <button class="prev-btn hidden" aria-label="Previous Slide">&lt;</button>
                        <button class="next-btn hidden" aria-label="Next Slide">&gt;</button>
                    </div>
                    </div>

                <div class="py-[21px] bg-white rounded-[6.13px] flex md:flex-wrap lg:flex-nowrap lg:flex-row flex-col gap-y-5 lg:items-center mt-2">
                    <div class="px-4  lg:px-[25px] flex gap-x-2 items-center">
                        <span><img width="43" src="{{ asset('images/svgs/discount.svg') }}" alt="Icon representing a discount"></span>
                        <span>
                            <h4 class="text-[#333333] font-semibold text-[14px] text-ellipsis truncate w-full lg:w-[160px]">Trouver des fournisseur</h5>
                            <p class="font-thin text-[14px]">Trouver des fournisseur</p>
                        </span>
                    </div>
                    <div class="px-4  lg:px-[25px] lg:border-l-2border-none lg:border-r-2border-none border-gray-200 flex gap-x-2 items-center text-ellipsis">
                        <span><img width="43" src="{{ asset('images/svgs/logistic.svg') }}" alt="Icon representing logistic"></span>
                        <span>
                            <h4 class="text-[#333333] font-semibold text-[14px] truncate w-full lg:w-[160px]">Services Logistiques</h5>
                            <p class="font-thin text-[14px] text-ellipsis w-full lg:w-[160px] truncate">Reliable shipping across the globe</p>
                        </span>
                    </div>
                    <div class="px-4  lg:px-[25px] flex gap-x-2 items-center">
                        <span><img width="43" src="{{ asset('images/svgs/gem.svg') }}" alt="Icon representing gem and prestige features"></span>
                        <span>
                            <h4 class="text-[#333333] font-semibold text-[14px] truncate w-full lg:w-[160px]">Avantages du club des sapeur</h5>
                            <p class="font-thin text-[14px]">Decouvres plus de swag</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full mt-2 lg:mt-0 md:w-[50%] lg:w-[25%] rounded-[6.13px]">
                <div class="rounded-[6.13px] bg-white p-[21px]">
                    <div class="flex gap-x-[17.5px]">
                        <span class="inline-block p-4 bg-gray-400 rounded-full"><img src="{{ asset('images/svgs/account.svg') }}" alt=""></span>
                        <span class="block ">
                            <p class="font-thin text-gray-500">Bienvenue</p>
                            <span class="text-[17.5px] font-bold">Compte Acheteur</span>
                        </span>
                    </div>
                    <div class="pt-[18px]">
                        <a href="{{ Route('register') }}" aria-label="link to register" class="inline-block py-3 px-4 rounded-full bg-red-700 text-white">S'enregistrer</a>
                        <a href="{{ Route('login') }}" aria-label="link to login" class="inline-block py-3 px-4 rounded-full bg-red-700 text-white">Se connecter</a>
                    </div>
                </div>
                <div class="rounded-[6.13px] bg-white mt-2 p-[21px]" x-data='xproductList'>
                    <h5 class="font-bold">Offres spéciales aujourd’hui </h5>
                    <p class="w-[231px] truncate text-gray-500 font-thin">Trouvez des produits sur les promotion speciale sur deballage</p>
                    <div class="py-[18px] flex flex-col gap-y-[21px]">
                        <template x-for='product in productRandoms?.slice(-2)'>
                            <div class="flex items-center gap-x-3">
                                <span class="block w-[60px] h-[60px] overflow-hidden bg-gray-200 rounded-[10.5px]"><img class="object-cover object-center w-full h-full" x-bind:src="`/storage/${product.images[0].path}`" alt=""></span>
                                <span>
                                    <p class="text-[9px] font-thin">0 stock</p>
                                    <span class="text-[14px] font-bold text-red-500" x-text='`${product.price} FCFA`'></span>
                                </span>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header ends here -->

    <main>
        <!-- Section categories -->
        <section class="px-4 lg:px-4 2xl:px-0">
            <div class="2xl:max-w-[1480px] mx-auto grid grid-cols-1 lg:grid-cols-3 gap-2" x-data='xproductList'>
                <div class="arrivals bg-white p-3 rounded-md text-red">
                    <div class="flex items-center gap-x-2">
                        <span class="w-[32px] rounded-full h-[32px] flex justify-center items-center bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 48 48"><defs><mask id="ipTGreenNewEnergy0"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path d="M42.336 16C39.249 8.936 32.2 4 24 4C15.799 4 8.75 8.936 5.664 16"></path><path fill="#dc2626" d="M24 14a19.94 19.94 0 0 0-6 14.283c0 .5.018.996.055 1.488A19.938 19.938 0 0 1 24 44a19.938 19.938 0 0 1 5.945-14.23A19.94 19.94 0 0 0 24 14"></path><path fill="#dc2626" d="M4 24c0 11.046 8.954 20 20 20a19.938 19.938 0 0 0-5.945-14.23A19.936 19.936 0 0 0 4 24"></path><path fill="#dc2626" d="M44 24c0 11.046-8.954 20-20 20a19.938 19.938 0 0 1 5.945-14.23A19.936 19.936 0 0 1 44 24"></path></g></mask></defs><path fill="#dc2626" d="M0 0h48v48H0z" mask="url(#ipTGreenNewEnergy0)"></path></svg></span>
                        <p class="font-bold">Nouveaux arrivant</p>
                    </div>
                    <div class="flex lg:flex-nowrap pt-4 gap-x-2">
                        <template x-for='product in products?.slice(-3)'>
                            <div class="flex flex-col items-center w-[33.3%] ">
                                <span class="block w-full lg:w-[100%]  2xl:w-[148px] h-[210px] bg-gray-200"><img x-bind:src="`/storage/${product.images[0].path}`" class="w-full h-full object-cover object-center" alt="black hoodie"></span>
                                <span class="">
                                    <p class="text-center" x-text='ucword(product.name)'></p>
                                    <h6 class="font-semibold" x-text='`${product.price}`'></h6>
                                </span>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="arrivals bg-white p-3 rounded-md">
                    <div class="flex items-center gap-x-2">
                        <span class="flex justify-center items-center w-[32px] rounded-full h-[32px] bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 1200 1200"><path fill="#de4437" d="M600 0C268.629 0 0 268.629 0 600s268.629 600 600 600s600-268.629 600-600S931.371 0 600 0m3.955 209.912l94.556 295.239l309.889 6.958l-251.588 181.055l89.136 296.924l-249.976-183.325l-254.81 176.587l97.119-294.434l-246.68-187.793l310.034 1.392z"></path></svg>
                        </span>
                        <p class="font-bold">Offres du jours</p>
                    </div>
                    
                    <div class="flex lg:flex-nowrap gap-x-2 pt-4">
                        <template x-for='product in productRandoms?.slice(-3)'>
                            <div class="flex flex-col items-center w-[33.3%] ">
                                <span class="block w-full lg:w-[100%]  2xl:w-[148px] h-[210px] bg-gray-200"><img x-bind:src="`/storage/${product.images[0].path}`" class="w-full h-full object-cover object-center" alt="black hoodie"></span>
                                <span class="">
                                    <p class="text-center" x-text='ucword(product.name)'>Other</p>
                                    <h6 class="font-semibold" x-text='`${product.price}`'>1 000 FCFA</h6>
                                </span>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="arrivals bg-white p-3 rounded-md">
                    <div class="flex items-center gap-x-2">
                        <span class="flex justify-center items-center w-[32px] rounded-full h-[32px] bg-gray-200"><i class="fal fa-tags" style="color: #de4545;"></i></span>
                        <p class="font-bold">Produits ci-dessous 20 000FCFA</p>
                    </div>
                    <div class="flex lg:flex-nowrap pt-4 gap-x-2">
                        <div class="flex flex-col items-center w-[33.3%]">
                            <span class="inline-block w-full lg:w-full  2xl:w-[148px] h-[210px] bg-gray-200"><img src="{{ asset('images/jpgs/hoodie-brown.jpeg') }}" class=" w-full h-full object-cover object-center" alt=""></span>
                            <span class="">
                                <p class="text-center">Other</p>
                                <h6 class="font-semibold">1 000 FCFA</h6>
                            </span>
                        </div>
                        <div class="flex flex-col items-center w-[33.3%]">
                            <span class="inline-block w-full lg:w-full  2xl:w-[148px] h-[210px] bg-gray-200"><img src="{{ asset('images/jpgs/hoodie-three-colors.jpeg') }}" alt="" class="w-full h-full object-cover object-center"></span>
                            <span class="">
                                <p class="text-center">Other</p>
                                <h6 class="font-semibold">3 000 FCFA</h6>
                            </span>
                        </div>
                        <div class="flex flex-col items-center w-[33.3%]">
                            <span class="inline-block w-full lg:w-full  2xl:w-[148px] h-[210px] bg-gray-200"><img class=" w-full h-full object-cover object-center" src="{{ asset('images/jpgs/men-hoodie-blue-white.jpeg') }}" alt=""></span>
                            <span class="">
                                <p class="text-center">Other</p>
                                <h6 class="font-semibold">17 000 FCFA</h6>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories section ends here -->

        <!-- Section categories principal -->
        <section class="mt-4 px-4 lg:px-4 2xl:px-0">
            <div class="2xl:max-w-[1480px] mx-auto bg-white rounded-md px-[16px] pb-4">
                <div class="flex w-full items-center">
                    <h2 class="text-[20px] w-[50%] lg:w-[30%] font-bold py-4">PRINCIPALES CATÉGORIES CE MOIS-CI</h2>
                    <span class="block bg-gray-300 h-[6px] w-[50%] lg:w-[70%] rounded-full"></span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4 mt-[22px]" x-data='xcategorie'>
                    <template x-for="(categorie, index) in categories?.slice(-5).length > 0 ? categories : []">
                        <div class="p-[28px] rounded hero-category flex">
                            <div class="img"><img x-bind:src="`/storage/${categorie.profile}`" alt=""></div>
                            <div class="content">
                                <h4 class="font-bold pb-1" x-text='ucword(categorie.name)'></h4>
                                <ul class="text-gray-600">
                                    <template x-for='product in categorie.products' x-if='categorie.products?.length == 0'>
                                        <li x-text='ucword(product.name)'></li>
                                    </template>
                                </ul>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>
        <!-- Section categorie -->

        <!-- Section Offres du jour -->
        <section class="mt-4 lg:my-4 px-4 lg:px-4">
            <div class="2xl:max-w-[1480px] mx-auto px-[16px] pb-4 bg-white rounded-md">
                <div class="flex items-center">
                    <h2 class="text-[20px] w-[40%] lg:w-[15%] font-bold py-4 uppercase">Offres du jour</h2>
                    <span class="block bg-gray-300 h-[6px] w-[60%] lg:w-[90%] rounded-full"></span>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-[22px]" x-data='xproductList'>
                    <template x-for='product in productRandoms'>
                        <div class="p-[11.86px] rounded-md shadow-md bg-white">
                            <span class="block"><img x-bind:src="`/storage/${product.images[0].path}`" alt=""></span>
                            <div class="">
                                <p class=" text-gray-500" x-text='ucword(product.name)'></p>
                                <p class="w-full lg:w-[189px] text-sm text-gray-500 truncate">High-end Groom Formaluated suites</p>
                                <div class="flex justify-between items-center py-1">
                                    <small class="font-semibold text-[14px] text-gray-600">10 set</small>
                                    <span class="font-bold inline-block text-[14px] text-gray-600">Other</span>
                                </div>
                                <div class="flex items-center justify-between gap-x-2">
                                    <span class="block font-bold" x-text='`${product.special_price}` FCFA'></span>
                                    <span class="text-[12px] font-bold line-through" x-text='`${product.price} FCFA`'></span>
                                </div>
                                <div class="flex items-center  justify-between">
                                    <span class="text-[12px] font-bold text-gray-500" x-text='ucword(product.category.name)'></span>
                                    <span class="text-[13px] font-bold uppercase p-1 bg-red-100 text-red-500" x-text='`${(product.special_price/product.price)*100} %`'></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>
        <!-- SEction offres du jours ends here -->

        <section class="my-[20px] px-4 2xl:px-0">
            <div class="2xl:max-w-[1480px] mx-auto bg-white rounded-[10.5px]">
                <div class="py-[42.57px] px-8 lg:px-[90px] flex flex-col md:flex-row lg:justify-between items-center">
                    <div class="md:w-[60%]">
                        <h2 class="text-[20px] lg:text-[38.5px] font-bold text-[#333333] w-full lg:w-[569px]">Reach millions of B2B and B2C
                            buyers globally with deballage</h2>
                        <p class="text-[14px] font-thin lg:font-normal text-gray-500 w-full lg:w-[569px]">Differentiate yourself from the competition with a full store
                            dedicated to your products- no coding or design skills
                            necessary!. Become part of the deballage sellers community
                            today and watch your business growth like magic.</p>
                            <a href="{{ Route('index') }}" class="inline-block mt-8 rounded-full py-[10px]  px-[32.23px] bg-red-700 text-white">Start selling now</a>
                    </div>
                    <div class="">
                        <img width="600" src="{{ asset('images/pngs/cta-img 1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section recmondez pour vous -->
        <section class="px-4 lg:px-4 2xl:px-0">
            <div class="2xl:max-w-[1480px] mx-auto">
                <h2 class="text-[20px] font-bold py-4">RECOMMANDÉ POUR VOUS</h2>
                <div x-data='xproductList' class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 grid-flow-row-dense lg:grid-rows-2 gap-x-2 gap-y-2">
                    <template x-for='product in productRandoms'>
                        <div class="p-[11.86px] rounded-md shadow-md bg-white">
                            <span class="block"><img x-bind:src="`/storage/${product.images[0].path}`" alt=""></span>
                            <div class="">
                                <p class=" text-gray-500" x-text='ucword(product.name)'></p>
                                <p class="w-full lg:w-[189px] text-sm text-gray-500 truncate">High-end Groom Formaluated suites</p>
                                <div class="flex justify-between items-center py-1">
                                    <small class="font-semibold text-[14px] text-gray-600">10 set</small>
                                    <span class="font-bold inline-block text-[14px] text-gray-600">Other</span>
                                </div>
                            <div class="flex items-center justify-between gap-x-2">
                                <span class="block text-[14px] font-bold" x-text="`${product.special_price} FCFA`"></span>
                                <span class="text-[12px] font-bold line-through" x-text="`${product.price} FCFA`"></span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-[12px] font-bold text-gray-500" x-text='ucword(product.category.name)'></span>
                                <span class="text-[13px] font-bold uppercase p-1 bg-red-100 text-red-500" x-text="`${(product.special_price/product.price*100)} %`"></span>
                            </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <!-- Section produit par marque -->
        <section class="px-4 lg:px-4 2xl:px-0">
            <div class="2xl:max-w-[1480px] mx-auto bg-white p-[7px] my-[28px] rounded-md">
                <div class="flex items-center">
                    <h2 class="text-[20px] w-[50%] lg:w-[35%] font-bold py-4 uppercase">TROUVER DES PRODUITS PAR MARQUE</h2>
                    <span class="block bg-gray-300 h-[6px] w-[50%] lg:w-[90%] rounded-full"></span>
                </div>
                <div class="px">
                    <ul class="grid grid-cols-3 lg:grid-cols-6 grid-flow-row-dense lg:grid-rows-2">
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/samsung copy.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/tecno.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/oppo.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/infinix.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/nivea.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/apc.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/xiaomi.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/pr.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/oraimo.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/huawei.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/remax.png') }}" alt=""></a></li>
                        <li class="px-[14px] border-[1px] border-slate-500"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/hisense.png') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section blog -->
        <section class="bg-white px-4 lg:px-6 2xl:px-0">
            <div class="2xl:max-w-[1480px] mx-auto">
                <h2 class="text-[20px] font-bold pt-4 pb-2">NOS SERVICES COMMERCIAUX SONT LÀ POUR VOUS</h2>
                <p class="text-[14px] text-gray-400 font-thin">Les services commerciaux d'deballage.com aident à garantir la protection de vos achats.</p>

                <div class="py-6 flex flex-col md:grid md:grid-cols-2 gap-y-3 lg:gap-y-0 lg:flex lg:flex-row gap-x-3">
                    <div class="rounded-md shadow-md py-2">
                        <div class="img w-full"><img class="w-full" src="{{ asset('images/pngs/blog-1.png') }}" alt=""></div>
                        <div class="content px-3 py-3">
                            <h4 class="w-[247px] truncate">From Fashion to Electronics:
                                Unveiling the Top 8 Online strategies</h4>
                            <p class="text-red-500 text-[14px] font-bold">28 Apr, 2023</p>
                            <p class="w-[300px] text-[14px] text-gray-400 font-thin">The e-commerce industry in Cameroon is
                                rapidly growing, with more and more people to follow your Product</p>
                                <span class="px-3 mt-3 inline-block py-1 rounded-full bg-red-300 text-[#333333] font-bold">Marketting</span>
                        </div>
                    </div>
                    <div class="rounded-md shadow-md">
                        <div class="img w-full"><img class="w-full" src="{{ asset('images/pngs/blog-2.png') }}" alt=""></div>
                        <div class="content py-3 px-3">
                            <h4 class="w-[247px] truncate">From Fashion to Electronics:
                                Unveiling the Top 8 Online strategies</h4>
                            <p class="text-red-500 text-[14px] font-bold">28 Apr, 2023</p>
                            <p class="w-[300px] text-[14px] text-gray-400 font-thin">The e-commerce industry in Cameroon is
                                rapidly growing, with more and more people to follow your Product</p>
                                <span class="px-3 mt-3 inline-block py-1 rounded-full bg-red-300 text-[#333333] font-bold">Marketting</span>
                        </div>
                    </div>
                    <div class="rounded-md shadow-md">
                        <div class="img w-full"><img class="w-full" src="{{ asset('images/pngs/blog-3.png') }}" alt=""></div>
                        <div class="content p-3">
                            <h4 class="w-[247px] truncate">From Fashion to Electronics:
                                Unveiling the Top 8 Online strategies</h4>
                            <p class="text-red-500 text-[14px] font-bold">28 Apr, 2023</p>
                            <p class="w-[300px] text-[14px] text-gray-400 font-thin">The e-commerce industry in Cameroon is
                                rapidly growing, with more and more people to follow your Product</p>
                                <span class="px-3 mt-3 inline-block py-1 rounded-full bg-red-300 text-[#333333] font-bold">Marketting</span>
                        </div>
                    </div>
                    <div class="rounded-md shadow-md">
                        <div class="img w-full"><img class="w-full" src="{{ asset('images/pngs/blog-4.png') }}" alt=""></div>
                        <div class="content p-3">
                            <h4 class="w-[247px] truncate">From Fashion to Electronics:
                                Unveiling the Top 8 Online strategies</h4>
                            <p class="text-red-500 text-[14px] font-bold">28 Apr, 2023</p>
                            <p class="w-[300px] text-[14px] text-gray-400 font-thin">The e-commerce industry in Cameroon is
                                rapidly growing, with more and more people to follow your Product</p>
                                <span class="px-3 mt-3 inline-block py-1 rounded-full bg-red-300 text-[#333333] font-bold">Marketting</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer starts here -->
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
                                        <img src="{{ asset('images/pngs/google-apple.png') }}" alt="download our app from the google apple store" />
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
                                    <li class='py-[8.47px] pr-[16px] lg:pr-[59px]'><a href="{{ Route('index') }}">Intelligence artificielle pour les PME</a></li>
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
                                    <li class='py-[8.47px] pr-[16px] lg:pr-[59px'><a href="{{ Route('index') }}">Programme d'affiliation deballage</a></li>
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
                        <span class='inline-block'><img src="{{ asset('images/pngs/mobile-money.png') }}" alt="" /></span>
                        <span class='inline-block'><img src="{{ asset('images/pngs/om.png') }}" alt="" /></span>
                        <span class='inline-block'><img src="{{ asset('images/pngs/uba.png') }}" alt="" /></span>
                        <span class='inline-block'><img src="{{ asset('images/pngs/cash.png') }}" alt="" /></span>
                        <span class='inline-block'><img src="{{ asset('images/pngs/aws.png') }}" alt="" /></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer ends here -->
    </main>

    <script defer src="{{ asset('scripts/alpine.js') }}"></script>
    <script src="{{ asset('scripts/jquery.js') }}"></script>
    <script src="{{ asset('scripts/axios.js') }}"></script>
    <script src="{{ asset('scripts/index.js') }}"></script>
    
    <script src="{{ asset('scripts/app.js') }}"></script>
    <script src="{{ asset('scripts/dropdown.js') }}"></script>

    {{-- <script src="{{ asset('scripts/search.js') }}"></script> --}}
</body>
</html>