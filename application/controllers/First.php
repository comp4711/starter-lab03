<?php

/**
 * This controller provides the functionality to display the first quote in the 
 * Quotes database.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application 
{

    function __construct() 
    {
        parent::__construct();
    }

    /**
     * The default method for First
     */
    function index() 
    {
        $this->data['pagebody'] = 'justone';    // this is the view of just one quote
        // gets the first author in the list, to pass on to our view
        $record = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    /**
     * The method for the link "sleep"
     */
    function zzz()
    {
        $this->data['pagebody'] = 'justone';    // this is the view of just one quote
        // gets the first author in the list, to pass on to our view
        $record = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    /**
     * The method for the link "show/3"
     */
    function gimme($which)
    {
        $this->data['pagebody'] = 'justone';    // this is the view of just one quote
        // gets an author in the list, to pass on to our view
        $record = $this->quotes->get($which);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}

/* End of file First.php */
/* Location: application/controllers/First.php */