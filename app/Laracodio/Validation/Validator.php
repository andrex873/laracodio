<?php
namespace Laracodio\Validation;

use Illuminate\Validation\Factory as IlluminateValidator;
use Laracodio\Exceptions\ValidationException;

class Validator {
    
    /**
     * @var Illuminate\Validation\Factory
     */
    protected $_validator;
    
    public function __construct( IlluminateValidator $validator ) {
        $this->_validator = $validator;
    }
    
    public function validate( array $data, array $rules = array(), array $custom_errors = array() ) {
        if ( empty( $rules ) && !empty( $this->rules ) && is_array( $this->rules ) ) {
            //no rules passed to function, use the default rules defined in sub-class
            $rules = $this->rules;
        } 
        //use Laravel's Validator and validate the data
        $validation = $this->_validator->make( $data, $rules, $custom_errors );
        if ( $validation->fails() ) {
            //validation failed, throw an exception
            throw new ValidationException( $validation->messages() );
        }
        //all good and shiny
        return true;
    }
    
    public function getRulesKey(){
        $rules = [];
        if(is_array($this->rules)){
            $rules = $this->rules;
        }
        return array_keys($rules);
    }
    
}