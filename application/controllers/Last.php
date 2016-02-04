<?php
class Last extends Application {
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown

        $source = $this->quotes->get($this->quotes->last());
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->render();
    }
}