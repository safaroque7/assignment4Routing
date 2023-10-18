<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    {{-- header --}}
    <div class="container-full bg-gray-900 mb-5">
        <div class="container mx-auto">
            <div class="flex justify-between py-4">
                <div class="w-1/3">

                    @foreach ($data as $item)
                        <h1 class="text-4xl text-white hover:underline"> <a href="{{ url('/') }}"> {{ $item->title }} </a> </h1>
                    @endforeach
                </div>

                <div class="w-2/3 pt-2">
                    <ul class="flex justify-end">
                        <li> <a class="menuClasses"
                                href="{{ url('/') }}"> Home </a> </li>
                        <li> <a class="menuClasses"
                                href="{{ url('/services') }}"> Services </a> </li>
                        <li> <a class="menuClasses"
                                href="{{ url('/contact') }}"> Contact </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @yield('content')


    {{-- footer --}}
    <div class="container-full bg-gray-900 py-5 text-white">
        <div class="container mx-auto">
            <div class="flex">
                {{-- address --}}
                <div class="w-1/3 mr-5 last:mr-0">
                    <h2 class="text-xl font-semibold border-b border-white mb-5 pb-2"> Address </h2>
                    <ul>

                        @foreach ($dataAddress as $itemAddress)
                            <li class="flex mb-3"> <span class="stroke-1 mr-2"> <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </span> {{ $itemAddress->title }} </li>
                        @endforeach
                    </ul>
                </div>

                {{-- services --}}
                <div class="w-1/3 mr-5 last:mr-0">
                    <h2 class="text-xl font-semibold border-b border-white mb-5 pb-2"> Services </h2>
                    <ul>
                        @foreach ($dataServices as $dataService)
                            <li class="flex mb-2">
                                <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </span>
                                <a href="#"> {{ $dataService->title }} </a>
                            </li>
                        @endforeach

                    </ul>
                </div>

                {{-- social media --}}
                <div class="w-1/3 mr-5 last:mr-0">
                    <h2 class="text-xl font-semibold border-b border-white mb-5 pb-2"> Social Media </h2>
                    <ul>

                        @foreach ($dataSocialMedia as $dataSocialMedium)
                            <li class="flex mb-2">
                                <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </span>
                                <a href="#"> {{ $dataSocialMedium->title }} </a>
                            </li>
                        @endforeach





                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
