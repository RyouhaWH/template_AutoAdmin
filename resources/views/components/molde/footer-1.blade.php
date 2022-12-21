@props([
    'logoUrl',
    'marca',
    'descripcion',
])

<footer class="bg-footer ">

    <div class="mx-auto max-w-screen-xl text-center p-4 md:p-8 lg:pt-10 lg:pb-2 lg:flex lg:flex-row lg:gap-4">

    {{-- logo y texto --}}
        <div class="flex flex-col justify-center items-center">
            <a href="{{url('/')}}" class="font-open-sans flex justify-center items-center text-2xl text-gray-100 font-semibold">
                {{-- ! LOGO --}}
                <img class="h-12 w-12 rounded-full mr-2" src="{{$logoUrl}}" alt="Logo de la marca">
                @if ($marca === null)
                    {{''}}
                @else
                    {{$marca}}
                @endif
            </a>

            <p class="font-nunito-sans text-sm lg:text-base my-6 text-gray-300">{{$descripcion}}</p>
        </div>

    {{-- enlaces --}}
        <ul class="flex flex-col lg:flex-row justify-center items-start lg:items-center lg:mx-auto pb-6 lg:pb-0 pl-6 lg:pl-0 text-gray-200 space-y-4 lg:space-y-0 lg:space-x-8">
            <li>
                <a href="#inicio" class="mr-4 lg:mr-0  hover:underline md:mr-6 ">Inicio</a>
            </li>
            <li>
                <a href="#about" class="mr-4 lg:mr-0 hover:underline md:mr-6 ">Sobre Nosotros</a>
            </li>
            <li>
                <a href="#trabajos" class="mr-4 lg:mr-0 hover:underline md:mr-6">Trabajos</a>
            </li>
            <li>
                <a href="#faq" class="mr-4 lg:mr-0 hover:underline md:mr-6 ">FAQ</a>
            </li>
            <li>
                <a href="#contacto" class="mr-4 lg:mr-0 hover:underline md:mr-6">Contactanos</a>
            </li>
        </ul>

    {{-- Direccion --}}
        <div class="space-y-3 flex flex-col">

            <p class="font-open-sans text-gray-200 text-lg text-center font-semibold">
                Calle Lorem Ipsus #1234 Temuco
            </p>

            <a class="self-start text-gray-200 ml-10 block text-sm" href="tel:+56911223344">
                <i class="text-lg text-gray-200 mr-2  fa-solid fa-phone"></i>
                (+56) 9 1122 3344
            </a>

            <a class="self-start text-gray-200 ml-10 block text-sm" href="mailto:contacto@vetclinic.cl">
                <i class="text-lg text-gray-200 mr-2  fa-regular fa-envelope"></i>
                Contacto@vetclinic.cl
            </a>

            <div class="text-white space-x-6 pt-2 text-2xl">
                <a href="facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="instagram.com"><i class="fa-brands fa-instagram"></i></a>
                <a href="twitter.com"><i class="fa-brands fa-twitter"></i></a>
                <a href="wa.me/"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center">
        <div class="my-4 border-t border-gray-500/70 w-4/5"></div>
        <p class="text-gray-200 text-sm font-light font-open-sans">vetClínica © Todos los derechos reservados 2022</p>
    </div>
    <div class="mt-4 text-sm font-light font-open-sans w-full h-16 text-gray-200 text-center bg-[#1B293E] flex justify-center items-center">
        <a href="ryundev.com" class="hover:underline">
            Desarrollado con ❤️ por RyunDev™.
        </a>
    </div>
</footer>

