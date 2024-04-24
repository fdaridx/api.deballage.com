<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('dist/output.css') }}">

    <meta name="description" content="Discover the latest fashion trends and shop for high-quality clothes at Deballage. Explore our wide range of stylish clothing for men, women, and kids. From casual wear to formal attire, find the perfect outfit for every occasion. Enjoy fast shipping, easy returns, and excellent customer service. Upgrade your wardrobe today with Deballage.">
    <meta name="keywords" content="Deballage, clothing, fashion, apparel, trendy clothes, stylish outfits, men's fashion, women's fashion, kids fashion, online shopping, fast shipping, easy returns">
    <meta name="author" content="Deballage">

    <!-- Open Graph meta tags for social media sharing -->
    <meta property="og:title" content="Registration">
    <meta property="og:description" content="Register and create and account to start shopping on deballage">
    <meta property="og:image" content="https://web.facebook.com/photo/?fbid=105308502580765&set=a.105308552580760">
    <meta property="og:url" content="http://www.deballage.cm/pages/registration.html">
    <meta property="og:type" content="website">

    <title>Deballage | Register</title>

    <script src="{{ asset('scripts/jquery.js') }}"></script>
    <script src="{{ asset('scripts/axios.js') }}"></script>
    <script src="{{ asset('scripts/alert.js') }}"></script>
</head>
<body>
    <main class="w-full py-[100px] px-[16px] md:h-full md:py-8 lg:py-[120px] h-full xl:h-full flex items-center bg-[#F1F3F6] md:px-[40px]">
        <div class="flex md:max-h-[900px] flex-col md:flex-row w-full lg:max-w-[900px] max-w-[1480px] xl:max-w-[1300px] mx-auto rounded-xl overflow-hidden">
            <div class=" bg-white relative top-[50%] px-7 md:px-[20px] md:py-[50px] py-7 w-full md:w-[50%] mx-auto">
                <div class="lg:max-w-[80%] w-full md:order-[initial] lg:mx-auto">
                    <div class="logo flex justify-center"><a href="{{ Route('index') }}"><img src="{{ asset('images/pngs/logo-white.png') }}" alt=""></a></div>
                    <div class="py-5 flex items-center flex-col ">
                        <h1 class=" text-[20px] font-bold">Join Deballage for free</h1>
                        <p class="font-thin text-sm mt-2 text-center">Join thousands across Africa to shop or sell your products with ease.</p>
                    </div>
                    <div class="pt-[0px] flex flex-col gap-y-[10px]">
                        <div class="form-group">
                            <label class="text-sm font-medium mb-2 inline-block" for="user_email">Full Name</label>
                            <input class=" block w-full py-3 px-3 border-[1.5px] border-gray-400" required type="text" placeholder="Your full name" name="user_full_name" id="user_full_name">
                            <span class="inline-block text-red-400 mt-1 text-xs font-thin">Your email doesn't match. check again </span>
                        </div>
                        <div class="form-group">
                            <label class="text-sm font-medium mb-2 block" for="user_password">Email</label>
                            <input class="block w-full py-3 px-3 border-[1.5px] border-gray-400" required type="email" placeholder="useremail@gmail.com" name="user_email" id="user_email">
                            <span class="hidden text-red-400 mt-1 text-xs font-thin">Your password doesn't match. check again </span>
                        </div>
                        <div class="form-group">
                            <label class="text-sm font-medium mb-2 block" for="user_password">How do you want to use Deballage</label>

                            <select class="block w-full py-3 px-3 border-[1.5px] border-gray-400" name="user_role" id="user_role">
                                <option value="" class="text-sm" selected>To shop online</option>
                                <option value="">Vendor</option>
                                <option value="">Buyer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-sm font-medium mb-2 block" for="user_password">Password</label>
                            <input class="block w-full py-3 px-3 border-[1.5px] border-gray-400" required type="password" placeholder="votre mot de passe" name="user_password" id="user_password">
                            <span class="hidden text-red-400 mt-1 text-xs font-thin">Your password doesn't match. check again </span>
                        </div>
                        <div class="form-group">
                            <label class="text-sm font-medium mb-2 block" for="user_password">Confirm password</label>
                            <input class="block w-full py-3 px-3 border-[1.5px] border-gray-400" required type="password" placeholder="votre mot de passe" name="user_password" id="user_confirm_password">
                            <span class="hidden text-red-400 mt-1 text-xs font-thin">Your password doesn't match. check again </span>
                        </div>
                    </div>
                    <div class="text-[14px] font-light flex justify-between items-center mt-4">
                        <span class="flex items-center gap-x-2">
                            <input type="checkbox" name="" id="">
                            <label for="">Remember me</label>
                        </span>
                        <span class="inline-block">
                            <a href="{{ Route('index') }}" class="underline">Forgot password?</a>
                        </span>
                    </div>
                    <div class="">
                        <button type="submit" class="py-[12px] hover:bg-red-800 transition-all rounded-[4.8px] mt-6 w-full bg-red-700 text-white" id="connection">Connectez vous au compte</button>
                        <div class="text-center py-3">
                            <small class="font-extralight text-[14px]">Already have an account?</small>
                            <h4><a href="{{ Route('index') }}" class="text-red-700 font-bold transition-all hover:underline">Login Now</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-[100px] md:h-[inherit] w-full md:w-[50%] order-first md:order-[initial]">
                <img class="object-cover hidden md:block w-full h-full" src="{{ asset('images/jpgs/login-2.jpeg') }}" alt="">
                <img class="md:hidden block w-full h-full object-cover" src="{{ asset('images/jpgs/login-mobile.jpeg') }}" alt="">
            </div>
        </div>
    </main>

    
</body>
</html>