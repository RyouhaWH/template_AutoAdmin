<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WebController extends Controller
{
    public function store(Request $request){


        $this->llenadoModelo($request);


        /**
         * Navbar
         *  logoUrl
         *  nombreEmpresa
         *
         * Hero
         *  titulo
         *  subtitulo
         *  cta
         *  imgDir
         *
         * About
         *  titulo
         *  subtitulo
         *  imgDir1
         *  imgDir2
         *
         * CTA
         *  titulo
         *  subtitulo
         *  imgDIR
         *
         * Galeria
         *  titulo
         *  subtitulo
         *  imgUrl1
         *  imgUrl2
         *  imgUrl3
         *  imgUrl4
         *  imgUrl5
         *  imgUrl6
         *
         * Team
         *  titulo
         *  subtitulo
         *  Personas *4 -json
         *      avatar
         *      nombre
         *      cargo
         *      descripcion
         *
         * FAQ
         *  titulo
         *  subtitulo
         *  Pregunta *3 -json
         *      id
         *      hidden - no funca, no poner
         *      pregunta
         *      respuesta
         *
         * Testimonio
         *  usuario
         *  usuarioAvatar
         *  mensaje
         *
         * Contacto
         *  titulo
         *  mensaje
         *
         * Footer
         *  logoUrl - usar navbar
         *  nombreEmpresa - usar navbar
         *  descripcion
         *
         */
    }

    public function llenadoNav(Request $request){

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        $webController->fill([
            'nombreEmpresa' => $request->input('nombreEmpresa'),
            'logoUrl' => $this->obtenerImagen('logoUrl', $request,$webController),
            'descripcion' => $request->input('descripcion'),
        ]);

        $webController->save();

        return redirect()->back();
    }

    public function llenadoHero(Request $request){

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        $webController->fill([

            //header
            'hero_titulo' => $request->input('hero_titulo'),
            'hero_subtitulo' => $request->input('hero_subtitulo'),
            'hero_cta' => $request->input('hero_cta'),
            'hero_imgDir' => $this->obtenerImagen('hero_imgDir', $request,$webController),
        ]);
        $webController->save();

        return redirect()->back();


    }

    public function llenadoAbout(Request $request){

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        $webController->fill([
            //about
            'about_titulo' => $request->input('about_titulo'),
            'about_subtitulo' => $request->input('about_subtitulo'),
            'about_imgDir1' => $this->obtenerImagen('about_imgDir1', $request,$webController),
            'about_imgDir2' => $this->obtenerImagen('about_imgDir2', $request,$webController),
        ]);

        $webController->save();

        return redirect()->back();


    }

    public function llenadoCta(Request $request){

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        $webController->fill([
            //cta
            'cta_titulo' => $request->input('cta_titulo'),
            'cta_subtitulo' => $request->input('cta_subtitulo'),
            'cta_imgDir' => $this->obtenerImagen('cta_imgDir', $request,$webController),
        ]);

        $webController->save();

        return redirect()->back();


    }

    public function llenadoGaleria(Request $request){

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        $webController->fill([
            //galeria
            'galeria_titulo' => $request->input('galeria_titulo'),
            'galeria_subtitulo' => $request->input('galeria_subtitulo'),
            'galeria_imgUrl1' => $this->obtenerImagen('galeria_imgUrl1', $request,$webController),
            'galeria_imgUrl2' => $this->obtenerImagen('galeria_imgUrl2', $request,$webController),
            'galeria_imgUrl3' => $this->obtenerImagen('galeria_imgUrl3', $request,$webController),
            'galeria_imgUrl4' => $this->obtenerImagen('galeria_imgUrl4', $request,$webController),
            'galeria_imgUrl5' => $this->obtenerImagen('galeria_imgUrl5', $request,$webController),
            'galeria_imgUrl6' => $this->obtenerImagen('galeria_imgUrl6', $request,$webController),
        ]);

        $webController->save();

        return redirect()->back();

    }



    public function llenadoTeam(Request $request){

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        $webController->fill([
            //team
            'team_titulo' => $request->input('team_titulo'),
            'team_subtitulo' => $request->input('team_subtitulo'),
            'team_personas' => $request->input('team_personas'),
        ]);

        $webController->save();

        return redirect()->back();

    }

    public function llenadoFaq(Request $request){

        return $request;

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        $webController->fill([
            //faq
            'faq_titulo' => $request->input('faq_titulo'),
            'faq_subtitulo' => $request->input('faq_subtitulo'),
            'faq_preguntas' => $request->input('faq_preguntas'),

            'pregunta_1' => $request->input('pregunta_1'),
            'respuesta_1' => $request->input('respuesta_1'),
            'pregunta_2' => $request->input('pregunta_2'),
            'respuesta_2' => $request->input('respuesta_2'),
            'pregunta_3' => $request->input('pregunta_3'),
            'respuesta_3' => $request->input('respuesta_3'),


        ]);
        $webController->save();

        return redirect()->back();

    }

    public function llenadoTestimonio(Request $request){

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        $webController->fill([
            //testimonio
            'testimonio_usuario' => $request->input('testimonio_usuario'),
            'testimonio_usuarioAvatar' => $this->obtenerImagen('testimonio_usuarioAvatar', $request,$webController),
            'testimonio_mensaje' => $request->input('testimonio_mensaje'),
        ]);

        $webController->save();

        return redirect()->back();
    }

    public function llenadoContacto(Request $request){

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        $webController->fill([
            //contacto
            'contacto_titulo' => $request->input('contacto_titulo'),
            'contacto_subtitulo' => $request->input('contacto_subtitulo'),
        ]);

        $webController->save();

        return redirect()->back();
    }

    public function llenadoDireccion(Request $request){

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        // dd($request->input('direccion_titulo'));

        $webController->fill([
            'direccion_titulo' => $request->input('direccion_titulo',),
            'direccion_subtitulo' => $request->input('direccion_subtitulo',),
            'direccion_direccion' => $request->input('direccion_direccion',),
            'direccion_horarios' => $request->input('direccion_horarios',),
            'direccion_telefono' => $request->input('direccion_telefono',),
            'direccion_email' => $request->input('direccion_email',),
            'direccion_imgDir' => $request->input('direccion_imgDir',),
        ]);

        $webController->save();

        return redirect()->back()->with('status', 'datos agregados correctamente.');

    }

    function llenadoModelo(Request $request){

        //transformar imagenes.

        $webController = Website::find(1) == null
            ? new Website
            : Website::find(1);

        $webController->fill([
        //empresa
        'logoUrl' => $this->obtenerImagen('logoUrl', $request,$webController),
        'nombreEmpresa' => $request->input('nombreEmpresa'),
        'descripcion' => $request->input('descripcion'),
        //header
        'hero-titulo' => $request->input('hero-titulo'),
        'hero-subtitulo' => $request->input('hero-subtitulo'),
        'hero-cta' => $request->input('hero-cta'),
        'hero-imgDir' => $this->obtenerImagen('hero-imgDir', $request,$webController),
        //about
        'about-titulo' => $request->input('about-titulo'),
        'about-subtitulo' => $request->input('about-subtitulo'),
        'about-imgDir1' => $this->obtenerImagen('about-imgDir1', $request,$webController),
        'about-imgDir2' => $this->obtenerImagen('about-imgDir2', $request,$webController),
        //cta
        'cta-titulo' => $request->input('cta-titulo'),
        'cta-subtitulo' => $request->input('cta-subtitulo'),
        'cta-imgDir' => $this->obtenerImagen('cta-imgDir', $request,$webController),
        //galeria
        'galeria-titulo' => $request->input('galeria-titulo'),
        'galeria-subtitulo' => $request->input('galeria-subtitulo'),
        'galeria-imgUrl1' => $this->obtenerImagen('galeria-imgUrl1', $request,$webController),
        'galeria-imgUrl2' => $this->obtenerImagen('galeria-imgUrl2', $request,$webController),
        'galeria-imgUrl3' => $this->obtenerImagen('galeria-imgUrl3', $request,$webController),
        'galeria-imgUrl4' => $this->obtenerImagen('galeria-imgUrl4', $request,$webController),
        'galeria-imgUrl5' => $this->obtenerImagen('galeria-imgUrl5', $request,$webController),
        'galeria-imgUrl6' => $this->obtenerImagen('galeria-imgUrl6', $request,$webController),
        //team
        'team-titulo' => $request->input('team-titulo'),
        'team-subtitulo' => $request->input('team-subtitulo'),
        'team-personas' => $request->input('team-personas'),
        //faq
        'faq-titulo' => $request->input('faq-titulo'),
        'faq-subtitulo' => $request->input('faq-subtitulo'),
        'faq-preguntas' => $request->input('faq-preguntas'),
        //testimonio
        'testimonio-usuario' => $request->input('testimonio-usuario'),
        'testimonio-usuarioAvatar' => $this->obtenerImagen('testimonio-usuarioAvatar', $request,$webController),
        'testimonio-mensaje' => $request->input('testimonio-mensaje'),
        //contacto
        'contacto-titulo' => $request->input('contacto-titulo'),
        'contacto-subtitulo' => $request->input('contacto-subtitulo'),

        ]);

        $webController->save();
    }

     /**
     * Guarda en storage una imagen, y devuelve el nombre que dejo en la base de datos.
     *
     */
    function obtenerImagen($inputName, Request $request, Website $website){
        //se subio alguna imagen en el formulario?
        if($request->hasFile($inputName) == false){
            //NO:
            //hay una imagen subida de antes?
            if(isset($website->$inputName)){
                //si
                //queremos borrar esa imagen?
                $columna = 'borrar_'.$inputName;
                    //si
                if($request->input($columna) != null){
                    $this->borrarImagen($website, $inputName);
                    return null;
                }
                    //NO
                    //entonces que tenga el  valor anterior
                else{
                    return $website->$inputName;
                }
            }
            //SI
            else{
                //pues que no haya imagen.
                return null;
            }
        }


        $file = $request->file($inputName);
        $file_extension = $file->getClientOriginalExtension();
        $imgName = $inputName.'.'.$file_extension;
        $file->move('img/', $imgName);

        return 'img/'.$imgName;
    }

    /**
     * Aqui borramos imagenes si es que el campo viene con la opcion de borrar.
     */
    function borrarImagen(Website $datos, $inputName){

        $fileABorrar = $datos->$inputName;
        if(File::exists($fileABorrar)){
            File::delete($fileABorrar);
        }
    }

    function llenadoJson(Request $request){

        $arrayDireccion = array([
            'direccion_titulo' => $request->input('direccion_titulo'),
            'direccion_subtitulo' => $request->input('direccion_subtitulo'),
        ]);

        $jsonDireccion = json_encode($arrayDireccion, JSON_PRETTY_PRINT);

        return $jsonDireccion;
    }
}
