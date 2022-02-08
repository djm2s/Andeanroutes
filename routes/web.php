<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('sitemap', 'SitemapController@sitemap');
//Rutas en Ingles
Route::get('/', function(){    return view('index');});
Route::get('around', function(){    return view('around');});
Route::get('experiences', function(){    return view('experiences');});
Route::get('adventures', function(){    return view('adventures');});
Route::get('blog', function(){    return view('blog');});
Route::get('about', function(){    return view('about');});
Route::get('testimonials', function(){    return view('testimonials');});
Route::get('terms-conditions-aet', function(){    return view('terms-conditions-aet');});
Route::get('faqs', function(){    return view('faqs');});
//Formularios en inglés
Route::post('mensaje01', function(){ 
    $datos=request()->all();
    Mail::send("emails.mensaje1", $datos, function($message) use($datos){
        $message->from($datos['email'], $datos['name'])
        ->to('routes@andeanexclusive.com', 'DJM2')
        ->subject('Envio de formulario desde la página web.');
    });
    return back()->with('flash', 'Your message was sent successfully!');
}) ->name('mensaje01');

//Formularios en español
Route::post('mensaje02', function(){ 
    $datos=request()->all();
    Mail::send("emails.mensaje1", $datos, function($message) use($datos){
        $message->from($datos['email'], $datos['name'])
        ->to('routes@andeanexclusive.com', 'DJM2')
        ->subject('Envio de contacto desde página web.');
    });
    return back()->with('flash', '¡Su mensaje fué enviado con éxito! Le responderemos en la mayor brevedad posible.');
}) ->name('mensaje02');
//Tours ingles
Route::get('cusco-4-days-3-nights', function(){return view('cusco-4-days-3-nights');});
Route::get('cusco-5-days-4-nights', function(){return view('cusco-5-days-4-nights');});
Route::get('cusco-6-days-5-nights', function(){return view('cusco-6-days-5-nights');});
Route::get('machupicchu-accelerate', function(){return view('machupicchu-accelerate');});
Route::get('huacachina-ica-peru', function(){return view('huacachina-ica-peru');});
Route::get('arequipa-3-days', function(){return view('arequipa-3-days');});
Route::get('Sacred_Valley', function(){return view('Sacred_Valley');});
Route::get('Hiram_bingham', function(){return view('Hiram_bingham');});
Route::get('urubamba-market', function(){return view('urubamba-market');});
Route::get('biking', function(){return view('biking');});
Route::get('puno-3-days-tour', function(){return view('puno-3-days-tour');});
Route::get('lima-3-days-tour', function(){return view('lima-3-days-tour');});
Route::get('puerto-maldonado', function(){return view('puerto-maldonado');});

Route::get('peru-5-days-4-nights', function(){return view('peru-5-days-4-nights');});
Route::get('peru-6-days-5-nights', function(){return view('peru-6-days-5-nights');});
Route::get('peru-7-days-6-nights', function(){return view('peru-7-days-6-nights');});
Route::get('peru-8-days-7-nights', function(){return view('peru-8-days-7-nights');});
Route::get('peru-9-days-8-nights', function(){return view('peru-9-days-8-nights');});
Route::get('peru-10-days-9-nights', function(){return view('peru-10-days-9-nights');});
Route::get('peru-12-days', function(){return view('peru-12-days');});
Route::get('peru-15-days', function(){return view('peru-15-days');});
Route::get('peru-18-days', function(){return view('peru-18-days');});
Route::get('peru-20-days-tour', function(){return view('peru-20-days-tour');});
Route::get('peru-22-days', function(){return view('peru-22-days');});

//Rutas Español
Route::get('index-español', function(){    return view('index-español');});
Route::get('experiencias', function(){    return view('experiencias');});
Route::get('alrededor-de-peru', function(){ return view('alrededor-de-peru');});
Route::get('caminatas-peru', function(){ return view('caminatas-peru');});
Route::get('blog-español', function(){ return view('blog-español');});
Route::get('preguntas-frecuentes', function(){ return view('preguntas-frecuentes');});
Route::get('nosotros', function(){ return view('nosotros');});
Route::get('testimonios', function(){ return view('testimonios');});


