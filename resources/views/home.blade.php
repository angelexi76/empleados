@extends('layouts.web')
@section('title','home')

@section('content') 

<body class="bg-gray-400">

    <h1 class="text-center text-white  font-bold text-xl mb-2 bg-purple-600">TAREAS</h1>


    
    <div class="flex h-screen">
        <div class="p-4 border-r w-64 border-gray-300">
          <a href="{{ url('/dashboard') }}" class="text-center text-white  font-bold text-xl mb-2  bg-purple-600 "></a>

            <ul class="bg-gray-300 p-4">
               
                <li class="flex mb-6">
                  
                  <a href="{{route('tareas.index')}}"class="text-sm text-gray-800 underline">tareas</a>
                  </li>
