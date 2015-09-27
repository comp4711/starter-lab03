<?php

/**
 * This controller provides the functionality to display the last quote in the 
 * Quotes database.
 * 
 * controllers/Last.php
 *
 * ------------------------------------------------------------------------
 */
class Last extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * The default method for Last
     */
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view of just one quote
        // gets the last author in the list, to pass on to our view
        $record = $this->quotes->last();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

}

/* End of file Last.php */
/* Location: application/controllers/last/Last.php */