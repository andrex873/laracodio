<?php
namespace Laracodio\Validation;

class PersonasIndexFiltroValidator extends Validator{
    
    public $rules = array(
        'name' => array( ),
        'email' => array( 'required', 'email', 'min:6', 'max:200' ),
        'phone' => array( 'required', 'numeric', 'digits_between:8,25' ),
        'pin_code' => array( 'required', 'alpha_num', 'max:25' ),
    );
    
}