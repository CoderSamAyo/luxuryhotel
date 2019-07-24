
    
   <?php 
  
    
    include_once("includes/navbar.php");


  ?>


    <!-- END header -->
    <script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "article",
  "name" : "Statement Hotel Abuja",
  "dateModified" : "2019-07-18",
  "author" : {
    "@type" : "Person",
    "name" : "Guests"
  },
  "mainEntityOfPage": {
         "@type": "WebPage",
         "@id": "http://statementhotel.com"
         },
  "headline" : "This is headline",
  "datePublished" : "2019-07-18 or 2019-07-27T10:31",
  "image" : "http://www.statementhotel.com/images/classic-room/6.jpg",
  "articleBody" : "Statement Hotel &amp; Gallery Resort provides express check-in and check-out, non-smoking rooms, a bar, free WiFi and a shared lounge. Boasting room service, this property also provides guests with a restaurant. The hotel offers an outdoor swimming pool, fitness centre, and a 24-hour front desk. All rooms include a desk, a flat-screen TV and a private bathroom. All guest rooms will provide guests with a fridge.",
  "url" : "http://statementhotel.com",
  "publisher": {
        "@type": "Organization",
        "name": "Statement Hotel",
        "logo": {
            "@type": "ImageObject",
            "name": "Statement Hotel",
            "width": "100",
            "height": "100",
            "url": "http://statementhotel.com/images/st-logo.png"
        },
  "aggregateRating" : {
    "@type" : "AggregateRating",
    "ratingValue" : "4",
    "bestRating" : "5",
    "ratingCount" : "43"
  }
}
}
</script>
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "The Statement hotel",
  "image" : "images/ft-logo.png",
  "telephone" : "+234.0706-815-1023",
  "email" : "booking@statementhotel.com",
  "priceRange" : "N30,000 - N80,000",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Plot 1002 1st Avenue",
    "addressLocality" : "By Shehu Shagari Way, Central Business District",
    "addressRegion" : "Abuja"
  },
  "aggregateRating" : {
    "@type" : "AggregateRating",
    "ratingValue" : "4",
    "bestRating" : "5",
    "worstRating" : "3",
    "ratingCount" : "74"
  }
  
}
</script>
<script type="application/ld+json">
        {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Statement Hotel Featured Rooms",
      "image": 
        "https://example.com/photos/1x1/photo.jpg",
      "brand": {
        "@type": "Thing",
        "name": "Statement Hotel"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.4",
        "ratingCount": "89"
      },
      "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "30000",
        "highPrice": "80000",
        "priceCurrency": "NGN"
      }
    }
  
