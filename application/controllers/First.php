<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class First extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone'; //This will load the justone view
        $record = $this->quotes->first(); //Uses the first() method from the Quotes model to determine which quote to display
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    function zzz() {
        //Loads the justone view with the 1st quote
        $this->data['pagebody'] = 'justone'; 
        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    function gimme($param){
        //Loads the justone view with the quote number passed via the $param
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get($param);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}