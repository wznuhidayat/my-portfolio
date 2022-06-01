@extends('main_template')
@section('container')
   
    <section class="py-48" id="home">
        <div class="container mx-auto px-6">
            <div class="md:flex justify-between">
               
                <div class="">
                    <p class="text-6xl font-bold animate-fade-in-right-fast" id="hello"><span
                            class="block ">Hello,</span>im <span
                            class="text-yellow-400 text-stroke text-stroke-black">Wisnu</span></p>
                    <button
                        class="border-solid border-2 border-black px-4 py-2 mt-3 hover:bg-yellow-400 btn-shadow-yellow btn-box transition ease-in-out delay-150 animate-fade-in-up"
                        id="btn-contact-hero">Contact
                        Me</button>
                    <div class="mt-40 text-right md:hidden animate-fade-in-left sosmed" >
                        <a href="https://www.facebook.com/next.recpector" class="mr-2">
                            <ion-icon name="logo-facebook" size="medium" class="text-2xl"></ion-icon>
                        </a>
                        <a href="https://www.instagram.com/m.wisnu_hidayat/" class="mr-2">
                            <ion-icon name="logo-instagram" size="medium" class="text-2xl"></ion-icon>
                        </a>
                        <a href="https://www.linkedin.com/in/muhammad-wisnu-hidayat-50058b234/" class="mr-2">
                            <ion-icon name="logo-linkedin" size="medium" class="text-2xl"></ion-icon>
                        </a>
                        <a href="https://github.com/wznuhidayat" class="mr-2">
                            <ion-icon name="logo-github" size="medium" class="text-2xl"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex md:flex-col">
                    <div class="text-white text-right text-8xl web">
                        <h1 class="font-extrabold text-stroke-2 text-stroke-black text-shadow-lg animate-fade-in-left">Web
                        </h1>
                    </div>
                    <div class="text-white text-right text-8xl web">
                        <h1 class="font-extrabold text-stroke-2 text-stroke-black text-shadow-lg animate-fade-in-left-1">
                            Developer</h1>
                    </div>
                    <div class="mt-40 text-right animate-fade-in-left sosmed" >
                        <a href="https://www.facebook.com/next.recpector" class="mr-2">
                            <ion-icon name="logo-facebook" size="medium" class="text-2xl"></ion-icon>
                        </a>
                        <a href="https://www.instagram.com/m.wisnu_hidayat/" class="mr-2">
                            <ion-icon name="logo-instagram" size="medium" class="text-2xl"></ion-icon>
                        </a>
                        <a href="https://www.linkedin.com/in/muhammad-wisnu-hidayat-50058b234/" class="mr-2">
                            <ion-icon name="logo-linkedin" size="medium" class="text-2xl"></ion-icon>
                        </a>
                        <a href="https://github.com/wznuhidayat" class="mr-2">
                            <ion-icon name="logo-github" size="medium" class="text-2xl"></ion-icon>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="pt-14 md:mt-5 md:pt-16" id="aboutme">
        <div class="container px-4 md:px-16 mx-auto ">
            <div>
                <h1 class="text-center text-3xl font-bold js-scroll-fade-up">About Me</h1>
                <h2 class="text-center text-3xl font-bold text-yellow-400 js-scroll-fade-up">Freelancer Web Developer</h2>
            </div>
            <div class="md:grid md:grid-cols-3 mt-10 flex flex-col">
                <div class="mx-auto col-span-1">
                    <img src="{{ asset('img/wisnu.jpg') }}" alt=""
                        class="w-64 md:w-80 scale-100 btn-shadow-yellow border-2 border-solid border-black js-scroll-fade-left">
                </div>
                <div class="col-span-2 px-10 py-10">
                    <p class="text-left js-scroll-fade-right ">Hello, my name is Muhammad Wisnu Hidayat,
                        I am a fresh graduate from a university in Surabaya.
                        I like to learn new things, especially in the field of web development.

                    </p>
                    <p class="mt-3 text-left js-scroll-fade-right">i also like graphic design such as typography,
                        UI/UX and logo design even though my design is not good.</p>
                    <p class="mt-3 text-left js-scroll-fade-right mb-7">able to work with team or individual, open minded and
                        working
                        on ambitious projects with positive people</p>
                    <a href="/resume"
                        class="border-solid border-2 border-black px-4 py-2 mt-3 hover:bg-yellow-400 btn-shadow-yellow btn-box transition ease-in-out delay-150 js-scroll-fade-right  ">View
                        Resume</a>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 mt-12 md:mt-28 md:pt-16" id="myservice">
        <div class="container mx-auto px-6 py-14">
            <div class="md:flex md:justify-between px-6 md:pl-6 md:pr-12">
                <div class="md:mt-32 mb-8 md:mb-0">
                    <h1 class="text-left text-yellow-400 text-2xl font-bold js-scroll-fade-right">What I Do</h1>
                    <h1 class="text-left font-bold text-3xl md:text-5xl mb-5 js-scroll-fade-right">My Service</h1>
                    <i class="gg-arrow-long-right js-scroll-fade-left"></i>
                </div>
                <div class="flex flex-col md:flex-row gap-6">
                    <div
                        class="border-2 border-solid border-black h-96 w-full md:w-72 py-8 px-5 image-shadow relative flex flex-col items-center justify-center js-scroll-fade-left transform transition duration-500 hover:scale-110 ">
                        <ion-icon name="code-slash-outline" class="text-6xl"></ion-icon>
                        <h2 class="font-bold text-xl my-3">Web Developer</h2>
                        <p class="text-center">Company Profile, E-commerce, Personal Website, Custom website and etc.</p>
                        {{-- <button class="absolute bottom-5 right-5">View Example <ion-icon name="arrow-forward-outline"
                                class="align-middle"></ion-icon></button> --}}
                    </div>
                    <div
                        class="border-2 border-solid border-black h-96 w-full md:w-72 py-8 px-5 image-shadow relative flex flex-col items-center justify-center js-scroll-fade-left transform transition duration-500 hover:scale-110">
                        <ion-icon name="color-palette-outline" class="text-6xl"></ion-icon>
                        <h2 class="font-bold text-xl my-3">UI/UX Designer</h2>
                        <p class="text-center">Web Design and
                            Mobile Apps Design.</p>
                        {{-- <button class="absolute bottom-5 right-5">View Example <ion-icon name="arrow-forward-outline"
                                class="align-middle"></ion-icon></button> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="mt-10 pt-8 md:pt-16 md:mt-28" id="myproject">
        <div class="container mx-auto px-6 py-14">
            <div class="md:grid md:grid-cols-3 flex md:flex-col flex-col-reverse ">
                
                <div class="md:col-span-2 h-120 w-full js-scroll-my-project carouserl-wrap "
                    id="galleryProject">
                    <div class="owl-carousel owl-theme">
                    {{-- <div class="h-96 w-42 bg-slate-400 border-2 border-solid border-black  overflow-hidden group relative"> Your Content </div>
                    <div class="h-96 w-42 bg-slate-400 border-2 border-solid border-black  overflow-hidden group relative"> Your Content </div> --}}
                     @foreach ($projects as $item)
                    <div
                        class="bg-gray-700 h-80 md:h-96 w-42 border-2 border-solid border-black group relative ">
                        <img src="{{ asset('images/'.$item->thumbnail) }}" alt=""
                            class="object-contain object-center w-full transform ease-in duration-500 group-hover:mix-blend-overlay h-full">
                        <div
                            class="group-hover:absolute w-full top-36 md:top-52 left-5 transform ease-in duration-300 opacity-0 group-hover:opacity-100 group-hover:translate-y-11">
                            <div class="flex justify-between w-full pr-10">
                                <div>
                                    <h2 class="font-semibold text-md md:font-bold md:text-2xl text-white">{{$item->title}}</h2>
                                    <h2 class="text-sm md:text-lg text-slate-200">
                                        @foreach ($item->categoryes as $category)
                                        {{$category->name}}, 
                                        @endforeach
                                    </h2>
                                </div>
                                <button class="view-detail" data-title="{{$item->title}}" data-content="{{$item->content}}" data-categoryes="{{$item->categoryes}}" data-github="{{$item->github}}" id="select" onclick="toggleModal()">
                                    <ion-icon name="eye-outline" class="text-white w-5 md:w-8 h-5 md:h-8" ></ion-icon>
                                </button>
                            </div>

                        </div>
                        <div
                            class="group-hover:absolute top-36 md:top-52 right-5 transform ease-in duration-300 opacity-0 group-hover:opacity-100 group-hover:translate-y-11">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                    </div>
                    @endforeach
                    </div>
                   
                    
                </div>
                <div class="md:mt-32 md:px-6 mb-8 md:mb-0">
                    <h1 class="text-right font-bold text-3xl md:text-5xl mb-2 js-scroll-fade-left">My Project</h1>
                    <p class="mb-3 text-yellow-400 font-bold text-right js-scroll-fade-left ">This project contains
                        personal
                        projects or client projects</p>
                    <i class="gg-arrow-long-left float-right js-scroll-fade-right"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-10 pt-8 md:mt-32" id="contact">
        <div class="container mx-auto px-6 py-8">
            <h1 class="text-center text-3xl font-bold mb-10 js-scroll-fade-up">Contact</h1>
            @if (Session::has('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 md:mx-32 relative mb-5"
                    role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ Session::get('status') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" id="alertcontact">
                        <ion-icon name="close-outline"></ion-icon>
                    </span>
                </div>
            @endif

            <form action="/contact" class="px-6 md:px-32 js-scroll-items-left" method="POST">
                {{ csrf_field() }}
                <label class="block mb-4">
                    <span class="text-gray-700">Your Name</span>
                    <input type="text" class="mt-1 block w-full" placeholder="Full Name" name="name">
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Email address</span>
                    <input type="email" class="mt-1 block w-full" placeholder="john@example.com" name="email">
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Subject</span>
                    <input type="text" class="mt-1 block w-full" placeholder="Subject" name="subject">
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Your Message</span>
                    <textarea class="mt-1 block w-full" rows="4" placeholder="Write Message" name="message"></textarea>
                </label>
                <div class="flex justify-center mt-4">
                    <button type="submit"
                        class="border-solid border-2 border-black px-4 py-2 mt-2 hover:bg-yellow-400 btn-shadow-yellow btn-box transition ease-in-out delay-150 content-center js-scroll-fade-right">Send
                        Message</button>
                </div>

            </form>
        </div>
    </section>
    <div class="fixed z-20 overflow-y-auto top-0 w-full left-0 hidden modal" id="modal">
        <div class="flex items-center justify-center min-height-100vh px-4 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-900 opacity-75">
                </div>
                {{-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span> --}}
                <div class="inline-block align-center p-5  w-10/12 h-5/6 bg-white text-left shadow-xl transform transition-all sm:my-8 sm:align-middle border-2 border-solid border-black"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    {{-- <button type="button" class="py-2 px-4 fixed right-10 top-10" onclick="toggleModal()"><ion-icon name="close-circle-outline" size="large"></ion-icon></button> --}}
                    
                    <div class="overflow-scroll p-3 w-full h-[95%] bg-white">
                        <div class="header border-2 border-solid border-black w-full h-fit px-2 py-3 mb-4 bg-yellow-400">
                            <h1 class="text-3xl font-bold mb-2" id="title-project"></h1>
                            <h1 class="font-sm" id="category"></h1>
                        </div>
                        <div id="content"></div>
                    </div>
                    <div class="bg-white px-4 text-right">
                        <a href="#" id="github" class="py-1 px-2 text-dark text-sm hover:bg-green-400 mr-2 border border-solid border-black"><ion-icon name="logo-github"></ion-icon></a>
                        <button type="button" class="py-1 px-2 text-dark text-sm hover:bg-yellow-400 mr-2 border border-solid border-black"><ion-icon name="link-outline"></ion-icon></button>
                        <button type="button" class="py-1 px-2 text-dark text-sm hover:bg-red-400 mr-2 border border-solid border-black" onclick="toggleModal()"><ion-icon name="close-outline"></ion-icon></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <br><br><br>
    <br><br><br>
@endsection
