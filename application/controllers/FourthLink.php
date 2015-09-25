<?php

/*
 * Contains the controller to route the fourth link that contains guess in the url. 
 *
 * @author Nadia
 */
class FourthLink extends Application{
    /*
     * Constractor of the guess Controller
     */
     function __construct() {
        parent::__construct();
    }
    
    /*
     * Routed from loclhost/dunno
     */
        function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(4);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }

}
