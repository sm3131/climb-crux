<div class="sm:sticky top-0 z-20 bg-grey flex flex-row justify-between text-sm sm:text-base md:text-xl font-aleg text-black p-3">
    <div class="flex flex-row">
        <a href="/"><img src="{{ asset('img/mountain-logo.png')}}" title="Peaks icons created by PLANBSTUDIO - Flaticon" class="h-12 w-auto inline ml-2 mt-2" /></a>
        <a href="/" class="hidden sm:inline text-left self-start mt-5 ml-2 text-base sm:text-xl hover:text-green-blue font-aleg tracking-wide uppercase">Climb Crux Conquer</a>
        <a href="/" class="sm:hidden self-start text-2xl mt-4 hover:text-green-blue font-aleg tracking-wide uppercase">CCC</a>
    </div>
    <div class="hidden lg:inline-flex flex flex-row text-center sm:gap-4 sm:justify-self-end mt-3 mr-4">
        <div class="hover:text-green-blue uppercase"><a href="/">Home</a></div>
        <div class="hover:text-green-blue uppercase"><a href="/about">About</a></div>
        <div class="hover:text-green-blue uppercase"><a href="/support">Support</a></div>
        <div class="hover:text-green-blue uppercase"><a href="/resources">Resources</a></div>
        <div class="hover:text-green-blue uppercase"><a href="/resources">Testing Revert</a></div>
        <div class="hover:text-green-blue uppercase"><a href="/contact">Contact</a></div>
    </div>
    <div class="lg:hidden flex flex-col text-right sm:gap-4 self-end mr-2 mb-2" x-data="{ show: false}">
        <button @click="show = !show" class="self-end mr-2 mb-1">
            <i class="fa-solid fa-bars text-2xl"></i>
    </button>
        <div x-cloak x-show="show" class="text-right text-base mr-2">
            <div class="hover:text-green-blue uppercase"><a href="/">Home</a></div>
            <div class="hover:text-green-blue uppercase"><a href="/about">About</a></div>
            <div class="hover:text-green-blue uppercase"><a href="/support">Support</a></div>
            <div class="hover:text-green-blue uppercase"><a href="/resources">Resources</a></div>
            <div class="hover:text-green-blue uppercase"><a href="/contact">Contact</a></div>
        </div>
    </div>
</div>
<div class="grid bg-center bg-cover h-48 sm:h-96 place-content-center" style="background-image: url('/img/sunrise.jpg')">
    <div>
        <h1 class="text-2xl sm:text-5xl text-center text-white p-6 justify-center font-aleg uppercase">Return to RockClimbing</h1>
        <h1 class="sm:hidden text-2xl text-center text-white justify-center font-aleg uppercase">Climb Crux Conquer</h1>
    </div>
</div>