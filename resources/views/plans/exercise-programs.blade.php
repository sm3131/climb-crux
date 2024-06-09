@extends('layouts.app')

@section('content')
<div class="mt-6 mx-12">
    <h2 class="font-lora text-lg"><a href="/support" class="text-dark-grey hover:text-green-blue"><i class="fa-solid fa-arrow-left"></i> Back to Support Page</a></h2>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center sm:justify-items-start gap-6 font-lora text-dark-grey mt-4 sm:mb-6">
    <div class="flex flex-col sm:ml-8 ml-4 gap-4 text-lg text-left sm:text-justify">
        <div class="mr-6">
            <img src="{{url('/img/rr-pond.jpg')}}" alt="snow melt pond in red rock national park" class="lg:hidden object-cover h-6/12 w-6/12 m-auto" />
        </div>
        <div class="mr-6 ml-6 text-left">
            <h3 class="text-2xl uppercase font-roboto">Exercise Programs</h3>
            <p class="mr-4 md:mr-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum laboriosam laborum quaerat sit iure rerum sequi eos veritatis! Dolor, deleniti quo aperiam accusamus consequuntur iusto facilis nam impedit odio amet? Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, molestias. Asperiores autem voluptatem recusandae repudiandae quam similique, sed ad, magnam a velit deserunt, harum veritatis commodi iusto exercitationem ea aliquam.</p>
            <p class="mt-6 text-2xl font-roboto uppercase">Program Levels:</p>
            <ul class="mr-4">
                <li><a href="" class="text-green-blue hover:text-dark-blue">Beginner</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Intermediate</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Advanced</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Expert</a></li>
            </ul>
            </p>
            <h3 class="text-2xl text-left uppercase font-roboto mt-6">Extras</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti cupiditate, excepturi minima culpa asperiores est qui obcaecati recusandae accusantium perferendis, natus eos quibusdam incidunt ea ad animi maxime nisi illo!</p>
        </div>
    </div>
    <div class="mr-6">
        <img src="{{url('/img/rr-pond.jpg')}}" alt="snow melt pond in red rock national park" class="hidden lg:block object-cover h-8/12 w-8/12 ml-12 mt-10 mb-4" />
    </div>
</div>
@endsection