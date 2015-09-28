<?php
/**
 * Guess Class
 */
class Guess extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    //index method loads the 4th id
    public function index()
    {
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(4);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}