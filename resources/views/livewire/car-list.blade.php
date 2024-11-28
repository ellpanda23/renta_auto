<div>
    <div class="container">
        <div class="absolute w-11/12 p-4 -mt-20 md:w-[1150px] card">

            <div class="md:grid md:grid-cols-5 md:gap-6">
                <div class="form-group">
                    <label for="" class="form-label">Tipo de combustible</label>
                    <select name="type" class="form-control" id="" wire:model='type'>
                        <option value="">Todos</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Disel">Diesel</option>
                        <option value="Hybrid">Hibrido</option>
                        <option value="Electric">Electrico</option>
                    </select>
                </div>
                <div class="form-group">

                    <label for="" class="form-label">Marca</label>
                    <select name="type" id="" class="form-control" wire:model='brand'>
                        <option value=''> Todas </option>
                        <option value='Toyota'> Toyota </option>
                        <option value='Ford'> Ford </option>
                        <option value='Chevrolet'> Chevrolet </option>
                        <option value='Honda'> Honda </option>
                        <option value='BMW'> BMW </option>
                        <option value='Mercedes'> Mercedes </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Modelo</label>
                    <input type="text" placeholder="Model 3" wire:model='model'
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-100 border border-gray-100 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-400">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Precio/dia</label>
                    <input type="text" placeholder="1000" wire:model='price'
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-100 border border-gray-100 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-400">
                </div>

                <div class="flex items-center justify-center gap-6">
                    <a class="w-full btn btn-primary hover:cursor-pointer" wire:click='search'><i class="fas fa-search"></i> Buscar</a>
                    <a class="w-full btn btn-secondary hover:cursor-pointer" wire:click='clear'><i class="fas fa-broom"></i> Limpiar</a>
                </div>
            </div>

        </div>
    </div>

    <div class="h-screen">
        <div class="pt-[24rem] md:pt-16">
            <section class="mt-4">

                <h1 class="py-3 text-3xl font-semibold text-gray-600">Nuestro catalogo de autos</h1>

                <div class="overflow-x-scroll md:overflow-visible">

                    <div class="flex gap-6 md:grid md:grid-cols-4">


                        @forelse ($cars as $car)

                            <x-car-card :car='$car' />

                        @empty

                        @endforelse


                        {{-- <div
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
                        </div> --}}


                    </div>

                    <div class="hidden md:block">
                        {{$cars->links()}}
                    </div>



                </div>

            </section>



        </div>
    </div>
</div>
