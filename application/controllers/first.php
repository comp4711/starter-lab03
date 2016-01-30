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

        //Retrieve first row of info in quotes
        $quote = $this->quotes->first();

        /*
        $this->data['pagebody'] = 'justone';

        $this->data['who'] = $quote['who'];
        $this->data['mug'] = $quote['mug'];
        $this->data['what'] = $quote['what'];

        $this->render();
        */

        // Calls View justone.php
        $this->data['pagebody'] = 'justone';
        // Merge data inside quote array into data array.
        $this->data = array_merge($this->data, $quote);
        //render the page
        $this->render();

    }
}