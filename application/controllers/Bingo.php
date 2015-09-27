<?php
/* The Bingo controller */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // gets the 5th quote
        $record = $this->quotes->get(5);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // gets the 6th quote
        $record = $this->quotes->get(6);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

}