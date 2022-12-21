@php


@endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Mi templeitoo</title>
    {{-- Styles --}}
        @vite([
            'resources/css/app.css',
            'resources/js/app.js'
        ])
    <link rel="stylesheet" href="{{url('css/myStyle.css')}}">


</head>
<body class="antialiased bg-slate-50 dark:bg-slate-900 ">


<!-- NavBar -->

        <x-molde.navbar>
            <x-slot name="logoUrl">{{$website->logoUrl}}</x-slot>
            <x-slot name="name">{{$website->nombreEmpresa}}</x-slot>
        </x-molde.navbar>


<!-- hero -->
        <x-molde.header-1>
            <x-slot name="titulo">{{$website->hero_titulo}}</x-slot>
            <x-slot name="subtitulo">{{$website->hero_subtitulo}}</x-slot>
            <x-slot name="cta">{{$website->hero_cta}}</x-slot>
            <x-slot name="imgDir">{{$website->hero_imgDir}}</x-slot>
        </x-molde.header-1>



<!-- about -->
        <x-molde.about-1>
            <x-slot name="titulo">{{$website->about_titulo}}</x-slot>
            <x-slot name="subtitulo">{{$website->about_subtitulo}}</x-slot>
            <x-slot name="imgDir1">{{$website->about_imgDir1}}</x-slot>
            <x-slot name="imgDir2">{{$website->about_imgDir2}}</x-slot>
        </x-molde.about-1>

<!-- cta -->
        {{-- <x-molde.cta>
            <x-slot name="titulo">{{$website->cta_titulo}}</x-slot>
            <x-slot name="subtitulo">{{$website->cta_subtitulo}}</x-slot>
            <x-slot name="imgDir">{{$website->cta_imgDir}}</x-slot>
        </x-molde.cta> --}}

<!-- Gallery projects-->
        <x-molde.trabajos>
            <x-slot name="titulo">{{$website->galeria_titulo}}</x-slot>
            <x-slot name="subtitulo">{{$website->galeria_subtitulo}}</x-slot>
            <x-slot name="imgUrl1">{{$website->galeria_imgUrl1}}</x-slot>
            <x-slot name="imgUrl2">{{$website->galeria_imgUrl2}}</x-slot>
            <x-slot name="imgUrl3">{{$website->galeria_imgUrl3}}</x-slot>
            <x-slot name="imgUrl4">{{$website->galeria_imgUrl4}}</x-slot>
            <x-slot name="imgUrl5">{{$website->galeria_imgUrl5}}</x-slot>
            <x-slot name="imgUrl6">{{$website->galeria_imgUrl6}}</x-slot>

        </x-molde.trabajos>

<!-- Testimonios -->
        <x-molde.testimonio-1>
            <x-slot name="usuario">{{$website->testimonio_usuario}}</x-slot>
            <x-slot name="usuarioAvatar">{{$website->testimonio_usuarioAvatar}}</x-slot>
            <x-slot name="mensaje">{{$website->testimonio_mensaje}}</x-slot>
        </x-molde.testimonio-1>

<!-- Dirección -->
        {{-- ! Meter variables para hacerlo dinamico --}}
        <x-molde.direccion>
            {{-- <x-slot name="titulo"></x-slot>
            <x-slot name="direccion"></x-slot>
            <x-slot name="horarioSemana"></x-slot>
            <x-slot name="horarioSabado"></x-slot>
            <x-slot name="correo"></x-slot>
            <x-slot name="telefono"></x-slot> --}}
        </x-molde.direccion>

<!-- Contactanos -->
        <x-molde.contacto-1>
            <x-slot name="titulo">{{$website->contacto_titulo}}</x-slot>
            <x-slot name="mensaje">{{$website->contacto_subtitulo}}</x-slot>
        </x-molde.contacto-1>

<!-- FAQ -->
    <x-molde.faq>
        <x-slot name="titulo">{{$website->faq_titulo}}</x-slot>
        <x-slot name="mensaje">{{$website->faq_subtitulo}}</x-slot>

        @for ($n = 1; $n <= 6; $n++)
            <x-molde.pregunta>
                <x-slot name="id">{{$n}}</x-slot>
                <x-slot name="hidden"></x-slot>
                <x-slot name="pregunta">Pregunta {{$n}}?</x-slot>
                <x-slot name="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At amet eius repellendus qui itaque rem, suscipit, non molestias quae sit animi! Et nobis obcaecati, temporibus mollitia ipsum dolor similique necessitatibus.</x-slot>
            </x-molde.pregunta>
        @endfor
    </x-molde.faq>

<!-- Footer -->
    <x-molde.footer-1>
        <x-slot name="logoUrl">{{$website->logoUrl}}</x-slot>
        <x-slot name="marca">{{$website->nombreEmpresa}}</x-slot>
        <x-slot name="descripcion">{{$website->descripcion}}</x-slot>
    </x-molde.footer-1>






{{-- scripts --}}
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://kit.fontawesome.com/09a4f10b6b.js" crossorigin="anonymous"></script>
    <script src="{{url('js/miScript.js')}}"></script>

{{-- Observer --}}


</body>
</html>
