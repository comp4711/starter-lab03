<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone'; //Load the justone view
        $record = $this->quotes->get(4); //Display the 4th quote
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}