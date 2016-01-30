<?php
/**
 * Created by PhpStorm.
 * User: Amanda X
 * Date: 2016-01-27
 * Time: 11:19 AM
 */

class First extends Application{

    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $quote = $this->quotes->first();

        /*$this->data['pagebody'] = 'justone';

        $this->data['who'] = $quote['who'];
        $this->data['mug'] = $quote['mug'];
        $this->data['what'] = $quote['what'];

        $this->render();
        */
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $quote);
        $this->render();

    }
}