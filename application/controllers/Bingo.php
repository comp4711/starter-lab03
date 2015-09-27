<?php

/**
 * This controller provides the functionality to display a quote in the 
 * Quotes database.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application 
{

    function __construct() 
    {
        parent::__construct();
    }

    /**
     * The default method for Bingo.
     * The link "dunno" is remapped here.
     */
    function index() 
    {
        $this->data['pagebody'] = 'justone';    // this is the view of just one quote
        // gets the first author in the list, to pass on to our view
        $record = $this->quotes->get('5');
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    /**
     * The link "comp4711/wisdom" is remapped here.
     */
    function wisdom() 
    {
        $this->data['pagebody'] = 'justone';    // this is the view of just one quote
        // gets the first author in the list, to pass on to our view
        $record = $this->quotes->get('6');
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */