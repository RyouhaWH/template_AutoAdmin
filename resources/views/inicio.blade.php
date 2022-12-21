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


</head>
<body class="antialiased bg-slate-50 dark:bg-slate-900">


    <!-- NavBar -->

        <x-molde.navbar>
            <x-slot name="logoUrl">{{$website->logoUrl}}</x-slot>
            <x-slot name="name">{{$website->nombreEmpresa}}</x-slot>
        </x-molde.navbar>




    <!-- hero -->
        <x-molde.header>
            <x-slot name="titulo">{{$website->hero_titulo}}</x-slot>
            <x-slot name="subtitulo">{{$website->hero_subtitulo}}</x-slot>
            <x-slot name="cta">{{$website->hero_cta}}</x-slot>
            <x-slot name="imgDir">{{$website->hero_imgDir}}</x-slot>
        </x-molde.header>



    <!-- about -->
        <x-molde.about>
            <x-slot name="titulo">{{$website->about_titulo}}</x-slot>
            <x-slot name="subtitulo">{{$website->about_subtitulo}}</x-slot>
            <x-slot name="imgDir1">{{$website->about_imgDir1}}</x-slot>
            <x-slot name="imgDir2">{{$website->about_imgDir2}}</x-slot>
        </x-molde.about>

    <!-- cta -->
        <x-molde.cta>
            <x-slot name="titulo">{{$website->cta_titulo}}</x-slot>
            <x-slot name="subtitulo">{{$website->cta_subtitulo}}</x-slot>
            <x-slot name="imgDir">{{$website->cta_imgDir}}</x-slot>
        </x-molde.cta>

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

    <!-- team -->

        <x-molde.team>
            <x-slot name="titulo">{{$website->team_titulo}}</x-slot>
            <x-slot name="subtitulo">{{$website->team_subtitulo}}</x-slot>

            {{-- Persona1 --}}
            <x-molde.persona>
                <x-slot name="avatar">https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png</x-slot>
                <x-slot name="nombre">Lorem ipsum1</x-slot>
                <x-slot name="cargo">CEO & Web Developer</x-slot>
                <x-slot name="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestiae fugit dolore vero.</x-slot>
            </x-molde.persona>

            <x-molde.persona>
                <x-slot name="avatar">https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png</x-slot>
                <x-slot name="nombre">Lorem ipsum2</x-slot>
                <x-slot name="cargo">CTO</x-slot>
                <x-slot name="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestiae fugit dolore vero.</x-slot>
            </x-molde.persona>

            <x-molde.persona>
                <x-slot name="avatar">https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png</x-slot>
                <x-slot name="nombre">Lorem ipsum2</x-slot>
                <x-slot name="cargo">Senior Front-end Developer</x-slot>
                <x-slot name="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestiae fugit dolore vero.</x-slot>
            </x-molde.persona>

            <x-molde.persona>
                <x-slot name="avatar">https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png</x-slot>
                <x-slot name="nombre">Lorem ipsum2</x-slot>
                <x-slot name="cargo">Marketing & Sale</x-slot>
                <x-slot name="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestiae fugit dolore vero.</x-slot>
            </x-molde.persona>


        </x-molde.team>


    <!-- FAQ -->

        <x-molde.faq>
            <x-slot name="titulo">{{$website->faq_titulo}}</x-slot>
            <x-slot name="mensaje">{{$website->faq_subtitulo}} <a class="text-blue-600 underline" href="#contacto">aquí</a></x-slot>

            <x-molde.pregunta>
                <x-slot name="id">1</x-slot>
                <x-slot name="hidden"></x-slot>
                <x-slot name="pregunta">Pregunta 1?</x-slot>
                <x-slot name="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At amet eius repellendus qui itaque rem, suscipit, non molestias quae sit animi! Et nobis obcaecati, temporibus mollitia ipsum dolor similique necessitatibus.</x-slot>
            </x-molde.pregunta>
            <x-molde.pregunta>
                <x-slot name="id">2</x-slot>
                <x-slot name="hidden"></x-slot>
                <x-slot name="pregunta">Pregunta 2?</x-slot>
                <x-slot name="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At amet eius repellendus qui itaque rem, suscipit, non molestias quae sit animi! Et nobis obcaecati, temporibus mollitia ipsum dolor similique necessitatibus.</x-slot>
            </x-molde.pregunta>
            <x-molde.pregunta>
                <x-slot name="id">3</x-slot>
                <x-slot name="hidden"></x-slot>
                <x-slot name="pregunta">Pregunta 3?</x-slot>
                <x-slot name="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At amet eius repellendus qui itaque rem, suscipit, non molestias quae sit animi! Et nobis obcaecati, temporibus mollitia ipsum dolor similique necessitatibus.</x-slot>
            </x-molde.pregunta>
            <x-molde.pregunta>
                <x-slot name="id">4</x-slot>
                <x-slot name="hidden"></x-slot>
                <x-slot name="pregunta">Pregunta 4?</x-slot>
                <x-slot name="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At amet eius repellendus qui itaque rem, suscipit, non molestias quae sit animi! Et nobis obcaecati, temporibus mollitia ipsum dolor similique necessitatibus.</x-slot>
            </x-molde.pregunta>
        </x-molde.faq>

    <!-- Testimonios -->
        <x-molde.testimonio>
            <x-slot name="usuario">{{$website->testimonio_usuario}}</x-slot>
            <x-slot name="usuarioAvatar">{{$website->testimonio_usuarioAvatar}}</x-slot>
            <x-slot name="mensaje">{{$website->testimonio_mensaje}}</x-slot>
        </x-molde.testimonio>

    <!-- Contactanos -->
        <x-molde.contacto>
            <x-slot name="titulo">{{$website->contacto_titulo}}</x-slot>
            <x-slot name="mensaje">{{$website->contacto_subtitulo}}</x-slot>
        </x-molde.contacto>

    <!-- Footer -->
        <x-molde.footer>
            <x-slot name="logoUrl">{{$website->logoUrl}}</x-slot>
            <x-slot name="marca">{{$website->nombreEmpresa}}</x-slot>
            <x-slot name="descripcion">{{$website->descripcion}}</x-slot>
        </x-molde.footer>






    {{-- scripts --}}
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

</body>
</html>
