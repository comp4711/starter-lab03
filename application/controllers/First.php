<?php

/**
 * A quote controller.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown

		$author = $this->quotes->first();

		$this->data['mug'] = $author['mug'];
		$this->data['who'] = $author['who'];
		$this->data['what'] = $author['what'];

		$this->render();
	}
    
    function zzz()
    {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown

		$source = $this->quotes->all();
        $author = $source[0];

		$this->data['mug'] = $author['mug'];
		$this->data['who'] = $author['who'];
		$this->data['what'] = $author['what'];

		$this->render();
    }
}



/* End of file First.php */
/* Location: application/controllers/First.php */
