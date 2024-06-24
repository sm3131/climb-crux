@extends('layouts.app')
@section('content')
<div class="grid grid-cols-1 justify-items-center gap-6 font-roboto mt-4 sm:mt-14 mx-2 sm:mx-16">
    <h3 class="text-2xl text-center">Climb Crux Conquer Blog</h3>
    @if($blogs->isEmpty())
    <p class="text-center">Climb Crux Conquer blogs are in the making! Stay Tuned!</p>
    @else
    <p class="text-center">Explore the blogs below to read about climbing recovery, pain and injury prevention, and fun rock climbing topics.</p>
    @endif
</div>
@if(session()->has('success'))
<h3 class="text-lg font-roboto font-bold text-center text-green-blue uppercase mt-4">{{session('success')}}</h3>
@endif
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center gap-4 sm:gap-10 font-aleg tracking-wide mt-10 mx-2 sm:mx-12 sm:mb-10">
    @foreach($blogs as $blog)
    @php
    $createdAtDate = Carbon\Carbon::parse($blog->created_at)
    ->setTimezone('America/Phoenix')
    ->toFormattedDateString();

    $updatedAtDate = Carbon\Carbon::parse($blog->updated_at)
    ->setTimezone('America/Phoenix')
    ->toFormattedDateString();

    $showUpdatedAtDate = (bool) $blog->show_updated_at_date;
    @endphp
    <div>
        <a href="/blog/{{$blog->slug}}">
            <div class="flex flex-col overflow-hidden rounded-lg shadow-md mb-4 max-w-72 sm:max-w-96 sm:h-84">
                    <img class="h-64 w-96 md:w-80 lg:w-96 xl:w-96 object-cover" src="{{asset('/img/' . $blog->image_url)}}" alt="{{ $blog->image_alt }}">
                <div class="p-6 h-32 w-auto md:w-80 lg:w-96 xl:w-96 flex flex-col items-center flex-grow bg-white overflow-scroll">
                    <div class="flex flex-col space-y-2">
                        <p class="text-xl sm:text-xl text-center capitalize">{{ $blog->title }}</p>
                        <p class="text-xl sm:text-lg text-center text-dark-grey">By: {{ $blog->author }}</p>
                        <p class="text-xl sm:text-lg text-center text-dark-grey">{{ $showUpdatedAtDate ? $updatedAtDate : $createdAtDate}}</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
<div class="flex flex-row justify-end mx-6 fixed top-3/4 right-0 z-50 transform opacity-80">
    <a href="#" class="border border-1 border-light-grey bg-dark-grey rounded px-2 py-1"><i class="fa-solid fa-angle-up"></i></a>
</div>
<div class="mx-6 my-4">
    {{ $blogs->links() }}
</div>
@endsection