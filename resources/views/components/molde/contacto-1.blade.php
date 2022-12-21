@props([
    'titulo',
    'mensaje',
])
<section id="contacto" class="relative">
    <div class="absolute w-full h-[50%] -z-10" style="background-image: url('img/vet/contacto-parker-byrd.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover"></div>
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-white">
            {{$titulo}}
        </h2>
        <p class="mx-10 font-open-sans  mb-8 lg:mb-16 font-light text-center text-slate-300 sm:text-xl">
            {{$mensaje}}
        </p>
        <form action="#" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" class="space-y-4 bg-white border border-slate-200 rounded-lg p-8">
            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Su nombre</label>
                <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Ingrese su nombre..." required>
            </div>
            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Su Correo</label>
                <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Ingrese su correo si desea una respuesta" required>
            </div>
            <div>
                <label for="subject" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Asunto</label>
                <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="¿Sobre que nos quiere escribir?" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-400">Su Mensaje</label>
                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Escribanos aquí su mensaje..."></textarea>
            </div>
            <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 ">Enviar</button>
        </form>
    </div>
</section>
