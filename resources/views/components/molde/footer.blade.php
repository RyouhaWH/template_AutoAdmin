@props([
    'logoUrl',
    'marca',
    'descripcion',


])
<div class="dark">
    <footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">
            <a href="{{url('/')}}" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
                {{-- ! LOGO --}}

                <img class="h-8 w-8 rounded-full mr-4" src="{{$logoUrl}}" alt="Logo de la marca">
                {{$marca}}
            </a>
            <p class="my-6 text-gray-500 dark:text-gray-400">{{$descripcion}}</p>
            <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
                <li>
                    <a href="#about" class="mr-4 hover:underline md:mr-6 ">Sobre Nosotros</a>
                </li>
                <li>
                    <a href="#trabajos" class="mr-4 hover:underline md:mr-6">Trabajos</a>
                </li>
                <li>
                    <a href="#faq" class="mr-4 hover:underline md:mr-6 ">FAQ</a>
                </li>
                <li>
                    <a href="#contacto" class="mr-4 hover:underline md:mr-6">Contactanos</a>
                </li>
            </ul>
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 | made with ❤️ by <a href="#" class="hover:underline">RyunDev™</a>. All Rights Reserved.</span>
        </div>
    </footer>
</div>
