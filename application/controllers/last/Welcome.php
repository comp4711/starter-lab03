<?php
/* The last link on the nav bar */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get the last quote
        $record = $this->quotes->last();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

}