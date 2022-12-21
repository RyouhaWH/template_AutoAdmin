@php
// if(isset($website)){

//     dd($website);
// }
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modificar Sitio Web') }}
        </h2>
    </x-slot>

{{-- nav --}}
    <x-myCaja>
        <x-slot name="rutaForm">{{route('nav')}}</x-slot>
        <h3>Seccion Nav / Footer</h3>
        <x-myInput>
            <x-slot name="labelName">nombreEmpresa</x-slot>
            <x-slot name="label">Nombre de la Marca</x-slot>
            {{old('nombreEmpresa', $website->nombreEmpresa)}}
        </x-myInput>
        <x-myfile>
            <x-slot name="labelName">logoUrl</x-slot>
            <x-slot name="label">Imagen del logo</x-slot>
        </x-myfile>
        @if(isset($website->logoUrl))

            <div class="flex flex-col rounded border border-gray-200">

                <img class="w-full rounded shadow-md" src="{{url($website->logoUrl)}}" alt="Header de sitio web." height="250" width="150">

                <div class="flex items-center pl-4">

                    <input type="checkbox" name="borrar_logoUrl" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">

                    <label class="py-4 ml-2 w-full text-sm font-medium text-gray-900">¿Borrar imagen?</label>
                </div>
            </div>
        @endif
        <x-myInput>
            <x-slot name="labelName">descripcion</x-slot>
            <x-slot name="label">Frase para promocionar su marca.</x-slot>
            {{old('nombreEmpresa', $website->descripcion)}}
        </x-myInput>
    </x-myCaja>

