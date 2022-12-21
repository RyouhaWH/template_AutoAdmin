<x-guest-layout>
    <nav>
        <ul>
            <li>Quíenes somos</li>
            <li>Servicios</li>
            <li>Contactanos</li>
        </ul>
    </nav>
{{-- ? Hero --}}
    <section>
        <h1>
            Deja el cuidado de tu mascota en manos de expertos
        </h1>
        <p>
            Lorem ipsum dolor sit amet consectetur. A orci vitae amet mi. Sit pellentesque blandit tortor metus vitae morbi. Dui eget congue id morbi enim nunc non neque. Aliquet suspendisse tempus scelerisque non volutpat amet interdum habitant egestas.
        </p>
        <button>Contactanos!</button>
        <button>+56 9 1122 3344</button>
        <img src="{{url('vet/inu1.png')}}" alt="Imagen header">
    </section>
{{-- ? Sobre Nosotros --}}
    <section>
        <h2>Conoce más sobre nosotros.</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur. A orci vitae amet mi. Sit pellentesque blandit tortor metus vitae morbi. Dui eget congue id morbi enim nunc non neque. Aliquet suspendisse tempus scelerisque non volutpat amet interdum habitant egestas.
        </p>
    {{-- ? imgenes --}}
            <div>
            {{-- ? imagen Grande --}}
                <div>
                    <p>Estamos aquí para brindar el mejor servicio a los regalones del hogar.</p>
                    <img src="{{url('vet/aboutus.png')}}" alt="imagen sección acerca de nosotros.">
                </div>
            {{-- ? imagenes chicas --}}
                <div>
                    <div>
                        <img src="{{url('vet/servicios.png')}}" alt="Imagen sobre nuestros servicios">
                        <button>Servicios</button>
                    </div>
                    <div>
                        <img src="{{url('vet/Galeria.png')}}" alt="Imagen sobre nuestros Galería">
                        <button>Galería</button>
                    </div>
                    <div>
                        <img src="{{url('vet/contacto.png')}}" alt="Imagen sobre nuestros contacto">
                        <button>contacto</button>
                    </div>
                </div>
            </div>
    </section>
{{-- ? review --}}
    <section>
        <p>nuestras reviews</p>
        <h2>Mira lo que la gente opina de nosotros.</h2>
    {{-- ?quote --}}
        <div>
            <img src="{{url('vet/icons/chevron-back-sharp.svg')}}" alt="retroceder">
            <div>
                <img src="{{url('vet/icons/quote-right-color.svg')}}" alt="icono reviews">
                <strong>
                    “Lorem ipsum dolor sit amet consectetur. Nullam ut scelerisque cursus neque nullam leo. Facilisis in cursus id fames. Elementum enim integer luctus eu sit ultricies. In pretium vel a tincidunt dignissim tincidunt. Lorem ipsum dolor sit amet consectetur.”
                </strong>
                <div>
                    <img src="{{url('vet/review.png')}}" alt="Usuario review">
                    <p>Lorem Ipsus</p>
                    <div>
                        <img src="{{url('vet/icons/star.svg')}}" alt="punto">
                        <img src="{{url('vet/icons/star.svg')}}" alt="punto">
                        <img src="{{url('vet/icons/star.svg')}}" alt="punto">
                        <img src="{{url('vet/icons/star-half.svg')}}" alt="medio punto">
                        <img src="{{url('vet/icons/star-outline.svg')}}" alt="cero">
                    </div>
                </div>
            </div>
            <img src="{{url('vet/icons/chevron-forward.svg')}}" alt="avanzar">
        </div>
    </section>
{{-- ? Direccion --}}
    <section>
        <p>Nuestro local</p>
        <h2>Ven a visitarnos en nuestra sucursal</h2>
        <img src="{{url('vet/tienda.png')}}" alt="Nuestro Local">
        <div>
            <p>Calle lorem ipsum #1234 Temuco</p>
            <h3>Horarios de atención</h3>
            <div>
                <p>lun - vie</p>
                <p>09am - 17am</p>
            </div>
            <div>
                <p>sabado</p>
                <p>10am - 13am</p>
            </div>
        </div>
        <img src="{{url('vet/mapa.png')}}" alt="como llegar">
    </section>
{{-- ? Preguntas --}}
{{-- ? Footer --}}
{{-- ? myFooter --}}
{{-- ? Fin --}}

</x-guest-layout>
