@props([
    'titulo',
    'subtitulo',
    'imgDir1',
    'imgDir2',
])
<section id="about" class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{$titulo}}</h2>
            <p class="mb-4">{{$subtitulo}}</p>
            {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta, doloremque debitis a rem inventore, quaerat consectetur maxime explicabo quisquam, voluptates facilis asperiores minus doloribus qui. Dolores nam ratione rem distinctio?.</p> --}}
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="{{url($imgDir1)}}" alt="About content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{url($imgDir2)}}" alt="About content 2">
        </div>
    </div>
</section>
