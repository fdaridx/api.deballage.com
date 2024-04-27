<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="{{ asset('dist/output.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/index.css') }}">

    <script defer src="{{ asset('scripts/alpine.js') }}"></script>
    <script src="{{ asset('scripts/jquery.js') }}"></script>
    <script src="{{ asset('scripts/axios.js') }}"></script>
    <script src="{{ asset('scripts/alert.js') }}"></script>
    <script src="{{ asset('scripts/index.js') }}"></script>
</head>
<body class="bg-white">
    <main class="flex relative">
        <aside class="w-[100%] lg:w-[20%] panel-slider absolute lg:relative bg-white  lg:block ">
            <div class="dash-header h-screen relative">
                <div class="">
                    <div class="avatar flex flex-col items-center py-8">
                        <span class="w-[130px] rounded-full h-[130px] bg-gray-200 flex items-center justify-center"><img src="{{ asset('images/svgs/icon_user.svg') }}" alt=""></span>
                        <div class="text-center mt-4">
                            <span class="block font-bold text-lg text-gray-800">ETA NELSON</span>
                            <span class="block text-gray-500">etanelson@gmail.com</span>
                        </div>
                    </div>
                    <svg id="closeButton" class="absolute lg:hidden block  top-[5%] right-[10%]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </div>
                <div class="mt-8">
                    <ul>
                        <li class="w-full flex items-center justify-start pl-[59px] py-3">
                            <i class="fa fa-home inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="{{ route('index') }}" class="font-medium text-gray-800">Dashboard</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-hourglass-end inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="{{ route('index') }}" class="font-medium text-gray-800">Purchse history</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-cart-arrow-down inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="{{ route('index') }}" class="font-medium text-gray-800">Digital purchase</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-refresh inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="{{ route('index') }}" class="font-medium text-gray-800">Manage account</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-life-ring inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="{{ route('index') }}" class="font-medium text-gray-800">Support ticket</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-gratipay inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="{{ route('index') }}" class="font-medium text-gray-800">My whishlist</a>
                        </li>
                        <li class="w-full flex  justify-start pl-[59px] items-center py-3">
                            <i class="fa fa-plus-square-o inline-block mr-2 text-[18px] text-gray-800" aria-hidden="true"></i>
                            <a href="{{ route('index') }}" class="font-medium text-gray-800">List and Ad</a>
                        </li>
                    </ul>
                </div>
            </div>

        </aside>
        <section class="flex flex-col lg:flex-row w-full lg:w-[80%]">
            <div class="w-full dash-content">
                <div class="dash-nav bg-white w-full flex justify-between px-[25px] py-4 lg:py-[11.5px] shadow-md">
                    <div class="flex gap-3">
                        <button id="openButton"><img src="{{ asset('images/svgs/icon_menu.svg') }}" alt="icon of showing a hamburger menu"></button>
                        <div class="hidden lg:flex gap-2">
                            <a href="{{ route('index') }}" class="w-[42.2px] h-[42.2px] rounded-full flex justify-center items-center bg-gray-200"><img src="{{ asset('images/svgs/la_globe.svg') }}" alt="icon showing the globe"></a>
                            <a href="{{ route('index') }}" class="w-[42.2px] h-[42.2px] rounded-full flex justify-center items-center bg-gray-200"><img src="{{ asset('images/svgs/ph_printer.svg') }}" alt="icon showing a printer"></a>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <button><img class="w-[24px]" src="{{ asset('images/svgs/icon-bell.svg') }}" alt="icon illustrating the notification icons"></button>
                        <button class="flex gap-1 items-center">
                            <img class="w-[24px]" src="{{ asset('images/svgs/icon-language.svg') }}" alt="icon showing that this page is localize">
                            <span class="block text-gray-500 font-medium">EN</span>
                        </button>
                        <div class="hidden lg:flex gap-2 ">
                            <div class="w-[44px] h-[44px] bg-gray-300 rounded-full flex justify-center items-center">
                                <img class="w-[20px]" src="{{ asset('images/svgs/icon_user.svg') }}" alt="icon of an avatar">
                            </div>
                            <div class="">
                                <span class="block text-sm font-medium mb-0">ETA Nelson</span>
                                <span class="block text-[12px] text-gray-400">Customer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-5 lg:px-[25px] px-4">
                    <div class="flex flex-col lg:flex-row justify-between lg:items-center">
                       <div class="">
                            <h1 class="text-[24px] lg:text-[30px] font-bold text-gray-800">Good Day, ETA NELSON</h1>
                            <span class="text-gray-600 text-base">Deballage Buyer Account</span>
                       </div>
                       <div class="flex gap-3 mt-3 lg:mt-0">
                            <a href="" class="inline-block py-2 px-3 border-2 rounded-lg border-red-600 text-red-600">Fund my account</a>
                            <a id="addNewProduct" href="" class="inline-block py-2 px-3 border-2 rounded-lg border-red-600 bg-red-600 text-white">Add new proudct &plus; </a>
                       </div>
                    </div>
                   <div class="">
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-3 gap-y-3 lg:gap-x-5 mt-6">
                            <div class="shadow-md rounded-lg p-6">
                                <span class="font-semibold text-[14px] text-gray-500">Shopping basket</span>
                                <span class="block text-[20px] lg:text-[24px] my-2 font-medium text-gray-800">0 Products</span>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-500 text-xs font-light">Products</span>
                                    <span><img src="{{ asset('images/svgs/cart.svg.svg') }}" alt="icon of shopping cart"></span>
                                </div>
                            </div>
                            <div class="shadow-md rounded-lg p-6">
                                <span class="font-semibold text-[14px] text-gray-500">My whishlist</span>
                                <span class="block text-[20px] lg:text-[24px] my-2 font-medium text-gray-800">0 Products</span>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-500 text-xs font-light">Products</span>
                                    <span><img src="{{ asset('images/svgs/wishlist.svg.svg') }}" alt="icon of shopping cart"></span>
                                </div>
                            </div>
                            <div class="shadow-md rounded-lg p-6">
                                <span class="font-semibold text-[14px] text-gray-500">Products already</span>
                                <span class="block text-[20px] lg:text-[24px] my-2 font-medium text-gray-800">0 Products</span>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-500 text-xs font-light">Product(s) Ordered</span>
                                    <span><img src="{{ asset('images/svgs/product.svg.svg') }}" alt="icon of shopping cart"></span>
                                </div>
                            </div>
                            <div class="shadow-md rounded-lg p-6">
                                <span class="font-semibold text-[14px] text-gray-500">Shopping basket</span>
                                <span class="block text-[20px] lg:text-[24px] my-2 font-medium text-gray-800">0 Products</span>
                                <div class="flex justify-between items-center text-gray-500">
                                    <span class="text-xs font-light">Products</span>
                                    <span><img src="{{ asset('images/svgs/cart.svg.svg') }}" alt="icon of shopping cart"></span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-7 grid grid-cols-1 lg:grid-cols-12 lg:gap-8">
                            <div class="p-0 mt-4 lg:mt-0 lg:p-6 col-span-4">
                                <div class="">
                                    <h3 class="font-bold text-[17px]">Delivery Progress</h3>
                                    <p class="text-gray-500">Follow-up delivery process for your purchased order on Aleigro</p>
                                </div>
                                <div class=""></div>
                            </div>
                            <div class="p-0 lg:p-6 mt-4 lg:mt-0 col-span-8">
                                <div class="">
                                    <h3 class="font-bold text-[17px]">Your Spending Chart</h3>
                                    <p class="text-gray-500">See where you are spending more in your digital shopping experience.</p>
                                </div>
                                <div class="mt-4">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="mt-7 grid grid-cols-12 gap-8">
                            <div class="p-0 lg:p-6 mt-4 lg:mt-0 col-span-12">
                                <div class="">
                                    <h3 class="font-bold text-[17px]">Delivery Progress</h3>
                                    <p class="text-gray-500">Follow-up delivery process for your purchased order on Aleigro</p>
                                </div>
                                <div class=""></div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </section>

        <div id="modal" class="absolute  w-full h-full lg:h-screen top-0 left-0 bg-black bg-opacity-20 flex justify-center items-center">
            <div class="bg-white rounded-lg shadow-sm w-[90%] lg:w-[40%] h-fit lg:h-[90%] px-4 py-4 lg:py-6 lg:px-6">
                <div class="">
                    <h1 class="w-full h-full text-[24px] font-medium">Add a new product</h1>
                    {{-- <p class="text-gray-400 text-[16px] mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p> --}}
                </div>
                <form action="" class="py-3">
                    <div class="mb-4">
                        <label class="block text-gray-600 text-[16px] font-medium mb-2" for="productName">What is your product category?</label>
                        <select verify class="border-[1px] border-gray-600 appearance-none rounded-[8px] w-full py-3 px-3 text-gray-500 leading-tight focus:outline-none focus:border-[1px] border-gray-600-outline" id="category_id">
                            <option selected="" disabled="">
                                Select a categorie :
                            </option>
                            @foreach ($categories as $category)
                                <option value={{ $category->id }}>{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600 text-[16px] font-medium mb-2" for="productName">What is your product name?</label>
                        <input verify class="border-[1px] border-gray-600 appearance-none rounded-[8px] w-full py-3 px-3 text-gray-500 leading-tight focus:outline-none focus:border-[1px] border-gray-600-outline" id="productName" type="text" placeholder="Enter your product name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600 text-[16px] font-medium mb-2" for="productPrice">What is your product price</label>
                        <input verify class="border-[1px] border-gray-600 appearance-none rounded-[8px] w-full py-3 px-3 text-gray-500 leading-tight focus:outline-none focus:border-[1px] border-gray-600-outline" id="productPrice" type="number" placeholder="Enter your product price">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600 text-[16px] font-medium mb-2" for="productSpecialPrice">What is your product special price</label>
                        <input class="border-[1px] border-gray-600 appearance-none rounded-[8px] w-full py-3 px-3 text-gray-500 leading-tight focus:outline-none focus:border-[1px] border-gray-600-outline" id="productSpecialPrice" type="number" placeholder="Enter your product price">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600 text-[16px] font-medium mb-2" for="productStock">How many quantity is in stock</label>
                        <input class="border-[1px] border-gray-600 appearance-none rounded-[8px] w-full py-3 px-3 text-gray-500 leading-tight focus:outline-none focus:border-[1px] border-gray-600-outline" id="productStock" type="text" placeholder="Enter your product quantity">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600 text-[16px] font-medium mb-2" for="productImage">Upload image about your product</label>
                        <input verify class="border-[1px] border-gray-600 appearance-none rounded-[8px] w-full py-3 px-3 text-gray-500 leading-tight focus:outline-none focus:border-[1px] border-gray-600-outline" id="productImage" type="file" multiple placeholder="Enter your product quantity">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600 text-[16px] font-medium mb-2" for="productDesc">What is your product definition</label>
                        <textarea verify class="border-[1px] border-gray-600 appearance-none rounded-[8px] w-full py-3 px-3 text-gray-500 leading-tight focus:outline-none focus:border-[1px] border-gray-600-outline" id="productDesc" type="text" placeholder="Enter your product description"></textarea>
                    </div>
                    <div class="mb-4 flex gap-x-4">
                        <button id="cancelButton" class="w-full rounded-md py-3 bg-gray-200 text-black font-medium" type="button">Cancel</button>
                        <input class="w-full rounded-md py-3 bg-black text-white" type="submit" id="save" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="flex justify-center items-center py-2 border-t-[1px]  text-gray-500">
        <span>Deballage.com © Deballage</span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('scripts/chart.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" integrity="sha512-FEQLazq9ecqLN5T6wWq26hCZf7kPqUbFC9vsHNbXMJtSZZWAcbJspT+/NEAQkBfFReZ8r9QlA9JHaAuo28MTJA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        $('#save').click(function(e) {
            e.preventDefault();
            if (verify() == 0) {
                const formData = new FormData();
                let i = 0;
                for (const image of $('#productImage')[0].files) {
                    formData.append('image_'+ i, image);
                    i++;
                }

                formData.append('i', i);
                formData.append('category_id', $('#category_id').val());
                formData.append('price', $('#productPrice').val());
                formData.append('special_price', $('#productSpecialPrice').val());
                formData.append('name', $('#productName').val());
                formData.append('quantite', $('#productStock').val());
                formData.append('description', $('#productDesc').val());

                axios.post('/api/products', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((response) => {
                    if (response.status === 200) {
                        redirect("{{ Route('products.index') }}");
                    }
                })
                .catch((response) => { console.error(response); });
            }            
        })

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