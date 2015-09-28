<?php
/*
 * Bingo Class
 */
class Bingo extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    //index method loads the 5th id
    public function index()
    {
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(5);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

    //wisdom method loads the 6th id
    public function wisdom()
    {
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(6);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}