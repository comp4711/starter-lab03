<?php

/**
 * Our quotes model has been autoloaded, because we use it everywhere.
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

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// get first author data, to pass on to our view
		$record = $this->quotes->first();
		
		// Put into respective data view
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}

}

/* End of file First.php */
/* Location: application/controllers/First.php */