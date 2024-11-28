@props(['car'])

<div class="p-2 md:max-w-xs duration-150 bg-white rounded-lg shadow cursor-pointer min-w-[300px] ">
    <img class="object-cover object-center w-full h-[230px] rounded-lg" src="{{ $car->image_url }}"
        alt="{{ $car->id }}" />
    <div>
        <div class="flex items-center justify-between px-4 mt-6">
            <p class="text-xl font-bold text-gray-500">{{ $car->year_brand_model }}</p>
            @if ($car->fuel_type == 'Electric')
                <p
                    class="rounded-full bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">
                    {{ $car->fuel_type }}
                    
                </p>
            @else
                <p
                    class="rounded-full bg-blue-500 px-2 py-0.5 text-xs font-semibold text-white">
                    {{ $car->fuel_type }}
                </p>

            @endif
        </div>
        <div class="flex items-center justify-between px-4">
            <p class="text-sm font-semibold text-gray-500">{{ $car->brand }}</p>
        </div>
        <div class="flex items-center justify-between px-4 my-4">
            <p class="text-sm font-semibold text-gray-500">Capacidad</p>
            <p class="text-sm font-semibold text-gray-500"><i class="fas fa-user"></i> {{ $car->capacity }}</p>
        </div>
        <div class="flex items-center justify-between px-4 mt-14">
            <div class="flex gap-2">
                <div>
                    <p class="text-sm font-semibold text-gray-500">{{ $car->daily_rate }}</p>
                    <p class="text-sm font-semibold text-gray-500">Dia</p>
                </div>
                <span class="text-3xl">/</span>
                <div>
                    <p class="text-sm font-semibold text-gray-500">
                        {{ $car->daily_rate * 10 - $car->daily_rate * 0.2 }}</p>
                    <p class="text-sm font-semibold text-gray-500">10 dias</p>
                </div>
            </div>
            <a href="https://wa.me/4451028848" target="_blank" class="btn btn-success">Reservar <i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</div>