Route::get('machupicchu-acelerado', function(){ return view('machupicchu-acelerado');});
Route::get('cusco-4-dias-3-noches', function(){ return view('cusco-4-dias-3-noches');});
Route::get('cusco-5-dias-4-noches', function(){ return view('cusco-5-dias-4-noches');});
Route::get('cusco-6-dias-5-noches', function(){ return view('cusco-6-dias-5-noches');});
Route::get('hiram-bingham', function(){ return view('hiram-bingham');});
Route::get('mercado-urubamba', function(){ return view('mercado-urubamba');});
Route::get('ciclismo', function(){ return view('ciclismo');});
Route::get('valle-sagrado', function(){ return view('puerto-maldonado-castellano');});
Route::get('puerto-maldonado-castellano', function(){ return view('valle-sagrado');});
Route::get('puno-3-dias-tour', function(){ return view('puno-3-dias-tour');});
Route::get('lima-tour-3-dias', function(){ return view('lima-tour-3-dias');});
Route::get('huacachina-ica-peru-castellano', function(){ return view('huacachina-ica-peru-castellano');});

Route::get('peru-5-dias-4-noches', function(){ return view('peru-5-dias-4-noches');});
Route::get('peru-6-dias-5-noches', function(){ return view('peru-6-dias-5-noches');});
Route::get('peru-7-dias-6-noches', function(){ return view('peru-7-dias-6-noches');});
Route::get('peru-8-dias-7-noches', function(){ return view('peru-8-dias-7-noches');});
Route::get('peru-9-dias-8-noches', function(){ return view('peru-9-dias-8-noches');});
Route::get('peru-10-dias-9-noches', function(){ return view('peru-10-dias-9-noches');});
Route::get('peru-12-dias', function(){ return view('peru-12-dias');});
Route::get('peru-15-dias', function(){ return view('peru-15-dias');});
Route::get('peru-18-dias', function(){ return view('peru-18-dias');});
Route::get('peru-20-dias-tour', function(){ return view('peru-20-dias-tour');});
Route::get('peru-22-dias-tour', function(){ return view('peru-22-dias-tour');});



//blog
Route::get('blog/pachamama-ceremony', function(){ return view('blog/pachamama-ceremony');});
Route::get('blog/virgin-of-carmen', function(){ return view('blog/virgin-of-carmen');});
Route::get('blog/picnic', function(){ return view('blog/picnic');});
Route::get('blog/nazca-lines-peru', function(){ return view('blog/nazca-lines-peru');});
Route::get('blog/corpus-christi-cusco', function(){ return view('blog/corpus-christi-cusco');});
Route::get('blog/pacaya-samiria', function(){ return view('blog/pacaya-samiria');});
Route::get('blog/places-to-visit-in-cusco', function(){ return view('blog/places-to-visit-in-cusco');});
Route::get('blog/inti-raymi', function(){ return view('blog/inti-raymi');});
Route::get('blog/Ausangate-mountain-snowy', function(){ return view('blog/Ausangate-mountain-snowy');});

//Blog español
Route::get('blog/dia-de-la-pachamama', function(){ return view('blog/dia-de-la-pachamama');});
Route::get('blog/virgen-del-carmen', function(){ return view('blog/virgen-del-carmen');});
Route::get('blog/picnic-español', function(){ return view('blog/picnic-español');});
Route::get('blog/lineas-de-nazca', function(){ return view('blog/lineas-de-nazca');});
Route::get('blog/corpus-christi-cusco-español', function(){ return view('blog/corpus-christi-cusco-español');});
Route::get('blog/pacaya-samiria-español', function(){ return view('blog/pacaya-samiria-español');});
Route::get('blog/lugares-que-visitar-en-cusco', function(){ return view('blog/lugares-que-visitar-en-cusco');});
Route::get('blog/inti-raymi-español', function(){ return view('blog/inti-raymi-español');});
Route::get('blog/apu-ausangate-nevado', function(){ return view('blog/apu-ausangate-nevado');});
