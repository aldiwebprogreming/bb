<div class="container-fluid py-0" style="background: #eb1d21;">
    <div class="container py-3">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-white text-uppercase">Kontak</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="<?= base_url('bathroom/') ?>" style="font-weight: boldk;">Home   <i class="fas fa-angle-double-right text-white mx-2"></i></a>

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
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Kontak Bathroom Boutique</h6>
                <!-- <h1 class="mb-4">Some Of Our Awesome Interior Designing Projects</h1> -->
            </div>
        </div>

        
        <div class="row">
            <div class="col-sm-7">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.01439480425!2d98.66706424897399!3d3.5841686973789697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131d247af3929%3A0xf8e60ff8e6f330c9!2sJl.%20KH.%20Zainul%20Arifin%20No.176B%2C%20Petisah%20Tengah%2C%20Kec.%20Medan%20Petisah%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020112!5e0!3m2!1sid!2sid!4v1654699115132!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>

         <div class="col-sm-5">
           <h5>Alamat : Jl. KH. Zainul  Arifin No.176B</h5>
           <hr>
           <h5>Whatshapp : +62813-7535-1890</h5>
           <hr>
           <h5>Instagram : Bathroomboutique</h5>
           <hr>
           <h5>Email : Bathroomboutique@gmail.com</h5>
           <hr>
       </div>
   </div>






   <div class="col-sm-6">

   </div>

   <div class="col-sm-6">

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

         $("#p_all").show();
         $("#p_kran").hide();
         $("#p_shower").hide();
         $("#p_wastafel").hide();
         $("#p_closed").hide();
         $("#p_bathtub").hide();


     })

        $("#kran").click(function(){

            $("#m_kran").show();
            $("#m_shower").hide();
            $("#m_wastafel").hide();
            $("#m_closed").hide();
            $("#m_bathtub").hide();
            $("#m_all").hide();

            $("#p_kran").show();
            $("#p_shower").hide();
            $("#p_wastafel").hide();
            $("#p_closed").hide();
            $("#p_bathtub").hide();
            $("#p_all").hide();

        })


        $("#shower").click(function(){
            $("#m_shower").show();
            $("#m_kran").hide();
            $("#m_wastafel").hide();
            $("#m_closed").hide();
            $("#m_bathtub").hide();
            $("#m_all").hide();

            $("#p_shower").show();
            $("#p_kran").hide();
            $("#p_wastafel").hide();
            $("#p_closed").hide();
            $("#p_bathtub").hide();
            $("#p_all").hide();
        })


        $("#wastafel").click(function(){
           $("#m_wastafel").show();
           $("#m_shower").hide();
           $("#m_kran").hide();
           $("#m_closed").hide();
           $("#m_bathtub").hide();
           $("#m_all").hide();

           $("#p_wastafel").show();
           $("#p_shower").hide();
           $("#p_kran").hide();
           $("#p_closed").hide();
           $("#p_bathtub").hide();
           $("#p_all").hide();
       })


        $("#bathtub").click(function(){
            $("#m_bathtub").show();
            $("#m_wastafel").hide();
            $("#m_shower").hide();
            $("#m_kran").hide();
            $("#m_closed").hide();
            $("#m_all").hide();

            $("#p_bathtub").show();
            $("#p_wastafel").hide();
            $("#p_shower").hide();
            $("#p_kran").hide();
            $("#p_closed").hide();
            $("#p_all").hide();
        })

        $("#closed").click(function(){
            $("#m_closed").show();
            $("#m_wastafel").hide();
            $("#m_shower").hide();
            $("#m_kran").hide();
            $("#m_bathtub").hide();
            $("#m_all").hide();

            $("#p_closed").show();
            $("#p_wastafel").hide();
            $("#p_shower").hide();
            $("#p_kran").hide();
            $("#p_bathtub").hide();
            $("#p_all").hide();
        })


    })
</script>




