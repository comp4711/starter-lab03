<?php

/**
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

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
		$record = $this->quotes->get(5);
		
		// Put into respective data view
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */