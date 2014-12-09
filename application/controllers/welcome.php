<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

 public function index()
 {
  $this->load->view('products');
 }

  public function product_desc()
 {
  $this->load->view('product_desc');
 }

  public function cart()
 {
  $this->load->view('cart');
 }

   public function pay_success()
 {
  $this->load->view('pay_success');
 }

  public function orders()
 {
  $this->load->view('orders');
 }

   public function order_id()
 {
  $this->load->view('order_id');
 }

   public function search()
 {
  $this->load->view('search');
 }

  public function admin()
 {
  $this->load->view('admin');
 }

   public function add_product_page()
 {
  $this->load->view('add_product_page');
 }

    public function product_delete()
 {
  $this->load->view('product_delete');
 }






 


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */