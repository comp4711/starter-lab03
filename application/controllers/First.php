<?php
/**
 * First class
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //index method loads the 1st id
    public function index()
    {
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

    //zzz method loads the 1st id
    public function zzz()
    {
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

    //gimme method loads the id passed into the method
    public function gimme($number)
    {
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get($number);
        $this->data = array_merge($this->data, $record);
        $this->render();

    }
}