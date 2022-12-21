@props([
    'logoUrl',
    'name',
])

<nav id="navbar" class="navbar top">
    <div class="container flex flex-wrap justify-between items-center mx-auto lg:max-w-screen-xl fullhd:max-w-screen-2xl">
    <a href="{{url('/')}}" class="flex items-center ">

        <img src="{{url($logoUrl)}}" class="mr-3 h-12 sm:h-9" alt="Logo">
        @isset($name)
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{$name}}</span>
        @endisset

    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-900 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:border-none md:flex-row md:items-center md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li class="nav_link texto-white">
            <a href="{{url('/')}}" class=" block py-2 pr-4 pl-3  bg-blue-700 rounded md:bg-transparent md:p-0" aria-current="page">Inicio</a>
        </li>
        <li class="nav_link texto-white">
            <a href="#about" class=" block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Sobre Nosotros</a>
        </li>
        <li class="nav_link texto-white">
            <a href="#servicios" class=" block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Servicios</a>
        </li>
        <li class="nav_link texto-white">
            <a href="#preguntas" class=" block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Preguntas</a>
        </li>
        <li>
            <a href="#contacto" class="block py-2 pr-4 pl-3 md:text-white md:bg-primary-700 rounded hover:bg-gray-100 md:hover:bg-slate-900 md:border-0  md:px-4 md:py-2 ">
                Contactanos</a>
        </li>
        </ul>
    </div>
    </div>
</nav>
