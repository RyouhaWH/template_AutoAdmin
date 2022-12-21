@props([
    'titulo',
    'subtitulo',
    'imgDir1',
    'imgDir2',
])
<section id="about" class="">

    <div class="font-light text-center text-gray-500 sm:text-lg max-w-screen-md items-center mx-auto">
        <h2 class="mt-10 mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">
            {{$titulo}}
        </h2>

        <p class="mb-4 px-8">
            {{$subtitulo}}
        </p>
    </div>

    {{-- <div class="gap-4 items-center py-8 px-4 mx-auto grid grid-cols-1 lg:grid-cols-3  grid-rows-3 lg:grid-rows-none lg:py-16 lg:px-6"> --}}
    <div class="flex gap-4 flex-col lg:flex-row items-center justify-center py-8 px-4 mx-auto borrder border-red-300">

        <div class="relative w-full h-[200px] lg:h-[450px] lg:w-[315px]">
            <div class="shadow-lg w-full h-full bg-cover bg-no-repeat bg-center rounded-lg" style="background-image:url('img/vet/img-s-krista-mangulsone.jpg');"></div>
            {{-- <a href="#" class="absolute left-4 bottom-4 px-4 py-2 bg-primary-500 text-white rounded-lg" >Nuestros Servicios</a> --}}
        </div>

        <div class="relative w-full h-[200px] lg:h-[450px] lg:mb-12 lg:w-[550px]">
            <div class="shadow-lg w-full h-full bg-cover bg-no-repeat bg-center rounded-lg" style="background-image:url('img/vet/img-s-andrew-s.jpg');"></div>
            {{-- <a href="#" class="absolute left-4 bottom-4 px-4 py-2 bg-primary-500 text-white rounded-lg" >Sobre Nosotros</a> --}}
        </div>

        <div class="relative w-full h-[200px] lg:h-[450px] lg:w-[315px]">
            <div class="shadow-lg w-full h-full bg-cover bg-no-repeat bg-center rounded-lg" style="background-image:url('img/vet/img-s-humberto-arellano.jpg');"></div>
            {{-- <a href="#contacto" class="absolute left-4 bottom-4 px-4 py-2 bg-primary-500 text-white rounded-lg">contáctanos</a> --}}
        </div>

    </div>
</section>
