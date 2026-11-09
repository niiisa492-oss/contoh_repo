<?php
class Dashboard extends CI_Controller
{
    public function Index()
    {
        $this->load->view('admin/dashboard.php');
    }
}