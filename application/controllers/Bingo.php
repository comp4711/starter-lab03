<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get(5);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    function Wisdom() {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get(6);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}