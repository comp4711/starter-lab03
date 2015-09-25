<?php

/*
 * Contains the controller to route the last link or the navbar 
 * (through the index method).
 *
 * @author Nadia
 */
class Welcome extends Application{
    /*
    * Welcome controller constructor. 
    */
    function __construct() {
        parent::__construct();
    }
    
    /*
     * called when the URL is localhost/last.  In this case last is the folder
     * where Welcome.php is located
     */
        function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->last();
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
}
