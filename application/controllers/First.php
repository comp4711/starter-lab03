<?php
/* The first link on the nav bar */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the first quote
        $record = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

}