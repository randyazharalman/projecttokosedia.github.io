<!-- HOMEPAGE  -->
<main class="bg-light" style="height: 1024px;">
  <div class="main_shape fixed"></div>
  <div class="main_shape2"></div>
  <div class="container mt-5 bd-grid home">
    <div class="row flex-lg-row-reverse  g-5 py-5">
      <div class="col-10 col-sm-6 col-md align-items-center">
        <!-- <div class="home_shape">
              <img src="assets/img/ip11promax-removebg-preview.png" alt="" id="hero">
            </div> -->
        <div class="home_shape2 fixed">
          <img src="<?= BASEURL; ?>img/Hero.png" alt="" id="hero2">
          <!-- <img src="assets/img/ip11promax-removebg-preview.png" alt="" id="hero3"> -->
          <!-- <img src="assets/img/first-removebg-preview.png" alt=""> -->
        </div>
        <!-- <img src="assets/img/hero.png-removebg-preview.png" alt="" class="w-100"> -->
      </div>
      <div class="col-lg-6 title">
        <h1 class="display-2 lh-1  text-secondary ">Welcome in <span style="color:#009CFF;" id="tokosedia" class="fw-bold">Tokosedia </span></h1>
        <p class="lead text-secondary">Find a best product in our place.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="#product" type="button" class="btn btn-lg px-4 me-md-2 bg-label btnExplore">Explore Now</a>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- END HOME PAGE  -->

<!-- CATEGORY  -->
<section class="padding-top" id="product">
  <div class="container col-xxl-8 px-4 py-5">
    <h2 class="text-center fw-bold text-muted">Category</h2>
    <hr class="divider">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-5">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal label">Laptop</h4>
                </div>
                <div class="card-body">
                  <img src="<?= BASEURL; ?>img/first.jpg" alt="" width="250" height="170">
                  <ul class="list-unstyled mt-3 mb-4 gray">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                  </ul>
                  <a href="<?=BASEURL?>products/laptop/" type="button" class="w-100 btn btn-lg bg-label btnLihatProduk">See Product</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal label">Phone</h4>
                </div>
                <div class="card-body">
                  <img src="<?= BASEURL; ?>img/3.jpg" alt="" width="250" height="170">
                  <ul class="list-unstyled mt-3 mb-4 gray">
                    <li>20 users included</li>
                    <li>10 GB of storage</li>
                    <li>Priority email support</li>
                    <li>Help center access</li>
                  </ul>
                  <a href="<?=BASEURL?>products/phone/" type="button" class="w-100 btn btn-lg bg-label btnLihatProduk">See Product</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal label">Smart Watch</h4>
                </div>
                <div class="card-body">
                  <img src="<?= BASEURL; ?>img/4.jpg" alt="" width="170" height="170">
                  <ul class="list-unstyled mt-3 mb-4 gray">
                    <li>30 users included</li>
                    <li>15 GB of storage</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                  </ul>
                  <a href="<?=BASEURL?>products/smartwatch/" type="button" class="w-100 btn btn-lg bg-label btnLihatProduk">See Product</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-5">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal label">Camera</h4>
                </div>
                <div class="card-body">
                  <img src="<?= BASEURL; ?>img/5.jpg" alt="" width="200" height="170">
                  <ul class="list-unstyled mt-3 mb-4 gray">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                  </ul>
                  <a href="<?=BASEURL?>products/camera/" type="button" class="w-100 btn btn-lg bg-label btnLihatProduk">See Product</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal label">Monitor</h4>
                </div>
                <div class="card-body">
                  <img src="<?= BASEURL; ?>img/6.jpg" alt="" width="250" height="170">
                  <ul class="list-unstyled mt-3 mb-4 gray">
                    <li>20 users included</li>
                    <li>10 GB of storage</li>
                    <li>Priority email support</li>
                    <li>Help center access</li>
                  </ul>
                  <a href="<?=BASEURL?>products/monitor/" type="button" class="w-100 btn btn-lg bg-label btnLihatProduk">See Product</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal label">Mouse</h4>
                </div>
                <div class="card-body">
                  <img src="<?= BASEURL; ?>img/7.jpg" alt="" width="250" height="170">
                  <ul class="list-unstyled mt-3 mb-4 gray">
                    <li>30 users included</li>
                    <li>15 GB of storage</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                  </ul>
                  <a href="<?=BASEURL?>products/mouse/" type="button" class="w-100 btn btn-lg bg-label btnLihatProduk">See Product</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-5">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm ">
                <div class="card-header py-3 ">
                  <h4 class="my-0 fw-normal label">Keyboard</h4>
                </div>
                <div class="card-body">
                  <img src="<?= BASEURL; ?>img/11.jpg" alt="" width="250" height="170">
                  <ul class="list-unstyled mt-3 mb-4 gray">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                  </ul>
                  <a href="<?=BASEURL?>products/keyboard/" type="button" class="w-100 btn btn-lg bg-label btnLihatProduk">See Product</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal label">Tablet</h4>
                </div>
                <div class="card-body">
                  <img src="<?= BASEURL; ?>img/10.jpg" alt="" width="250" height="170">
                  <ul class="list-unstyled mt-3 mb-4 gray">
                    <li>20 users included</li>
                    <li>10 GB of storage</li>
                    <li>Priority email support</li>
                    <li>Help center access</li>
                  </ul>
                  <a href="<?=BASEURL?>products/ipad/" type="button" class="w-100 btn btn-lg bg-label btnLihatProduk">See Product</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal label">Printer</h4>
                </div>
                <div class="card-body">
                  <img src="<?= BASEURL; ?>img/13.jpg" alt="" width="200" height="170">
                  <ul class="list-unstyled mt-3 mb-4 gray">
                    <li>30 users included</li>
                    <li>15 GB of storage</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                  </ul>
                  <a href="<?=BASEURL?>products/printer/" type="button" class="w-100 btn btn-lg bg-label btnLihatProduk">See Product</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-5">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal label">Earphone</h4>
                </div>
                <div class="card-body">
                  <img src="<?= BASEURL; ?>img/14.jpg" alt="" width="170" height="170">
                  <ul class="list-unstyled mt-3 mb-4 gray">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                  </ul>
                  <a href="<?=BASEURL?>products/earphone/" type="button" class="w-100 btn btn-lg bg-label btnLihatProduk">See Product</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden prev">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<!-- END CATEGORY  -->

