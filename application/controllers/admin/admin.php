<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->home();
    }

    public function home() {
        $this->template->load('admin/application', 'admin/home.php');
    }
}
