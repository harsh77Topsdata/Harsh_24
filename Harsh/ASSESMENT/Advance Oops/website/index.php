<?php

include_once('header.php');

?>

<!-- plant -->
<div id="plant" class="section  product">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <div class="titlepage">
               <h2><strong class="black"> Our</strong> Products</h2>
               <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in some form, by injected randomised words which don't look even slightly believable</span>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clothes_main section ">
   <div class="container">
		<div class="row">

         <?php foreach ($manage_stock as $ms) { ?>
            <div class="card col-md-5 m-2">
               <img src="images/<?php echo $ms->image ?>" alt="" class="card-img-top">
               <div class="card-title mt-3">
                  <h3 class="text-center border-bottom"><?php echo $ms->Name ?></h3>
               </div>
               <div class="card-body">
                  <h2>Product Type: <?php echo $ms->Types ?></h2>
                  <h4 class="text-left">Price: <span>&#8377;</span><?php echo $ms->Price ?></h4>
                  <div class="mt-4">
                    <a href="buy?buy=<?php echo $ms->s_id ?>" class="btn btn-primary rounded-pill">Buy</a>
                    
                  </div>
               </div>

            </div>
         <?php } ?>

      </div>
   </div>
</div>
</div>
<!-- end plant -->
<!--about -->
<div class="section about ">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="titlepage">
               <h2><strong class="black"> About</strong> Us</h2>
               <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in some form, by injected randomised words which don't look even slightly believable</span>
            </div>
         </div>
      </div>
   </div>
</div>



<section>
   <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#main_slider" data-slide-to="0" class="active"></li>
         <li data-target="#main_slider" data-slide-to="1"></li>
         <li data-target="#main_slider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <div class="row marginii">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="carousel-sporrt_text ">
                        <h1 class="sporrt_text">Best sports item shop our</h1>
                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the
                           majority have suffered alteration in some form, by injected randomised words which don't look
                           even slightly believableThere are many variations of passages of Lorem Ipsum available, but
                           the majority have suffered alteration in some form, by injected randomised words which don't
                           look even slightly believable</p>
                        <div class="btn_main">
                           <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="img-box">
                        <figure><img src="images/child-image.png" style="max-width: 100%; border: 15px solid #fff;" />
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <div class="row marginii">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="carousel-sporrt_text ">
                        <h1 class="sporrt_text">Best sports item shop our</h1>
                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the
                           majority have suffered alteration in some form, by injected randomised words which don't look
                           even slightly believableThere are many variations of passages of Lorem Ipsum available, but
                           the majority have suffered alteration in some form, by injected randomised words which don't
                           look even slightly believable</p>
                        <div class="btn_main">
                           <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="img-box ">
                        <figure><img src="images/child-image.png" style="max-width: 100%; border: 15px solid #fff;" />
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <div class="row marginii">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="carousel-sporrt_text ">
                        <h1 class="sporrt_text">Best sports item shop our</h1>
                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the
                           majority have suffered alteration in some form, by injected randomised words which don't look
                           even slightly believableThere are many variations of passages of Lorem Ipsum available, but
                           the majority have suffered alteration in some form, by injected randomised words which don't
                           look even slightly believable</p>
                        <div class="btn_main">
                           <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="img-box">
                        <figure><img src="images/child-image.png" style="max-width: 100%; border: 15px solid #fff;" />
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
<!-- end about -->
<!--Our  Clients -->
<div id="plant" class="section_Clients layout_padding padding_bottom_0">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <div class="titlepage">
               <h2> Testmonial</h2>
               <span style="text-align: center;">available, but the majority have suffered alteration in some form, by
                  injected randomised words which don't look even slightly believable</span>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="section Clients_2 layout_padding padding-top_0">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">

            <div id="testimonial" class="carousel slide" data-ride="carousel">

               <!-- Indicators -->
               <ul class="carousel-indicators">
                  <li data-target="#testimonial" data-slide-to="0" class="active"></li>
                  <li data-target="#testimonial" data-slide-to="1"></li>
                  <li data-target="#testimonial" data-slide-to="2"></li>
               </ul>

               <!-- The slideshow -->
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="titlepage">
                        <div class="john">
                           <div class="john_image"><img src="images/john-image.png" style="max-width: 100%;"></div>
                           <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                           <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by
                              the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                              is that it has a more-or-less normal distribution of letters, asIt is a long established
                              fact that a reader will be distracted by the readable content of a page when looking at
                              its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                              distribution of letters, as </p>
                           <div class="icon_image"><img src="images/icon-1.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="titlepage">
                        <div class="john">
                           <div class="john_image"><img src="images/john-image.png" style="max-width: 100%;"></div>
                           <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                           <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by
                              the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                              is that it has a more-or-less normal distribution of letters, asIt is a long established
                              fact that a reader will be distracted by the readable content of a page when looking at
                              its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                              distribution of letters, as </p>
                           <div class="icon_image"><img src="images/icon-1.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="titlepage">
                        <div class="john">
                           <div class="john_image"><img src="images/john-image.png" style="max-width: 100%;"></div>
                           <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                           <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by
                              the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                              is that it has a more-or-less normal distribution of letters, asIt is a long established
                              fact that a reader will be distracted by the readable content of a page when looking at
                              its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                              distribution of letters, as </p>
                           <div class="icon_image"><img src="images/icon-1.png"></div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Left and right controls -->
               <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
               </a>
               <a class="carousel-control-next" href="#testimonial" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
               </a>
            </div>


         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
