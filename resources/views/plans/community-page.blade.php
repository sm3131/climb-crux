@extends('layouts.app')

@section('content')
<div class="mt-6 mx-12">
    <h2 class="font-lora text-lg"><a href="/support" class="text-dark-grey hover:text-green-blue"><i class="fa-solid fa-arrow-left"></i> Back to Support Page</a></h2>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center gap-6 font-lora text-dark-grey sm:mb-6">
    <div class="flex flex-col sm:ml-8 ml-4 text-lg text-left sm:text-justify">
        <div class="m-6">
            <img src="{{url('/img/sedona.jpg')}}" alt="sedona rock formation" class="lg:hidden object-cover h-6/12 w-6/12 m-auto" />
        </div>
        <div class="mr-6 ml-6 text-left">
            <h3 class="text-2xl uppercase font-roboto">Community Page</h3>
            <p class="mr-4 md:mr-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sapiente quia odit. Praesentium, aspernatur porro, excepturi unde quasi officia sunt quia non velit alias culpa nobis. Quaerat ipsum quas id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero enim dolorum aliquam quia ratione nihil blanditiis quasi neque unde, exercitationem labore, distinctio cum reiciendis. Quis eum beatae deleniti reprehenderit fuga?</p>
            <p class="mt-6 font-roboto uppercase">Community Page Links</p>
            <ul class="mr-4">
                <li><a href="" class="text-green-blue hover:text-dark-blue">Slack</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Instagram</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Facebook</a></li>
                <li><a href="" class="text-green-blue hover:text-dark-blue">Other</a></li>
            </ul>
            </p>
            <h3 class="text-2xl text-left uppercase font-roboto mt-6">Extras</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ex mollitia? Asperiores, libero quibusdam porro quo neque cum minus ipsum assumenda sequi, fuga voluptatum officia totam, modi blanditiis nisi quaerat.</p>
        </div>
    </div>
    <div class="mr-6">
        <img src="{{url('/img/sedona.jpg')}}" alt="sedona rock formation" class="hidden lg:block object-cover h-8/12 w-8/12 ml-12 mt-24 mb-4" />
    </div>
</div>
@endsection