<?php

/**
 * A quote controller.
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

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown

		$source = $this->quotes->all();
        	$author = $source[4];

		$this->data['mug'] = $author['mug'];
		$this->data['who'] = $author['who'];
		$this->data['what'] = $author['what'];

		$this->render();
	}
}



/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */
