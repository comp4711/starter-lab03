<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Welcome extends Application {
    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        //The default function of this controller that uses the last() method from the Quotes model to determine which quote to display
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->last();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

}
