@extends('resume_template')
@section('container')
    <section class="relative min-h-screen md:flex">
        <aside class="bg-yellow-400 text-black w-0 md:w-3/5 space-y-6 pt-6 px-0 absolute inset-y-0 left-0 transform md:relative md:translate-x-0 transition duration-200 ease-in-out  md:flex md:flex-col md:justify-between overflow-y-auto animate-fade-in-left-1">
            <div class="mx-auto pt-40">
                <img src="{{ asset('img/mwh.png') }}" alt="" class="object-cover w-32">
                <h2 class="font-bold text-2xl mt-5">Wellcome Back</h2>
                <p class=" text-lg">Stay humble and keep learning</p>
            </div>
            
        </aside>
        <div class="px-10 pt-40 w-full">
            <h1 class="font-bold text-3xl animate-fade-in-right-fast mb-5 text-center">Sign In</h1>
            @if (Session::has('loginError'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 md:mx-10 relative mb-5"
                    role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ Session::get('loginError') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" id="alertcontact">
                        <ion-icon name="close-outline"></ion-icon>
                    </span>
                </div>
            @endif
            <form action="/login" class=" md:px-10 js-scroll-items-left" method="POST">
                {{ csrf_field() }}
                
                <label class="block mb-4">
                    <span class="text-gray-700">Email address</span>
                    <input type="email" class="mt-1 block w-full" placeholder="john@example.com" name="email" autofocus>
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Password</span>
                    <input type="password" class="mt-1 block w-full" placeholder="Password" name="password">
                </label>
                
                <div class="flex justify-center mt-4">
                    <button type="submit"
                        class="border-solid border-2 border-black px-4 py-2 mt-2 hover:bg-yellow-400 btn-shadow-yellow btn-box transition ease-in-out delay-150 content-center js-scroll-fade-right">Sign In</button>
                </div>

            </form>
        </div>
    </section>
    
@endsection
