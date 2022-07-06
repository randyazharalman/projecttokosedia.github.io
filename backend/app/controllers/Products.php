<?php 

class Products extends Controller{
  public function detail($product_id){
    $data['title'] = 'Product Detail';
    // $data['productsData'] = $this->model('Products_model')->getAllData();
    $data['data'] = $this->model('Products_model')->getDataById($product_id);
    
    $this->view('templates/header', $data);
    $this->view('products/detail', $data);
    $this->view('templates/footer', $data);
    
  }
    public function getmodalbuy(){
      // echo json_encode($this->model('Products_model')->getDataById($_POST['id']));
      $data['data'] = $this->model('Products_model')->getDataById($_POST['id']);
      $this->view('templates/header', $data);
      $this->view('products/phone/index', $data);
      $this->view('templates/footer', $data);
    }
    public function modalbuy($product_id){
      
      $data['data'] = $this->model('Products_model')->getDataById($_POST['id']);
      // $data['productsDataForBuyModal'] = $this->model('Products_model')->getAllData();
      // $data['productsData'] = $this->model('Products_model')->getAllData();
      $this->view('templates/header', $data);
      $this->view('products/phone/index', $data);
      $this->view('templates/footer', $data);
    }
    public function laptop(){
      $data['productsData'] = $this->model('Products_model')->getAllLaptop();
      $data['title'] = 'Product || Laptop';
      // $data['data'] = $this->model('Products_model')->getDataById($product_id);
    $data['product'] = 'Laptop';
    $data['danger'] = 'danger';
    $data['note'] = 'Out Of Stock';
    $data['price'] = '$23.55';
    $data['dis-price'] = '$25.55';
    $data['name_product'] = 'Macbook Pro M1 2021';
    $data['brand'] = 'Apple';
    $data['category'] = 'Laptop';
    $data['rating'] = '5.0';
    
    $this->view('templates/header', $data);
    $this->view('products/index', $data);
    $this->view('templates/footer', $data);
  }
  public function phone(){
    $data['productsData'] = $this->model('Products_model')->getAllPhone();
    $data['productsDataForBuyModal'] = $this->model('Products_model')->getAllData();
    $data['title'] = 'Product || Phone';
    
    $data['product'] = 'Phone';
    
    $this->view('templates/header', $data);
    $this->view('products/phone/index', $data);
    $this->view('templates/footer', $data);
  }
  public function smartwatch(){
    $data['productsData'] = $this->model('Products_model')->getAllSmartwatch();
    $data['title'] = 'Product || Smartwatch';
    
    $data['product'] = 'Smartwatch';
    
    $this->view('templates/header', $data);
    $this->view('products/smartwatch/index', $data);
    $this->view('templates/footer', $data);
  }
  public function camera(){
    $data['title'] = 'Product || Camera';
    $data['productsData'] = $this->model('Products_model')->getAllCamera();
    
    $data['product'] = 'Camera';
    
    $this->view('templates/header', $data);
    $this->view('products/index', $data);
    $this->view('templates/footer', $data);
  }
  public function monitor(){
    $data['productsData'] = $this->model('Products_model')->getAllMonitor();
    $data['title'] = 'Product || Monitor';
    
    $data['product'] = 'Monitor';
    
    $this->view('templates/header', $data);
    $this->view('products/index', $data);
    $this->view('templates/footer', $data);
  }
  public function mouse(){
    $data['productsData'] = $this->model('Products_model')->getAllMouse();
    $data['title'] = 'Product || Mouse';
    
    $data['product'] = 'Mouse';
    
    $this->view('templates/header', $data);
    $this->view('products/mouse/index', $data);
    $this->view('templates/footer', $data);
  }
  public function keyboard(){
    $data['productsData'] = $this->model('Products_model')->getAllKeyboard();
    $data['title'] = 'Product || Keyboard';
    
    $data['product'] = 'Keyboard';
    
    $this->view('templates/header', $data);
    $this->view('products/index', $data);
    $this->view('templates/footer', $data);
  }
  public function ipad(){
    $data['productsData'] = $this->model('Products_model')->getAllIpad();
    $data['title'] = 'Product || Tablet';
    
    $data['product'] = 'Tablet';
    
    $this->view('templates/header', $data);
    $this->view('products/tablet/index', $data);
    $this->view('templates/footer', $data);
  }
  public function printer(){
    $data['productsData'] = $this->model('Products_model')->getAllPrinter();
    $data['title'] = 'Product || Printer';
    
    $data['product'] = 'Printer';
    
    $this->view('templates/header', $data);
    $this->view('products/index', $data);
    $this->view('templates/footer', $data);
  }
  public function earphone(){
    $data['productsData'] = $this->model('Products_model')->getAllEarphone();
    $data['title'] = 'Product || Earphone';
    
    $data['product'] = 'Earphone';
    
    $this->view('templates/header', $data);
    $this->view('products/earphone/index', $data);
    $this->view('templates/footer', $data);
  }
  public function allproduct(){
    $data['productsData'] = $this->model('Products_model')->getAllData();
    $data['title'] = 'Product | All Product';
    
    $data['product'] = 'All Products';
    
    $this->view('templates/header', $data);
    $this->view('products/allproduct/index', $data);
    $this->view('templates/footer', $data);
  }
  public function newproduct(){
    $data['productsData'] = $this->model('Products_model')->getAllNewProduct();
    $data['title'] = 'Product | New product';
    
    $data['product'] = 'New Products';
    
    $this->view('templates/header', $data);
    $this->view('products/newproduct/index', $data);
    $this->view('templates/footer', $data);
  }
  
}



?>