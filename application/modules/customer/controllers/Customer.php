<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        verify_session('customer');

        $this->load->model(array(
            'payment_model' => 'payment',
            'order_model' => 'order',
            'review_model' => 'review',
        ));
    }

    public function index()
    {
        $params['title'] = get_settings('store_tagline');

        $home['total_order'] = $this->order->count_all_orders();
        $home['total_payment'] = $this->payment->count_all_payments();
        $home['total_process_order'] = $this->order->count_process_order();
        $home['total_review'] = $this->review->count_all_reviews();

        $home['flash'] = $this->session->flashdata('store_flash');

        $this->load->view('header', $params);
        $this->load->view('home', $home);
        $this->load->view('footer');
    }

    public function view()
    {
        $params['title'] = get_settings('store_tagline');

        $home['course'] = $this->order->get_all_courses();
        $home['color'] = [
            "bg-primary", "bg-secondary", "bg-success", "bg-danger", "bg-warning", "bg-info"
        ];
        $home['flash'] = $this->session->flashdata('store_flash');

        $this->load->view('header', $params);
        $this->load->view('courses/view', $home);
        $this->load->view('footer');
    }

    public function course($id)
    {
        $params['title'] = get_settings('store_tagline');
        $home['course'] = $this->order->get_course($id);
        $home['nama'] = $this->order->get_nama_course($id);
        $home['id'] = get_current_user_id();
        $activation= $this->db->where(array('id_kursus' => $id, 'id_customer'=> $home['id']))->get('activation')->result_array();
        if(!empty($activation[0]['time'])){
            $home['time'] = $activation[0]['time'];
        } else {
            $home['time'] = 0;
        }

        $home['color'] = ["bg-primary", "bg-secondary", "bg-success", "bg-danger", "bg-warning", "bg-info"];
        $home['flash'] = $this->session->flashdata('store_flash');

        $this->load->view('header', $params);
        $this->load->view('courses/course', $home);
        $this->load->view('footer');
    }

    public function watch($link)
    {
        $params['title'] = get_settings('store_tagline');
        $home['flash'] = $this->session->flashdata('store_flash');
        $home['link'] = $link;
        $this->load->view('header', $params);
        $this->load->view('courses/watch', $home);
        $this->load->view('footer');
    }
}
