<?php

use Laracodio\Validation\PersonasIndexFiltroValidator as PerValidator;

class HomeController extends BaseController {

    private $cache;
    
    private $pVal;
    
    public function __construct(PerValidator $validator){
        $this->pVal = $validator;
    }
    
	public function index()	{
        /*
        //return dd($this->cache);
        $data = array(
            'name' => "juana carolina morales",
            'email' => "Uncorreo dominio.com",
            'phone' => 15242369,
            'pin_code' => "pincode",
        );
        //return \Laracodio\Cache\CacheKeys::FORM_TIPO_IDENTIFICACION;
		
        $to = "";
        try {
            // Enviar el correo con laravel y mailgun
            Mail::send('emails.welcome', ['nombre'=>"Andres Pepe"], function($correo) use($to){
                $correo->to($to)->subject("Otro saludo mejor");
            });
            $mensaje = "Su mensaje fue enviado con exito....";
            
            
        } catch(Exception $ex){
            $mensaje = "Hay un error en el coreo: ";
        }
        
        
        //return dd($this->pVal->validate($data));
        
        return View::make('home.index', compact('mensaje'));
		//return dd($this->uVal);
		*/
        return View::make('home.index');
	}
    
    
    public function main(){
        return View::make('home.main');
    }
    
    
    
    

}
