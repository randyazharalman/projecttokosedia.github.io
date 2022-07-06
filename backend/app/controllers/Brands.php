<?php 

class Brands extends Controller{
  public function index(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = 'Apple';
    $data['productsData'] = $this->model('Products_model')->getAllApple();
    $this->view('templates/header', $data);
    $this->view('brands/index', $data);
    $this->view('templates/footer', $data);
  }
  public function aboutUs(){
    $data['title'] = 'About Us';

    $this->view('templates/header', $data);
    $this->view('home/about-us', $data);
    $this->view('templates/footer', $data);
  }
  public function asus(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = 'Apple';
    $data['productsData'] = $this->model('Products_model')->getAllAsus();
    $this->view('templates/header', $data);
    $this->view('brands/index', $data);
    $this->view('templates/footer', $data);
  }
  public function lenovo(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = 'Lenovo';
    $data['productsData'] = $this->model('Products_model')->getAllLenovo();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function msi(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = 'Msi';
    $data['productsData'] = $this->model('Products_model')->getAllMsi();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function acer(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('acer');
    $data['productsData'] = $this->model('Products_model')->getAllAcer();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function xiaomi(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('xiaomi');
    $data['productsData'] = $this->model('Products_model')->getAllXiaomi();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function samsung(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('samsung');
    $data['productsData'] = $this->model('Products_model')->getAllSamsung();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function logitech(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('logitech');
    $data['productsData'] = $this->model('Products_model')->getAllLogitech();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function corsair(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('corsair');
    $data['productsData'] = $this->model('Products_model')->getAllCorsair();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function epson(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('epson');
    $data['productsData'] = $this->model('Products_model')->getAllEpson();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function huawei(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('huawei');
    $data['productsData'] = $this->model('Products_model')->getAllHuawei();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function lg(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('lg');
    $data['productsData'] = $this->model('Products_model')->getAllLg();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function realme(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('realme');
    $data['productsData'] = $this->model('Products_model')->getAllRealme();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function vivo(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('vivo');
    $data['productsData'] = $this->model('Products_model')->getAllVivo();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
  public function oppo(){
    $data['title'] = 'Tokosedia | Brands';
    $data['brand'] = ucwords('oppo');
    $data['productsData'] = $this->model('Products_model')->getAllOppo();
    $this->view('templates/header', $data);
    $this->view('brands/lenovo/index', $data);
    $this->view('templates/footer', $data);
  }
}



?>