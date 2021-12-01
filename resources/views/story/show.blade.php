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
        </style>        
    </head>
    <body class="antialiased">
        <header>
            <nav class="flex items-center justify-between flex-wrap bg-teal p-6">
                <div class="flex items-center flex-no-shrink text-white mr-6">
                    <a href="/"><img src="img/logo-white.png" alt="Dongeng.in" style="width: 60%"></a>
                    @admin
                        <a href="{{ route('dashboard') }}" class="text-l">Dashboard</a>
                    @endadmin
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                  <div class="text-sm lg:flex-grow">
                  </div>
                  <div>
                    @if(Auth::check())
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
                      Sign Up
                    </a>
                    @endif
                  </div>
                </div>
              </nav>
        </header>
        <section>
            <div class="m-8 p-6 rounded" x-data="{open: false}">
                <iframe class="flex items-center justify-between flex-wrap bg-teal p-6" style="width:100%;height:700px" src={{ $story->link }}  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>
                <hr class="mb-4 border-gray-700">
                <div class="flex items-center">
                <img class="w-auto h-20 mr-4" src="img/book-vector.png">
                <div class="description">
                    <div class="flex flex-row items-center">
                    <a href="https://wikipedia.org"><h1 class="text-2xl font-semibold mr-4">{{ $story->title }}</h1></a>
                    </div>
                    <p>{{ $story->body }}</p>
                </div>
                </div>
                <!-- Collapsed content -->
                <div class="w-full flex flex-col mt-8">
                    <hr class="mb-10 border-gray-700">
                    <div class="">
                        <h3 class="mb-4 text-lg font-semibold text-white-900">Komentar Pembaca</h3>
                        
                        <div class="space-y-4">
                            
                        @foreach ($comments as $comment)
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>{{ $comment->user->fullname}}</strong> <span class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                                <p class="text-sm">
                                    {{ $comment->body }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Leave Comment -->
                <section>
                    <div class="mb-10">
                        <h3 class="mb-4 mt-14 text-lg font-semibold text-white-900">Tinggalkan Komentar</h3>
                        <!-- comment form -->
                        @if (Auth::check())
                        <div class="">
                            <form class="bg-white rounded-lg px-4 pt-2" action="/story/{{ $story->id }}/comment" method="POST">
                                    @csrf
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg"></h2>
                                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                                        <textarea class="rounded border border-gray-500 leading-normal resize-none w-full h-20 py-2 px-3 text-black font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder="Type Your Comment" required=""></textarea>
                                    </div>
                                    <div class="w-full md:w-full flex items-start md:w-full px-3">
                                        <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">                                            
                                        </div>
                                        <div class="-mr-1 mb-5">
                                            <input type="submit" class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value="Post Comment">
                                        </div>
                                    </div>                            
                                </div>
                            </form>
                        </div>
                        @else
                        <p class="text-sm mb-5">
                            Anda harus <a href="/register"><b>register</b></a> atau <a href="/login"><b>login</b></a> terlebih dahulu.
                        </p>                    
                        @endif
                    </div>
                </section>
            </div>             
        </section>
    </body>
</html>