<?php

class Guess extends Application 
{	
	
    function __construct() 
    {
        parent::__construct();
    }   
    
    function index()
    {
            $this->data['pagebody'] = 'justone';

            $source = $this->quotes->get(4);

            $this->data = array_merge($this->data, $source);

            $this->render();
    }
}