@extends('resume_template')
@section('container')
    <section class="relative min-h-screen md:flex">
        <aside class="bg-yellow-400 text-black w-0 md:w-3/4 space-y-6 pt-6 px-0 absolute inset-y-0 left-0 transform md:relative md:translate-x-0 transition duration-200 ease-in-out  md:flex md:flex-col md:justify-between overflow-y-auto animate-fade-in-left-1">
            <h1 class="font-bold text-9xl rotate-90 relative top-28 text-yellow-400 text-stroke-2 text-stroke-black">Resume</h1>
        </aside>
        <div class="p-10">
            <h1 class="font-bold text-3xl animate-fade-in-right-fast">Skills</h1>
            <ul class="list-disc mt-3 px-8 js-scroll-items-right">
                <li>PHP</li>
                <li>Javascript</li>
                <li>HTML/CSS</li>
                <li>Codeigniter</li>
                <li>Bootstrap</li>
                <li>Tailwind CSS</li>
                <li>MySQL</li>
                <li>AJAX</li>
                <li>Work with API</li>
            </ul>
            <h1 class="font-bold text-3xl mt-5 animate-fade-in-right">Education</h1>
            <ul class="list-disc mt-3 px-8 js-scroll-items-right">
                <li >MTS An-Nuriyah Benjeng ( 2010 - 2013 )</li>
                <li >SMA Ma’arif NU Benjeng ( 2013 - 2016 )</li>
                <li >Universitas Wijaya Putra Surabaya ( 2017 - 2021 )</li>
            </ul>
            <h1 class="font-bold text-3xl mt-5 animate-fade-in-right-sec">Work Experiance and Internship </h1>
            <ul class="list-disc mt-3 px-8 js-scroll-items-right">
                <li>Work - Quality Control di PT. Titani Alam Semesta ( Des 2016 - Agst 2018 )</li>
                <li>Internship - di PT. PAL Indonesia ( Nov 2016 - Des 2018 )</li>
            </ul>
        </div>
    </section>
    
@endsection
