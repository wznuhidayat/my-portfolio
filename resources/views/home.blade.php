@extends('main_template')
@section('container')
    <section class="py-48">
        <div class="container mx-auto px-6">
            <div class="md:flex justify-between">
                <div class="">
                    <p class="text-6xl font-bold"><span class="block">Hello,</span>im <span
                            class="text-yellow-400 text-stroke text-stroke-black">Wisnu</span></p>
                    <button
                        class="border-solid border-2 border-black px-4 py-2 mt-3 hover:bg-yellow-400 btn-shadow-yellow btn-box transition ease-in-out delay-150">Contact
                        Me</button>
                </div>
                <div class="hidden md:flex md:flex-col">
                    <div class="text-white text-right text-8xl ">
                        <h1 class="font-extrabold text-stroke-2 text-stroke-black text-shadow-lg">Web</h1>
                    </div>
                    <div class="text-white text-right text-8xl ">
                        <h1 class="font-extrabold text-stroke-2 text-stroke-black text-shadow-lg">Developer</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-14 md:mt-40">
        <div class="container px-6 md:px-16 mx-auto ">
            <h1 class="text-center text-3xl font-bold">About Me</h1>
            <h2 class="text-center text-3xl font-bold text-yellow-400">Freelancer Web Developer</h2>
            <div class="md:grid md:grid-cols-3 mt-10 flex flex-col">
                <div class="mx-auto col-span-1">
                    <img src="{{ asset('img/wisnu.jpg') }}" alt=""
                        class="w-64 md:w-80 scale-100 btn-shadow-yellow border-2 border-solid border-black">
                </div>
                <div class="col-span-2 px-10 py-10">
                    <p class="text-left">Hello, my name is Muhammad Wisnu Hidayat,
                        I am a fresh graduate from a university in Surabaya.
                        I like to learn new things, especially in the field of web development.

                    </p>
                    <p class="mt-3 text-left">i also like graphic design such as typography,
                        UI/UX and logo design even though my design is not good.</p>
                    <p class="mt-3 text-left">able to work with team or individual, open minded and working
                        on ambitious projects with positive people</p>
                    <button
                        class="border-solid border-2 border-black px-4 py-2 mt-3 hover:bg-yellow-400 btn-shadow-yellow btn-box transition ease-in-out delay-150">View
                        Resume</button>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 md:mt-40">
        <div class="container mx-auto px-6 py-40">
            <div class="md:flex md:justify-between px-6 md:pl-6 md:pr-12">
                <div class="md:mt-32 mb-8 md:mb-0">
                    <h1 class="text-left text-yellow-400 text-2xl font-bold">What I Do</h1>
                    <h1 class="text-left font-bold text-3xl md:text-5xl mb-5">My Service</h1>
                    <i class="gg-arrow-long-right"></i>
                </div>
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="border-2 border-solid border-black h-96 w-full md:w-72 py-8 px-5 image-shadow relative flex flex-col items-center ">
                        <ion-icon name="code-slash-outline" class="text-6xl mt-5"></ion-icon>
                        <h2 class="font-bold text-xl my-3">Web Developer</h2>
                        <p class="text-center">Company Profile, E-commerce, Personal Website, Custom website and etc.</p>
                        <button class="absolute bottom-5 right-5">View Example <ion-icon name="arrow-forward-outline"
                                class="align-middle"></ion-icon></button>
                    </div>
                    <div class="border-2 border-solid border-black h-96 w-full md:w-72 py-8 px-5 image-shadow relative flex flex-col items-center">
                        <ion-icon name="color-palette-outline" class="text-6xl mt-5"></ion-icon>
                        <h2 class="font-bold text-xl my-3">UI/UX Designer</h2>
                        <p class="text-center">Web Design and
                            Mobile Apps Design.</p>
                        <button class="absolute bottom-5 right-5">View Example <ion-icon name="arrow-forward-outline"
                                class="align-middle"></ion-icon></button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="mt-40">
        <div class="container mx-auto px-6">
            <div class="md:grid md:grid-cols-3 flex flex-col flex-col-reverse">
                
                <div class="md:col-span-2 h-120 grid grid-cols-2 md:grid-cols-4 gap-2">
                    <div class="bg-yellow-400 border-2 border-solid border-black md:col-span-2 md:row-span-2 row-span-2 col-span-2">2</div>
                    <div class="bg-yellow-400 border-2 border-solid border-black ">1</div>
                    <div class="bg-yellow-400 border-2 border-solid border-black ">3</div>
                    <div class="bg-yellow-400 border-2 border-solid border-black ">4</div>
                    <div class="bg-yellow-400 border-2 border-solid border-black ">5</div>
                </div>
                <div class="md:mt-32 md:px-6 mb-8 md:mb-0">
                    <h1 class="text-right font-bold text-3xl md:text-5xl mb-2">My Project</h1>
                    <p class="mb-3 text-yellow-400 font-bold text-right">This project contains personal
                        projects or client projects</p>
                    <i class="gg-arrow-long-left float-right"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-40">
        <div class="container mx-auto px-6">
            <h1 class="text-center text-3xl font-bold mb-10">Contact</h1>
            <form action="" class="px-6 md:px-32">
                <label class="block mb-4">
                    <span class="text-gray-700">Your Name</span>
                    <input type="text" class="mt-1 block w-full" placeholder="Full Name">
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Email address</span>
                    <input type="email" class="mt-1 block w-full" placeholder="john@example.com">
                  </label>
                  <label class="block mb-4">
                    <span class="text-gray-700">Subject</span>
                    <input type="text" class="mt-1 block w-full" placeholder="Subject">
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Your Message</span>
                    <textarea class="mt-1 block w-full" rows="4" placeholder="Write Message"></textarea>
                </label>
                <div class="flex justify-center mt-4">
                    <button
                        class="border-solid border-2 border-black px-4 py-2 mt-2 hover:bg-yellow-400 btn-shadow-yellow btn-box transition ease-in-out delay-150 content-center">Send Message</button>
                </div>
                
            </form>
        </div>
    </section>
    <br><br><br>
    <br><br><br>
    <br><br><br>
@endsection
