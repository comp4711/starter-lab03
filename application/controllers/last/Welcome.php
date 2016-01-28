<?php

/**
 * Our Last controller which gives access to the last quote
 *
 * controllers/last/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        //Called the last function from the Quotes model
        $record = $this->quotes->last();
        $this->data['pagebody'] = 'justone';

        $this->data = array_merge($this->data, $record);

        $this->render();

    }

}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */