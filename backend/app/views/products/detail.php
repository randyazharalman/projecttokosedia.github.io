<section class="padding-top">
  <header class="section-heading">
    <!-- <button class="bg-label btn mt-2"><i class="fa-solid fa-circle-arrow-left"></i></button> -->
    <h3 class="section-title text-center fw-bold label mt-5">Product Details</h3>
    <hr class="divider">
  </header>
  <div class="container mt-4">


    <div class="card col-lg mx-auto border-label mb-3" style="max-width: 1000px; height:70vh;">
      <div class="row g-0 ">
        <div class="col-md-4 text-center ">
          <div class="box-img  mt-5 h-100 justify-content-center align-items-center ">
            <img src="<?= BASEURL; ?>img/<?= $data['data']['photo_product'] ?>" class="img-fluid image-product-watch rounded-start px-3" alt="..." width="350" height="500">
            <div class="thumbnails" id="thumbnails">
              <img class="thumbnail border border-2 rounded thumb-active" src="<? BASEURL; ?>img/ip11promax-removebg-preview.png" alt="">
              <img class="thumbnail border border-2 rounded" src="<? BASEURL; ?>img/<?= $data['data']['photo_product']; ?>" alt="">
              <img class="thumbnail border border-2 rounded" src="assets/img/<?= $data['data']['photo_1']; ?>" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-8 d-flex mt-5">
          <div class="card-body mb-3 ">
            <h2 class="fw-bold label"><?= $data['data']['name_product']; ?></h2>
            <h5 class="mt-3 fw-bold"><?= $data['data']['price_after']; ?><span class="text-muted fw-normal"> <del><small> <?= $data['data']['price_before']; ?></small></del></span></h5>
            <a href="" data-bs-target="#buyModal" data-id="" type="button" data-bs-toggle="modal" class="btn btn-sm bg-label">buy now</a>
            <p class="product-description">
              <span>Description :</span> <br />
              <?= nl2br($data['data']["description"]) ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal -->
  <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title label">Buy <span id="nameproduct"><?= $data['data']['name_product']; ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row g-0">
              <div class="col">
                <img src="<?= BASEURL; ?>img/<?= $data['data']['photo_product'] ?>" width="200" height="200" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <h5 class="label fw-bold"><?= $data['data']['name_product']; ?><br></h5> <small class="label fw-bold"><?= $data['data']['price_after']; ?> <del><span class="fw-light text-muted"><?= $data['data']['price_before']; ?></span></del> </small>
                <br>
                <small>Stock : <?= $data['data']['stock']; ?></small>
                <form action="">
                  <div class="form-check form-check-inline mt-2">
                    <input class="form-check-input btn btn-outline-warning me-2 " type="checkbox" name="inlineRadioOptions" id="paynow"
                      value="option1">
                    <label class="form-check-label" for="paynow"><small>Pay now</small></label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input btn btn-outline-success me-2" type="checkbox" name="inlineRadioOptions" id="cod"
                      value="option2">
                    <label class="form-check-label" for="cod"><small>COD</small></label>
                  </div> <br>
                  <small class="label ">quantity : </small> <br>
                  <div class="form-check form-check-inline px-0">
                    <input type="range" class="form-range" min="0" max="<?= $data['data']['stock']; ?>" step="1" id="customRange1"onchange="updateTextInput(this.value);">
                    <input type="text" class="form-control col-sm-2 col-form-label col-form-label-sm" id="textInput" value="">

                  </div>
                </form>
                <small class="label py-2">color : </small> <br>
                <div class="form-check form-check-inline">

                  <input class="form-check-input btn btn-dark me-2" type="checkbox" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1"><small> Black</small></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input btn btn-primary me-2" type="checkbox" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2"> <small> Blue</small></label>
                </div> <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input btn btn-secondary me-2" type="checkbox" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio3"> <small> Silver</small></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input btn btn-info me-2" type="checkbox" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio3"> <small> Skyblue</small></label>
                </div>
              </div>
              <div class="col-12 mt-2">
                <label for="inputAddress2" class="form-label label"> <small> Address :</small></label>
                <input type="text" class="form-control col-sm-2 col-form-label col-form-label-sm" id="inputAddress2" placeholder="input address.." autocomplete="off">
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-label" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-sm bg-label">checkout</button>
      </div>
    </div>
  </div>
</div>
<script>
    function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
</script>