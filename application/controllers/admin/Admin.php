<?php
Class Admin extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');

    }

    /*
     * Lay danh sach admin
     */
    function index()
    {
        //$this->load->model('admin_model');

        $input = array();
        $list = $this->admin_model->get_list($input);
        $this->data['list']=$list;

        $total=$this->admin_model->get_total();
        $this->data['total']=$total;

        $this->data['temp'] = 'admin/admin/index';
        $this->load->view('admin/main', $this->data);
    }

    /*
     * theem moi quan tri vien
     */
    function add()
    {
//        $this->data['temp'] = 'admin/admin/add';
//        $this->load->view('admin/main', $this->data);
    }

}