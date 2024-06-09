@extends('layouts.app')
@php
$resources =
[
[
'title' => 'Nutrition Guidance',
'image' => "/img/rr-wall.jpg",
'altText' => "red rock national park rock wall",
'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi illum quia nisi reiciendis exercitationem natus nostrum distinctio ut, repellendus vitae tempora blanditiis ad libero esse qui placeat cum reprehenderit rem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iure omnis obcaecati, nemo dolorem expedita fuga assumenda quos maiores? Voluptate dolorum ipsum reiciendis magni suscipit quibusdam inventore! Fuga, eos suscipit.",
'links' => [['name' => 'Nutrition Link', 'link' => ''], ['name' => 'Nutrition Podcasts', 'link' => '/resources'], ['name' => 'Nutrition Article', 'link' => '']]
],
[
'title' => 'Mental Outlook',
'image' => "/img/jacks-canyon.jpg",
'altText' => "jack's canyon climbing area",
'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi illum quia nisi reiciendis exercitationem natus nostrum distinctio ut, repellendus vitae tempora blanditiis ad libero esse qui placeat cum reprehenderit rem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iure omnis obcaecati, nemo dolorem expedita fuga assumenda quos maiores? Voluptate dolorum ipsum reiciendis magni suscipit quibusdam inventore! Fuga, eos suscipit.",
'links' => [['name' => 'Mental Outlook Tips', 'link' => ''], ['name' => 'Mental Fortitude Podcasts', 'link' => '/resources'], ['name' =>'Positivity Guidance', 'link' => '']],
],
[
'title' => 'Recovery Tips',
'image' => "/img/utah-rocks.jpg",
'altText' => "rock climbing wall in utah",
'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi illum quia nisi reiciendis exercitationem natus nostrum distinctio ut, repellendus vitae tempora blanditiis ad libero esse qui placeat cum reprehenderit rem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iure omnis obcaecati, nemo dolorem expedita fuga assumenda quos maiores? Voluptate dolorum ipsum reiciendis magni suscipit quibusdam inventore! Fuga, eos suscipit.",
'links' => [['name' => 'Recovery', 'link' => ''], ['name' => 'Recovery Podcasts', 'link' => '/resources'], ['name' => 'Recovery Article', 'link' => '']],
],
[
'title' => 'Mindfulness & Calming Strategies',
'image' => "/img/snow-tree.jpg",
'altText' => "sedona tree after snow fall",
'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi illum quia nisi reiciendis exercitationem natus nostrum distinctio ut, repellendus vitae tempora blanditiis ad libero esse qui placeat cum reprehenderit rem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iure omnis obcaecati, nemo dolorem expedita fuga assumenda quos maiores? Voluptate dolorum ipsum reiciendis magni suscipit quibusdam inventore! Fuga, eos suscipit.",
'links' => [['name' => 'Mindfulness Strategies', 'link' => ''], ['name' => 'Calming Strategies', 'link' => ''], ['name' => 'Mindfulness & Calming Strategies Podcasts', 'link' => '/resources'], ['name' =>'Mindfulness & Calming Strategies Article', 'link' => '']],
],
[
'title' => 'Workouts & Mobility',
'image' => "/img/fountain.jpg",
'altText' => "giant fountain with rainbow",
'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi illum quia nisi reiciendis exercitationem natus nostrum distinctio ut, repellendus vitae tempora blanditiis ad libero esse qui placeat cum reprehenderit rem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iure omnis obcaecati, nemo dolorem expedita fuga assumenda quos maiores? Voluptate dolorum ipsum reiciendis magni suscipit quibusdam inventore! Fuga, eos suscipit.",
'links' => [['name' => 'Exercise & Recovery', 'link' => ''], ['name' => 'Exercise Recovery', 'link' => ''], ['name' =>'Mobility & Recovery Exercise Resources', 'link' => '/resources']],
],
]
@endphp
@section('content')
<div class="w-3/4 m-auto mt-4">
    <h2 class="font-lora text-lg text-center text-dark-grey">DISCLAIMER: Climb Crux Conquer is not a medical practice, and cannot provide medical advice. The below resources are meant to provide general information and education that may or may not apply to you.</h2>
</div>
@foreach ($resources as $resource)
<div class="grid grid-cols-1 sm:grid-cols-2 justify-items-center gap-6 font-lora text-dark-grey mt-14 mb-6 mx-8">
    @if($loop->index % 2 !== 0)
    <div class="hidden sm:block p-4">
        <img loading="lazy" src="{{asset($resource['image'])}}" alt="{{$resource['altText']}}" class="object-cover h-96 w-96 p-2" />
    </div>
    @endif
    <div class="flex flex-col md:ml-8 mx-2 gap-4 text-base sm:text-lg">
        <h3 class="text-xl uppercase underline font-roboto">{{$resource['title']}}</h3>
        <p class="text-justify">{{$resource['description']}}</p>
        @foreach ($resource['links'] as $link)
        @if($link['link'] !== "/resources")
        <p><a class="text-green-blue hover:text-sunset-three" target="_blank" rel="noreferrer" href="{{$link['link']}}">{{$link['name']}}</a></p>
        @endif
        @endforeach
    </div>
    @if($loop->index % 2 === 0)
    <div class="hidden sm:block p-4">
        <img loading="lazy" src="{{asset($resource['image'])}}" alt="{{$resource['altText']}}" class="object-cover h-96 w-96 p-2" />
    </div>
    @endif
</div>
@endforeach
</div>
@endsection