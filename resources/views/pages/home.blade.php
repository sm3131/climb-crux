@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 bg-dark-grey mb-10">
    <div class="font-roboto m-4 flex flex-col gap-4 p-6 hidden sm:block">
        <h2 class="text-xl text-center text-white leading-loose tracking-wide">Are you trying to return to climbing after a long hiatus due to pain and injury?</h2>
        <h2 class="text-xl text-center text-white leading-loose tracking-wide">Look no further, Climb Crux Conquer has all the support and resources you need to get back on the mountain!</h2>
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-14 mb-6 p-4 gap-4 justify-items-center font-roboto">
    <div class="flex flex-col items-center gap-4">
        <i class="self-center fa-solid fa-dumbbell text-5xl"></i>
        <h3 class="font-extrabold text-center h-10">Workouts & Mobility</h3>
        <p class="text-center mb-4 text-sm">Exercise and mobility are an important part of returning to climbing. You need strength, balance, and mobility to perform well. Start slow and work your way up to build strength and power.</p>
    </div>
    <div class="flex flex-col items-center gap-4">
        <i class="self-center fa-solid fa-utensils text-5xl"></i>
        <h3 class="font-extrabold text-center h-10">Nutrition Guidance</h3>
        <p class="text-center mb-4 text-sm">Nutrition is vital for performance and recovery. In order to maintain energy and return to climbing, you have to fuel properly. Do not be afraid to eat, because food begets climbing.</p>
    </div>
    <div class="flex flex-col items-center gap-4">
        <i class="self-center fa-solid fa-brain text-5xl"></i>
        <h3 class="font-extrabold text-center h-10">Mental Outlook</h3>
        <p class="text-center mb-4 text-sm">Your mindset and mental perspective can drastically affect how you feel and perform. Pain and injuries thrive on negativity, so it is important to combat these feelings and maintain a positive outlook.</p>
    </div>
    <div class="flex flex-col items-center gap-4">
        <i class="self-center fa-solid fa-heart-pulse text-5xl"></i>
        <h3 class="font-extrabold text-center h-10">Recovery Tips</h3>
        <p class="text-center mb-4 text-sm">Accountability and consistency are important parts of regaining your health to climb again. In order to fully recovery and return to climbing you have to recover mentally and physically.</p>
    </div>
</div>
<div class="grid grid-cols-1 bg-light-grey text-dark-grey">
    <div class="font-lora m-4 flex flex-col gap-4">
        <h2 class="text-2xl text-center">Climb Crux Conquer's Goals</h2>
        <ol class="mx-10 mb-2 leading-loose text-center">
            <li class="mb-6">Provide nutrition, fitness, and recovery tips</li>
            <li class="mb-6">Help you return to climbing after health hardships</li>
            <li class="mb-6">Show you that with consistency, it is possible to get back to sending</li>
        </ol>
    </div>
    <div class="grid grid-cols-1 mb-10 justify-items-center">
        <a href="/about" class="font-lora text-center border rounded border-dark-grey border-2 hover:bg-dark-grey hover:text-white w-34 p-3 bg-white text-dark-grey border-dark-grey cursor-pointer">About Us</a>
    </div>
</div>
@endsection