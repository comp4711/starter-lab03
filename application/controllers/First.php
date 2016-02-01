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
		return $this->gimme(1);
	}
    
	function zzz()
	{
		return $this->gimme(1);
	}

	function gimme($id)
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown

		$source = $this->quotes->all();
        	$author = $source[$id - 1];

		$this->data['mug'] = $author['mug'];
		$this->data['who'] = $author['who'];
		$this->data['what'] = $author['what'];

		$this->render();
	}
}



/* End of file First.php */
/* Location: application/controllers/First.php */
