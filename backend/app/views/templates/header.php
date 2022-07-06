<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= BASEURL; ?>css/style.css">
  <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <title><?= $data['title']; ?></title>
</head>

<body>

  <!-- NAVBAR  -->
  <header class="fixed-top">
    <div class="px-3 py-2 bg-light text-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="<?= BASEURL; ?>home" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-dark text-decoration-none brand">
            <h3 class="fw-bold label">Tokosedia</h3>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small ">
            <li>
              <a href="<?= BASEURL; ?>home" class="nav-link text-secondary me-2">
                Home
              </a>
            </li>
          </ul>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small ">
            <li>
              <div class="dropdown-center">
                <a href="" class="nav-link text-secondary dropdown-toggle me-2" type="button" id="products" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                <ul class="dropdown-menu dropdown-menu-center mt-1 drop_item " aria-labelledby="dropdownCenterBtn">
                  <div class="container justify-content-between">
                    <footer class="py-2">
                      <div class="row justify-content-between px-3">
                        <div class="col-6 col-md-3 mb-3">
                          <ul class="nav flex-column dropitem">
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/laptop" class="nav-link p-0">Laptop</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/camera" class="nav-link p-0">Camera</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/keyboard" class="nav-link p-0">Keyboard</a></li>
                            <li class="nav-item mb-2 "><a href="<?= BASEURL; ?>products/smartwatch" class="nav-link d-flex p-0">SmartWatch</a></li>
                          </ul>
                        </div>

                        <div class="col-6 col-md-3 mb-3 ">
                          <ul class="nav flex-column dropitem">
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/phone" class="nav-link p-0">Phone</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/monitor" class="nav-link p-0">Monitor</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/ipad" class="nav-link p-0">Tablet</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/newproduct" class="nav-link p-0">NewProduct</a></li>
                          </ul>
                        </div>

                        <div class="col-6 col-md-3 mb-3">
                          <ul class="nav flex-column dropitem">
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/earphone" class="nav-link p-0">Earphone</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/mouse" class="nav-link p-0">Mouse</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/printer" class="nav-link p-0">Printer</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>products/allproduct" class="nav-link p-0">AllProduct</a></li>
                          </ul>
                        </div>
                      </div>
                    </footer>
                  </div>
                </ul>
              </div>
            </li>
          </ul>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small ">
            <li>
              <div class="dropdown-center">
                <a href="" class="nav-link text-secondary dropdown-toggle" type="button" id="brands" data-bs-toggle="dropdown" aria-expanded="false">
                  Brands
                </a>
                <ul class="dropdown-menu drop_item " aria-labelledby="dropdownCenterBtn">
                  <div class="container justify-content-between">
                    <footer class="py-2">
                      <div class="row justify-content-between px-3">
                        <div class="col-6 col-md-3 mb-3">
                          <ul class="nav flex-column dropitem ">
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/" class="nav-link p-0">Apple</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/lenovo" class="nav-link p-0">Lenovo</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/msi" class="nav-link p-0">Msi</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/epson" class="nav-link p-0">Epson</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/realme" class="nav-link p-0">Realme</a></li>
                          </ul>
                        </div>

                        <div class="col-6 col-md-3 mb-3">

                          <ul class="nav flex-column dropitem">
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/asus" class="nav-link p-0">Asus</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/xiaomi" class="nav-link p-0">Xiaomi</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/logitech" class="nav-link p-0">Logitech</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/huawei" class="nav-link p-0">Huawei</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/vivo" class="nav-link p-0">Vivo</a></li>
                          </ul>
                        </div>
                        <div class="col-6 col-md-3 mb-3">

                          <ul class="nav flex-column dropitem">
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/acer" class="nav-link p-0">Acer</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/samsung" class="nav-link p-0">Samsung</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/corsair" class="nav-link p-0">Corsair</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/lg" class="nav-link p-0">LG</a></li>
                            <li class="nav-item mb-2"><a href="<?= BASEURL; ?>brands/oppo" class="nav-link p-0">Oppo</a></li>
                          </ul>
                        </div>
                      </div>
                    </footer>
                  </div>

                </ul>
              </div>
            </li>
          </ul>
          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small ">
            <li>
              <div class="dropdown-center">
                <a href="" class="nav-link text-primary dropdown-toggle" type="button" id="brands" data-bs-toggle="dropdown" aria-expanded="false">
                  Sign in
                </a>
                <ul class="dropdown-menu mt-1 drop_item " aria-labelledby="brands">
                  <div class="modal-header p-5 pb-4 border-bottom-0">
                    <!-- <h5 class="modal-title">Modal title</h5> -->
                    <h4 class="fw-bold mb-0 label">Tokosedia</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-5 pt-0">
                    <form class="">
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" autocomplete="off">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating mb-3" autocomplete="off">
                        <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign in</button>
                      <small class="text-muted">Don't have account? <a href="" data-bs-toggle="modal" data-bs-target="#sign-up">Click here!</a> </small>
                      <hr class="my-2">

                    </form>
                  </div>

                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2  mb-3 bg-light">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-sm mb-2 mb-lg-0 me-4-auto" role="search"  action="<?= BASEURL; ?>/home/search" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control"  placeholder="Serch Product" id="keyword" name="keyword" autocomplete="off">
            <button class="btn bg-label" type="submit" id="buttonSearch">Search</button>
          </div>
        </form>
      </div>
    </div>
  </header>
  <!-- END NAVBAR  -->

  <!-- SIGNUP MODAL  -->
  <div class="modal fade" id="sign-up" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <!-- <h5 class="modal-title">Modal title</h5> -->
          <h4 class="fw-bold mb-0 label">Tokosedia</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body p-5 pt-0">
          <form class="">
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" autocomplete="off">
              <label for="floatingInput" autocom>First Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" autocomplete="off">
              <label for="floatingInput">Last Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" autocomplete="off">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" autocomplete="off">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign Up</button>
            <!-- <small class="text-muted">Belum Punya Akun? <a href="#brands" data-bs-toggle="modal"
                data-bs-target="#sign-up">Click here!</a> </small> -->
            <hr class="my-2">

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END SIGNUP MODAL  -->

  <!-- <script>
    var keyword = document.getElementById('keyword')
    console.log(keyword)

    keyword.addEventListener('keyup', function() {
      alert('tes');
      // // buat object ajax
      // var xhr = new XMLHttpRequest();

      // // cek kesiapan ajax
      // xhr.onreadystatechange = function() {
      //   if (xhr.readyState == 4 && xhr.status == 200) {
      //     container.innerHTML = xhr.responseText;
      //   }
      // }

      // // eksekusi ajax
      // xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
      // xhr.send();
    })
  </script> -->