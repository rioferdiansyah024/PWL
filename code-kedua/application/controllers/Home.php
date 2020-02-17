<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index($name='')
    {
        // echo "Selamat Datang di Halaman Home";
        $data['title'] = 'Home';
        $data['name']=$name;
        $this->load->view('template/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/header');
    }

}

/* End of file Controllername.php */

?>