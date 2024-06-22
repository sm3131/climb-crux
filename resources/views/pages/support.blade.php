@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 justify-items-center gap-6 font-roboto mt-4 sm:mt-14 mx-2 sm:mx-16">
    <h3 class="text-lg">Climb Crux Conquer Support System</h3>
    <p class="text-center">Click on any of the support topics below to read more.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center gap-8 font-roboto mt-14 mx-16 mb-10">
    <div class="flex flex-col items-center mb-20 mb-20">
        <a href="/exercise-programs" class="w-72 h-72 sm:w-96 sm:h-96 relative hover:opacity-75">
            <div class="rounded-md absolute inset-0 bg-cover bg-center z-0" style="background-image: url('/img/rr-pond.jpg')"></div>
            <div class="cursor-pointer absolute inset-0 z-10 flex justify-center items-center text-2xl sm:text-3xl text-center uppercase"><p class="bg-light-grey w-full h-24 content-center">Exercise Programs</p></div>
        </a>
    </div>
    <div class="flex flex-col items-center mb-20 mb-20">
        <a href="/nutrition-plans" class="w-72 h-72 sm:w-96 sm:h-96 relative hover:opacity-75">
            <div class="rounded-md absolute inset-0 bg-cover bg-center z-0" style="background-image: url('/img/utah-ridges.jpg')"></div>
            <div class="cursor-pointer absolute inset-0 z-10 flex justify-center items-center text-2xl sm:text-3xl text-center uppercase"><p class="bg-light-grey w-full h-24 content-center">Nutrition Plans</p></div>
        </a>
    </div>
    <div class="flex flex-col items-center mb-20">
        <a href="/mental-fortitude" class="w-72 h-72 sm:w-96 sm:h-96 relative hover:opacity-75">
            <div class="rounded-md absolute inset-0 bg-cover bg-center z-0" style="background-image: url('/img/sedona.jpg')"></div>
            <div class="cursor-pointer absolute inset-0 z-10 flex justify-center items-center text-2xl sm:text-3xl text-center uppercase"><p class="bg-light-grey w-full h-24 content-center">Mental Fortitude</p></div>
        </a>
    </div>
    <div class="flex flex-col items-center mb-20">
        <a href="/community-page" class="w-72 h-72 sm:w-96 sm:h-96 relative hover:opacity-75">
            <div class="rounded-md absolute inset-0 bg-cover bg-center z-0" style="background-image: url('/img/flag-snow.jpg')"></div>
            <div class="cursor-pointer absolute inset-0 z-10 flex justify-center items-center text-2xl sm:text-3xl text-center uppercase"><p class="bg-light-grey w-full h-24 content-center">Community Page</p></div>
        </a>
    </div>
</div>
@endsection