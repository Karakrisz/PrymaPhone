 <section class="allmobile-content">
     <!--START LATEST ARRIVALS-->
     <div class="lastest_arrivals">
         <div class="container">
             <h1 class="lastest_arrivals__h1">Összes készülék</h1>

             <div class="lastest_arrivals__phone-box">
                 <div class="lastest_arrivals__phone-box__div">
                     <!-- <a href="phone-shop/product-detail.html" class="lastest-addto-cart"><i
                                    class="fa fa-shopping-cart"></i></a> -->
                     <div class="lastest_arrivals__phone-box__div__card lastest_arrivals__phone-box__div__card--d-flex">
                         <?php foreach ($allPhones as $phone) : ?>
                             <div class="image-holder">
                                 <!-- <a href="karaKrisz/img/silicon-case/silicon-case.jpg" data-fancybox="lastest_product" data-title="Shirt Name"> -->
                                 <?php echo "<img class='card-img-top' alt='" . $phone['brand'] . "' src='data:image/jpeg;base64," . base64_encode($phone['image']) . "'>"; ?>
                                 <!-- <img src="karaKrisz/img/silicon-case/silicon-case.jpg" class="card-img-top" alt="Lastest Arrivals 1"> -->
                                 </a>
                                 <p>
                                 <h5 class="card-title"><?php esc($phone['brand'] .=  ' ' . $phone['type']) ?></h5>
                                 </p>
                                 <p class="card-text"> <?php esc($phone['price']) ?> </p>
                                 <a href="/phone<?php esc($phone['id']) ?>" class="btn green-color-yellow-gradient-btn">További információ</a>
                             </div>
                         <?php endforeach; ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--END LATEST ARRIVALS-->
 </section>