


<!-- Under Nav Start -->
<div class="container-fluid bg-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-left mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5>Our Office</h5>
                        <p class="m-0">JL.K.H. Zainul Arifin No.176-B Medan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5>Email Us</h5>
                        <p class="m-0">Bathroom@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5>Call Us</h5>
                        <p class="m-0">+62813-7535-1890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Under Nav End -->


<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?= base_url('assets/') ?>img/slide1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 800px;">
                        <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                        <h3 class="display-3 text-white mb-md-4">Make Your Home Better</h3>
                        <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a> -->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?= base_url('assets/') ?>img/slide2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 800px;">
                        <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                        <h3 class="display-3 text-white mb-md-4">Stay At Home In Peace</h3>
                        <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->

<!-- Projects Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">About</h6>
                <!-- <h1 class="mb-4">Some Of Our Awesome Interior Designing Projects</h1>  -->
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
               <img src="<?= base_url('assets/img/bb.png') ?>" class="img-fluid" alt="Responsive image"> 
           </div>
           <div class="col-sm-6">
            <h3 class="mb-4">Bathroom Boutique</h3>
            <p>Bathroom Boutique adalah perusahaan yang bergerak dibidang perlengkapan kamar mandi.</p>
            <p>Bathroom Boutique berdiri sejak tahun 1990 dikota Medan. Tempat dimana anda mendapatkan kualitas produk dengan berbagai design yang anda inginkan.</p>
        </div>
    </div>
</div>
</div>




<!-- Projects Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Product</h6>
                <!-- <h1 class="mb-4">Some Of Our Awesome Interior Designing Projects</h1> -->
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-primary m-1 active"  data-filter="*">All</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".kran">Kran</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".shower">Shower</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".wastafel">Wastafel</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".bathtub">Bathtub</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".closet">Closet</li>
                </ul>
            </div>
        </div>
        <div class="row mx-1 portfolio-container">
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item kran">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/kran/7.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item kran">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/kran/8.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item kran">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/kran/9.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item shower">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/shower/1.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item shower">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/shower/7.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item shower">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/shower/5.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>

            <!-- Wastefall -->

            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item wastafel">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/wastafel/2.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item wastafel">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/wastafel/3.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item wastafel">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/wastafel/0019.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>

            <!-- Bathtub -->
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item bathtub">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/bathtub/1.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item bathtub">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/bathtub/2.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item bathtub">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/bathtub/3.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>

            <!-- Closet -->
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item closet">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/closet/Closet San Raphael Grande.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item closet">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/closet/Closet Electric Eir.jpg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item closet">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url('assets/produk/closet/13.jpeg') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>












<div class="container-fluid bg-light" id="abaout">
  <div class="container">
      <br>
      <div class="row">

          <div class="col-sm-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0143714971973!2d98.6670696149279!3d3.5841740513233358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131d247af3929%3A0xf8e60ff8e6f330c9!2sJl.%20KH.%20Zainul%20Arifin%20No.176B%2C%20Petisah%20Tengah%2C%20Kec.%20Medan%20Petisah%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020112!5e0!3m2!1sid!2sid!4v1652084805325!5m2!1sid!2sid" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-sm-6">
              <h6 class="text-primary font-weight-normal text-uppercase mb-3">Contact</h6>
              <!-- s -->
              <!--  <p>JL.K.H.Jainul Arfin No.176-B Medan</p> -->
              <div class="row py-2">
                  <div class="col-sm-6">
                      <div class="d-flex align-items-center mb-4">
                          <i class="fab fa-map text-primary m-0 mr-3" style="font-size: 30px;"></i>
                          <h6 class="text-truncate m-0">JL.K.H. Zainul Arifin No.176-B Medan</h6>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="d-flex align-items-center mb-4">
                          <i class="fab fa-envelope text-primary m-0 mr-3" style="font-size: 30px;"></i>
                          <h5 class="text-truncate m-0">Bathroom@gmail.com</h5>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="d-flex align-items-center mb-4">

                          <i class="fab fa-instagram text-primary m-0 mr-3" style="font-size: 30px;"></i>
                          <h5 class="text-truncate m-0">Bathroomboutique</h5>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="d-flex align-items-center mb-4">
                          <i class="fas fa-instagram text-primary m-0 mr-3" style="font-size: 30px;"></i>
                          <h5 class="text-truncate m-0">Residential Design</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <br>
  </div>
</div>

