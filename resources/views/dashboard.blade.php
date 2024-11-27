<x-app-layout>
    <!-- component -->
    <section
        class="bg-center bg-no-repeat bg-[url('https://images.pexels.com/photos/707046/pexels-photo-707046.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')] bg-gray-700 bg-blend-multiply">
        <div class="max-w-screen-xl px-4 py-24 mx-auto text-center lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
                Say hello to your next awesome vehicle
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                Featuring Used, Wholesale and Salvage Cars, Trucks & SUVs for Sale
            </p>
        </div>
    </section>

    <div class="container">
        <div class="absolute w-11/12 p-4 -mt-20 md:w-[1450px] card">

            <div class="md:grid md:grid-cols-5 md:gap-6">
                <div class="form-group">
                    <label for="" class="form-label">Type</label>
                    <select name="type" class="form-control" id="">
                        <option value="1">New Brand</option>
                    </select>
                </div>
                <div class="form-group">

                    <label for="" class="form-label">Brand</label>
                    <select name="type" id="" class="form-control">
                        <option value="1">Tesla</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Model</label>
                    <input type="text" placeholder="Model 3"
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-100 border border-gray-100 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-400">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Price</label>
                    <input type="text" placeholder="1000"
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-100 border border-gray-100 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-400">
                </div>

                <button class="w-full btn btn-primary"><i class="fas fa-search"></i> Buscar</button>
            </div>

        </div>
    </div>

    <div class="h-screen bg-gray-100">
        <div class="pt-[24rem] md:pt-16">
            <section class="container mt-4">

                <h1 class="py-3 text-2xl font-semibold text-gray-600">Autos disponibles</h1>

                <div class="overflow-x-scroll md:overflow-visible">

                    <div class="flex gap-6 md:grid md:grid-cols-4">

                        <div
                            class="p-2 md:max-w-xs duration-150 bg-white rounded-lg shadow cursor-pointer min-w-[350px] ">
                            <img class="object-cover object-center w-full h-[230px] rounded-lg"
                                src="https://images.pexels.com/photos/9300916/pexels-photo-9300916.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="product" />
                            <div>
                                <div class="flex items-center justify-between px-4 mt-6">
                                    <p class="text-xl font-bold text-gray-500">2024 Tesla Model 3</p>
                                    <p class="rounded-full bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">
                                        Electrico
                                        <i class="fas fa-leaf"></i>
                                    </p>
                                </div>
                                <div class="flex items-center justify-between px-4">
                                    <p class="text-sm font-semibold text-gray-500">Tesla</p>
                                </div>
                                <div class="flex items-center justify-between px-4 my-4">
                                    <p class="text-sm font-semibold text-gray-500">Capacidad</p>
                                    <p class="text-sm font-semibold text-gray-500"><i class="fas fa-user"></i> 4</p>
                                </div>
                                <div class="flex items-center justify-between px-4 mt-14">
                                    <div class="flex gap-2">
                                        <div>
                                            <p class="text-sm font-semibold text-gray-500">$3000</p>
                                            <p class="text-sm font-semibold text-gray-500">Dia</p>
                                        </div>
                                        <span class="text-3xl">/</span>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-500">$14,000</p>
                                            <p class="text-sm font-semibold text-gray-500">10 dias</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Mas información</button>
                                </div>
                            </div>
                        </div>

                        <div
                            class="p-2 md:max-w-xs duration-150 bg-white rounded-lg shadow cursor-pointer min-w-[350px] ">
                            <img class="object-cover object-center w-full h-[230px] rounded-lg"
                                src="https://images.pexels.com/photos/27038707/pexels-photo-27038707/free-photo-of-carretera-coche-vehiculo-transporte.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="product" />
                            <div>
                                <div class="flex items-center justify-between px-4 mt-6">
                                    <p class="text-xl font-bold text-gray-500">2024 Tesla Cybertruck</p>
                                    <p class="rounded-full bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">
                                        Electrico
                                        <i class="fas fa-leaf"></i>
                                    </p>
                                </div>
                                <div class="flex items-center justify-between px-4">
                                    <p class="text-sm font-semibold text-gray-500">Tesla</p>
                                </div>
                                <div class="flex items-center justify-between px-4 my-4">
                                    <p class="text-sm font-semibold text-gray-500">Capacidad</p>
                                    <p class="text-sm font-semibold text-gray-500"><i class="fas fa-user"></i> 6</p>
                                </div>
                                <div class="flex items-center justify-between px-4 mt-14">
                                    <div class="flex gap-2">
                                        <div>
                                            <p class="text-sm font-semibold text-gray-500">$4000</p>
                                            <p class="text-sm font-semibold text-gray-500">Dia</p>
                                        </div>
                                        <span class="text-3xl">/</span>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-500">$25,000</p>
                                            <p class="text-sm font-semibold text-gray-500">10 dias</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Mas información</button>
                                </div>
                            </div>
                        </div>

                        <div
                            class="p-2 md:max-w-xs duration-150 bg-white rounded-lg shadow cursor-pointer min-w-[350px] ">
                            <img class="object-cover object-center w-full h-[230px] rounded-lg"
                                src="https://images.pexels.com/photos/28123191/pexels-photo-28123191/free-photo-of-coches-coche-vehiculo-prisa.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="product" />
                            <div>
                                <div class="flex items-center justify-between px-4 mt-6">
                                    <p class="text-xl font-bold text-gray-500">2024 Tesla Model Y</p>
                                    <p class="rounded-full bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">
                                        Electrico
                                        <i class="fas fa-leaf"></i>
                                    </p>
                                </div>
                                <div class="flex items-center justify-between px-4">
                                    <p class="text-sm font-semibold text-gray-500">Tesla</p>
                                </div>
                                <div class="flex items-center justify-between px-4 my-4">
                                    <p class="text-sm font-semibold text-gray-500">Capacidad</p>
                                    <p class="text-sm font-semibold text-gray-500"><i class="fas fa-user"></i> 5</p>
                                </div>
                                <div class="flex items-center justify-between px-4 mt-14">
                                    <div class="flex gap-2">
                                        <div>
                                            <p class="text-sm font-semibold text-gray-500">$3500</p>
                                            <p class="text-sm font-semibold text-gray-500">Dia</p>
                                        </div>
                                        <span class="text-3xl">/</span>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-500">$16,000</p>
                                            <p class="text-sm font-semibold text-gray-500">10 dias</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Mas información</button>
                                </div>
                            </div>
                        </div>


                    </div>



                </div>

            </section>



        </div>
    </div>

</x-app-layout>
