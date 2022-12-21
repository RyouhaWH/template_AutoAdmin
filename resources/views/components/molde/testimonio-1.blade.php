@props([
    'mensaje',
    'usuario',
    'usuarioAvatar',
])

<section>
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Mira lo que la gente dice de nosotros.</h2>

    {{-- Testimonio, aislar esto en caso de agregar mas --}}
        <figure class="max-w-screen-md mx-auto">
            <svg class="h-12 mx-auto mb-3 text-primary-400" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
            </svg>
            <blockquote>
                <p class="font-open-sans font-light text-base text-gray-900 dark:text-white">{{$mensaje}}</p>
            </blockquote>

            <figcaption class=" flex flex-col items-center justify-center mt-6">

                <img class="w-16 h-16 rounded-lg" src="{{$usuarioAvatar}}" alt="profile picture">
                <div class="flex flex-col justify-center items-center">

                    <div class="mt-2 font-medium text-gray-900 dark:text-white">{{$usuario}}
                    </div>
                    <div class="text-yellow-400">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
</section>
