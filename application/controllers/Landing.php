<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Halaman landing";
        $this->load->view("layout/header");
        $this->load->view("landing/vw_landing", $data);
        $this->load->view("layout/footer");

    }
}