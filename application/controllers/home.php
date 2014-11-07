<?php
/**
 * Created by PhpStorm.
 * User: liujian
 * Date: 14-11-6
 * Time: 21:12
 */

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->getView("home");
    }

    function getView($page) {
        $data['title'] = ucfirst($page); // 将title中的第一个字符大写
        $this->load->view('common/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('common/footer', $data);
    }

}