</script>
<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/<?php echo settings(1)['main_img']; ?>);")>
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">
            <div class="mb-5 element-animate" >
              <h1  >Welcome To Our Luxury Rooms</h1>
              <p >Discover our world's #1 Luxury Room For VIP.</p>
              <p ><a href="booknow.html" class="btn btn-primary">Book Now</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5">
            <div class="heading-wrap text-center element-animate">
              <h2 class="heading">Stay and Enjoy</h2>
              <p class="mb-5"> <?php echo settings(1)['description'] ?> </p>
              
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6">
            <img src="images/<?php echo fac(1)[7][3][1] ?>" alt="<?php echo fac(1)[4][3] ?>" title="<?php echo fac(1)[1][3] ?>" class="img-md-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
              <h2 class="heading">Featured Rooms</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-7">
            <div class="media d-block room mb-0">
              <div style="position: relative; background-color: rgba(0,0,0,0.5);">
                <img src="images/<?php echo room(1)[7][1][3] ?>" alt="<?php echo room(1)[4][1] ?>" title="<?php echo room(1)[1][1] ?>" class="img-fluid">
                <div style="position: absolute;bottom: 0px; width: 100%; background-color:rgba(0,0,0,0.5); padding: 10px">
                  <div class="clearfix">
                    <span class="float-right" style="color: #fff; padding-right:10px">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span class="float-left">
                      <strong style="color: #fff; padding: 10px; text-transform: uppercase; "><?php echo room(1)[1][1] ?> </strong>
                    </span>
                  </div>
                  
                </div>
              </div>
              <div class="media-body">
                
                
                <div class="clearfix">
                          <div class="col-sm-8 float-left">
                            <h3 class="mt-0"><a href="rooms.html"><?php echo room(1)[1][1] ?> </a></h3>
                              <ul class="room-specs">
                                <li><span class="ion-ios-people-outline"></span> 2 Guests</li>
                                <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li>
                                 <li><i class="fa fa-bed" aria-hidden="true"></i> &nbsp; Beds</li> 
                              </ul>
                                
                                    <button type="button" class="btn btn-primary btn-sm ">Book <del>N</del><?php echo room(1)[2][1] ?> </button>
                              
                          </div>
                          <div class="col-sm-4 float-right" style=" margin-top: 30px">
                            <P><?php
                            echo shapeSpace_truncate_text(room(1)[4][1], 45, ' <a href="room1.html">..continue..</a>');
                              ?> </P>
                          </div>
                    
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 room-thumbnail-absolute">
            <a href="#" class="media d-block room bg first-room" >
              <div style="position: relative; background-color: rgba(0,0,0,0.5);">
                 
                      <img src="images/<?php echo room(1)[7][2][1] ?>" alt="<?php echo room(1)[4][2] ?>" title="<?php echo room(1)[1][2] ?>" class="img-fluid">

                <div style="position: absolute;bottom: 0px; width: 100%;background-color:rgba(0,0,0,0.5); padding: 10px">
                  <div class="clearfix">
                    <span class="float-right" style="color: #fff; padding-right:10px">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span class="float-left">
                      <strong style="color: #fff; padding: 10px; text-transform: uppercase; "><?php echo room(1)[1][2] ?></strong>
                    </span>
                  </div>
                    
                  
                </div>
              </div>
                    
            </a>
            <a href="#" class="media d-block room bg first-room" >
              <div style="position: relative; background-color: rgba(0,0,0,0.5);">
                 
                      <img src="images/<?php echo room(1)[7][3][1] ?>" alt="<?php echo room(1)[4][3] ?>" title="<?php echo room(1)[1][3] ?>" class="img-fluid">

                <div style="position: absolute;bottom: 0px;background-color:rgba(0,0,0,0.5); width: 100%; padding: 10px">
                  <div class="clearfix">
                    <span class="float-right" style="color: #fff; padding-right:10px">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span class="float-left">
                      <strong style="color: #fff; padding: 10px; text-transform: uppercase; "><?php echo room(1)[1][3] ?></strong>
                    </span>
                  </div>
                    
                  
                </div>
              </div>
                    
            </a>
            
          </div>
        </div>
      </div>
    </section>
   
    
    <section class="section-cover" data-stellar-background-ratio="0.5" style="color: black; background-image: url(images/<?php echo room(1)[7][1][2] ?>) ;">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2><?php echo settings(1)['footer_desp'] ?></h2>
            <p class="lead mb-5"></p>
            <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class=" bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h2 class="heading">Gallery</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-4">
            <div class="post-entry">
              <a href="room2.html"><img src="images/<?php echo room(1)[7][3][1] ?>" alt="<?php echo room(1)[1][3] ?>"  title="<?php echo room(1)[1][3] ?>" class="img-fluid"></a>
              <div class="body-text">
                <div class="category"><?php echo room(1)[1][3] ?></div>
                <h3 class="mb-3"><a href="room2.html"><?php echo room(1)[1][3] ?></a></h3>
                <p class="mb-4">
                  <?php
                       echo shapeSpace_truncate_text(room(1)[4][3], 45, ' <a href="room3.html">..continue..</a>');
                              ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href=""><img src="images/<?php echo fac(1)[7][2][1] ?>" alt="taverna restaurant" title="taverna restaurant"  class="img-fluid"></a>
              <div class="body-text">
                <div class="category"><?php echo fac(1)[1][2] ?></div>
                <h3 class="mb-3"><a href="gallery.html"><?php echo fac(1)[1][2] ?></a></h3>
                <p class="mb-4"><?php echo fac(1)[5][2] ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="room1.html"><img src="images/<?php echo room(1)[7][1][1] ?>" alt="<?php echo room(1)[1][1] ?>" title="<?php echo room(1)[1][1] ?>" class="img-fluid"></a>
              <div class="body-text">
                <div class="category"><?php echo room(1)[1][1] ?></div>
                <h3 class="mb-3"><a href="room1.html"><?php echo room(1)[1][1] ?></a></h3>
                <p class="mb-4"> <?php 
                    echo shapeSpace_truncate_text(room(1)[4][1], 45, ' <a href="room1.html">..continue..</a>');
                              ?>

              </p>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-auto">
                <p><a href="gallery.html" class="btn btn-primary btn-sm">View All Gallery</a></p>
              </div>
            </div>
        </div>
        </div>
        
      </div>
    
    </section>
    <!-- END section -->
  <section class=" bg-light">
      <div class="container">
      <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h2 class="heading">Facilities</h2>
          </div>
        </div>
  <div class="mt-5">
