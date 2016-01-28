<?php

/**
 * A quote controller.
 * 
 * controllers/Sleep.php
 *
 * ------------------------------------------------------------------------
 */
class Sleep extends Application {

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

		$source = $this->quotes->all();
		$author = $source[0];

		$this->data['mug'] = $author['mug'];
		$this->data['who'] = $author['who'];
		$this->data['what'] = $author['what'];

		$this->render();
	}

}

/* End of file Sleep.php */
/* Location: application/controllers/Sleep.php */
