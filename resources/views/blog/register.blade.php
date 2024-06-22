@extends('layouts.app')
@section('content')
<div class="grid gri-cols-1 justify-items-center mt-8">
<h2 class="font-aleg text-2xl tracking-wide">Registration</h2>
<form id="register" action="{{ route('register') }}" method="POST">
    @csrf
    <div class="flex flex-col gap-4 items-center">
        <div class="flex flex-col">
            <label class="font-aleg text-lg" for="name">Name</label>
            <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="name" name="name" value="{{ old('name') }}" required>
            @if($errors->has('name'))
            <p class="text-red text-xs sm:w-96 mb-2">{{ $errors->first('name') }}</p>
            @endif
        </div>

        <div class="flex flex-col">
            <label class="font-aleg text-lg" for="email">Email</label>
            <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="email" name="email" value="{{ old('email') }}" required>
            @if($errors->has('email'))
            <p class="text-red text-xs sm:w-96 mb-2">{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div class="flex flex-col">
            <label class="font-aleg text-lg" for="user_type">User Type</label>
            <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="user_type" name="user_type" value="{{ old('user_type') }}" required>
            @if($errors->has('user_type'))
            <p class="text-red text-xs sm:w-96 mb-2">{{ $errors->first('user_type') }}</p>
            @endif
        </div>

        <div class="flex flex-col">
            <label class="font-aleg text-lg" for="password">Password</label>
            <input class="border border-grey rounded h-10 sm:w-96 p-2" type="password" id="password" name="password" value="{{ old('password') }}" required>
            @if($errors->has('password'))
            <p class="text-red text-xs sm:w-96 mb-2">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="self-center text-center mb-4">
            <button class="border border-grey bg-white hover:bg-grey rounded font-roboto px-2" type="submit">
                Register</button>
        </div>
    </div>
</form>
</div>
@endsection