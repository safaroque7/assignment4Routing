@extends('layout.master')

@section('content')
    {{-- mainBody --}}
    <div class="container mx-auto my-24">
        <div class="flex">
            <img class="w-screen" src="/images/{{ $mainImage->image }}" alt="#">
        </div>
    </div>
@endsection
