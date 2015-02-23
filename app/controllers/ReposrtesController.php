<?php

class ReposrtesController extends BaseController {
    
    public function index(){
        
        
        return View::make('reportes.index');
    }
    
    public function reporte1() {
        
        //PDF::setOrientation('Landscape');
        //PDF::setPageSize('letter');
        //PDF::setOptions(' --margin-left  0 --margin-right 0 --margin-top 0 ');
        //return PDF::getOptions();
        return "Hola reportes";//PDF::html('reportes.laboral');

    }
}