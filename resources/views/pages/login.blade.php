<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Discover the latest fashion trends and shop for high-quality clothes at Deballage. Explore our wide range of stylish clothing for men, women, and kids. From casual wear to formal attire, find the perfect outfit for every occasion. Enjoy fast shipping, easy returns, and excellent customer service. Upgrade your wardrobe today with Deballage.">
    <meta name="keywords" content="Deballage, clothing, fashion, apparel, trendy clothes, stylish outfits, men's fashion, women's fashion, kids fashion, online shopping, fast shipping, easy returns">
    <meta name="author" content="Deballage">

    <!-- Open Graph meta tags for social media sharing -->
    <meta property="og:title" content="Deballage - Login">
    <meta property="og:description" content="Login in to your account to benefit from all the suprises we have for you">
    <meta property="og:image" content="https://web.facebook.com/photo/?fbid=105308502580765&set=a.105308552580760">
    <meta property="og:url" content="http://www.deballage.cm/pages/login.html">
    <meta property="og:type" content="website">
    <title>Deballage | Login</title>
    <link rel="stylesheet" href="{{ asset('dist/output.css') }}">
    
    <script src="{{ asset('scripts/jquery.js') }}"></script>
    <script src="{{ asset('scripts/axios.js') }}"></script>
    <script src="{{ asset('scripts/alert.js') }}"></script>
</head>
<body>
    <main class="w-full md:h-full md:py-8 h-screen py-[120px] px-[16px] xl:h-screen flex items-center bg-[#F1F3F6] md:px-10">
        <div class="flex flex-col md:flex-row w-full h-full max-h-[800px] lg:max-w-[900px] max-w-[1480px] xl:max-w-[1300px] mx-auto rounded-xl overflow-hidden">
            <div class="self-center h-full bg-white px-7 md:px-[20px] md:py-[50px] py-7 w-full md:w-[50%]  mx-auto">
                <div class="lg:max-w-[80%] translate-y-[-50%] relative top-[50%] w-full md:order-[initial] lg:mx-auto">
                    <div class="logo flex justify-center"><a href="{{ Route('index') }}"><img class="w-[140px]" src="{{ asset('images/pngs/logo-white.png') }}" alt=""></a></div>
                    <div class="py-5 flex items-center flex-col">
                        <h1 class="text-[22px] xl:text-[32px] font-bold">Connexion a votre compte</h1>
                        <p class="font-thin text-sm lg:text-[16px] mt-2">Access your account with phone number or email.</p>
                    </div>
                    <div class="pt-[20px] flex flex-col gap-y-[21px]">
                        <div class="form-group">
                            <label class="text-sm font-medium mb-2 inline-block" for="user_email">Email</label>
                            <input class=" block w-full py-3 px-3 border-[1.5px] border-gray-400" required type="email" placeholder="useremail@gmail.com" name="user_email" id="user_email">
                        </div>
                        <div class="form-group">
                            <label class="text-sm font-medium mb-2 block" for="user_password">Mot de passe</label>
                            <input class="block w-full py-3 px-3 border-[1.5px] border-gray-400" required type="password" placeholder="votre mot de passe" name="user_password" id="user_password">
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
                        <button type="submit" id="connection" class="py-[12px] hover:bg-red-800 transition-all rounded-[4.8px] mt-6 w-full bg-red-700 text-white">Connectez vous au compte</button>
                        <div class="text-center py-3">
                            <small class="font-extralight text-[14px]">Don't have an account?</small>
                            <h4><a href="{{ Route('register') }}" class="text-red-700 font-bold hover:underline transition-all">Register Now</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-[100px] md:h-[inherit] w-full md:w-[50%] order-first lg:order-2">
                <img class="object-cover hidden lg:block w-full h-full" src="{{ asset('images/jpgs/login.jpeg') }}" alt="">
                <img class="lg:hidden w-full h-full object-cover" src="{{ asset('images/jpgs/login-mobile.jpeg') }}" alt="">
            </div>
        </div>
    </main>
    <script>
        $(function () {
            $('#connection').click(function (e) {
                e.preventDefault();
                axios.post('api/authenticate', {
                    email: $('#user_email').val(),
                    password: $('#user_password').val(),
                })
                .then(response => {
                    if (response.status === 200) {
                        swal({
                            title: 'Message',
                            text: "Connecté avec succès !",
                            icon: "success",
                            buttons: {
                                confirm: {
                                    text: "Ok",
                                    value: null,
                                    visible: false,
                                    className: "bt new align-center",
                                    closeModal: true
                                }
                            },
                            timer: 10000,
                        })
                    }
                })
                .catch(response => {
                    if (response) {
                        swal({
                            title: 'Message',
                            text: "Identifiants de connection incorrect !",
                            icon: "error",
                            buttons: {
                                confirm: {
                                    text: "Ok",
                                    value: null,
                                    visible: false,
                                    className: "bt new align-center",
                                    closeModal: true
                                }
                            },
                            timer: 10000,
                        })
                    }
                })
                // if ($('#user_password').val() === $('#user_confirm_password').val()) {
                    
                // } else {
                //     swal({
                //         title: 'Message',
                //         text: "Mot de passe incorrect",
                //         icon: "error",
                //         buttons: {
                //             confirm: {
                //                 text: "Ok",
                //                 value: null,
                //                 visible: false,
                //                 className: "bt new align-center",
                //                 closeModal: true
                //             }
                //         },
                //         timer: 10000,
                //     })
                // }
            })
        })
    </script>
</body>
</html>