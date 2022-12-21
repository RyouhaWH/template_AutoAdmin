<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            //empresa
            $table->string('logoUrl')->nullable();
            $table->string('nombreEmpresa')->nullable();
            $table->string('descripcion')->nullable();
            //hero
            $table->string('hero_titulo')->nullable();
            $table->string('hero_subtitulo')->nullable();
            $table->string('hero_cta')->nullable();
            $table->string('hero_imgDir')->nullable();
            //about
            $table->string('about_titulo')->nullable();
            $table->string('about_subtitulo')->nullable();
            $table->string('about_imgDir1')->nullable();
            $table->string('about_imgDir2')->nullable();
            //CTA
            $table->string('cta_titulo')->nullable();
            $table->string('cta_subtitulo')->nullable();
            $table->string('cta_imgDir')->nullable();
            //galeria
            $table->string('galeria_titulo')->nullable();
            $table->string('galeria_subtitulo')->nullable();
            $table->string('galeria_imgUrl1')->nullable();
            $table->string('galeria_imgUrl2')->nullable();
            $table->string('galeria_imgUrl3')->nullable();
            $table->string('galeria_imgUrl4')->nullable();
            $table->string('galeria_imgUrl5')->nullable();
            $table->string('galeria_imgUrl6')->nullable();
            //team
            $table->string('team_titulo')->nullable();
            $table->string('team_subtitulo')->nullable();
            $table->json('team_personas')->nullable();
            //faq
            $table->string('faq_titulo')->nullable();
            $table->string('faq_subtitulo')->nullable();
            $table->json('faq_preguntas')->nullable();
            $table->text('pregunta_1')->nullable();
            $table->text('respuesta_1')->nullable();
            $table->text('pregunta_2')->nullable();
            $table->text('respuesta_2')->nullable();
            $table->text('pregunta_3')->nullable();
            $table->text('respuesta_3')->nullable();
            //testimonio
            $table->string('testimonio_usuario')->nullable();
            $table->string('testimonio_usuarioAvatar')->nullable();
            $table->string('testimonio_mensaje')->nullable();
            //direccion
            $table->string('direccion_titulo',)->nullable();
            $table->string('direccion_subtitulo',)->nullable();
            $table->string('direccion_direccion',)->nullable();
            $table->string('direccion_horarios',)->nullable();
            $table->string('direccion_telefono',)->nullable();
            $table->string('direccion_email',)->nullable();
            $table->string('direccion_imgDir',)->nullable();
            //Contacto
            $table->string('contacto_titulo')->nullable();
            $table->string('contacto_subtitulo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websites');
    }
};
