@extends('layouts.app')

@section('content')
<div class="grid gri-cols-1 justify-items-center">
    <h1 class="text-xl font-aleg text-center uppercase m-2 sm:w-96">Contact Climb Crux Conquer</h1>
    <h2 class="text-lg font-aleg text-center m-2 sm:w-1/2">Contact Climb Crux Conquer with any questions related to your return to rock climbing!</h2>
    <h2 class="text-lg font-aleg text-center m-2 sm:w-96">After receiving your message we will get back to you as soon as possible.</h2>
    @if(session()->has('success'))
    <h3 class="text-lg font-roboto font-bold text-center text-green-blue uppercase m-4">{{session('success')}}</h3>
    @endif
    @if(session()->has('error'))
    <h3 class="text-lg font-roboto font-bold text-center text-deep-red uppercase m-4 w-3/4 m-auto">{{session('error')}}</h3>
    @endif
    <form id="contactForm" action="#contact" method="POST">
        @csrf
        @honeypot
        <div id="contact" class="flex flex-col gap-4 items-center">
            <div class="flex flex-col">
                <label class="font-roboto" for="name">Name</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="text" id="name" name="name" value="{{ old('name') }}" required>
                @if($errors->has('name'))
                <p class="text-red text-xs sm:w-96 mb-2">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <div class="flex flex-col">
                <label class="font-roboto" for="email">Email</label>
                <input class="border border-grey rounded h-10 sm:w-96 p-2" type="email" id="email" name="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                <p class="text-red text-xs sm:w-96 mb-2">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="flex flex-col">
                <label class="font-roboto" for="messageContent">Message</label>
                <textarea class="border border-grey rounded h-20 sm:w-96 p-2" id="messageContent" name="messageContent" rows="4" required>{{ old('messageContent') }}</textarea>
                @if($errors->has('messageContent'))
                <p class="text-red text-xs sm:w-96 mb-2">{{ $errors->first('messageContent') }}</p>
                @endif
            </div>

            <div class="self-center text-center mb-4">
                <button class="g-recaptcha border border-grey bg-white hover:bg-grey rounded font-roboto px-2" type="submit" data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}" data-callback="onSubmit" data-action="submitContact">
                    Submit</button>
            </div>
        </div>
    </form>
</div>
@push('scripts')
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("contactForm").submit();
    }
</script>
@endpush
@endsection
