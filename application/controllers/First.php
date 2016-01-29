<?php

/* 
 * application/controllers/First.php
 */

class First extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    
    // function for qoute for third link
    function zzz()
    {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}
