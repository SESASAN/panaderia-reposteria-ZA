{{-- El text-lg representa un texto en 18px --}}
<header class="font-nunito text-lg bg-[#F5E7D3]">
    <nav class="flex flex-col md:flex-row justify-between items-center h-24 px-4">
    {{-- h-24 significa 96pixeles de altura y px-4 es el padding en el eje x de 16px --}} 
        <div class="flex justify-center w-full mb-4 md:mb-0">
            <img class="w-30" src="{{ asset('images/logoconnegro.png') }}" alt="Logo">
        </div>
        <div class="h-full flex items-center w-full">
            <ul class="flex flex-col md:flex-row items-center gap-2 px-4 w-full">
                <li>
                    <a class="hover:text-gray-500 px-10 mx-5 border-x-1 border-black" href="{{ route('reposteria') }}">Repostería</a>
                </li>
                {{-- <li>
                    <a class="hover:text-gray-500 px-10 mx-5 border-x-1 border-black" href="">Panadería</a>
                </li> --}}
            </ul>
        </div>
        <div class="w-full flex justify-center md:justify-end">
            <!-- <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">
                Iniciar Sesión
            </button> -->
        </div>
    </nav>
</header>
