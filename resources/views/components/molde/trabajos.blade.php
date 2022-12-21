@props([
    'titulo',
    'subtitulo',
    'imgUrl1',
    'imgUrl2',
    'imgUrl3',
    'imgUrl4',
    'imgUrl5',
    'imgUrl6',
])
<section>
    <div class="mx-auto max-w-screen-sm text-left lg:text-center px-8 lg:px-0 mb-8 lg:mb-16">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{$titulo}}</h2>
        <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">{{$subtitulo}}</p>
    </div>
    <div class="gap-2 items-center pb-8 px-4 mx-auto max-w-screen-lg xl:gap-4 grid sm:grid-cols-4 grid-flow-dense sm:pb-16 lg:px-6">

        <div style="background-image:url({{url($imgUrl1)}})" class="bg-center bg-gray-400 col-span-2 h-72 image bg-cover bg-no-repeat rounded-lg shadow-xl min-w-full block"></div>

        <div style="background-image:url({{url($imgUrl2)}})" class="bg-center mt-8 bg-gray-400 h-72 image bg-cover bg-no-repeat rounded-lg shadow-xl min-w-full block"></div>

        <div style="background-image:url({{url($imgUrl3)}})" class="bg-center bg-gray-400 h-72 image bg-cover bg-no-repeat rounded-lg shadow-xl min-w-full block"></div>

        <div style="background-image:url({{url($imgUrl4)}})" class="bg-center bg-gray-400 h-72 image bg-cover bg-no-repeat rounded-lg shadow-xl min-w-full block"></div>

        <div style="background-image:url({{url($imgUrl5)}})" class="bg-center mt-8 bg-gray-400 col-span-2 row-start-3 lg:row-start-2 lg:col-start-2 h-72 image bg-cover bg-no-repeat rounded-lg shadow-xl min-w-full block"></div>

        <div style="background-image:url({{url($imgUrl6)}})" class="mb-8 bg-center bg-gray-400 h-72 image bg-cover bg-no-repeat rounded-lg shadow-xl min-w-full block"></div>
    </div>

</section>
