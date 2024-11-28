@props(['car'])

<div class="p-2 md:max-w-xs duration-150 bg-white rounded-lg shadow cursor-pointer min-w-[350px] ">
    <img class="object-cover object-center w-full h-[230px] rounded-lg"
        src="{{$car->image_url}}"
        alt="{{$car->id}}" />
    <div>
        <div class="flex items-center justify-between px-4 mt-6">
            <p class="text-xl font-bold text-gray-500">{{$car->year_brand_model}}</p>
            <p class="rounded-full bg-{{$car->fuel_type == 'Electric'? 'green' : 'blue'}}-500 px-2 py-0.5 text-xs font-semibold text-white">
                {{$car->fuel_type}}
                <i class="fas fa-leaf"></i>
            </p>
        </div>
        <div class="flex items-center justify-between px-4">
            <p class="text-sm font-semibold text-gray-500">{{$car->brand}}</p>
        </div>
        <div class="flex items-center justify-between px-4 my-4">
            <p class="text-sm font-semibold text-gray-500">Capacidad</p>
            <p class="text-sm font-semibold text-gray-500"><i class="fas fa-user"></i> {{$car->capacity}}</p>
        </div>
        <div class="flex items-center justify-between px-4 mt-14">
            <div class="flex gap-2">
                <div>
                    <p class="text-sm font-semibold text-gray-500">{{$car->daily_rate}}</p>
                    <p class="text-sm font-semibold text-gray-500">Dia</p>
                </div>
                <span class="text-3xl">/</span>
                <div>
                    <p class="text-sm font-semibold text-gray-500">{{($car->daily_rate * 10) - ($car->daily_rate * 0.2)}}</p>
                    <p class="text-sm font-semibold text-gray-500">10 dias</p>
                </div>
            </div>
            <a href="" class="btn btn-primary">Mas información</a>
        </div>
    </div>
</div>
