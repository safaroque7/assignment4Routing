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

            @foreach ($dataServices as $dataService)
                <div
                    class="border border-b-4 py-12 flex justify-center align text-3xl hover:bg-gray-900 hover:text-white transition-all duration-500 cursor-pointer">
                    <a href="/services/{{$dataService->id}}"> {{ $dataService->title }} </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection