<?php

/*
 * Contains the controller to route the first link or the navbar 
 * (through the index method), the sleep link throught the method zzz, and 
 * a gimme method that takes in a paramiter.
 *
 * @author Nadia
 */
class First extends Application{
    /*
    * First controller constructor. 
    */
    function __construct() {
        parent::__construct();
    }
    
    /*
     * called when the URL is localhost/first
     */
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    /*
     *
     * called when the URL is localhost/sleel (due to routing)
     */ 

        function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(1);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    /*
     *
     * called when the URL is localhost/show/3 (due to routing).  
     * show is routed to gimme and 3 is passed in as a parameter
     */ 

    function gimme($num) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get($num);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }

}
