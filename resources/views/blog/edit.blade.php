@extends('layouts.app')
@section('content')
@vite(['resources/js/editBlog.js'])
<div class="grid gri-cols-1 justify-items-center mt-8">
    <h2 class="font-aleg text-2xl tracking-wide">Edit Blog Post</h2>
    <form id="editPostForm" action="{{ route('blog.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-col gap-4 items-center">
            <div class="flex flex-col">
                <label class="font-aleg text-lg" for="slug">Slug</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="slug" name="slug" value="{{ $blog->slug }}" required/>
                @error('slug')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label class="font-aleg text-lg" for="image_url">Image Url</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="image_url" name="image_url" value="{{ $blog->image_url }}" required/>
                @error('image_url')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-col">
                <label class="font-aleg text-lg" for="image_alt">Image Alt Tag</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="image_alt" name="image_alt" value="{{ $blog->image_alt }}" required/>
                @error('image_alt')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label class="font-aleg text-lg" for="title">Title</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="title" name="title" value="{{ $blog->title }}" required />
                @error('title')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label class="font-aleg text-lg" for="author">Author</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="author" name="author" value="{{ $blog->author }}" required>
                @error('author')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-row justify-start w-96 gap-2">
                <label class="font-aleg text-lg" for="show_first">Show First</label>
                @if ($blog->show_first)
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
                @if ($blog->show_updated_at_date)
                <input class="h-6 w-6 border border-grey rounded" type="checkbox" name="show_updated_at_date" checked />
                @else
                <input class="h-6 w-6 border border-grey rounded" type="checkbox" name="show_updated_at_date" unchecked/>
                @endif
                @error('show_updated_at_date')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <input type="hidden" name="originalContent" id="originalContent" value="{{ $blog->content }}">

            <div class="flex flex-col space-y-2">
                <label class="font-aleg text-lg" for="editEditor">Content</label>
                <div id="editEditor" class="bg-white"></div>
                @error('content')
                <p class="text-deep-red text-xs sm:w-96 mb-2">{{ $message }}</p>
                @enderror
            </div>

            <input type="hidden" name="content" id="content">

            <div class="self-center text-center mb-2">
                <button class="border border-grey bg-white hover:bg-grey rounded font-roboto px-2" type="submit">
                    Update</button>
            </div>
        </div>
    </form>
    <a class="mb-2 border border-grey bg-white hover:bg-grey rounded font-roboto px-2" href="/blog-admin">Cancel</a>
    <div class="mb-4">
        <form action="{{ route('blog.delete', $blog->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="border border-grey bg-white hover:bg-grey rounded font-roboto px-2">
                Delete Blog
            </button>
        </form>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('js/editBlog.js') }}"></script>
@endpush