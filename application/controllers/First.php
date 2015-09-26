<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author Lawrence
 */
class First extends Application {
    
    function index() {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->first();
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    function zzz() {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->first();
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    function gimme($test) {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->get($test);
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
}
