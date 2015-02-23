<?php

class SnappyController extends BaseController {
    
    public function index(){
        return View::make('snappy.index');
    }
    
    public function reporte1() {
        $pdf = App::make('snappy.pdf.wrapper');
        $pdf->loadView('snappy.laboral', []);
        @unlink('file.pdf');
        $pdf->save('file.pdf');
        /*
        $pdf->save('temp/archivoGenerado.pdf');
        return "Se genero el archivo"
        */
        //return $pdf->output(); // Retorna el pdf como string
        //return $pdf->stream(); // Lo muestra por pantalla del navegador
        //return $pdf->download('laboral.pdf'); // fuerza la descarga del archivo

        return View::make('snappy.reporte1');
    }
}