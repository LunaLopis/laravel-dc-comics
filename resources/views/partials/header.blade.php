<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="bg-primary p-2">
        <div class="container">
            <div class="row">
               <div class="col">
    
                <div class=" d-flex justify-content-end text-white">
                    <h5>DC POWER-VISA</h5>
                    <h5>ADDITIONAL DC SITES</h5>
              </div>
               </div>
            </div>
         </div>
    </div>
    <header class="container d-flex justify-content-between">
        <div>
            <a href="/" class="brand ">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}">
            </a> 
        </div>

        <nav>
            <ul class="navbar" >
                <li>
                    <a href="{{ url('/comics') }}">COMICS</a>
                 </li>
                 <li>
                  <a href="{{route('comics.create')}}">AGGIUNGI COMIC</a>
                </li>
                 <li>
                    <a href="">MOVIES</a>
                 </li>
                 <li>
                    <a href="">TV</a>
                 </li>
                 <li>
                    <a href="">Games</a>
                 </li>
                 <li>
                    <a href="">COLLECTIBLES</a>
                 </li>
                 <li>
                    <a href="">VIDEOS</a>
                 </li>
                 <li>
                    <a href="">FANS</a>
                 </li>
                 <li>
                    <a href="">NEWS</a>
                 </li>
                 <li>
                    <a href="">SHOP</a>
                 </li>
            </ul>
        </nav>
        <input type="search" placeholder="Search" aria-label="Search">
   
    </header>

</body>

</html>