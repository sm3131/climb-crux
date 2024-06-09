@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 justify-items-center gap-6 font-roboto mt-4 sm:mt-14 mx-2 sm:mx-16">
    <h3 class="text-lg">Climb Crux Conquer Support System</h3>
    <p class="text-center">Hover over the images to reveal the support sections below.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center gap-8 font-roboto mt-14 mx-16 mb-10">
    <div class="flex flex-col items-center gap-2 mb-20 mb-20">
        <a href="/exercise-programs" class="w-72 h-72 sm:w-96 sm:h-96 relative hover:opacity-75">
            <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('/img/rr-pond.jpg')"></div>
            <div class="opacity-100 sm:opacity-0 hover:opacity-100 cursor-pointer duration-300  absolute inset-0 z-10 flex justify-center items-center text-2xl sm:text-3xl text-center font-bold bg-light-grey uppercase">Exercise Programs</div>
        </a>
    </div>
    <div class="flex flex-col items-center gap-2 mb-20 mb-20">
        <a href="/nutrition-plans" class="w-72 h-72 sm:w-96 sm:h-96 relative hover:opacity-75">
            <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('/img/utah-ridges.jpg')"></div>
            <div class="opacity-100 sm:opacity-0 hover:opacity-100 cursor-pointer duration-300 absolute inset-0 z-10 flex justify-center items-center text-2xl sm:text-3xl text-center font-bold bg-light-grey uppercase">Nutrition Plans</div>
        </a>
    </div>
    <div class="flex flex-col items-center gap-2 mb-20">
        <a href="/mental-fortitude" class="w-72 h-72 sm:w-96 sm:h-96 relative hover:opacity-75">
            <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('/img/sedona.jpg')"></div>
            <div class="opacity-100 sm:opacity-0 hover:opacity-100 cursor-pointer duration-300 absolute inset-0 z-10 flex justify-center items-center text-2xl sm:text-3xl text-center font-bold bg-light-grey uppercase">Mental Fortitude</div>
        </a>
    </div>
    <div class="flex flex-col items-center gap-2 mb-20">
        <a href="/community-page" class="w-72 h-72 sm:w-96 sm:h-96 relative hover:opacity-75">
            <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('/img/flag-snow.jpg')"></div>
            <div class="opacity-100 sm:opacity-0 hover:opacity-100 cursor-pointer duration-300 absolute inset-0 z-10 flex justify-center items-center text-2xl sm:text-3xl text-center font-bold bg-light-grey uppercase">Community Page</div>
        </a>
    </div>
</div>
@endsection