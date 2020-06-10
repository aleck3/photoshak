<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('img_model');
        $this->load->library('form_validation');
    }

    public function column_layout3($page = 'column_layout3')
    {
        if (!file_exists(APPPATH . '/views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['page_title'] = 'Photoshak';
        $data['page_name'] = $page;
        $data['images'] = $this->img_model->get_img();
        $this->load->view('common/header', $data);
        $this->load->view('column_layout3', $data);
        $this->load->view('common/footer');
    }

    public function column_layout4($page = 'column_layout4')
    {
        if (!file_exists(APPPATH . '/views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['page_title'] = 'Photoshak';
        $data['page_name'] = $page;
        $data['images'] = $this->img_model->get_img();
        $this->load->view('common/header', $data);
        $this->load->view('column_layout4', $data);
        $this->load->view('common/footer');
    }

    public function image_upload($page = 'image_upload')
    {
        if (!file_exists(APPPATH . '/views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['page_title'] = 'Photoshak';
        $data['page_name'] = $page;
        $this->load->view('image_upload', $data);
        $this->load->view('common/footer');
    }
    public function do_upload($page = 'image_upload')
    {
        $config['upload_path'] = './bootstrap/img';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 600;
        $config['max_width'] = 600;
        $config['max_height'] = 470;

        $this->load->library('upload', $config);

        //run validation on form input
        if (!$this->upload->do_upload('image')) {
            //validation fails
            $data['page_title'] = 'Photoshak';
            $data['page_name'] = $page;
            $this->load->view('image_upload', $data);
            $this->load->view('common/fail_msg');
            $this->load->view('common/footer');
        } else {
            //validation success
            $data['page_title'] = 'Photoshak';
            $data['page_name'] = $page;
            $this->load->view('image_upload', $data);
            $img_data['img_name'] = $this->upload->data('file_name');
            $img_data['img_desc'] = $this->input->post('img_desc');
            $img_data['img_category'] = $this->input->post('img_category');
            $this->img_model->set_img($img_data);
            $this->load->view('common/success_msg');
            $this->load->view('common/footer');
        }

    }
}
