<?php

class AjaxController extends BaseController{
    
    
    public function index(){
        return View::make('ajax.index');
    }
    public function personas(){
        $personas = [
            ['nombre' => 'Juan1 Lopez1', 'direccion' => 'Avenida Siempre Viva 742, Springfield', 'telefono' => '311 22 33', 'correo' => 'uncorreo1@dominio.com'],
            ['nombre' => 'Juan2 Lopez2', 'direccion' => 'Avenida Siempre Viva 742, Springfield', 'telefono' => '311 22 33', 'correo' => 'uncorreo2@dominio.com'],
            ['nombre' => 'Juan3 Lopez3', 'direccion' => 'Avenida Siempre Viva 742, Springfield', 'telefono' => '311 22 33', 'correo' => 'uncorreo3@dominio.com'],
            ['nombre' => 'Juan4 Lopez4', 'direccion' => 'Avenida Siempre Viva 742, Springfield', 'telefono' => '311 22 33', 'correo' => 'uncorreo4@dominio.com']
        ];
        
        $respuesta = [];
        $respuesta['status'] = 'S';
        $respuesta['data'] = $personas;
        $respuesta['isAjax'] = Request::ajax();
        $respuesta['isPost'] = Request::post();
        $respuesta['isGet'] = Request::get();
        return Response::json($respuesta);
    }
}