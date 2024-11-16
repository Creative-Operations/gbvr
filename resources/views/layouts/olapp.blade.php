<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GBVRS') }}</title>

    @vite(['resources/js/app.js'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style>
        html,
        body { height: 100%; }
        
        body {
          margin: 0;
          background: linear-gradient(#800080, #cccccc);
          overflow: hidden;
        }
        
        .selector {
          position: absolute;
          left: 50%;
          top: 50%;
          width: 140px;
          height: 140px;
          margin-top: -70px;
          margin-left: -70px;
        }
        
        .selector,
        .selector button {
          font-family: 'Oswald', sans-serif;
          font-weight: 300;
        }
        
        .selector button {
          position: relative;
          width: 100%;
          height: 100%;
          padding: 10px;
          background: #800080;
          border-radius: 50%;
          border: 0;
          color: white;
          font-size: 20px;
          cursor: pointer;
          box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
          transition: all .1s;
        }
        
        .selector button:hover { background: #3071a9; }
        
        .selector button:focus { outline: none; }
        
        .selector ul {
          position: absolute;
          list-style: none;
          padding: 0;
          margin: 0;
          top: -20px;
          right: -20px;
          bottom: -20px;
          left: -20px;
        }
        
        .selector li {
          position: absolute;
          width: 0;
          height: 100%;
          margin: 0 50%;
          -webkit-transform: rotate(-360deg);
          transition: all 0.8s ease-in-out;
        }
        
        .selector li input { display: none; }
        
        .selector li input + label {
          position: absolute;
          left: 50%;
          bottom: 100%;
          width: 0;
          height: 0;
          line-height: 1px;
          margin-left: 0;
          background: #fff;
          border-radius: 50%;
          text-align: center;
          font-size: 1px;
          overflow: hidden;
          cursor: pointer;
          box-shadow: none;
          transition: all 0.8s ease-in-out, color 0.1s, background 0.1s;
        }
        
        .selector li input + label:hover { background: #f0f0f0; }
        
        .selector li input:checked + label {
          background: #6a0dad;
          color: white;
        }
        
        .selector li input:checked + label:hover { background: #800080; }
        
        .selector.open li input + label {
          width: 80px;
          height: 80px;
          line-height: 80px;
          margin-left: -40px;
          box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
          font-size: 14px;
        }
        
        h1 {
          color: #fff;
        }
        
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    GBVRS
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                    
                        
                            <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                            

                            <li><a class="nav-link" href="{{ route('incidents.index') }}">Manage Incident</a></li>
                            <li><a class="nav-link" href="{{ route('forensics.index') }}">Manage Forensics</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                </div>
    
            </div>
        </nav>
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>