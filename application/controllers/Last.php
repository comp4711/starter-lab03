<?php

/**
 * A quote controller.
 * 
 * controllers/Last.php
 *
 * ------------------------------------------------------------------------
 */
class Last extends Application {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown

		$author = $this->quotes->last();

		$this->data['mug'] = $author['mug'];
		$this->data['who'] = $author['who'];
		$this->data['what'] = $author['what'];

		$this->render();
	}
}



/* End of file Last.php */
/* Location: application/controllers/Last.php */
