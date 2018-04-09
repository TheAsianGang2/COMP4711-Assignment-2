<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2016, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller
{

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */

	function __construct()
	{
		parent::__construct();

		//  Set basic view parameters
		$this->data = array ();
		$this->data['pagetitle'] = 'CodeIgniter3.1 Starter 4';
		$this->data['ci_version'] = (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>'.CI_VERSION.'</strong>' : '';
		$this->data['userrole'] = $this->session->userdata('userrole') != null ? $this->session->userdata('userrole') : 'Guest';
    }

	/**
	 * Render this page
	 */
	function render($template = 'template')
	{
        $this->data['header'] = $this->parser->parse('_menubar', $this->config->item('menu_config'), true);
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        //Header template parser includes custom menu config for navigation
        //$this->data['header'] = $this->parser->parse('header', $this->config->item('menu_config'), true);
        $this->parser->parse('template', $this->data);
	}

}
