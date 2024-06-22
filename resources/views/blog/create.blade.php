@extends('layouts.app')
@section('content')
@vite(['resources/js/createBlog.js'])
<div class="grid gri-cols-1 justify-items-center mt-8">
    <h2 class="font-aleg text-2xl tracking-wide">Create New Blog Post</h2>
    @if(session()->has('error'))
    <h3 class="text-lg font-roboto font-bold text-center text-deep-red uppercase m-4 w-3/4 m-auto">{{session('error')}}</h3>
    @endif
    <form id="createPostForm" action="{{ route('blog.store') }}" method="POST">
        @csrf
        <div class="flex flex-col gap-4 items-center">
            <div class="flex flex-col">
                <label class="font-aleg text-lg" for="slug">Slug</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="slug" name="slug" value="{{ old('slug') }}" />
                @error('slug')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label class="font-aleg text-lg" for="image_url">Image Url</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="image_url" name="image_url" value="{{ old('image_url') }}" />
                @error('image_url')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label class="font-aleg text-lg" for="image_alt">Image Alt Tag</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="image_alt" name="image_alt" value="{{ old('image_alt') }}" />
                @error('image_alt')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label class="font-aleg text-lg" for="title">Title</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="title" name="title" value="{{ old('title') }}" />
                @error('title')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label class="font-aleg text-lg" for="author">Author</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="author" name="author" value="{{ old('author') }}" />
                @error('author')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-row justify-start w-96 gap-2">
                <label class="font-aleg text-lg" for="show_first">Show First</label>
                @if (old('show_first'))
                <input class="h-6 w-6 border border-grey rounded" type="checkbox" name="show_first" checked />
                @else
                <input class="h-6 w-6 border border-grey rounded" type="checkbox" name="show_first" unchecked/>
                @endif
                @error('show_first')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-row justify-start w-96 gap-2">
                <label class="font-aleg text-lg" for="show_updated_at_date">Show Updated At Date</label>
                @if (old('show_updated_at_date'))
                <input class="h-6 w-6 border border-grey rounded" type="checkbox" name="show_updated_at_date" checked />
                @else
                <input class="h-6 w-6 border border-grey rounded" type="checkbox" name="show_updated_at_date" unchecked/>
                @endif
                @error('show_updated_at_date')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col space-y-2">
                <label class="font-aleg text-lg" for="createEditor">Content</label>
                <div id="createEditor" class="bg-white"></div>
                @error('content')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <input type="hidden" name="content" id="content">

            <div class="flex self-center text-center mb-4">
                <button class="border border-grey bg-white hover:bg-grey rounded font-roboto px-2" type="submit">
                    Post</button>
            </div>
        </div>
    </form>
    <div class="flex mb-4">
        <a class="border border-grey bg-white hover:bg-grey rounded font-roboto px-2" href="/blog-admin">Admin Blog</a>
    </div>
    <form method="POST" action="{{ route('logout') }}" class="mb-4">
        @csrf

        <button type="submit" class="border border-grey bg-white hover:bg-grey rounded font-roboto px-2">
            Log Out
        </button>
    </form>
</div>
@endsection