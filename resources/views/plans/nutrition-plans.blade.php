@extends('layouts.app')

@section('content')
<div class="mt-6 mx-12">
    <h2 class="font-lora text-lg"><a href="/support" class="text-dark-grey hover:text-green-blue"><i class="fa-solid fa-arrow-left"></i> Back to Support Page</a></h2>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center gap-6 font-lora text-dark-grey mt-4 sm:mb-6">
    <div class="flex flex-col sm:ml-8 ml-4 gap-4 text-lg text-left sm:text-justify">
        <div class="mr-6">
            <img src="{{url('/img/flag-snow.jpg')}}" alt="post snow fall in flagstaff" class="lg:hidden object-cover h-6/12 w-6/12 m-auto" />
        </div>
        <div class="mr-6 ml-6 text-left">
            <h3 class="text-2xl uppercase font-roboto">Nutrition Plans</h3>
            <p class="mr-4 md:mr-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id labore maiores officia fugiat alias magnam voluptates cupiditate, autem, dolor placeat unde praesentium dignissimos porro ullam, deleniti a beatae asperiores architecto? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis nobis laboriosam minus. Consectetur aliquam, repellat illum magni explicabo a! Architecto ea quia consequatur eveniet fuga natus maxime velit laudantium. Non?</p>
            <p class="mt-6 text-2xl font-roboto uppercase">Nutrition Guidance & Tips</p>
            <ul class="mr-4">
                <li><a href="" class="text-green-blue hover:text-dark-blue">Macronutrients</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Breakfast</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Lunch</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Dinner</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Snacks</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Desserts</a></li>
            </ul>
            </p>
            <h3 class="text-2xl text-left uppercase font-roboto mt-6">Extras</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate atque sint officia fugit quaerat nesciunt ipsum recusandae reprehenderit id, similique aspernatur provident nostrum porro! Libero, sapiente? Libero maiores quibusdam dolorem!</p>
        </div>
    </div>
    <div class="mr-6">
        <img src="{{url('/img/flag-snow.jpg')}}" alt="post snow fall in flagstaff" class="hidden lg:block object-cover h-8/12 w-8/12 ml-12 mt-10 mb-4" />
    </div>
</div>
@endsection