<!-- DISCOUNT -->
<section class="padding-top" id="discount">
  <div class="container-fluid">
    <h2 class="text-center fw-bold text-muted">Discount</h2>
    <hr class="divider mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" id="btn-slide-first"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <!-- DISCOUNT CAROUSEL FIRST  -->
        <div class="carousel-item active">
          <!-- <div class="carousel-active-shape"></div> -->
          <div class="row rounded-4 align-items-center mt-0" id="discount-carousel-first">
            <div class="col-10 col-sm-8 col-lg-6 mt-5">
              <img src="<?= BASEURL; ?>img/vivo-t1-pro-5g.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6 py-5 discount-title mt-5">
              <h1 class="display-2   fw-bold lh-1 mb-3 text-white">Discount up to 30%</h1>
              <p class="lead display-8 text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>
                Tenetur, nesciunt Lorem ipsum dolor sit amet.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="<?=BASEURL;?>products/detail/15" type="button" class="btn bg-outline-label btn-lg px-4 me-md-2">Check now</a>
              </div>
            </div>
          </div>
        </div>
        <!-- DISCOUNT CAROUSEL SECOND  -->
        <div class="carousel-item ">
          <!-- <div class="carousel-shape"></div> -->
          <div class="row flex-lg-row-reverse  w-100 align-items-center mt-0 d-inline-flex " id="discount-carousel-second">
            <div class="col-10 col-sm-8 col-lg-6 mt-5">
              <img src="<?= BASEURL; ?>img/x6_smart-removebg-preview.png" class="d-block mx-lg-auto img-fluid rounded-4" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-4 py-5  px-3 discount-title mt-5 rounded-4 border bg-white shadow-lg">
              <h3 class="display-4 fw-bold lh-1 mb-3 ">Discount up to 30%</h3>
              <p class="lead ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, nesciunt..</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="<?=BASEURL;?>products/detail/16" type="button" class="btn btn-label btn-lg px-4 me-md-2">Check now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<!-- END DISCOUNT  -->

<!-- NEW PRODUCTS  -->
<section class="padding-top" id="new-product">
  <div class="container col-xxl-8 px-4 py-5">
    <h2 class="text-center fw-bold text-muted">New Product</h2>
    <div class="category_shape"></div>
    <hr class="divider">
    <div class="row flex-row-reverse align-items-center mb-3 mt-5">
      <div class="col-10 col-sm-8 col-lg-6 mt-5">
        <img src="<?= BASEURL; ?>img/realme-narzo-50-5G.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="600" height="400" loading="lazy">
      </div>
      <div class="col-lg-6 mt-5">
        <div class="card bg-white d-inline-flex  h-50 p-4 rounded-4 shadow-lg">
          <h3 class="label fw-bold discount-title">Realme Narzo 50 5G</h3>
          <p class="col-12 gray">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, provident? Lorem
            ipsum dolor sit amet consectetur adipisicing elit. Tempora qui animi velit nemo assumenda ducimus, quia
            rerum expedita libero error?</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="<?=BASEURL;?>products/detail/5" type="button" class="btn bg-label btn-lg px-4 me-md-2">Check out now</a>
            <a href="<?=BASEURL;?>products/newproduct/"type="button" class="btn btn-outline-label btn-lg px-4 me-md-2">See more new products</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- END NEW PRODUCTS  -->

<!-- BEST SELER  -->
<section class="padding-top" id="best-seller">
  <div class="container col-xxl-8 px-5 py-5">
    <h2 class="text-center fw-bold text-muted">Best Seller</h2>
    <hr class="divider">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-5">
      <div class="col">
        <div class="card mb-4 rounded-4 border-none shadow-lg">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal label fw-bold">Phone</h4>
          </div>
          <div class="card-body">
            <img src="<?= BASEURL; ?>img/laptop-asus-asusrogzephyrusm16.jpg" alt="" height="200" width="250">
            <ul class="list-unstyled mt-3 mb-4 text-muted">
              <li>Xiaomi 12 Pro</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <a href="<?=BASEURL?>products/detail/5" class="w-100 btn btn-lg bg-label">See Detail</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-4 border-none shadow-lg">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal label fw-bold">Camera</h4>
          </div>
          <div class="card-body">
            <img src="<?= BASEURL; ?>img/camera-canon-canoneos5d.jpg" alt="" height="200" width="230">
            <ul class="list-unstyled mt-3 mb-4 text-muted">
              <li>Canon Neo 90D</li>
              <li>High Image Quality</li>
              <li>4K UHD 30P/ Full HD 120P video</li>
              <li>Stock: 4</li>
            </ul>
            <a href="<?=BASEURL?>products/detail/20" class="w-100 btn btn-lg bg-label">See Detail</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-4 border-none shadow-lg">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal label fw-bold">Smart Watch</h4>
          </div>
          <div class="card-body">
            <img src="<?= BASEURL; ?>img/apple_watch_se.jpg" alt="" width="200">
            <ul class="list-unstyled mt-3 mb-4 text-muted">
              <li>Apple Watch SE</li>
              <li>Retina LTPO OLED display</li>
              <li>Water resistant 50 meters</li>
              <li>Stok: 2</li>
            </ul>
            <a href="<?=BASEURL?>products/detail/19" class="w-100 btn btn-lg bg-label">See Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END BEST SELLER  -->

