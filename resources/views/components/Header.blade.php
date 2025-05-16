{{-- El text-lg representa un texto en 18px --}}
<header class="font-nunito text-lg  bg-[#F5E7D3]">
    {{-- h-24 significa 96pixeles de altura y px-4 es el padding en el eje x de 16px --}}
    <nav class="flex justify-between items-center h-24 px-4 ">
        <a href="/">
        <div class="">
            <img class="w-30 " src="{{asset('images/logoconnegro.png')}}" alt="">
        </div>
        </a>
        <div class="h-full flex items-center ">
            <ul class="flex items-center gap-2 px-4 sm:text-sm lg:text-xl">
                <li>
                    <a class=" hover:text-gray-500 px-10 mx-5 border-x-1 border-black " href="{{route('reposteria')}}">Repostería</a>
                </li>
                <li>
                    <a class="hover:text-gray-500 px-10 mx-5 border-x-1 border-black" href="{{route('panaderia')}}">Panadería</a>
                </li>
            </ul>

        </div>
        <div>
        </div>
    </nav>
</header>
