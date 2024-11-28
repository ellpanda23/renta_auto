<x-app-layout>
    <div class="bg-gray-100">


        <div class="container">
            <!-- component -->
            <section
                class="bg-center bg-no-repeat bg-[url('https://images.pexels.com/photos/707046/pexels-photo-707046.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')] bg-gray-700 bg-blend-multiply">
                <div class="max-w-screen-xl px-4 py-24 mx-auto text-center lg:py-56">
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
                        Say hello to your next awesome vehicle
                    </h1>
                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                        Featuring Used, Wholesale and Salvage Cars, Trucks & SUVs for Sale
                    </p>
                </div>
            </section>

            @livewire('car-list')

            <section class="sm:mt-12">

                <div class="md:flex">
                    <h1 class="px-2 text-3xl font-semibold text-gray-700 md:text-4xl">Explore best rental car makes</h1>
                    <p class="px-2 text-xl font-light text-justify text-gray-600 md:px-12 md:text-2xl">
                        Along with conventional advertising and velow ttthe line activities, organizations and corporate
                        bodies have come to realize that they need to inves in a trade shows in order to create maximum
                        recall for their product or brand name.
                    </p>
                </div>

                <div class="flex gap-4 overflow-x-auto md:grid md:grid-cols-4">

                    <div
                        class="relative flex flex-col mt-6 bg-white border rounded-lg shadow-sm md:h-24 border-slate-200 w-80">
                        <div class="items-center gap-4 p-4 md:flex">
                            <img src="https://th.bing.com/th/id/R.84a2ffcc555d2f1f1d0a260e67c86b1a?rik=TceOmYgvu%2b03zw&riu=http%3a%2f%2fwww.pngall.com%2fwp-content%2fuploads%2f2016%2f04%2fToyota-Logo.png&ehk=kA4%2fv8Xw0nlFTYQtLSIytFJhbxS%2fKgO%2fSzowb1OCUbA%3d&risl=&pid=ImgRaw&r=0"
                                alt="" class="h-12">

                            <div class="">
                                <p class="font-semibold leading-normal text-slate-600">
                                    Toyota
                                </p>
                                <p class="font-light leading-normal text-slate-600">
                                    Desde $1000/dia
                                </p>
                            </div>

                        </div>
                    </div>

                    <div
                        class="relative flex flex-col mt-6 bg-white border rounded-lg shadow-sm md:h-24 border-slate-200 w-80">
                        <div class="items-center gap-4 p-4 md:flex">
                            <img src="https://th.bing.com/th/id/OIP.JltPEmEWEeRAdEQFrRlxjAHaC9?rs=1&pid=ImgDetMain"
                                alt="" class="h-12">

                            <div>
                                <p class="font-semibold leading-normal text-slate-600">
                                    Ford
                                </p>
                                <p class="font-light leading-normal text-slate-600">
                                    Desde $1000/dia
                                </p>
                            </div>

                        </div>
                    </div>

                    <div
                        class="relative flex flex-col mt-6 bg-white border rounded-lg shadow-sm md:h-24 border-slate-200 w-80">
                        <div class="items-center gap-4 p-4 md:flex">
                            <img src="https://th.bing.com/th/id/OIP.poXr0DmZDNsgHjzAfqRMPgHaEK?rs=1&pid=ImgDetMain"
                                alt="" class="h-12">

                            <div>
                                <p class="font-semibold leading-normal text-slate-600">
                                    Chevrolet
                                </p>
                                <p class="font-light leading-normal text-slate-600">
                                    Desde $1000/dia
                                </p>
                            </div>

                        </div>
                    </div>

                    <div
                        class="relative flex flex-col mt-6 bg-white border rounded-lg shadow-sm md:h-24 border-slate-200 w-80">
                        <div class="items-center gap-4 p-4 md:flex">
                            <img src="https://www.carlogos.org/car-logos/honda-logo-2000-full-640.png" alt=""
                                class="h-12">

                            <div>
                                <p class="font-semibold leading-normal text-slate-600">
                                    Honda
                                </p>
                                <p class="font-light leading-normal text-slate-600">
                                    Desde $1000/dia
                                </p>
                            </div>

                        </div>
                    </div>

                    <div
                        class="relative flex flex-col mt-6 bg-white border rounded-lg shadow-sm md:h-24 border-slate-200 w-80">
                        <div class="items-center gap-4 p-4 md:flex">
                            <img src="https://www.carlogos.org/car-logos/bmw-logo-2020-gray.png" alt=""
                                class="h-12">

                            <div>
                                <p class="font-semibold leading-normal text-slate-600">
                                    BMW
                                </p>
                                <p class="font-light leading-normal text-slate-600">
                                    Desde $1000/dia
                                </p>
                            </div>

                        </div>
                    </div>

                    <div
                        class="relative flex flex-col mt-6 bg-white border rounded-lg shadow-sm md:h-24 border-slate-200 w-80">
                        <div class="items-center gap-4 p-4 md:flex">
                            <img src="https://www.carlogos.org/logo/Mercedes-Benz-logo-2011-640x369.jpg" alt=""
                                class="h-12">

                            <div>
                                <p class="font-semibold leading-normal text-slate-600">
                                    Mercedez Bens
                                </p>
                                <p class="font-light leading-normal text-slate-600">
                                    Desde $1000/dia
                                </p>
                            </div>

                        </div>
                    </div>

                    <div
                        class="relative flex flex-col mt-6 bg-white border rounded-lg shadow-sm md:h-24 border-slate-200 w-80">
                        <div class="items-center gap-4 p-4 md:flex">
                            <img src="https://www.carlogos.org/car-logos/tesla-logo-2007-full-640.png" alt=""
                                class="h-12">

                            <div>
                                <p class="font-semibold leading-normal text-slate-600">
                                    Tesla
                                </p>
                                <p class="font-light leading-normal text-slate-600">
                                    Desde $1000/dia
                                </p>
                            </div>

                        </div>
                    </div>

                    <div
                        class="relative flex flex-col mt-6 bg-white border rounded-lg shadow-sm md:h-24 border-slate-200 w-80">
                        <div class="items-center gap-4 p-4 md:flex">
                            <img src="https://www.carlogos.org/logo/Kia-logo-640x321.jpg" alt="" class="h-12">

                            <div>
                                <p class="font-semibold leading-normal text-slate-600">
                                    KIA
                                </p>
                                <p class="font-light leading-normal text-slate-600">
                                    Desde $1000/dia
                                </p>
                            </div>

                        </div>
                    </div>

                </div>


            </section>

            <section class="py-16">
                <h1 class="py-3 mt-6 text-3xl font-semibold text-gray-600">Reseñas</h1>

                <div class="flex gap-32 overflow-x-auto md:gap-8 md:grid md:grid-cols-4">

                    <div
                        class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                        <div
                            class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
                            <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?auto=format&fit=crop&w=500&q=80"
                                alt="John Doe"
                                class="relative inline-block h-[58px] w-[58px] rounded-full object-cover object-center" />
                            <div class="flex w-full flex-col gap-0.5">
                                <div class="items-center justify-between md:flex">
                                    <h5
                                        class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                        John Doe
                                    </h5>
                                    <div class="flex items-center gap-0.5">
                                        <div class="flex items-center gap-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p
                                    class="block font-sans text-base antialiased font-light leading-relaxed text-blue-gray-900">
                                    Ingeniero de Software
                                </p>
                            </div>
                        </div>
                        <div class="p-0 mb-6">
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                "El proceso de alquiler fue increíblemente sencillo. El auto estaba impecable y el
                                servicio al cliente fue excelente. ¡Sin duda volveré a rentar aquí!"
                            </p>
                        </div>
                    </div>

                    <div
                        class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                        <div
                            class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=500&q=80"
                                alt="Jane Smith"
                                class="relative inline-block h-[58px] w-[58px] rounded-full object-cover object-center" />
                            <div class="flex w-full flex-col gap-0.5">
                                <div class="items-center justify-between md:flex">
                                    <h5
                                        class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                        Jane Smith
                                    </h5>
                                    <div class="flex items-center gap-0.5">
                                        <!-- Estrellas -->
                                        <div class="flex items-center gap-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p
                                    class="block font-sans text-base antialiased font-light leading-relaxed text-blue-gray-900">
                                    Diseñadora Gráfica
                                </p>
                            </div>
                        </div>
                        <div class="p-0 mb-6">
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                "La variedad de autos es genial y pude elegir justo lo que necesitaba. El único
                                inconveniente fue que el GPS no estaba actualizado, pero lo demás fue perfecto."
                            </p>
                        </div>
                    </div>

                    <div
                        class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                        <div
                            class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
                            <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?auto=format&fit=crop&w=500&q=80"
                                alt="Carlos Pérez"
                                class="relative inline-block h-[58px] w-[58px] rounded-full object-cover object-center" />
                            <div class="flex w-full flex-col gap-0.5">
                                <div class="items-center justify-between md:flex">
                                    <h5
                                        class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                        Carlos Pérez
                                    </h5>
                                    <div class="flex items-center gap-0.5">
                                        <!-- Estrellas -->
                                        <div class="flex items-center gap-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p
                                    class="block font-sans text-base antialiased font-light leading-relaxed text-blue-gray-900">
                                    Empresario
                                </p>
                            </div>
                        </div>
                        <div class="p-0 mb-6">
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                "Renté un auto eléctrico para un viaje de negocios. Fue una experiencia increíble:
                                económico, limpio y eficiente. ¡Totalmente recomendado!"
                            </p>
                        </div>
                    </div>


                    <div
                        class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                        <div
                            class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=500&q=80"
                                alt="Ana López"
                                class="relative inline-block h-[58px] w-[58px] rounded-full object-cover object-center" />
                            <div class="flex w-full flex-col gap-0.5">
                                <div class="items-center justify-between md:flex">
                                    <h5
                                        class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                        Ana López
                                    </h5>
                                    <div class="flex items-center gap-0.5">
                                        <!-- Estrellas -->
                                        <div class="flex items-center gap-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5 text-yellow-700">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p
                                    class="block font-sans text-base antialiased font-light leading-relaxed text-blue-gray-900">
                                    Fotógrafa Profesional
                                </p>
                            </div>
                        </div>
                        <div class="p-0 mb-6">
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                "Alquilé un SUV para un proyecto fotográfico y fue perfecto para transportar todo mi
                                equipo. El servicio fue rápido y sin complicaciones."
                            </p>
                        </div>
                    </div>



                </div>

            </section>

        </div>
    </div>


    <!-- component -->
    <footer class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div>
                    <img src="https://th.bing.com/th/id/OIP.C0RMM8vZMP9vzBvFoylG4QHaHa?rs=1&pid=ImgDetMain" class="h-6 mr-5 sm:h-9" alt="Logo de la compañía" />
                    <p class="max-w-xs mt-4 text-sm text-gray-600">
                        Descubre la libertad de viajar con nuestros autos de alquiler.
                        Calidad, comodidad y excelentes tarifas garantizadas.
                    </p>
                    <div class="flex mt-8 space-x-6 text-gray-600">
                        <a class="hover:opacity-75" href="#" target="_blank" rel="noreferrer">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="..." />
                            </svg>
                        </a>
                        <a class="hover:opacity-75" href="#" target="_blank" rel="noreferrer">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="..." />
                            </svg>
                        </a>
                        <a class="hover:opacity-75" href="#" target="_blank" rel="noreferrer">
                            <span class="sr-only">Twitter</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="..." />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <p class="font-medium">Compañía</p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href="#">Sobre Nosotros</a>
                            <a class="hover:opacity-75" href="#">Nuestro Equipo</a>
                            <a class="hover:opacity-75" href="#">Términos y Condiciones</a>
                            <a class="hover:opacity-75" href="#">Política de Privacidad</a>
                        </nav>
                    </div>
                    <div>
                        <p class="font-medium">Servicios</p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href="#">Renta de Autos</a>
                            <a class="hover:opacity-75" href="#">Seguro de Autos</a>
                            <a class="hover:opacity-75" href="#">Asistencia en el Camino</a>
                            <a class="hover:opacity-75" href="#">Planes Corporativos</a>
                        </nav>
                    </div>
                    <div>
                        <p class="font-medium">Enlaces Útiles</p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href="#">Contacto</a>
                            <a class="hover:opacity-75" href="#">Preguntas Frecuentes</a>
                            <a class="hover:opacity-75" href="#">Ubicaciones</a>
                            <a class="hover:opacity-75" href="#">Reservar Ahora</a>
                        </nav>
                    </div>
                    <div>
                        <p class="font-medium">Soporte</p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href="#">Ayuda en Línea</a>
                            <a class="hover:opacity-75" href="#">Política de Cancelación</a>
                            <a class="hover:opacity-75" href="#">Reembolsos</a>
                            <a class="hover:opacity-75" href="#">Asistencia 24/7</a>
                        </nav>
                    </div>
                </div>
            </div>
            <p class="mt-8 text-xs text-center text-gray-500">
                &copy; 2024 Rent-A-Car. Todos los derechos reservados.
            </p>
        </div>
    </footer>


</x-app-layout>
