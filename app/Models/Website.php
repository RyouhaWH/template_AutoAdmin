<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [

        //empresa
        'logoUrl',
        'nombreEmpresa',
        'descripcion',
        //header
        'hero_titulo',
        'hero_subtitulo',
        'hero_cta',
        'hero_imgDir',
        //about
        'about_titulo',
        'about_subtitulo',
        'about_imgDir1',
        'about_imgDir2',
        //cta
        'cta_titulo',
        'cta_subtitulo',
        'cta_imgDir',
        //galeria
        'galeria_titulo',
        'galeria_subtitulo',
        'galeria_imgUrl1',
        'galeria_imgUrl2',
        'galeria_imgUrl3',
        'galeria_imgUrl4',
        'galeria_imgUrl5',
        'galeria_imgUrl6',
        //team
        'team_titulo',
        'team_subtitulo',
        'team_personas',
        //faq
        'faq_titulo',
        'faq_subtitulo',
        'faq_preguntas',
        'pregunta_1',
        'respuesta_1',
        'pregunta_2',
        'respuesta_2',
        'pregunta_3',
        'respuesta_3',
        //testimonio
        'testimonio_usuario',
        'testimonio_usuarioAvatar',
        'testimonio_mensaje',
        //direccion
        'direccion_titulo',
        'direccion_subtitulo',
        'direccion_direccion',
        'direccion_horarios',
        'direccion_telefono',
        'direccion_email',
        'direccion_imgDir',
        //contacto
        'contacto_titulo',
        'contacto_subtitulo',
    ];
}
