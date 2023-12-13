<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    public function index()
    {
        // Load the view for the article page
        $this->load->view('article/index');
    }
}