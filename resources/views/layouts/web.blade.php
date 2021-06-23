
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <!-- Tailwind CSS -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <title>@yield('title')</title>
  

</head>
<header class="shadow-xl ">
  
  
   
   
    <a href="{{ route('dashboard')}}"> 
     

         
     
     
@if (Route::has('login'))

<div class="hidden fixed top-0 right-0 px-6 py-6 sm:block ">
  

 
  

<a href="{{ route('home')}}"class=" ml-4 text-sm text-sm text-gray-800 font-bold text-l underline mr-6"></a> 
<a href="{{route('tareas.index')}}"class="text-sm text-gray-800 underline">tareas</a>
@auth

<a href="{{ url('/dashboard') }}" class="text-sm text-gray-800 font-bold text-l underline p-4">Dashboard</a>

@else

<a href="{{ route('login') }}" class="text-sm text-gray-800 font-bold text-l underline">INICIAR SESIÓN</a>

@if (Route::has('register'))
<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-800 font-bold text-l underline">REGISTRATE</a>

@endif
@endauth
</div>
@endif
</nav>
</header>

<body>
  @yield('content')



@livewireScripts
</body>
</html>




     

   




