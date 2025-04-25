{{-- El text-lg representa un texto en 18px --}}
<header class="font-nunito text-lg bg-">
    {{-- h-24 significa 96pixeles de altura y px-4 es el padding en el eje x de 16px --}}
    <nav class="flex justify-between items-center h-24 px-4 ">
        <div class="">
            <img class="w-30 " src="{{asset('images/logoconnegro.png')}}" alt="">
        </div>
        <div class="bg-white h-full flex items-center ">
            <ul class="flex items-center gap-2 px-4 bg-[#F5E7D3]">
                <li>
                    <a class=" hover:text-gray-500 px-10 mx-5 border-x-1 border-black " href="#">Repostería</a>
                </li>
                <li>
                    <a class="hover:text-gray-500 px-10 mx-5 border-x-1 border-black" href="#">Panadería</a>
                </li>
            </ul>
        </div>
        <div>
            {{-- <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">
                Iniciar Sesión
            </button> --}}
        </div>
    </nav>
</header>
