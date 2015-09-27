<?php

class Bingo extends Application 
{
    function __construct() 
    {
        parent::__construct();
    }

    function index()
    {
            $this->data['pagebody'] = 'justone';

            $source = $this->quotes->get(5);

            $this->data = array_merge($this->data, $source);

            $this->render();
    }
    function wisdom()
    {
            $this->data['pagebody'] = 'justone';

            $source = $this->quotes->last();

            $this->data = array_merge($this->data, $source);

            $this->render();	
    }
}