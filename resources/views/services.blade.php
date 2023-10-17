@extends('layout.master')

@section('content')
    <style>
        .backgroundImage {
            background-image: url('/images/bgImage.jpg');
        }
    </style>

    {{-- breadcrumb --}}
    <div class="container-full backgroundImage text-white bg-cover bg-fixed my-24">
        <div class="container mx-auto">
            <div class="flex">
                <ul class="flex py-24 text-2xl">
                    <li> <a href="{{ url('/') }}"> Home / </a> </li>
                    <li> Services </li>
                </ul>
            </div>
        </div>
    </div>



    {{-- mainBody     --}}
    <div class="container mx-auto mb-24">
        <div class="grid grid-cols-4 gap-4">

            <div
                class="border border-b-4 py-12 flex justify-center align text-3xl hover:bg-gray-500 hover:text-white transition-all duration-100 cursor-pointer">
                Online News Portal </div>
            <div
                class="border border-b-4 py-12 flex justify-center align text-3xl hover:bg-gray-500 hover:text-white transition-all duration-100 cursor-pointer">
                Official Website </div>
            <div
                class="border border-b-4 py-12 flex justify-center align text-3xl hover:bg-gray-500 hover:text-white transition-all duration-100 cursor-pointer">
                ePaper </div>
            <div
                class="border border-b-4 py-12 flex justify-center align text-3xl hover:bg-gray-500 hover:text-white transition-all duration-100 cursor-pointer">
                Graphic Design </div>
            <div
                class="border border-b-4 py-12 flex justify-center align text-3xl hover:bg-gray-500 hover:text-white transition-all duration-100 cursor-pointer">
                Newspaper Design </div>
            <div
                class="border border-b-4 py-12 flex justify-center align text-3xl hover:bg-gray-500 hover:text-white transition-all duration-100 cursor-pointer">
                Video Editing </div>
            <div
                class="border border-b-4 py-12 flex justify-center align text-3xl hover:bg-gray-500 hover:text-white transition-all duration-100 cursor-pointer">
                Spoken English </div>
            <div
                class="border border-b-4 py-12 flex justify-center align text-3xl hover:bg-gray-500 hover:text-white transition-all duration-100 cursor-pointer">
                Book Design </div>



        </div>
    </div>
@endsection
