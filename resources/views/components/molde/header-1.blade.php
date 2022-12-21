@props([
    'titulo',
    'subtitulo',
    'cta',
    'imgDir'
])

<section id="inicio" class="h-screen -top-[88px] relative">


    <div class="bg-center xl:bg-[20%_70%] 2xl:bg-[10%_70%] fullhd:bg-[0%_70%] 2k:bg-center 2k:bg-cover bg-fixed bg-no-repeat h-full w-full absolute top-0 -z-20" style="background-image:url({{$imgDir}});"></div>
    <div class="bg-black/40 w-full h-full absolute top-0 -z-10"></div>


    <div class="grid max-w-screen-xl px-[30px] py-[108px] lg:py-56 mx-auto lg:gap-8 xl:gap-0  lg:grid-cols-12 h-full">

        <div class="mr-auto lg:col-span-7">

            <h1 class="font-sans text-center lg:text-left text-white drop-shadow-md   mb-8 lg:mb-12 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">{{$titulo}}</h1>

            <p class="font-open-sans text-center lg:text-left max-w-2xl mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-xl">{{$subtitulo}}</p>

            <div class="mt-[250px] lg:mt-12 flex flex-col gap-4 lg:block">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 sm:mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                    {{$cta}}
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>

                <a href="tel:+56911223344" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border-4 border-gray-300 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-100">
                    +569 1122 3344
                </a>
            </div>
        </div>
    </div>
</section>
