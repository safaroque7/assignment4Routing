<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    {{-- header --}}
    <div class="container-full bg-gray-500 mb-5">
        <div class="container mx-auto">
            <div class="flex justify-between py-4">
                <div class="w-1/3">
                    <h1 class="text-4xl text-white"> <a href="#"> S A Faroque </a> </h1>
                </div>

                <div class="w-2/3 pt-2">
                    <ul class="flex justify-end">
                        <li> <a class="border p-2 text-white mr-2 hover:bg-black transition-all duration-150 rounded"
                                href="#"> Home </a> </li>
                        <li> <a class="border p-2 text-white mr-2 hover:bg-black transition-all duration-150 rounded"
                                href="#"> Services </a> </li>
                        <li> <a class="border p-2 text-white mr-2 hover:bg-black transition-all duration-150 rounded"
                                href="#"> Contact </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




    {{-- mainBody     --}}
    <div class="container mx-auto mb-5">
        <div class="flex">
            <img class="w-screen" src="/images/faroque.jpeg" alt="#">
        </div>
    </div>

    {{-- footer --}}
    <div class="container-full bg-gray-500 py-5 text-white">
        <div class="container mx-auto">
            <div class="flex">
                {{-- address --}}
                <div class="w-1/3 mr-5 last:mr-0">
                    <h2 class="text-xl font-semibold border-b border-white mb-5 pb-2"> Address </h2>
                    <ul>
                        <li class="flex mb-3"> <span class="stroke-1 mr-2"> <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </span> 89/A (3rd floor), Anarkoli Super Market (behind the Mouchak market), 77/1
                            Shiddheswari Ln, Dhaka 1217 </li>

                        <li class="flex mb-3"> <span class="stroke-1 mr-2"> <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </span> 01915344418 </li>

                        <li class="flex mb-3"> <span class="stroke-1 mr-2"> <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </span> faroque.computer@gmail.com </li>
                    </ul>
                </div>

                {{-- services --}}
                <div class="w-1/3 mr-5 last:mr-0">
                    <h2 class="text-xl font-semibold border-b border-white mb-5 pb-2"> Services </h2>
                    <ul>
                        <li class="flex mb-2">
                            <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <a href="#"> Online News Portal </a>
                        </li>

                        <li class="flex mb-2">
                            <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <a href="#"> Official Website </a>
                        </li>

                        <li class="flex mb-2">
                            <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <a href="#"> ePaper </a>
                        </li>

                        <li class="flex mb-2">
                            <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <a href="#"> Graphi Design </a>
                        </li>

                        <li class="flex mb-2">
                            <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <a href="#"> Newspaper Design </a>
                        </li>




                    </ul>
                </div>

                {{-- social media --}}
                <div class="w-1/3 mr-5 last:mr-0">
                    <h2 class="text-xl font-semibold border-b border-white mb-5 pb-2"> Social Media </h2>
                    <ul>
                        <li class="flex mb-2">
                            <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <a href="#"> Facebook </a>
                        </li>

                        <li class="flex mb-2">
                            <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <a href="#"> Twitter </a>
                        </li>

                        <li class="flex mb-2">
                            <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <a href="#"> Linkedin </a>
                        </li>

                        <li class="flex mb-2">
                            <span class="pr-3 pt-1"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <a href="#"> Youtube </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
