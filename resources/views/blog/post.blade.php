@extends('layouts.app')
@section('content')
@php
$updatedAtDate = (bool) $blog->show_updated_at_date;
@endphp
<div class="grid grid-cols-1 justify-items-center gap-2 font-nunito tracking-wider mt-4">
    @auth
    <a class="ml-4 border border-grey bg-white hover:bg-grey rounded font-nunito px-2 justify-self-start" href="/blog-admin">Back to Admin Blogs</a>
    @endauth
    @guest
    <a class="ml-4 border border-grey bg-white hover:bg-grey rounded font-nunito px-2 justify-self-start" href="/blog">Back to Blogs</a>
    @endguest
    <h2 class="text-2xl text-center mx-2 capitalize">{{ $blog->title }}</h2>
    <p class="text-center">Author: {{ $blog->author }}</p>
    @if($updatedAtDate === true)
    <p>Date: {{ $updatedDate }}</p>
    @else
    <p>Date: {{ $createdDate }}</p>
    @endif
    @if(session()->has('success'))
    <h3 class="text-lg font-roboto font-bold text-center text-green-blue uppercase mt-4">{{session('success')}}</h3>
    @endif
</div>
<div class="grid grid-cols-1 justify-items-center gap-2 font-nunito mt-6 mx-8 sm:mx-16">
    <div class="w-96 max-h-96 overflow-hidden">
        <img src="{{ asset('/img/' . $blog->image_url)}}" alt="{{ $blog->image_alt }}" />
    </div>
    <div class="mb-4 mt-4 bg-white p-6 sm:p-8 rounded-md">
        @markdom($blog->content)
    </div>
</div>
@endsection