@extends('admin.user-app')
@section('content')
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
@endsection