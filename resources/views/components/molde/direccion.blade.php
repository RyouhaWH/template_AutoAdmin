@props([
    'titulo',
    'direccion',
    'horarioSemana',
    'horarioSabado',
    'correo',
    'telefono',

])
<section class="relative">

    <div class="h-56 py-12 lg:py-16 px-4 mx-auto max-w-screen-md">
        <p class="font-open-sans mx-10 mb-1 font-light text-center text-slate-300 lg:text-slate-700 text-sm sm:text-xl">
            nuestro local
        </p>
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-white lg:text-slate-900">
            @php
            $mensaje = isset($titulo) ? $titulo : 'Ven a visitarnos en nuestra sucursal.';
            echo $mensaje;
            @endphp
        </h2>
    </div>

{{-- imagenes --}}
    <div class="grid max-lg:grid-rows-2 lg:grid-cols-3 lg:max-w-screen-lg lg:mx-auto lg:mb-16">

        <div class="absolute lg:relative lg:rounded-lg top-0 -z-20 h-56 w-full lg:h-full lg:col-start-1 bg-no-repeat bg-center bg-cover" style="background-image:url('img/vet/store-mike-petrucci.jpg'); box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;">
            <div class="absolute lg:rounded-lg lg:scale-0 top-0 w-full h-56 lg:h-full bg-[#0008] -z-10"></div>
        </div>

        <div  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;" class="lg:col-start-2 flex flex-col gap-2 my-8 mx-8">

            <div class="w-full mt-4 mx-4">
                <h3 class="text-primary-900 font-sans font-extrabold text-2xl mb-2 ">Dirección</h3>
                <p class="ml-4 font-sans text-gray-500">
                    @php
                        $mensaje = isset($direccion) ? $direccion : 'Calle Lorem Ipsus #1234 Temuco';
                        echo $mensaje;
                    @endphp
                </p>
            </div>

            <div class="w-full my-2 mx-4 flex flex-col">
                <h3 class="text-primary-900 font-sans font-extrabold text-2xl mb-2">Horario de atencion</h3>
                <div class="grid grid-cols-2 grid-rows-2 w-56 self-center">
                    <p class="text-gray-500">lun - vie:</p>
                    <p class="text-gray-500">
                        @php
                            $mensaje = isset($horarioSemana) ? $horarioSemana : '09hrs - 17 hrs';
                            echo $mensaje;
                        @endphp
                    </p>
                    <p class="text-gray-500">Sábado:</p>
                    <p class="text-gray-500">
                        @php
                            $mensaje = isset($horarioSabado) ? $horarioSabado : '09hrs - 13 hrs';
                            echo $mensaje;
                        @endphp
                    </p>
                </div>
            </div>

            <div class="w-full mb-4 mx-4 flex flex-col">
                <h3 class="text-primary-900 font-sans font-extrabold text-2xl mb-2">Contacto</h3>
                <a class="text-gray-500 ml-10 block font-nunito-sans font-semibold" href="tel:+56911223344">
                    <i class="text-primary-500 mr-2  fa-solid fa-phone"></i>
                    @php
                        $mensaje = isset($telefono) ? $telefono : '(+56) 9 1122 3344';
                        echo $mensaje;
                    @endphp
                </a>
                <a class="text-gray-500 ml-10 block font-nunito-sans font-semibold" href="contacto@vetclinic.cl">
                    <i class="text-primary-500 mr-2  fa-regular fa-envelope"></i>
                    @php
                        $mensaje = isset($correo) ? $correo : 'contacto@vetclinic.cl';
                        echo $mensaje;
                    @endphp
                </a>
            </div>
        </div>
        <iframe class="lg:col-start-3 lg:rounded-lg w-full lg:w-[400px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24897.894435888637!2d-72.63509500481982!3d-38.735327830423856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9614d15f251ff09b%3A0x9529f3a3a7e7bf4a!2sIsla%20Caut%C3%ADn!5e0!3m2!1ses-419!2scl!4v1669989948818!5m2!1ses-419!2scl" width="400" height="400" style="border:0; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
