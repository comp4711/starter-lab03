<?php

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 29/01/2016
 * Time: 8:49 PM
 */

class Last extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //
    function index()
    {
        $quote = $this->quotes->last();
        $this->data = array_merge($this->data, $quote);
        $this->data['pagebody'] = 'justone';

        $this->render();
    }
}