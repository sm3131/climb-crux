@extends('layouts.app')

@section('content')
<h2 class="uppercase text-roboto text-dark-grey text-center text-3xl mt-10">About Climb Crux Conquer</h2>
<div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-1 justify-items-center gap-6 font-lora text-dark-grey my-4 mx-8 sm:mt-14 sm:mb-6">
    <div class="flex flex-col gap-4 m-4">
        <h3 class="text-center text-roboto uppercase font-bold">Our Approach</h3>
        <img loading="lazy" src="{{asset('/img/flag-sky.jpg')}}" alt="flagstaff sunset sky" class="object-cover h-48 w-auto p-2" />
        <p class="text-center sm:text-justify">At Climb Crux Conquer we use a multifaceted approach to educate you on physical and mental health so you can return to rockclimbing.
            It is important to address both of these components, as there is great interplay between the two which affects overall wellbeing. Coming back from injury,
            and healing lingering pains will take time, but with consistency and perseverance you will get back in the mountains.</p>
    </div>
    <div class="flex flex-col gap-4 m-4">
        <h3 class="text-center text-roboto uppercase font-bold">Target Audience</h3>
        <img loading="lazy" src="{{asset('/img/indian-creek.jpg')}}" alt="indian creek rock formation in moab" class="object-cover h-48 w-auto p-2" />
        <p class="text-center sm:text-justify">At Climb Crux Conquer we want to help anyone who has been away from climbing for a while due to injury or pain.
            The goal is to provide support and positive reinforcement to show you that it is possible to climb again. Sometimes you need the proper resources and community
            to achieve your goals. Injuries and pain are not forever, it just takes time and the proper regimen to see
            progress.</p>
    </div>
    <div class="flex flex-col gap-4 m-4">
        <h3 class="text-center text-roboto uppercase font-bold">Strategies and Tools</h3>
        <img loading="lazy" src="{{asset('/img/salt-lake-mount.jpg')}}" alt="salt lake city mountain range" class="object-cover h-48 w-auto p-2" />
        <p class="text-center sm:text-justify">Climb Crux Conquer will provide a variety of tips, tools, and support to help get you back on the wall. What we offer:</p>
        <ol class="list-disc ml-6 text-left">
            <li>Articles & Online Resources</li>
            <li>Health & Climbing Podcasts</li>
            <li>Community Support Page</li>
            <li>Nutrition Tips & Example Plans</li>
            <li>Recovery Modalities</li>
            <li>And More...</li>
        </ol>
    </div>
</div>

<h2 class="uppercase text-roboto text-dark-grey text-center text-3xl mb-10">Climb Crux Conquer Founder Sammi</h2>
<div class="flex flex-col md:flex-row gap-4 font-lora text-dark-grey md:mb-10">
    <div class="md:w-6/12 md:ml-6">
        <img loading="lazy" src="{{asset('/img/ccc-profile.jpg')}}" alt="climb crux conquer founder hiking sandy canyon in San Diego" class="object-cover h-80 w-80 m-auto" />
    </div>
    <div class="w-full self-center">
        <h3 class="text-center md:text-left md:ml-6 text-roboto uppercase font-bold">Background</h3>
        <p class="text-center md:text-left px-8 md:pl-6 md:pr-12 mb-6 w-full">
            Sammi is the founder of Climb Crux Conquer, and she has experience with having to step back from climbing due to health issues. She has dealt with a variety of different injuries and pains over the years that have prevented her from doing what she loves. Sammi has always been interested in health, nutrition, and fitness. She wants to use her knowledge to help others who are struggling. Sammi created Climb Crux Conquer to provide a community of support and guidance to help people return to climbing. Over the years Sammi has learned a lot about nutrition, physiology, and mental health which she believes all come together to create a healthy human being who is capable of staying active for the long term. 
        </p>
    </div>
</div>
<div class="flex flex-col md:flex-row gap-4 font-lora text-dark-grey md:mb-10">
    <div class="md:hidden block md:w-6/12">
        <img loading="lazy" src="{{asset('/img/rr-valley.jpg')}}" alt="red rock valley sandstone rock formations" class="object-cover h-80 w-80 m-auto" />
    </div>
    <div class="w-full self-center lg:mr-12">
        <h3 class="text-center md:text-left md:ml-8 lg:ml-20 text-roboto uppercase font-bold">Experience</h3>
        <p class="text-center md:text-left px-8 md:pr-12 mb-6 lg:ml-12 w-full">
            Sammi has both a bachelor's and master's degree in the fields of physiology and science education. Using her schooling background, individual experience, and interest in health and climbing she hopes to provide knowledge and information to help others overcome their struggles. It is never fun to be away from the sports you love, and if you are a climber then you know how hard it is to stay away from the rock. Climb Crux Conquer aims to build community around healing and help climbers return to the rock. Sammi hopes you will take advantage of the support and resources provided to make changes and start your healing process to return to climbing.
        </p>
    </div>
    <div class="hidden md:block md:w-6/12 md:mr-6">
        <img loading="lazy" src="{{asset('/img/rr-valley.jpg')}}" alt="red rock valley sandstone walls" class="object-cover h-80 w-80 m-auto" />
    </div>
</div>
<div class="flex flex-col md:flex-row gap-4 font-lora text-dark-grey md:mb-10">
    <div class="md:w-6/12 md:ml-6">
        <img loading="lazy" src="{{asset('/img/utah-rocks.jpg')}}" alt="utah limestone rockclimbing walls" class="object-cover h-80 w-80 m-auto" />
    </div>
    <div class="w-full self-center">
        <h3 class="text-center md:text-left md:ml-6 text-roboto uppercase font-bold">Interests</h3>
        <p class="text-center md:text-left px-8 md:pl-6 md:pr-12 mb-6 w-full">
            Sammi is an outdoor enthusiast with a passion for rockclimbing. As she has navigated injuries and pain over the years, she also became interested in mountain biking and hiking. Then to maintain health and overall wellbeing, Sammi spends a lot of time working on mobility, balance, and recovery exercises. Sammi hasn't made a full return to climbing yet, but continues to work toward the ultimate goal of healing and returning to rockclimbing in the outdoors. 
        </p>
    </div>
</div>
@endsection