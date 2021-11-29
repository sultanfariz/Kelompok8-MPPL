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
                background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
                background-size: cover;
                background-position: center;
            }
            .header-text-box {
                position: absolute;
                width: 1140px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            h2{
                font-size: 140%;
                word-spacing: 2px;
                text-align: left;
                letter-spacing: 1px;
            }

            h2:after{
                display: block;
                height: 2px;
                background-color: #e67e22;
                content: "";
                width: 200px;
                margin-top: 15px;
            }
        </style>        
    </head>
    <body class="antialiased">
        <header>
            <nav class="flex items-center justify-between flex-wrap bg-teal p-6">
                <div class="flex items-center flex-no-shrink text-white mr-6">
                  <a href="/"><img src="img/logo-white.png" alt="Dongeng.in" style="width: 60%"></a>
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                  <div class="text-sm lg:flex-grow">
                  </div>
                  <div>
                    <a href="/login" class="inline-block text-sm px-4 py-2 text-lighter text-white hover:underline">
                      Sign In
                    </a>
                    <a href="/register" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white mt-4 lg:mt-0">
                      Sign Up
                    </a>
                    {{-- <a href="/logout" class="inline-block text-sm px-4 py-2 text-lighter text-white hover:underline">
                      Log out
                    </a>
                    <a href="/user/profile" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white mt-4 lg:mt-0">
                      <i class="fas fa-user text-white"></i>
                      Profile
                    </a> --}}
                  </div>
                </div>
              </nav>
        </header>
        <section>
          <div class="mr-12 ml-96 mt-14 mb-20 pl-96">
            <form class="w-full h-10 pl-3 pr-2 bg-white border rounded-full flex justify-between items-center relative" action="/story" method="GET">
                <input type="search" name="keyword" id="search" placeholder="Search"
                      class="appearance-none w-full outline-none focus:outline-none active:outline-none" value="{{ request()->keyword }}">
                <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      viewBox="0 0 24 24" class="w-6 h-6">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                  </svg>
                </button>
            </form>
          <div>
        </section>
        <section>
          <h2 class="ml-12">Koleksi Buku</h2>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full max-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <div class="flex flex-col py-6">
                    <div class=" px-100 grid grid-cols-2 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-3" style="padding: 0px 20px">
                    {{-- <div class="flex flex-row py-6"> --}}
                    @foreach($stories as $key => $story)
                      {{-- @if($key%3 == 0)
                        <div class="flex flex-row py-6">
                      @endif --}}
                      <div class="max-w-lg mx-auto">
                        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 mr-5 ml-10">
                            <a href="/story/{{ $story->id }}">
                              <img class="rounded-t-lg" src={{ $story->image }} alt={{ $story->title }}>
                            </a>
                            <div class="p-5">
                              <a href="/story/{{ $story->id }}">
                                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">{{ $story->title }}</h5>
                              </a>
                              <p class="font-normal text-gray-700 mb-3">{{ $story->excerpt() }}</p>
                              <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="/story/{{ $story->id }}">
                                Read more
                              </a>
                            </div>
                        </div>
                      {{-- @if($key%3 == 0)
                        </div>
                      @endif --}}
                      </div>
                      @endforeach
                      {{-- @endforeach                                              --}}
                    {{-- </div> --}}
                    </div>
                </div>
              </div>
            </div>
        </section>
    </body>
</html>