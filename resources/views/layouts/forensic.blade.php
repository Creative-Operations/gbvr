<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
       

        <title>Reporting Page</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="index.html"
                ><img class="w-12" src="images/logop.png" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                 <!-- Authentication Links -->
                 @guest
                 @if (Route::has('login'))
                     <li class="nav-item">
                         <a style="color:#800080" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                     </li>
                 @endif
                 @if (Route::has('register'))
                     <li class="nav-item">
                         <a  style="color:#800080"class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                 @endif
             @else
         
             
                 <li><a style="color:#800080" class="nav-link" href="{{ route('home') }}">Dashboard</a></li>
                 <li><a style="color:#800080" class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                 <li><a style="color:#800080" class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                 

                 <li><a style="color:#800080" class="nav-link" href="{{ route('incidents.index') }}">Manage Incident</a></li>
                 <li><a style="color:#800080" class="nav-link" href="{{ route('forensics.index') }}">Manage Investigations</a></li>
                 <li class="nav-item dropdown">
                     <a style="color:#800080" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}
                     </a>

                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                     </div>
                 </li>
             @endguest
            </ul>
        </nav>

        <!-- Hero -->
        <section
            class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
        >
            <div
                class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                style="background-image: url('images/logo.png')"
            ></div>

            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    GBV<span class="text-black">Tracker</span>
                </h1>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Report and Track GBV Cases
                </p>
                <div>
                    <a
                        href="login.html"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Report A Case</a
                    >
                </div>
            </div>
        </section>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

            <a
                href="create.html"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Post Job</a
            >
        </footer>
    </body>
</html>
