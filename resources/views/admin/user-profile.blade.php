<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body class="bg-white">
    <main class="flex">
        <aside class="w-[100%] lg:w-[20%] panel-slider absolute lg:relative bg-white  lg:block ">
            <div class="dash-header h-screen relative">
                <div class="">
                    <div class="avatar flex flex-col items-center py-8">
                        <span class="w-[130px] rounded-full h-[130px] bg-gray-200 flex items-center justify-center"><img src="../images/svgs/icon_user.svg" alt=""></span>
                        <div class="text-center mt-4">
                            <span class="block font-bold text-lg text-gray-800">ETA NELSON</span>
                            <span class="block text-gray-500">etanelson@gmail.com</span>
                        </div>
                    </div>
                    <svg id="closeButton" class="absolute lg:hidden top-[5%] right-[10%]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </div>
                <div class="mt-8">
                    <ul>
                        <li class="w-full flex items-center justify-start pl-[59px] py-3">
                            <i class="fa fa-home inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="#" class="font-medium text-gray-800">Dashboard</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-hourglass-end inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="#" class="font-medium text-gray-800">Purchse history</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-cart-arrow-down inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="#" class="font-medium text-gray-800">Digital purchase</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-refresh inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="#" class="font-medium text-gray-800">Manage account</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-life-ring inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="#" class="font-medium text-gray-800">Support ticket</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-gratipay inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="#" class="font-medium text-gray-800">My whishlist</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-plus-square-o inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="#" class="font-medium text-gray-800">List and Ad</a>
                        </li>
                    </ul>
                </div>
            </div>

        </aside>
        <section class="flex flex-col w-ful lg:px-0 lg:w-[80%]">
            <div class="w-full dash-content">
                <div class="dash-nav bg-white w-full flex justify-between px-[25px] py-4 lg:py-[11.5px] shadow-md">
                    <div class="flex gap-3">
                        <button id="openButton"><img src="../images/svgs/icon_menu.svg" alt="icon of showing a hamburger menu"></button>
                        <div class="hidden lg:flex gap-2">
                            <a href="#" class="w-[42.2px] h-[42.2px] rounded-full flex justify-center items-center bg-gray-200"><img src="../images/svgs/la_globe.svg" alt="icon showing the globe"></a>
                            <a href="#" class="w-[42.2px] h-[42.2px] rounded-full flex justify-center items-center bg-gray-200"><img src="../images/svgs/ph_printer.svg" alt="icon showing a printer"></a>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <button><img class="w-[24px]" src="../images/svgs/icon-bell.svg" alt="icon illustrating the notification icons"></button>
                        <button class="flex gap-1 items-center">
                            <img class="w-[24px]" src="../images/svgs/icon-language.svg" alt="icon showing that this page is localize">
                            <span class="block text-gray-500 font-medium">EN</span>
                        </button>
                        <div class="hidden lg:flex gap-2 ">
                            <div class="w-[44px] h-[44px] bg-gray-300 rounded-full flex justify-center items-center">
                                <img class="w-[20px]" src="../images/svgs/icon_user.svg" alt="icon of an avatar">
                            </div>
                            <div class="">
                                <span class="block text-sm font-medium mb-0">ETA Nelson</span>
                                <span class="block text-[12px] text-gray-400">Customer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-5 px-6 lg:px-[25px]">
                    <div class="flex justify-between items-center">
                       <div class="">
                            <h1 class="text-[30px] font-bold text-gray-800">Deballage Buyer's Profile</h1>
                            <span class="text-gray-600 text-base">Manage your personalize buyer's account here</span>
                       </div>

                    </div>
                   <div class="pt-6 lg:pt-16 w-full px-5">
                        <div class="flex w-full flex-col lg:flex-row gap-8 items-start">
                            <div class="w-[80px] lg:w-[220px] h-[80px] lg:h-[180px] rounded-full flex justify-center items-center bg-gray-200">
                                <img class="w-[40px] lg:w-[80px]" src="../images/svgs/icon_user.svg" alt="avatar icon for a user">
                            </div>
                            <div class="w-full">
                                <p class="font-bold">ETA NELSON <span class="ml-3 inline-block p-1 rounded-sm text-[10px] font-medium bg-red-100 text-red-800">Premium user</span></p>
                                <ul class="space-y-2 mt-3">
                                    <li class="flex items-center gap-2 text-gray-700">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span class="font-light">Add phone</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span class="font-light">etanelson@gmial.ocm</span>
                                    </li>
                                </ul>
                                <div class="flex flex-col w-full lg:flex-row gap-6 mt-6 text-center">
                                    <div class="p-2 w-full  border-[1px] rounded">
                                        <span class="font-light text-gray-600">Wallet Balance</span>
                                        <span class="mt-2 block text-[18px] font-bold text-gray-800">0 FCFA</span>
                                    </div>
                                    <div class="p-2 w-full border-[1px] rounded">
                                        <span class="font-light text-gray-600">Orders</span>
                                        <span class="mt-2 block text-[18px] font-bold text-gray-800">80</span>
                                    </div>
                                    <div class="p-2 w-full border-[1px] rounded">
                                        <span class="block font-light text-gray-600">Delivered</span>
                                        <span class="text-[18px] font-bold text-gray-800 mt-2">79%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <div class="flex justify-between items-center">
                                <h3 class="text-[20px] font-bold text-gray-800">Profile Details</h3>
                                <a href="#" class="bg-black block  px-5 m-0 lg:mr-8 py-3 text-white rounded-md">Edit profile</a>
                            </div>
                            <div class="mt-7">
                                <ul class="space-y-5 w-full lg:max-w-[700px]">
                                    <li class="flex justify-between items-center">
                                        <span class="text-lg inline-block text-gray-500">Name</span>
                                        <span class="text-lg inline-block text-gray-700">ETA NELSON</span>
                                    </li>
                                    <li class="flex justify-between items-center">
                                        <span class="text-lg inline-block text-gray-500">Phone number</span>
                                        <span class="text-lg inline-block text-gray-700">--:--</span>
                                    </li>
                                    <li class="flex justify-between items-center">
                                        <span class="text-lg inline-block text-gray-500">Communication</span>
                                        <span class="text-lg inline-block text-gray-700">Emial, Phone</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="flex justify-center items-center py-2 border-t-[1px]  text-gray-500">
        <span>© Deballage.com v6.3.0</span>
    </footer>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" integrity="sha512-FEQLazq9ecqLN5T6wWq26hCZf7kPqUbFC9vsHNbXMJtSZZWAcbJspT+/NEAQkBfFReZ8r9QlA9JHaAuo28MTJA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        const panelSlider = document.querySelector('.panel-slider');
        const closeButton = document.getElementById('closeButton');
        const openButton = document.getElementById('openButton');

        openButton.addEventListener("click", () => {
            panelSlider.classList.add('active')
        });
        closeButton.addEventListener("click", () => {
            panelSlider.classList.remove('active')
        })
    </script>
</body>
</html>