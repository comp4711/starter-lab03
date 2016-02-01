<?php

/**
 * A quote controller.
 * 
 * controllers/Wise.php
 *
 * ------------------------------------------------------------------------
 */
class Wise extends Application {

	function __construct()
	{
		parent::__construct();
	}

	function bingo()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown

		$source = $this->quotes->all();
        	$author = $source[5];

		$this->data['mug'] = $author['mug'];
		$this->data['who'] = $author['who'];
		$this->data['what'] = $author['what'];

		$this->render();
	}
}



/* End of file Wise.php */
/* Location: application/controllers/Wise.php */
