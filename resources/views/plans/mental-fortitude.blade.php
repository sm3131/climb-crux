@extends('layouts.app')

@section('content')
<div class="mt-6 mx-12">
    <h2 class="font-lora text-lg"><a href="/support" class="text-dark-grey hover:text-green-blue"><i class="fa-solid fa-arrow-left"></i> Back to Support Page</a></h2>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center gap-6 font-lora text-dark-grey mt-4 sm:mb-6">
    <div class="flex flex-col sm:ml-8 ml-4 gap-4 text-lg text-left sm:text-justify">
        <div class="mr-6">
            <img src="{{url('/img/utah-ridges.jpg')}}" alt="ridge lines in salt lake city utah" class="lg:hidden object-cover h-6/12 w-6/12 m-auto" />
        </div>
        <div class="mr-6 ml-6 text-left">
            <h3 class="text-2xl uppercase font-roboto">Mental Fortitude</h3>
            <p class="mr-4 md:mr-8">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorum odio aspernatur recusandae eaque, eum natus similique id officiis assumenda necessitatibus dignissimos magnam, repudiandae rem magni illum deleniti pariatur explicabo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium asperiores ullam molestias, adipisci commodi harum debitis ut eum. Aliquid distinctio quidem quis sunt sapiente accusamus cupiditate fuga ullam nam eaque.</p>
            <p class="mt-6 text-2xl font-roboto uppercase">Positive Mental Exercises</p>
            <ul class="mr-4">
                <li><a href="" class="text-green-blue hover:text-dark-blue">Mindfulness</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Positive Reframing</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Affirmations</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Music & Meditation</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Communication</a></li>
            </ul>
            </p>
            <h3 class="text-2xl text-left uppercase font-roboto mt-6">Extras</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti cupiditate, excepturi minima culpa asperiores est qui obcaecati recusandae accusantium perferendis, natus eos quibusdam incidunt ea ad animi maxime nisi illo!</p>
        </div>
    </div>
    <div class="mr-6">
        <img src="{{url('/img/utah-ridges.jpg')}}" alt="ridge lines in salt lake city utah" class="hidden lg:block object-cover h-10/12 w-10/12 ml-12 mt-10 mb-4" />
    </div>
</div>
@endsection