{{-- hero --}}
    <x-myCaja>
        <x-slot name="rutaForm">{{route('hero')}}</x-slot>
        <h3>Hero Section</h3>
        <x-myInput>
            <x-slot name="labelName">hero_titulo</x-slot>
            <x-slot name="label">Titulo</x-slot>
            {{old('nombreEmpresa', $website->hero_titulo)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">hero_subtitulo</x-slot>
            <x-slot name="label">Bajada de titulo</x-slot>
            {{old('nombreEmpresa', $website->hero_subtitulo)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">hero_cta</x-slot>
            <x-slot name="label">Boton "llamada a la acción"</x-slot>
            {{old('nombreEmpresa', $website->hero_cta)}}
        </x-myInput>
        <x-myfile>
            <x-slot name="labelName">hero_imgDir</x-slot>
            <x-slot name="label">Imagen de Inicio</x-slot>
            <x-slot name="website">{{$website}}</x-slot>
        </x-myfile>
        @php
            $imgDir = 'hero_imgDir';
        @endphp
        @if(isset($website->$imgDir))

            <div class="flex flex-col rounded border border-gray-200">

                <img class="w-full rounded shadow-md" src="{{url($website->hero_imgDir)}}" alt="Header de sitio web." height="250" width="150">

                <div class="flex items-center pl-4">

                    <input type="checkbox" name="borrar_hero_imgDir" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">

                    <label class="py-4 ml-2 w-full text-sm font-medium text-gray-900">¿Borrar imagen?</label>
                </div>
            </div>
        @endif
    </x-myCaja>

{{-- acerca de --}}
    <x-myCaja>
        <h3>Sección Acerca de</h3>
        <x-slot name="rutaForm">{{route('about')}}</x-slot>
        <x-myInput>
            <x-slot name="labelName">about_titulo</x-slot>
            <x-slot name="label">Titulo</x-slot>
            {{old('nombreEmpresa', $website->about_titulo)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">about_subtitulo</x-slot>
            <x-slot name="label">Bajada de titulo</x-slot>
            {{old('nombreEmpresa', $website->about_subtitulo)}}
        </x-myInput>
        <x-myfile>
            <x-slot name="labelName">about_imgDir1</x-slot>
            <x-slot name="label">Imagen para acompañar 1</x-slot>
        </x-myfile>
        @if(isset($website->about_imgDir1))
            <div class="flex flex-col rounded border border-gray-200">

                <img class="w-full rounded shadow-md" src="{{url($website->about_imgDir1)}}" alt="Header de sitio web." height="250" width="150">

                <div class="flex items-center pl-4">

                    <input type="checkbox" name="borrar_about_imgDir1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">

                    <label class="py-4 ml-2 w-full text-sm font-medium text-gray-900">¿Borrar imagen?</label>
                </div>
            </div>
        @endif
        <x-myfile>
            <x-slot name="labelName">about_imgDir2</x-slot>
            <x-slot name="label">Imagen para acompañar 2</x-slot>
        </x-myfile>
        @if(isset($website->about_imgDir2))
            <div class="flex flex-col rounded border border-gray-200">

                <img class="w-full rounded shadow-md" src="{{url($website->about_imgDir2)}}" alt="Header de sitio web." height="250" width="150">

                <div class="flex items-center pl-4">

                    <input type="checkbox" name="borrar_about_imgDir1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">

                    <label class="py-4 ml-2 w-full text-sm font-medium text-gray-900">¿Borrar imagen?</label>
                </div>
            </div>
        @endif
        <x-myfile>
            <x-slot name="labelName">about_imgDir3</x-slot>
            <x-slot name="label">Imagen para acompañar 3</x-slot>
        </x-myfile>
        @if(isset($website->about_imgDir3))
            <div class="flex flex-col rounded border border-gray-200">

                <img class="w-full rounded shadow-md" src="{{url($website->about_imgDir3)}}" alt="Header de sitio web." height="250" width="150">

                <div class="flex items-center pl-4">

                    <input type="checkbox" name="borrar_about_imgDir1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">

                    <label class="py-4 ml-2 w-full text-sm font-medium text-gray-900">¿Borrar imagen?</label>
                </div>
            </div>
        @endif
</x-myCaja>

    <x-myCaja>
        <h3>Sección Llamada a la accion (CTA)</h3>
        <x-slot name="rutaForm">{{route('cta')}}</x-slot>
        <x-myInput>
            <x-slot name="labelName">cta_titulo</x-slot>
            <x-slot name="label">Titulo</x-slot>
            {{old('nombreEmpresa', $website->cta_titulo)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">cta_subtitulo</x-slot>
            <x-slot name="label">Bajada de titulo</x-slot>
            {{old('nombreEmpresa', $website->cta_subtitulo)}}
        </x-myInput>
        <x-myfile>
            <x-slot name="labelName">cta_imgDir</x-slot>
            <x-slot name="label">Imagen para acompañar</x-slot>
        </x-myfile>
        @if(isset($website->cta_imgDir))

            <div class="flex flex-col rounded border border-gray-200">

                <img class="w-full rounded shadow-md" src="{{url($website->cta_imgDir)}}" alt="Header de sitio web." height="250" width="150">

                <div class="flex items-center pl-4">

                    <input type="checkbox" name="borrar_cta_imgDir" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">

                    <label class="py-4 ml-2 w-full text-sm font-medium text-gray-900">¿Borrar imagen?</label>
                </div>
            </div>
        @endif
    </x-myCaja>

    <x-myCaja>
        <h3>Sección Galeria de Imagenes</h3>
        <x-slot name="rutaForm">{{route('galeria')}}</x-slot>
        <x-myInput>
            <x-slot name="labelName">galeria_titulo</x-slot>
            <x-slot name="label">Titulo</x-slot>
            {{old('nombreEmpresa', $website->galeria_titulo)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">galeria_subtitulo</x-slot>
            <x-slot name="label">Bajada de titulo</x-slot>
            {{old('nombreEmpresa', $website->galeria_subtitulo)}}

        </x-myInput>

        @for ($n = 1; $n <= 6; $n++)
        <x-myfile>
            <x-slot name="labelName">galeria_imgUrl{{$n}}</x-slot>
            <x-slot name="label">Imagen para la galería{{$n}}</x-slot>
        </x-myfile>
        @php
            $ruta = 'galeria_imgUrl'.$n;

        @endphp
            @if(isset($website->$ruta))

                <div class="flex flex-col rounded border border-gray-200">

                    <img class="w-full rounded shadow-md" src="{{url($website->$ruta)}}" alt="Header de sitio web." height="50" width="50">

                    <div class="flex items-center pl-4">

                        <input type="checkbox" name="borrar_galeria_imgUrl{{$n}}" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">

                        <label class="py-4 ml-2 w-full text-sm font-medium text-gray-900">¿Borrar imagen?</label>
                    </div>
                </div>
            @endif
        @endfor
    </x-myCaja>

    {{-- <x-myCaja>
        <h3>Sección Nuestro equipo</h3>
        <x-slot name="rutaForm">{{route('team')}}</x-slot>
        <x-myInput>
            <x-slot name="labelName">team_titulo</x-slot>
            <x-slot name="label">Titulo</x-slot>
            {{old('nombreEmpresa', $website->team_titulo)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">team_subtitulo</x-slot>
            <x-slot name="label">Bajada de titulo</x-slot>
            {{old('nombreEmpresa', $website->team_subtitulo)}}
        </x-myInput>
        personas
    </x-myCaja> --}}

    <x-myCaja>
        <h3>Sección Preguntas Frecuentes.</h3>
        <x-slot name="rutaForm">{{route('faq')}}</x-slot>
        <x-myInput>
            <x-slot name="labelName">faq_titulo</x-slot>
            <x-slot name="label">Titulo</x-slot>
            {{old('nombreEmpresa', $website->faq_titulo)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">faq_subtitulo</x-slot>
            <x-slot name="label">Bajada de titulo</x-slot>
            {{old('nombreEmpresa', $website->faq_subtitulo)}}
        </x-myInput>
        <div class="my-8 mx-8 p-8 rounded border border-slate-200">
            <h3 class="mt-6 mb-8 ml-8 font-semibold text-lg">Preguntas</h3>
            <x-myInput>
                <x-slot name="labelName">pregunta_1</x-slot>
                <x-slot name="label">Primera Pregunta</x-slot>
                {{old('nombreEmpresa', $website->pregunta_1)}}
            </x-myInput>
            <x-myInput>
                <x-slot name="labelName">respuesta_1</x-slot>
                <x-slot name="label">Primera Respuesta</x-slot>
                {{old('nombreEmpresa', $website->respuesta_1)}}
            </x-myInput>
            <x-myInput>
                <x-slot name="labelName">pregunta_2</x-slot>
                <x-slot name="label">Segunda Pregunta</x-slot>
                {{old('nombreEmpresa', $website->pregunta_2)}}
            </x-myInput>
            <x-myInput>
                <x-slot name="labelName">respuesta_2</x-slot>
                <x-slot name="label">Segunda Respuesta</x-slot>
                {{old('nombreEmpresa', $website->respuesta_2)}}
            </x-myInput>
            <x-myInput>
                <x-slot name="labelName">pregunta_3</x-slot>
                <x-slot name="label">Tercera Pregunta</x-slot>
                {{old('nombreEmpresa', $website->pregunta_3)}}
            </x-myInput>
            <x-myInput>
                <x-slot name="labelName">respuesta_3</x-slot>
                <x-slot name="label">Tercera Respuesta</x-slot>
                {{old('nombreEmpresa', $website->respuesta_3)}}
            </x-myInput>
        </div>
    </x-myCaja>

{{-- testimonio --}}
    <x-myCaja>
        <h3>Sección Testimonio</h3>
        <x-slot name="rutaForm">{{route('testimonio')}}</x-slot>
        <x-myInput>
            <x-slot name="labelName">testimonio_usuario</x-slot>
            <x-slot name="label">Nombre usuario</x-slot>
            {{old('nombreEmpresa', $website->testimonio_usuario)}}
        </x-myInput>
        <x-myfile>
            <x-slot name="labelName">testimonio_usuarioAvatar</x-slot>
            <x-slot name="label">Avatar usuario</x-slot>
            {{old('nombreEmpresa', $website->testimonio_usuarioAvatar)}}
        </x-myfile>
        @if(isset($website->testimonio_usuarioAvatar))

            <div class="flex flex-col rounded border border-gray-200">

                <img class="w-full rounded shadow-md" src="{{url($website->testimonio_usuarioAvatar)}}" alt="Header de sitio web." height="250" width="150">

                <div class="flex items-center pl-4">

                    <input type="checkbox" name="borrar_testimonio_usuarioAvatar" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">

                    <label class="py-4 ml-2 w-full text-sm font-medium text-gray-900">¿Borrar imagen?</label>
                </div>
            </div>
        @endif
        <x-myInput>
            <x-slot name="labelName">testimonio_mensaje</x-slot>
            <x-slot name="label">Mensaje</x-slot>
            {{old('nombreEmpresa', $website->testimonio_mensaje)}}
        </x-myInput>

    </x-myCaja>

{{-- Contacto --}}
    <x-myCaja>
        <h3>Sección Contacto</h3>
        <x-slot name="rutaForm">{{url('/contacto')}}</x-slot>
        <x-myInput>
            <x-slot name="labelName">contacto_titulo</x-slot>
            <x-slot name="label">Titulo</x-slot>
            {{old('nombreEmpresa', $website->contacto_titulo)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">contacto_subtitulo</x-slot>
            <x-slot name="label">bajada de titulo</x-slot>
            {{old('nombreEmpresa', $website->contacto_subtitulo)}}
        </x-myInput>
    </x-myCaja>

    <x-myCaja>
        <h3>Sección Dirección del local</h3>
        <x-slot name="rutaForm">{{route('direccion')}}</x-slot>
        <x-myInput>
            <x-slot name="labelName">direccion_titulo</x-slot>
            <x-slot name="label">Titulo</x-slot>
            {{old('nombreEmpresa', $website->direccion_titulo)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">direccion_subtitulo</x-slot>
            <x-slot name="label">Bajada de titulo</x-slot>
            {{old('nombreEmpresa', $website->direccion_subtitulo)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">direccion_direccion</x-slot>
            <x-slot name="label">Dirección de su local</x-slot>
            {{old('nombreEmpresa', $website->direccion_direccion)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">direccion_horarios</x-slot>
            <x-slot name="label">Horarios de atención</x-slot>
            {{old('nombreEmpresa', $website->direccion_horarios)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">direccion_telefono</x-slot>
            <x-slot name="label">Número de teléfono</x-slot>
            {{old('nombreEmpresa', $website->direccion_telefono)}}
        </x-myInput>
        <x-myInput>
            <x-slot name="labelName">direccion_email</x-slot>
            <x-slot name="label">Email</x-slot>
            {{old('nombreEmpresa', $website->direccion_email)}}
        </x-myInput>
        <x-myfile>
            <x-slot name="labelName">direccion_imgDir</x-slot>
            <x-slot name="label">Imagen de su tienda para mostrar</x-slot>
        </x-myfile>
        @if(isset($website->direccion_imgDir))

            <div class="flex flex-col rounded border border-gray-200">

                <img class="w-full rounded shadow-md" src="{{url($website->direccion_imgDir)}}" alt="Header de sitio web." height="250" width="150">

                <div class="flex items-center pl-4">

                    <input type="checkbox" name="borrar_cta_imgDir" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">

                    <label class="py-4 ml-2 w-full text-sm font-medium text-gray-900">¿Borrar imagen?</label>
                </div>
            </div>
        @endif
    </x-myCaja>


</x-app-layout>
