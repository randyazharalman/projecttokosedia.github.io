<?php 

  class Products_model {
    private $table = 'products';
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getAllData()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function searchData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM products WHERE name_product LIKE :keyword OR brand LIKE :keyword OR note LIKE :keyword OR category LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();

    }
    public function getAllLaptop()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:laptop');
        $this->db->bind('laptop', 'Laptop');
        return $this->db->resultSet();
    }
    public function getAllPhone()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:phone');
        $this->db->bind('phone', 'Phone');
        return $this->db->resultSet();
    }
    public function getAllMonitor()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:monitor');
        $this->db->bind('monitor', 'Monitor');
        return $this->db->resultSet();
    }
    public function getAllSmartwatch()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:smartwatch');
        $this->db->bind('smartwatch', 'Smartwatch');
        return $this->db->resultSet();
    }
    public function getAllMouse()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:mouse');
        $this->db->bind('mouse', 'Mouse');
        return $this->db->resultSet();
    }
    public function getAllKeyboard()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:keyboard');
        $this->db->bind('keyboard', 'Keyboard');
        return $this->db->resultSet();
    }
    public function getAllEarphone()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:earphone');
        $this->db->bind('earphone', 'Earphone');
        return $this->db->resultSet();
    }
    public function getAllIpad()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:ipad');
        $this->db->bind('ipad', 'Ipad');
        return $this->db->resultSet();
    }
    public function getAllPrinter()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:printer');
        $this->db->bind('printer', 'Printer');
        return $this->db->resultSet();
    }
    public function getAllCamera()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:Camera');
        $this->db->bind('Camera', 'Camera');
        return $this->db->resultSet();
    }
    public function getAllNewProduct()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE note=:New');
        $this->db->bind('New', 'New');
        return $this->db->resultSet();
    }
    public function getTotalData()
    {
      $this->db->query("SELECT COUNT(username) as total FROM user");
      return $this->db->single();
    }

    public function getDataById($product_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE product_id=:product_id');
        $this->db->bind('product_id', $product_id);
        return $this->db->single();
    }
    public function getAllApple()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:apple');
        $this->db->bind('apple', 'Apple');
        return $this->db->resultSet();
    }
    public function getAllAsus()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Asus');
        $this->db->bind('Asus', 'Asus');
        return $this->db->resultSet();
    }
    public function getAllLenovo()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Lenovo');
        $this->db->bind('Lenovo', 'Lenovo');
        return $this->db->resultSet();
    }
    public function getAllAcer()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Acer');
        $this->db->bind('Acer', 'Acer');
        return $this->db->resultSet();
    }
    public function getAllXiaomi()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Xiaomi');
        $this->db->bind('Xiaomi', 'Xiaomi');
        return $this->db->resultSet();
    }
    public function getAllSamsung()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Samsung');
        $this->db->bind('Samsung', 'Samsung');
        return $this->db->resultSet();
    }
    public function getAllMsi()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Msi');
        $this->db->bind('Msi', 'Msi');
        return $this->db->resultSet();
    }
    public function getAllLogitech()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Logitech');
        $this->db->bind('Logitech', 'Logitech');
        return $this->db->resultSet();
    }
    public function getAllCorsair()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Corsair');
        $this->db->bind('Corsair', 'Corsair');
        return $this->db->resultSet();
    }
    public function getAllEpson()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Epson');
        $this->db->bind('Epson', 'Epson');
        return $this->db->resultSet();
    }
    public function getAllHuawei()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Huawei');
        $this->db->bind('Huawei', 'Huawei');
        return $this->db->resultSet();
    }
    public function getAllLg()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Lg');
        $this->db->bind('Lg', 'Lg');
        return $this->db->resultSet();
    }
    public function getAllRealme()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Realme');
        $this->db->bind('Realme', 'Realme');
        return $this->db->resultSet();
    }
    public function getAllVivo()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Vivo');
        $this->db->bind('Vivo', 'Vivo');
        return $this->db->resultSet();
    }
    public function getAllOppo()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE brand=:Oppo');
        $this->db->bind('Oppo', 'Oppo');
        return $this->db->resultSet();
    }
    // public function getDataByCategory($category)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category=:category');
    //     $this->db->bind('category', $category);
    //     return $this->db->single();
    // }
  }