<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome
 *
 * @author Lawrence
 */
class Welcome extends Application {
    
    function index() 
    {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->last();
        $this->data = array_merge($this->data, $source);
        $this->render();
    }
    
}
