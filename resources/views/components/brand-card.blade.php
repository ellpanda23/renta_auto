@props(['image', 'brand', 'price'])

<div class="relative flex flex-col mt-4 bg-white border rounded-lg shadow-sm md:h-24 border-slate-200 w-72">
    <div class="items-center gap-4 p-4 md:flex">
        <img src="{{$image}}"
            alt="" class="h-12">
        <div class="">
            <p class="font-semibold leading-normal text-slate-600">
                {{$brand}}
            </p>
            <p class="font-light leading-normal text-slate-600">
                Desde ${{$price}}/dia
            </p>
        </div>

    </div>
</div>
