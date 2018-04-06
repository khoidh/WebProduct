<?php
Class My_Controller extends CI_Controller
{
    //Bien gui du lieu sang ben view
    public $data=array();
    function __construct()
    {
        //Ke thua tu CI_Controller
        parent::__construct();

        //Lay ra cac phan doan tren url
        $controller=$this->uri->segment(1);
        switch ($controller)
        {
            case 'admin':
                {
                    //xu ly du lieu khi truy cap vao home
                    $this->load->helper('admin');
                    $this->_check_login();
                    break;
                }
            default:
                {
                    //xu ly du lieu o trang ngoai
                }
        }
    }

    /*
     * kiem tra trang thai dang nhap cua Admin
     */
    private function _check_login()
    {

    }
}