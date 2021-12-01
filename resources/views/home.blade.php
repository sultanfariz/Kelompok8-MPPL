<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">

        <title>Dongeng.in</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            header{
                background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(https://images.unsplash.com/photo-1565843248736-8c41e6db117b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y2hpbGQlMjBib29rfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60);
                background-size: cover;
                background-position: center;
                height: 100vh;
            }
            .header-text-box {
                position: absolute;
                width: 1140px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            /* ---- HEADINGS ---- */
            h1,h2,h3 {
                font-weight: 300; /*==biar ga bold, soalnya h1 format asalnya bold==*/
                text-transform: uppercase; /*==biar hurufnya kapital semua==*/
            }

            h1{
                margin-top: 0; /*==biar gaada margin atasnya, biar gambar background yg di header bisa memenuhi seluruh lamannya==*/
                margin-bottom: 20px;
                color: #fff;
                font-size: 240%;/*==want everything to be relative, jadi tergantung sama global font sizenya==*/
                /*====*/
                word-spacing: 4px; /*==space tiap kata==*/
                letter-spacing: 1px; /*==space tiap huruf==*/
            }

            h2{
                font-size: 180%;
                word-spacing: 2px;
                text-align: center;
                margin-bottom: 30px;
                letter-spacing: 1px;
            }

            h2:after{
                display: block;
                height: 2px;
                background-color: #e67e22;
                content: "";
                width: 100px;
                margin: 0 auto;
                margin-top: 30px;
            }

            .long-copy{
                line-height: 145%; /*==usually between 120%-145%==*/
                width: 70%;
                margin-left: 15%;            
            }

            /* ---- BUTTONS ---- */
            .btn:link,
            .btn:visited {
                display: inline-block; /*==bisa di set panjang sama lebarnya(kotak yang ngebatasin suatu kata)==*/
                padding: 10px 30px; /*==top-bottom   right-left==*/
                font-weight: 300;
                text-decoration: none; /*==biar gaada underlinenya==*/ 
                border-radius: 200px;
                transition: background-color 0.2s, border 0.2s, color 0.2s;
            }

            .btn-full:link,
            .btn-full:visited {
                background-color: #e67e22;
                border: 1px solid #e67e22; /*==biar ukurannya sama kyk sblhnya==*/
                color: #fff;
            }

            .btn-ghost:link,
            .btn-ghost:visited {
                border: 1px solid #e67e22; /*==sblmnya terlihat lbh besar widht&height itu content+padding+border, biar sama makanya yg btn-full ditambahin border juga==*/
                color: #e67e22;
                margin-left: 15px;
            }

            .btn:hover,
            .btn:active {
                background-color: #cf6d17;
            }

            .btn-full:hover,
            .btn-full:active {
                border: 1px solid #cf6d17;
            }

            .btn-ghost:hover,
            .btn-ghost:active {
                border: 1px solid #cf6d17;
                color: #fff;
            }
        </style>        
    </head>
    <body class="antialiased">
        <header>
            <nav class="flex items-center justify-between flex-wrap bg-teal p-6">
                <div class="flex items-center flex-no-shrink text-white mr-6">
                  {{-- <svg class="h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                  <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span> --}}
                  <a href="/home"><img src="img/logo-white.png" alt="Dongeng.in" style="width: 60%"></a>
                  @admin
                    <a href="{{ route('dashboard') }}" class="text-l">Dashboard</a>
                  @endadmin
                </div>
                <div class="block lg:hidden">
                  <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
                    <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                  </button>
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                  <div class="text-sm lg:flex-grow">
                    {{-- <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 underline text-white text-teal-lighter hover:text-white mr-4">
                      Stories
                    </a> --}}
                  </div>
                  <div>
                    @if(Auth::check())
                      {{-- <a href="/logout" class="inline-block text-sm px-4 py-2 text-lighter text-white hover:underline"> --}}
                      {{-- <a href={{ route('logout') }} class="inline-block text-sm px-4 py-2 text-lighter text-white hover:underline" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> --}}
                      {{-- <a href={{ route('logout') }} class="inline-block text-sm px-4 py-2 text-lighter text-white hover:underline">
                        Log out
                      </a> --}}
                      <div class="flex items-center">
                        <form method="POST" action="{{ route('logout') }}" class="rounded text-white border-white mt-4">
                          @csrf
                          <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                          this.closest('form').submit();" class="inline-block text-sm px-4 py-2 text-lighter text-white hover:underline">
                              {{ __('Log Out') }}
                            </a>
                          </form>
                        <a href="/user/profile" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white mt-4 lg:mt-0">
                          <i class="fas fa-user text-white"></i>
                          Profile
                        </a>
                      </div>
                    @else
                      <a href="/login" class="inline-block text-sm px-4 py-2 text-lighter text-white hover:underline">
                        Sign In
                      </a>
                      <a href="/register" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white mt-4 lg:mt-0">
                        Sign up
                      </a>
                    @endif
                  </div>
                </div>
              </nav>
              <div class="header-text-box"> <!--big background image-->
                <h1>Give warmth to your child <br> through stories with Dongeng.in</h1>
                <a class="btn btn-full" href="/story">Read More</a>
            </div>
        </header>
        <section>
          <div>
            <div class="row" style="margin-top: 5%; margin-bottom: 10%">
              <h2>Apa itu Dongeng.in?</h2>
              <p class="long-copy">
                Aplikasi yang akan dibuat berupa website kumpulan buku yang dikhususkan untuk anak-anak usia dini atau siswa TK dan siswa PAUD. Dengan aplikasi ini orang tua siswa akan lebih mudah untuk mengakses buku cerita anak-anak yang dapat membantu menunjang sistem pembelajaran bagi anak-anak.
              </p>
            </div>
          </div>          
        </section>
        <section>
          <h2>Buku Terfavorit</h2>
            
          <div class=" px-100 grid grid-cols-2 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-3" style="padding: 0px 20px">
            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
              <a href="#">
                  <img class="rounded-t-lg"
                      src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
              </a>
              <div class="p-5">
                  <a href="#">
                      <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">
                          Noteworthy technology acquisitions 2021</h5>
                  </a>
                  <p class="font-normal text-gray-700 mb-3">Here are the biggest
                      enterprise technology acquisitions of 2021 so far, in reverse
                      chronological order.</p>
                  <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
                      href="#">
                      Read more
                  </a>
              </div>
            </div>
            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
              <a href="#">
                  <img class="rounded-t-lg"
                      src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
              </a>
              <div class="p-5">
                  <a href="#">
                      <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">
                          Noteworthy technology acquisitions 2021</h5>
                  </a>
                  <p class="font-normal text-gray-700 mb-3">Here are the biggest
                      enterprise technology acquisitions of 2021 so far, in reverse
                      chronological order.</p>
                  <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
                      href="#">
                      Read more
                  </a>
              </div>
            </div>
          </div>
        </section>
    </body>
</html>
