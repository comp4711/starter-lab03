<?php

/*
 * Contains the controller to route the 5th link of the header that contains bingo in
 *  the url to demonstrate the use of Regular expression.
 *  
 *
 * @author Nadia
 */
class Bingo extends Application{
    
    /*
     * Constuctor to make the Bingo contoller.
     */
     function __construct() {
        parent::__construct();
    }
    
    /*
     * method routed to from localhost/wise/bingo
     */
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(5);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    /*
     * method routed to from localhost/comp4711/wisdom
     */
        function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->last();
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
    
}