<div class="container">
            <div class="row ">
          <div class="col-md-4" style="height: 400px; margin-top:20px;margin-bottom: 10px;">
            <div class="post-entry mh-100 d-inline-block p-2 " style="height:400px; background-color: #fff";>
              <a href="gallery.html"><img  src="images/<?php echo fac(1)[7][5][1]?>"  class="img-fluid" alt="<?php echo fac(1)[5][5] ?>" title="<?php echo fac(1)[1][5] ?>"></a>
              <div class="body-text" style="height: 100px; padding: 0px;">
                <div class="category"><?php echo fac(1)[1][5] ?></div>
                <h3 class=""><a href="gallery.html"><?php echo fac(1)[1][5] ?></a></h3>
                <p class="mb-4" style="height:100px;background-color: #fff"> <?php echo shapeSpace_truncate_text(fac(1)[5][5], 45, ' <a href="facilities.html">..continue..</a>'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="height: 400px; margin-top:20px;margin-bottom: 10px;">
            <div class="post-entry mh-100 d-inline-block p-2 " style="height:400px; background-color: #fff";>
              <a href="gallery.html"><img src="images/<?php echo fac(1)[7][4][1]?>"  class="img-fluid" alt="<?php echo fac(1)[5][4] ?>" title="<?php echo fac(1)[1][4] ?>"></a>
              <div class="body-text" style="height: 100px; padding: 0px;">
                <div class="category"><?php echo fac(1)[1][4] ?></div>
                <h3 class=""><a href="gallery.html"><?php echo fac(1)[1][4] ?></a></h3>
                <p class="mb-4" style="height:100px;background-color: #fff"><?php echo shapeSpace_truncate_text(fac(1)[5][4], 45, ' <a href="facilities.html">..continue..</a>'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-top:20px;margin-bottom: 10px; ">
          <a href="">
             <div class="card bg-dark text-white" >
               <img class="card-img img-fluid" src="images/<?php echo fac(1)[7][6][1]?>" style="height: 400px" alt="<?php echo fac(1)[1][6] ?>" title="<?php echo fac(1)[5][6] ?>">
               <div class="card-img-overlay d-flex">
                 <div class="align-self-center mx-auto" data-fancybox href="" style="color: #fff;">
                   <i class="fa fa-plus" style="font-size:24px"></i><strong style="font-size: 24px;font-weight: 900"> &nbsp;See more</strong>
                 </div>  
               </div>
            </div>
          </a>
          </div>
        </div>
        </div>
      </div>
      </div>
    </section>
      
    
  </p>
  <?php include_once("includes/footer.php"); ?>