<!-- end Our  Clients -->
<!-- start Contact Us-->

<div id="plant" class="contact_us layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <div class="titlepage">
               <h2><strong class="black"> Contact</strong> Us</h2>
               <span style="text-align: center;">available, but the majority have suffered alteration in some form, by
                  injected randomised words which don't look even slightly believable</span>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="contact_us_2 layout_padding paddind_bottom_0">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="soc_text">soC</div>
         </div>
         <div class="col-md-6">
            <div class="email_btn">
               <form action="/action_page.php">
                  <div class="form-group">
                     <input type="text" class="form-control form-control-sm" placeholder="Name" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control form-control-sm" placeholder="Email" name="Email">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control form-control-sm" placeholder="Phone" name="Phone">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control form-control-sm" placeholder="Massage" name="text3">
                  </div>
                  <div class="submit_btn">
                     <button type="submit" class="btn btn-primary"
                        style="background: #081b30; color: #fff; padding: 11px;">Send</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="contact_us_3 layout_padding">
            <div class="row">
               <div class="col-md-4">
                  <h1 style="color: #ffffff; ">Newsletter</h1>
                  <p class="long_text">It is a long established fact that a reader will be distracted a</p>
               </div>
               <div class="col-md-8">
                  <div class="email_text">
                     <div class="input-group mb-3">
                        <input
                           style="border-bottom-left-radius: 20px !important; border-top-left-radius: 20px !important;"
                           type="text" class="form-control" placeholder="Enter your email">
                        <div class="input-group-append">
                           <button
                              style="border-top-right-radius: 20px !important; border-bottom-right-radius: 20px !important; color: #fff; padding-bottom: 10px; padding-top: 10px;"
                              class="btn btn-primary" type="Subscribe">Subscribe</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div id="footer" class="Address layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="titlepage">
               <div class="main">
                  <h1 class="address_text">Address</h1>
               </div>
            </div>
         </div>
      </div>
      <div class="address_2">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
               <div class="site_info">
                  <span class="info_icon"><img src="images/map-icon.png" /></span>
                  <span style="margin-top: 10px;">Ahmedabad,Gujarat,India</span>
               </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
               <div class="site_info">
                  <span class="info_icon"><img src="images/phone-icon.png" /></span>
                  <span style="margin-top: 21px;">( +91 7986543234 )</span>
               </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
               <div class="site_info">
                  <span class="info_icon"><img src="images/email-icon.png" /></span>
                  <span style="margin-top: 21px;">dynamic@gmail.com</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="menu_main">
      <div class="menu_text">
         <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="testmonial.php">Testmonial</a></li>
            <li><a href="clients.php">Shop</a></li>
            <li><a href="contact.php">Contact Us</a></li>
         </ul>
      </div>
   </div>
</div>
</div>

<!-- end Contact Us-->
<?php

include_once('footer.php');

?>