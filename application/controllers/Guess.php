<?php

/**
 * This controller provides the functionality to display a quote in the 
 * Quotes database.
 * 
 * controllers/Guess.php
 *
 * ------------------------------------------------------------------------
 */
class Guess extends Application 
{

    function __construct() 
    {
        parent::__construct();
    }

    /**
     * The default method for Guess.
     * The link "dunno" is remapped here.
     */
    function index() 
    {
        $this->data['pagebody'] = 'justone';    // this is the view of just one quote
        // gets the first author in the list, to pass on to our view
        $record = $this->quotes->get('4');
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */