<div class="container-fluid bg-danger py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-white text-uppercase">Produk Kitchen</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="">Home   <i class="fas fa-angle-double-right text-primary mx-2"></i></a>

                    <!--   <a class="btn btn-outline-primary disabled" href=""></a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Product Kitchen</h6>
                <!-- <h1 class="mb-4">Some Of Our Awesome Interior Designing Projects</h1> -->
            </div>
        </div>



        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-primary m-1 active" id="all"  data-filter="*">All</li>
                    <li class="btn btn-outline-primary m-1" id="kran" data-filter=".kran">Kran</li>
                    <li class="btn btn-outline-primary m-1" id="shower" data-filter=".shower">Shower</li>
                    <li class="btn btn-outline-primary m-1" id="wastafel" data-filter=".wastafel">Wastafel</li>
                    <li class="btn btn-outline-primary m-1" id="bathtub" data-filter=".bathtub">Bathtub</li>
                    <li class="btn btn-outline-primary m-1" id="closed" data-filter=".closet">Closet</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Pilih Berdasarkan Merek Produk 
                <hr>

                <div id="m_all" style="">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">- Grohe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">- Kohler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">- Kolpa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">- Knief</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">- Durant</a>
                        </li>

                    </ul>
                </div>

                <div id="m_kran" style="display: none;">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">- Grohe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">- Kohler</a>
                        </li>

                    </ul>
                </div>

                <div id="m_shower" style="display: none;">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">- Grohe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">- Kohler</a>
                        </li>
                    </ul>
                </div>

                <div id="m_wastafel" style="display: none;">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">- Grohe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">- Kohler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">- Durant</a>
                        </li>
                    </ul>
                </div>

                <div id="m_bathtub" style="display: none;">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">- Kolpa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">- Knief</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">- Kohler</a>
                        </li>
                    </ul>
                </div>

                <div id="m_closed" style="display: none;">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">- Grohe</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">- Kohler</a>
                        </li>
                    </ul>
                </div>



            </div>

            <div class="col-sm-10">
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
                            <img class="card-img-top" src="<?= base_url('assets/produk/shower/4.jpg') ?>" alt="Card image cap">
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
                            <img class="card-img-top" src="<?= base_url('assets/produk/closet/1.jpeg') ?>" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href=""  class="btn btn-danger btn-block"><i class="fa-solid fa-bag-shopping"></i> Beli</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-0 portfolio-item closet">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?= base_url('assets/produk/closet/12.jpeg') ?>" alt="Card image cap">
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





    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0/dist/vue.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<script>
    var app = new Vue({
        el: '#app',
        data: {
            pesan: 'Hai, ini Vue!'
        }
    })
</script>

<script>
    $(document).ready(function(){

        $("#all").click(function(){
           $("#m_all").show();
           $("#m_kran").hide();
           $("#m_shower").hide();
           $("#m_wastafel").hide();
           $("#m_closed").hide();
           $("#m_bathtub").hide();


       })

        $("#kran").click(function(){

            $("#m_kran").show();
            $("#m_shower").hide();
            $("#m_wastafel").hide();
            $("#m_closed").hide();
            $("#m_bathtub").hide();
            $("#m_all").hide();

        })


        $("#shower").click(function(){
            $("#m_shower").show();
            $("#m_kran").hide();
            $("#m_wastafel").hide();
            $("#m_closed").hide();
            $("#m_bathtub").hide();
            $("#m_all").hide();
        })


        $("#wastafel").click(function(){
         $("#m_wastafel").show();
         $("#m_shower").hide();
         $("#m_kran").hide();
         $("#m_closed").hide();
         $("#m_bathtub").hide();
         $("#m_all").hide();
     })


        $("#bathtub").click(function(){
            $("#m_bathtub").show();
            $("#m_wastafel").hide();
            $("#m_shower").hide();
            $("#m_kran").hide();
            $("#m_closed").hide();
            $("#m_all").hide();
        })

        $("#closed").click(function(){
            $("#m_closed").show();
            $("#m_wastafel").hide();
            $("#m_shower").hide();
            $("#m_kran").hide();
            $("#m_bathtub").hide();
            $("#m_all").hide();
        })


    })
</script>




