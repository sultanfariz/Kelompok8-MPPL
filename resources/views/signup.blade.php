<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">

    <meta property="og:image" content="https://tailwindcomponents.com/storage/3209/conversions/temp50512-ogimage.jpg?v=2021-11-13 16:11:53">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="640">
    <meta property="og:image:type" content="image/png">

    <meta property="og:url" content="https://tailwindcomponents.com/component/login-register-form-with-image/landing">
    <meta property="og:title" content="responsive login, register, sign up form with image by Danimai">
    <meta property="og:description" content="login, registeration, sign up form">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TwComponents">
    <meta name="twitter:title" content="responsive login, register, sign up form with image by Danimai">
    <meta name="twitter:description" content="login, registeration, sign up form">
    <meta name="twitter:image" content="https://tailwindcomponents.com/storage/3209/conversions/temp50512-ogimage.jpg?v=2021-11-13 16:11:53">

    <title>Sign up to Dongeng.in</title>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css">
</head>
<body class="bg-gray-200">    
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-700 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://images.unsplash.com/photo-1532789339108-2ebc484efbf1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNoaWxkJTIwYm9va3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Keep it special</h1>
                <p class="text-3xl my-4">Give warmth to your child through stories.</p>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background-image: url(https://images.unsplash.com/photo-1532789339108-2ebc484efbf1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNoaWxkJTIwYm9va3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <h1 class="my-6">
                    <img src="img/logo-white.png" class="items-center justify-center inline-flex" alt="Dongeng.in">
                </h1>
                <div class="py-6 space-x-2">
                </div>
                <form action="{{ route('register')}}" method="POST" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    <div class="pb-2 pt-4">
                        <input type="text" name="username" id="username" placeholder="Username" class="block w-full p-4 text-lg rounded-sm bg-black">
                    </div>
                    <div class="pb-2 pt-4">
                        <input type="email" name="email" id="email" placeholder="Email" class="block w-full p-4 text-lg rounded-sm bg-black">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-4 text-lg rounded-sm bg-black" type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button class="uppercase block w-full p-4 text-lg rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none">sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>