<!-- BRANDS -->
<section class="padding-top" id="section-brands">
  <h2 class="text-center fw-bold text-muted">Brands</h2>
  <hr class="divider mb-5">
  <div class="container bg-light rounded-5  py-5 px-4 col-xxl-8 ">
    <nav class="row gy-4 row-cols-xl-8 row-cols-sm-4 row-cols-3 justify-content-center ">
      <div class="col brandsOutline ">
        <a href="<?=BASEURL;?>brands/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded" id="icon">
            <svg role="img" width="80" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.039 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.701" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL;?>brands/asus/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded" id="icon">
            <svg role="img" width="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M23.904 10.788V9.522h-4.656c-.972 0-1.41.6-1.482 1.182v.018-1.2h-1.368v1.266h1.362zm-6.144.456l-1.368-.078v1.458c0 .456-.228.594-1.02.594H14.28c-.654 0-.93-.186-.93-.594v-1.596l-1.386-.102v1.812h-.03c-.078-.528-.276-1.14-1.596-1.23L6 11.22c0 .666.474 1.062 1.218 1.14l3.024.306c.24.018.414.09.414.288 0 .216-.18.24-.456.24H5.946V11.22l-1.386-.09v3.348h5.646c1.26 0 1.662-.654 1.722-1.2h.03c.156.864.912 1.2 2.19 1.2h1.41c1.494 0 2.202-.456 2.202-1.524zm4.398.258l-4.338-.258c0 .666.438 1.11 1.182 1.17l3.09.24c.24.018.384.078.384.276 0 .186-.168.258-.516.258h-4.212v1.29h4.302c1.356 0 1.95-.474 1.95-1.554 0-.972-.534-1.338-1.842-1.422zm-10.194-1.98h1.386v1.266h-1.386zM3.798 11.07l-1.506-.15L0 14.478h1.686zm7.914-1.548h-4.23c-.984 0-1.416.612-1.518 1.2v-1.2H3.618c-.33 0-.486.102-.642.33l-.648.936h9.384Z" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL;?>brands/acer/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded" id="icon">
            <svg role="img" width="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Acer</title>
              <path d="M23.943 9.364c-.085-.113-.17-.198-.595-.226-.113 0-.453-.029-1.048-.029-1.56 0-2.636.482-3.175 1.417.142-.935-.765-1.417-2.749-1.417-2.324 0-3.798.935-4.393 2.834-.226.709-.226 1.276-.056 1.73h-.567c-.425.027-.992.056-1.36.056-.85 0-1.39-.142-1.588-.425-.17-.255-.17-.737.057-1.446.368-1.162 1.247-1.672 2.664-1.672.737 0 1.445.085 1.445.085.085 0 .142-.113.142-.198l-.028-.085-.057-.397c-.028-.255-.227-.397-.567-.453-.311-.029-.567-.029-.907-.029h-.028c-1.842 0-3.146.624-3.854 1.814.255-1.219-.596-1.814-2.551-1.814-1.105 0-1.9.029-2.353.085-.368.057-.595.199-.68.454l-.17.51c-.028.085.029.142.142.142.085 0 .425-.057.992-.086a24.816 24.816 0 0 1 1.672-.085c1.077 0 1.559.284 1.389.822-.029.114-.114.199-.255.227-1.02.17-1.842.284-2.438.369-1.7.226-2.692.736-2.947 1.587-.369 1.162.538 1.728 2.72 1.728 1.078 0 2.013-.056 2.75-.198.425-.085.652-.17.737-.453l.396-1.304c-.028 1.304.85 1.955 2.721 1.955.794 0 1.559-.028 1.927-.085.369-.056.567-.141.652-.425l.085-.396c.397.623 1.276.935 2.608.935 1.417 0 2.239-.029 2.465-.114a.523.523 0 0 0 .369-.311l.028-.085.17-.539c.029-.085-.028-.142-.142-.142l-.906.057c-.596.029-1.077.057-1.418.057-.651 0-1.076-.057-1.332-.142-.368-.142-.538-.397-.51-.822l2.863-.368c1.275-.17 2.154-.567 2.579-1.19l-.992 3.315c-.028.057 0 .114.028.142.029.028.085.057.199.057h1.19c.198 0 .283-.114.312-.199l1.048-3.656c.142-.481.567-.708 1.36-.708.71 0 1.22 0 1.56.028h.028c.057 0 .17-.028.255-.17l.17-.51c0-.085 0-.17-.057-.227zM4.841 13.73c-.368.057-.907.085-1.587.085-1.219 0-1.729-.255-1.587-.737.113-.34.425-.567.935-.624l2.75-.368zm12.669-2.95c-.114.369-.652.624-1.616.766l-2.295.311.056-.198c.199-.624.454-1.02.794-1.247.34-.227.907-.34 1.7-.34 1.05.028 1.503.255 1.36.708Z" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL;?>brands/lenovo/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded" id="icon">
            <svg role="img" width="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Lenovo</title>
              <path d="M21.044 12.288c0 .5-.343.867-.815.867-.464 0-.827-.38-.827-.867 0-.51.343-.868.815-.868.464 0 .827.381.827.868zm-14.305-.92a.787.787 0 0 0-.651.307.991.991 0 0 0-.172.738l1.479-.614a.708.708 0 0 0-.656-.43zm6.963.052c-.472 0-.816.358-.816.868 0 .486.364.867.828.867.472 0 .815-.368.815-.867 0-.487-.363-.868-.827-.868zM24 7.997v8.006H0V7.997h24zM5.01 13.05H3.088V9.825H2.23v4.003h2.78v-.777zm1.137-.094l2.163-.897a1.667 1.667 0 0 0-.37-.86c-.284-.33-.704-.505-1.216-.505-.931 0-1.633.686-1.633 1.593 0 .93.704 1.593 1.726 1.593.572 0 1.158-.272 1.432-.589l-.535-.411c-.357.264-.56.326-.885.326-.292 0-.52-.09-.682-.25zm5.57-1.039c0-.709-.507-1.223-1.252-1.223a1.28 1.28 0 0 0-1.005.494v-.442h-.846v3.081h.846v-1.753c0-.316.245-.651.698-.651.35 0 .712.243.712.651v1.753h.847v-1.91zm3.647.37c0-.904-.725-1.593-1.65-1.593-.933 0-1.663.7-1.663 1.593 0 .903.726 1.592 1.651 1.592.932 0 1.662-.7 1.662-1.592zm2.066 1.54l1.268-3.081h-.967l-.765 2.099-.765-2.1h-.966l1.268 3.081h.927zm4.449-1.54c0-.904-.725-1.593-1.65-1.593-.932 0-1.662.7-1.662 1.593 0 .903.725 1.592 1.65 1.592.932 0 1.662-.7 1.662-1.592z" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL?>brands/xiaomi/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded" id="icon">
            <svg role="img" width="70" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Xiaomi</title>
              <path d="M12 0C8.016 0 4.756.255 2.493 2.516.23 4.776 0 8.033 0 12.012c0 3.98.23 7.235 2.494 9.497C4.757 23.77 8.017 24 12 24c3.983 0 7.243-.23 9.506-2.491C23.77 19.247 24 15.99 24 12.012c0-3.984-.233-7.243-2.502-9.504C19.234.252 15.978 0 12 0zM4.906 7.405h5.624c1.47 0 3.007.068 3.764.827.746.746.827 2.233.83 3.676v4.54a.15.15 0 0 1-.152.147h-1.947a.15.15 0 0 1-.152-.148V11.83c-.002-.806-.048-1.634-.464-2.051-.358-.36-1.026-.441-1.72-.458H7.158a.15.15 0 0 0-.151.147v6.98a.15.15 0 0 1-.152.148H4.906a.15.15 0 0 1-.15-.148V7.554a.15.15 0 0 1 .15-.149zm12.131 0h1.949a.15.15 0 0 1 .15.15v8.892a.15.15 0 0 1-.15.148h-1.949a.15.15 0 0 1-.151-.148V7.554a.15.15 0 0 1 .151-.149zM8.92 10.948h2.046c.083 0 .15.066.15.147v5.352a.15.15 0 0 1-.15.148H8.92a.15.15 0 0 1-.152-.148v-5.352a.15.15 0 0 1 .152-.147Z" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL?>brands/samsung/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded " id="icon">
            <svg role="img" width="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Samsung</title>
              <path d="M19.8166 10.2808l.0459 2.6934h-.023l-.7793-2.6934h-1.2837v3.3925h.8481l-.0458-2.785h.023l.8366 2.785h1.2264v-3.3925zm-16.149 0l-.6418 3.427h.9284l.4699-3.1175h.0229l.4585 3.1174h.9169l-.6304-3.4269zm5.1805 0l-.424 2.6132h-.023l-.424-2.6132H6.5788l-.0688 3.427h.8596l.023-3.0832h.0114l.573 3.0831h.8711l.5731-3.083h.023l.0228 3.083h.8596l-.0802-3.4269zm-7.2664 2.4527c.0343.0802.0229.1949.0114.2522-.0229.1146-.1031.2292-.3324.2292-.2177 0-.3438-.126-.3438-.3095v-.3323H0v.2636c0 .7679.6074.9971 1.2493.9971.6189 0 1.1346-.2178 1.2149-.7794.0458-.298.0114-.4928 0-.5616-.1605-.722-1.467-.9283-1.5588-1.3295-.0114-.0688-.0114-.1375 0-.1834.023-.1146.1032-.2292.3095-.2292.2063 0 .321.126.321.3095v.2063h.8595v-.2407c0-.745-.6762-.8596-1.1576-.8596-.6074 0-1.1117.2063-1.2034.7564-.023.149-.0344.2866.0114.4585.1376.7106 1.364.9169 1.5358 1.3524m11.152 0c.0343.0803.0228.1834.0114.2522-.023.1146-.1032.2292-.3324.2292-.2178 0-.3438-.126-.3438-.3095v-.3323h-.917v.2636c0 .7564.596.9857 1.2379.9857.6189 0 1.1232-.2063 1.2034-.7794.0459-.298.0115-.4814 0-.5616-.1375-.7106-1.4327-.9284-1.5243-1.318-.0115-.0688-.0115-.1376 0-.1835.0229-.1146.1031-.2292.3094-.2292.1948 0 .321.126.321.3095v.2063h.848v-.2407c0-.745-.6647-.8596-1.146-.8596-.6075 0-1.1004.1948-1.192.7564-.023.149-.023.2866.0114.4585.1376.7106 1.341.9054 1.513 1.3524m2.8882.4585c.2407 0 .3094-.1605.3323-.2522.0115-.0343.0115-.0917.0115-.126v-2.533h.871v2.4642c0 .0688 0 .1948-.0114.2292-.0573.6419-.5616.8482-1.192.8482-.6303 0-1.1346-.2063-1.192-.8482 0-.0344-.0114-.1604-.0114-.2292v-2.4642h.871v2.533c0 .0458 0 .0916.0115.126 0 .0917.0688.2522.3095.2522m7.1518-.0344c.2522 0 .3324-.1605.3553-.2522.0115-.0343.0115-.0917.0115-.126v-.4929h-.3553v-.5043H24v.917c0 .0687 0 .1145-.0115.2292-.0573.6303-.596.8481-1.2034.8481-.6075 0-1.1461-.2178-1.2034-.8481-.0115-.1147-.0115-.1605-.0115-.2293v-1.444c0-.0574.0115-.172.0115-.2293.0802-.6419.596-.8482 1.2034-.8482s1.1347.2063 1.2034.8482c.0115.1031.0115.2292.0115.2292v.1146h-.8596v-.1948s0-.0803-.0115-.1261c-.0114-.0802-.0802-.2521-.3438-.2521-.2521 0-.321.1604-.3438.2521-.0115.0458-.0115.1032-.0115.1605v1.5702c0 .0458 0 .0916.0115.126 0 .0917.0917.2522.3323.2522" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL?>brands/msi/" class="item-link text-center py-5 mb-2">
          <span class="icon mb-2 icon-md rounded " id="icon">
            <svg version="1.1" width="110" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2136.8 537" style="enable-background:new 0 0 2136.8 537;" xml:space="preserve">
              <path d="M1942.8,535.6L2089,132.1c0,0-109.6,0-219.3,22.5l-137.8,381H1942.8z M1917.5,23.9l-28.1,77.3
    c109.6-22.5,219.3-22.5,219.3-22.5l28.1-77.3C2136.8,1.4,2027.1,1.4,1917.5,23.9 M1155.5,440c66.1,12.7,133.5,18.3,202.4,18.3
    c71.7,0,122.3-15.5,127.9-64.7c2.8-22.5-19.7-39.4-59-61.9c-45-25.3-84.3-38-123.7-64.7c-39.4-26.7-56.2-67.5-43.6-112.5
    c15.5-52,52-81.5,106.8-109.6c64.7-32.3,115.3-45,240.4-45c78.7,0,154.6,7,229.1,22.5l-26.7,73.1c-66.1-12.7-133.5-18.3-202.4-18.3
    c-71.7,0-122.3,15.5-127.9,64.7c-2.8,22.5,19.7,39.4,59,61.9c45,25.3,84.3,38,123.7,64.7s56.2,67.5,43.6,112.5
    c-15.5,52-52,81.5-106.8,109.6c-64.7,32.3-115.3,45-240.4,45c-78.7,0-154.6-7-229.1-22.5L1155.5,440z M837.8,535.6l122.3-336
    c40.8-112.5-108.2-71.7-142-45c-26.7,19.7-74.5,66.1-91.4,115.3l-97,267.1H418.9l122.3-337.4c40.8-112.5-108.2-71.7-142-45
    c-26.7,19.7-74.5,66.1-91.4,115.3l-97,267.1H0L194,1.4c67.5,0,104,15.5,133.5,45c11.2,11.2,18.3,25.3,22.5,40.8
    c39.4-23.9,74.5-42.2,98.4-50.6C492,19.7,546.8,1.4,614.3,1.4s104,15.5,133.5,45c11.2,11.2,18.3,25.3,22.5,40.8
    c39.4-23.9,74.5-42.2,98.4-50.6c43.6-16.9,98.4-35.1,165.9-35.1s104,15.5,133.5,45c30.9,29.5,29.5,84.3,18.3,115.3l-137.8,373.9
    H837.8z" />
              <title>Msi</title>
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL?>brands/logitech/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded" id="icon">
            <svg role="img" width="90" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Logitech</title>
              <path d="M24 5.098a1.35 1.35 0 0 1-1.35 1.35 1.35 1.35 0 0 1-1.352-1.35 1.35 1.35 0 0 1 1.351-1.351A1.35 1.35 0 0 1 24 5.097zM16.549 18.31a2.289 2.289 0 0 1-2.322-2.322H12.2c0 2.449 1.9 4.264 4.306 4.264s4.348-1.857 4.348-4.264H18.87c-.043 1.351-1.056 2.322-2.322 2.322zm5.108-2.828h1.984V7.377h-1.984zM0 15.483h1.984V4H0v11.483zm7.135-8.359c-2.449 0-4.307 1.858-4.307 4.264a4.27 4.27 0 0 0 4.307 4.306c2.406 0 4.306-1.858 4.306-4.264S9.583 7.124 7.135 7.124zm0 6.628c-1.31 0-2.322-1.013-2.322-2.364a2.289 2.289 0 0 1 2.322-2.322 2.289 2.289 0 0 1 2.321 2.322c0 1.309-.97 2.364-2.321 2.364zm13.635-4.77V7.377h-2.828c-.464-.21-.929-.253-1.393-.253-2.449 0-4.348 1.858-4.348 4.306 0 2.449 1.9 4.264 4.306 4.264s4.306-1.858 4.306-4.264c0-.844-.254-1.604-.676-2.195zm-4.221 4.77c-1.309 0-2.322-1.013-2.322-2.364a2.289 2.289 0 0 1 2.322-2.322 2.289 2.289 0 0 1 2.322 2.322c0 1.309-1.056 2.364-2.322 2.364Z" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL?>brands/corsair/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded" id="icon">
            <svg role="img" width="90" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Corsair</title>
              <path d="M13.072.412s1.913 3.881 1.563 5.5c0 0 4.987 1.612 5.54 4.272 0 0 2.73-3.594-7.103-9.772zM7.908 4.067s1.678 2.625 1.417 4.35l2.818 1.067a17.56 17.56 0 0 0-.991-3.248zm3.784.691a14.162 14.162 0 0 1 .163 13.794 17.702 17.702 0 0 0 .594-6.585c-.017-.186-.031-.368-.053-.55L6.908 7.759a14.13 14.13 0 0 1 1.133 4.465 14.02 14.02 0 0 1-1.305 7.347 17.75 17.75 0 0 0 .442-5.988.92.92 0 0 1-.022-.243l-5.133-2.726a11.639 11.639 0 0 1 1.075 3.93A11.785 11.785 0 0 1 0 23.587c21.91-9.29 22.795-3.173 22.795-3.173s1.656-2.164 1.085-4.51C23.128 12.79 11.692 4.759 11.692 4.759zM3.04 7.245s1.629 2.09 1.363 3.815l2.567.637a20.357 20.357 0 0 0-.863-2.788z" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL?>brands/epson/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded" id="icon">
            <svg role="img" width="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Epson</title>
              <path d="M16.616 13.915c-1.029 0-1.428-.952-1.428-1.915 0-.975.398-1.927 1.428-1.927 1.03 0 1.429.952 1.429 1.927 0 .963-.399 1.915-1.429 1.915m0-4.805c-1.627 0-2.567 1.218-2.567 2.89s.94 2.89 2.567 2.89c1.628 0 2.568-1.218 2.568-2.89s-.94-2.89-2.568-2.89zM0 9.266h4.085v.974H1.141v1.207h2.745v.952H1.141v1.351h2.944v.975H0V9.266zM6.73 12.11H5.701v-1.871H6.73c.709 0 1.185.311 1.185.941 0 .621-.476.93-1.185.93m-2.168 2.614h1.14v-1.639H6.73c1.384 0 2.314-.687 2.314-1.904 0-1.229-.931-1.915-2.314-1.915H4.562v5.458zM20.768 9.266h-1.162v5.458h1.118v-2.215c0-.598-.022-1.14-.044-1.605.133.267.531 1.085.708 1.396l1.45 2.425H24V9.266h-1.106v2.158c0 .599.022 1.196.044 1.672-.133-.276-.531-1.096-.72-1.406l-1.45-2.424zM10.34 12.919c0 .73.608 1.019 1.251 1.019.421 0 1.118-.122 1.118-.687 0-.598-.842-.709-1.649-.919-.853-.232-1.672-.543-1.672-1.561 0-1.13 1.063-1.661 2.059-1.661 1.152 0 2.204.498 2.204 1.771h-1.13c-.044-.664-.554-.83-1.129-.83-.388 0-.875.154-.875.619 0 .421.277.487 1.661.842.398.11 1.66.354 1.66 1.595 0 1.018-.797 1.771-2.292 1.771-1.217 0-2.357-.598-2.347-1.959h1.141z" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL?>brands/huawei/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded" id="icon">
            <svg role="img" width="90" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Huawei</title>
              <path d="M3.67 6.14S1.82 7.91 1.72 9.78v.35c.08 1.51 1.22 2.4 1.22 2.4 1.83 1.79 6.26 4.04 7.3 4.55 0 0 .06.03.1-.01l.02-.04v-.04C7.52 10.8 3.67 6.14 3.67 6.14zM9.65 18.6c-.02-.08-.1-.08-.1-.08l-7.38.26c.8 1.43 2.15 2.53 3.56 2.2.96-.25 3.16-1.78 3.88-2.3.06-.05.04-.09.04-.09zm.08-.78C6.49 15.63.21 12.28.21 12.28c-.15.46-.2.9-.21 1.3v.07c0 1.07.4 1.82.4 1.82.8 1.69 2.34 2.2 2.34 2.2.7.3 1.4.31 1.4.31.12.02 4.4 0 5.54 0 .05 0 .08-.05.08-.05v-.06c0-.03-.03-.05-.03-.05zM9.06 3.19a3.42 3.42 0 00-2.57 3.15v.41c.03.6.16 1.05.16 1.05.66 2.9 3.86 7.65 4.55 8.65.05.05.1.03.1.03a.1.1 0 00.06-.1c1.06-10.6-1.11-13.42-1.11-13.42-.32.02-1.19.23-1.19.23zm8.299 2.27s-.49-1.8-2.44-2.28c0 0-.57-.14-1.17-.22 0 0-2.18 2.81-1.12 13.43.01.07.06.08.06.08.07.03.1-.03.1-.03.72-1.03 3.9-5.76 4.55-8.64 0 0 .36-1.4.02-2.34zm-2.92 13.07s-.07 0-.09.05c0 0-.01.07.03.1.7.51 2.85 2 3.88 2.3 0 0 .16.05.43.06h.14c.69-.02 1.9-.37 3-2.26l-7.4-.25zm7.83-8.41c.14-2.06-1.94-3.97-1.94-3.98 0 0-3.85 4.66-6.67 10.8 0 0-.03.08.02.13l.04.01h.06c1.06-.53 5.46-2.77 7.28-4.54 0 0 1.15-.93 1.21-2.42zm1.52 2.14s-6.28 3.37-9.52 5.55c0 0-.05.04-.03.11 0 0 .03.06.07.06 1.16 0 5.56 0 5.67-.02 0 0 .57-.02 1.27-.29 0 0 1.56-.5 2.37-2.27 0 0 .73-1.45.17-3.14z" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL?>brands/lg/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded" id="icon">
            <svg role="img" width="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>LG</title>
              <path d="M5.286 6.714a5.286 5.286 0 100 10.572 5.287 5.287 0 000-10.572zm0 .86c.05 0 .156 0 .21.002v.413a14.622 14.621 0 00-.21-.003A3.986 3.986 0 002.45 9.161a3.982 3.982 0 00-1.175 2.836c0 1.072.417 2.08 1.175 2.836a3.986 3.986 0 002.836 1.175 4.02 4.019 0 004.003-3.741v-.06H6.551v-.41h2.981l.177-.001v.201a4.394 4.394 0 01-1.294 3.128 4.4 4.4 0 01-3.13 1.296c-1.18 0-2.29-.46-3.13-1.296a4.394 4.394 0 01-1.293-3.128 4.43 4.43 0 014.424-4.425zm16.063.878c-2.21 0-3.372 1.207-3.372 3.508 0 2.29 1.05 3.53 3.36 3.53 1.06 0 2.099-.27 2.663-.665v-3.316h-2.74v1.274h1.285v1.195c-.237.09-.7.181-1.14.181-1.42 0-1.894-.722-1.894-2.188 0-1.398.45-2.222 1.872-2.222.79 0 1.24.248 1.613.722l.982-.902c-.598-.857-1.647-1.117-2.63-1.117zm-8.413.102v6.834h4.85v-1.33h-3.27V8.553zM3.598 9.677a.635.635 0 110 1.27.635.635 0 010-1.27zm1.478.002h.42v4.22h1.052v.414H5.076z" />
            </svg>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL?>brands/realme/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded ">
            <svg width="150" viewBox="0 0  169.84099999999998 41.964" style="fill:currentColor;" xmlns="http://www.w3.org/2000/svg">
              <path d="M64.204 42.601c-3.594-.416-6.499-1.744-8.833-4.037-2.886-2.834-4.418-6.655-4.418-11.021 0-8.776 6.318-15.21 14.92-15.196 2.268.004 4.53.533 6.527 1.529.952.475 2.17 1.286 2.814 1.874.244.223.467.405.495.405s.052-.743.052-1.65v-1.652h3.725v29.38h-3.725v-3.401l-.34.282c-2.498 2.07-4.772 3.078-7.786 3.453-.66.082-2.833.104-3.431.034zm3.435-3.889c4.503-.756 7.625-3.937 8.515-8.677.207-1.099.212-3.864.01-4.947-.236-1.263-.552-2.232-1.077-3.302-1.55-3.158-4.281-5.072-7.92-5.552-1.26-.167-3.1-.06-4.304.249-3.511.901-6.219 3.445-7.445 6.996-.509 1.475-.612 2.159-.612 4.064 0 1.465.027 1.812.197 2.575 1.02 4.557 4.29 7.808 8.644 8.597.904.163 3.01.162 3.992-.003zm-35.925 3.771c-2.49-.261-4.79-1.07-6.757-2.375-1.1-.73-2.82-2.46-3.57-3.59-1.832-2.762-2.711-6.076-2.582-9.737.118-3.328 1.044-6.17 2.842-8.72.262-.373.935-1.137 1.493-1.699 1.995-2.004 4.397-3.273 7.292-3.852 1.166-.233 3.775-.321 4.988-.169 5.588.704 9.774 4.446 11.212 10.025.35 1.359.508 2.516.569 4.182l.053 1.46h-24.69l.056.868c.25 3.859 2.489 7.316 5.832 9.004 1.58.798 3.087 1.145 4.982 1.147 3.25.004 5.705-1 7.75-3.166.511-.541 1.664-2.09 1.863-2.501.025-.051 3.25 2.06 3.25 2.127 0 .205-1.321 1.963-2.05 2.726-2.692 2.82-6.028 4.21-10.354 4.313-.792.02-1.772 0-2.179-.043zm11.662-18.136c-.701-4.414-3.713-7.614-7.959-8.455-.894-.177-3.205-.157-4.106.036-2.14.459-3.925 1.385-5.408 2.807-1.57 1.506-2.616 3.397-3.176 5.739l-.056.233H43.432zm112.014 18.13c-6.487-.604-11.303-5-12.608-11.505-.887-4.427-.064-9.043 2.223-12.455 2.19-3.27 5.311-5.292 9.349-6.062 1.14-.217 4.53-.216 5.608.003 2.694.547 4.922 1.72 6.777 3.57 2.675 2.666 4.102 6.437 4.102 10.834v1.146l-12.298.022-12.297.021.022.678c.09 2.667 1.35 5.456 3.329 7.363 1.534 1.479 3.395 2.415 5.566 2.802.965.171 3.038.17 4.009 0 3.009-.534 5.188-2.013 7.052-4.789.266-.396.515-.711.554-.7.1.026 2.985 1.882 3.108 2 .13.123-.664 1.32-1.593 2.402-2.967 3.449-7.685 5.157-12.903 4.67zm11.64-18.003c0-.128-.074-.541-.164-.918-1.018-4.246-4.016-7.073-8.174-7.71-1.585-.243-3.476-.076-5.08.45-3.469 1.137-6.151 4.012-7.072 7.578-.092.357-.167.69-.167.74 0 .066 2.97.093 10.329.093h10.33l-.001-.233zM1 27.5V12.769H18.611v3.47l-6.922.022-6.921.021-.022 12.976-.021 12.975H1zm85.005-5.927V1h3.81v41.148h-3.81zm10.33 5.884v-14.69h3.725l.004 1.927.004 1.926.314-.38c1.035-1.258 2.102-2.143 3.31-2.746 1.44-.72 2.707-1.034 4.496-1.12 2.064-.097 3.743.223 5.377 1.025 1.733.85 2.98 2.072 4.155 4.073.08.138.13.1.435-.348 1.601-2.345 3.983-3.896 6.967-4.536 1.183-.254 3.782-.28 4.928-.05 2.095.423 3.745 1.274 5.11 2.638 1.453 1.452 2.345 3.201 2.893 5.668l.227 1.025.028 10.14.027 10.138h-3.731v-9.05c0-5.643-.033-9.38-.088-9.927-.348-3.476-2.147-5.988-4.959-6.926a8.064 8.064 0 0 0-3.427-.354c-3.627.393-5.971 2.355-6.79 5.683-.174.706-.178.912-.207 10.647l-.03 9.927h-3.718V33.27c0-5.306-.035-9.307-.087-9.945-.346-4.268-2.689-6.973-6.432-7.428-3.415-.416-6.96 1.578-8.246 4.64-.538 1.277-.507.615-.538 11.6l-.028 10.011h-3.72v-14.69z" />
            </svg>
            <title>Realme</title>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline">
        <a href="<?=BASEURL?>brands/vivo/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded">
            <svg viewBox="-7.966 -6.512 3920.174 1030.512" width="130" xmlns="http://www.w3.org/2000/svg">
              <path d="m3522.471 853.333h-336.436c-189.112 0-205.93-155.87-205.93-203.487s16.818-203.487 205.93-203.487h336.436c189.125 0 205.943 155.871 205.943 203.487s-16.818 203.487-205.943 203.487m7.313-577.64h-337.92c-351.18 0-382.425 286.588-382.425 374.153s31.245 374.154 382.425 374.154h337.92c351.192 0 382.424-286.589 382.424-374.154s-31.232-374.154-382.424-374.154m-787.889 26.257h-109.555c-46.92 0-56.583 7.89-74.674 34.382-18.116 26.48-331.46 498.373-331.46 498.373-10.004 14.507-20.612 20.375-33.792 20.375-13.194 0-23.789-5.868-33.78-20.375 0 0-313.37-471.893-331.473-498.373-18.091-26.505-27.753-34.382-74.674-34.382h-109.554c-25.207 0-36.76 19.443-20.9 43.192l374.258 560.548c58.066 84.256 100.68 118.311 196.123 118.311s138.056-34.055 196.135-118.311l374.246-560.548c15.859-23.75 4.332-43.192-20.9-43.192m-1442.2 45.778c0-32.794 12.8-45.778 45.11-45.778h80.462c32.295 0 45.095 12.997 45.095 45.778v630.482c0 32.794-12.8 45.791-45.095 45.791h-80.463c-32.295 0-45.108-12.997-45.108-45.791zm-6.721-199.772c-26.046-26.033-26.046-46.684 0-72.73l55.677-55.677c26.046-26.06 46.697-26.06 72.743-.013l55.703 55.676c26.033 26.06 26.033 46.71 0 72.757l-55.703 55.677c-26.046 26.046-46.697 26.046-72.73 0l-55.69-55.677zm-166.44 153.994h-109.436c-46.868 0-56.53 7.903-74.595 34.382-18.09 26.48-331.12 498.36-331.12 498.36-9.977 14.507-20.571 20.375-33.739 20.375-13.194 0-23.775-5.868-33.765-20.375 0 0-313.03-471.893-331.094-498.373-18.064-26.466-27.727-34.37-74.594-34.37h-109.437c-28.12 0-36.72 19.444-20.874 43.193 15.82 23.762 373.84 560.534 373.84 560.534 58.013 84.27 100.6 118.325 195.924 118.325 95.311 0 137.912-34.055 195.913-118.325l373.851-560.534c15.833-23.75 7.247-43.192-20.873-43.192" />
            </svg>
            <title>Vivo</title>
          </span>
        </a>
      </div> <!-- col.// -->
      <div class="col brandsOutline ">
        <a href="<?=BASEURL?>brands/oppo/" class="item-link text-center">
          <span class="icon mb-2 icon-md rounded">
            <svg viewBox="14.699 10.215 895.346 217.524" width="150" xmlns="http://www.w3.org/2000/svg">
              <path d="m242.526 125.094v-102.643h32.011v6.784c0 3.732.057 6.785.126 6.785.07 0 2.09-1.23 4.49-2.733 28.311-17.732 69.466-23.072 106.378-13.802 33.255 8.352 57.363 28.177 65.933 54.222 5.008 15.22 4.732 32.145-.765 46.864-6.837 18.31-20.893 33.031-41.167 43.116-17.742 8.825-37.999 13.244-60.71 13.244-18.827 0-36.386-3.14-51.843-9.269-6.133-2.432-13.995-6.424-18.764-9.529l-3.678-2.394v72h-32.011zm121.78 24.549c18.006-2.554 31.976-8.267 42.45-17.359 7.929-6.882 13.45-16.44 15.542-26.904.856-4.28.858-14.386.005-18.653-2.463-12.315-9.52-23.072-20.083-30.615-4.258-3.04-12.907-7.373-18.428-9.23-15.59-5.244-34.493-6.797-51.806-4.256-30.059 4.411-50.375 19.32-55.826 40.964-2.405 9.55-1.975 19.86 1.203 28.87 7.218 20.467 28.505 34.087 58.586 37.486 6.048.684 22.653.506 28.358-.303zm106.124-24.549v-102.643h32.01v6.784c0 3.732.07 6.785.154 6.785.085 0 1.846-1.103 3.914-2.45 4.786-3.12 14.231-7.786 20.288-10.021 26.145-9.65 58.068-11.207 86.004-4.193 45.54 11.433 72.357 42.756 69.825 81.556-1.933 29.617-21.64 53.945-54.055 66.73-10.574 4.17-21.41 6.8-34.972 8.487-7.158.89-26.449.89-33.921-.002-21.149-2.523-39.716-8.803-54.193-18.33l-3.044-2.003v71.945h-32.01zm122.555 24.398c24.937-3.724 42.51-13.77 51.744-29.58 5.364-9.184 7.372-21.401 5.383-32.744-4.135-23.576-24.855-39.89-56.578-44.547-20.938-3.073-44.578-.012-60.648 7.853-16.405 8.029-26.278 20.016-29.648 35.998-.884 4.196-.882 14.982.005 19.094 2.387 11.07 7.782 20.229 15.97 27.112 11.274 9.478 25.948 15.122 44.988 17.304 6.298.721 22.521.445 28.784-.49zm-482.679 27.227c-16.98-1.5-31.473-4.845-43.797-10.109-28.032-11.973-45.737-32.181-50.542-57.687-.918-4.871-1.268-15.846-.673-21.09 3.47-30.579 25.996-54.8 61.61-66.245 18.952-6.09 42.28-8.08 63.22-5.392 38.363 4.926 67.382 22.715 80.137 49.126 10.386 21.504 9.068 47.625-3.416 67.707-5.624 9.046-14.882 18.382-24.423 24.626-14.844 9.714-32.573 15.757-54.106 18.442-4.313.538-24.009.975-28.01.622zm22.708-26.74c16.698-1.772 30.745-6.54 41.314-14.02 8.64-6.116 15.478-15.13 18.546-24.449 1.796-5.454 2.152-8.015 2.152-15.469 0-7.432-.351-9.972-2.133-15.43-5.857-17.941-22.987-31.287-46.922-36.555-20.986-4.62-45.46-3.014-63.592 4.171-13.082 5.184-23.407 13.576-29.463 23.944-6.438 11.025-7.9 26.041-3.792 38.982 4.426 13.944 16.085 25.613 32.129 32.158 8.739 3.565 19.559 6.05 30.271 6.95 4.11.345 17.197.173 21.49-.282zm660.309 26.752c-.67-.076-3.019-.31-5.22-.518-17.67-1.675-36.246-7.255-49.865-14.979-18.411-10.442-31.235-25.284-37.09-42.925-3.961-11.938-4.637-25.355-1.9-37.699 4.14-18.665 15.501-34.514 33.145-46.236 23.268-15.458 57.48-22.324 90.505-18.162 27.438 3.457 50.044 13.492 65.773 29.198 11.98 11.961 18.866 25.977 20.857 42.445.517 4.28.437 12.935-.163 17.476-4.316 32.701-30.24 57.695-69.94 67.432-12.036 2.952-19.592 3.846-33.75 3.992-6.124.063-11.682.052-12.352-.024zm21.05-26.59c21.137-1.944 38.364-8.91 49.423-19.983 7.488-7.497 11.834-15.75 13.547-25.725.706-4.11.696-12.679-.02-16.942-3.853-22.952-24.09-39.59-54.077-44.457-7.2-1.169-11.988-1.55-19.485-1.55-33.62 0-59.706 12.677-69.739 33.89-2.99 6.323-4.37 12.848-4.37 20.667 0 10.317 2.404 18.5 7.832 26.653 9.965 14.968 28.862 24.53 53.874 27.262 5.159.563 17.805.665 23.016.186z" />
            </svg>
            <title>Oppo</title>
          </span>
        </a>
      </div> <!-- col.// -->
    </nav>
  </div>
</section>
<!--END BRANDS  -->

<script>

</script>