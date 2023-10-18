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
                    <li> Will be dynamic </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- mainBody --}}
    <div class="container mx-auto mb-24">
        <div class="flex">
          <div class="w-2/5">
            <img src="https://placeholder.com/450x350" alt="">
          </div>
          <div class="w-3/5"></div>
        </div>
    </div>
@endsection