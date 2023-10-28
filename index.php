<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Padma Bridge</title>
  
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <?php wp_head();?>
  </head>
  <body>
    <!-- header start -->

    <header class="container-fluid ps-0 pe-0 slider-cont">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <?php
        $slider=new WP_Query([
          'post_type'=>'post',
          'category_name'=>'slider'
        ]);
        ?>
        <div class="carousel-inner">
          <?php 
          $x=0;
          while($slider->have_posts()){$slider->the_post();
            $x++;
          ?>
          <div class="sliders slider-1 carousel-item  <?= ($x===1)?'active':''  ?> ">
          <?php the_post_thumbnail(); ?>
          </div>
          <?php } ?>
        
        </div>
      </div>
    </header>
    <!-- header end  -->

    <!-- logo start  -->

    <section class="container">
      <div class="logo1"><?php the_custom_logo(); ?> </div>
      <div class="logo2"><?php the_custom_logo(); ?> </div>
    </section>

    <!-- logo end  -->

    <!-- menu start  -->
    <section class="menus">
      <nav
        class="navbar navbar-expand-lg bg-body-tertiary border pt-0 pb-0 menu_content"
      >
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item border-end border-start text-center py-1">
                <i class="bx bx-home-alt"></i>
                <a
                  class="nav-link active text-white"
                  aria-current="page"
                  href="#"
                  >Home</a
                >
              </li>
              <li class="nav-item border-end text-center py-1">
                <i class="bx bxs-cog"></i>
                <a class="nav-link" href="#">Project Overview</a>
              </li>
              <li class="nav-item border-end text-center py-1">
                <i class="bx bxs-cog"></i>
                <a class="nav-link" href="#">Activitics & Impact</a>
              </li>
              <li class="nav-item border-end text-center py-1">
                <i class="bx bx-user-pin bx-tada"></i>
                <a class="nav-link" href="#">Project Team</a>
              </li>
              <li class="nav-item border-end text-center py-1">
                <i class="bx bxs-image"></i>
                <a class="nav-link" href="#">project Progress</a>
              </li>
              <li class="nav-item border-end text-center py-1">
                <i class="bx bxs-camera"></i>
                <a class="nav-link" href="#">Gallery</a>
              </li>
              <li class="nav-item border-end text-center py-1">
                <i class="bx bxs-food-menu"></i>
                <a class="nav-link" href="#">News & Events</a>
              </li>
              <li class="nav-item border-end text-center py-1">
                <i class="bx bxs-edit-alt"></i>
                <a class="nav-link" href="#">Tender</a>
              </li>
              <li class="nav-item border-end text-center py-1">
                <i class="bx bxs-contact"></i>
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- menu end  -->

    <!-- text-section  -->
    <section class="cont mt-5 text-center mb-5">
      <h3 class="fw-bold">
        Welcome to
        <span class="text-danger">PADMA MULTIPURPOSE BRIDGE PROJECT</span>
      </h3>
      <p class="mb-5 txt-sec">
        The Padma Bridge is a multipurpose road-rail bridge across the Padma
        River to be constructed in Bangladesh. When completed it will be the
        largest bridge in Bangladesh and the first fixed river crossing for road
        traffic. It will connect Louhajong, Munshiganj to Shariatpur and
        Madaripur, linking the south-west of the country, to northern and
        eastern regions.
      </p>
    </section>
    <!-- text-section end -->

    <!-- card section  -->
    <section class="card_part cont mt-5 mb-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">


        <div class="col">
          <div class="card col_part">
            <div class="img_part">
              <img
                src="<?php echo get_template_directory_uri()?>./assets/img/icons/service-bkg.png"
                class="card-img-top w-25"
                alt="..."
              />
              <i class="bx bx-desktop" style="color: #ffffff"></i>
            </div>
            <div class="card-body text-center card_text mt-5">
              <a href="#"><h5 class="card-title">General Information</h5></a>
              <a href="#"><p>Padma Multipurpose Bridge</p></a>
              <a href="#"
                ><p class="card-text">
                  Main Bridge Length: 6.15 km Viaduct: 3.148 km (Road), 532 m
                  (Rail)
                </p></a
              >
              <a href="#"><p>Approach Road: 12 km</p></a>
              <button>
                <a href="#">Read more</a>
                <a href="#" class="plus">+</a>
              </button>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card col_part">
            <div class="img_part">
              <img
                src="<?php echo get_template_directory_uri()?>./assets/img/icons/service-bkg.png"
                class="card-img-top w-25"
                alt="..."
              />
              <i class="bx bxs-cog" style="color: #ffffff"></i>
            </div>
            <div class="card-body text-center card_text mt-5">
              <a href="#"><h5 class="card-title">General Information</h5></a>
              <a href="#"><p>Padma Multipurpose Bridge</p></a>
              <a href="#"
                ><p class="card-text">
                  Main Bridge Length: 6.15 km Viaduct: 3.148 km (Road), 532 m
                  (Rail)
                </p></a
              >
              <a href="#"><p>Approach Road: 12 km</p></a>
              <button>
                <a href="#">Read more</a>
                <a href="#" class="plus">+</a>
              </button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card col_part">
            <div class="img_part">
              <img
                src="<?php echo get_template_directory_uri()?>./assets/img/icons/service-bkg.png"
                class="card-img-top w-25"
                alt="..."
              />
              <i class="bx bx-bar-chart" style="color: #ffffff"></i>
            </div>
            <div class="card-body text-center card_text mt-5">
              <a href="#"><h5 class="card-title">General Information</h5></a>
              <a href="#"><p>Padma Multipurpose Bridge</p></a>
              <a href="#"
                ><p class="card-text">
                  Main Bridge Length: 6.15 km Viaduct: 3.148 km (Road), 532 m
                  (Rail)
                </p></a
              >
              <a href="#"><p>Approach Road: 12 km</p></a>
              <button>
                <a href="#">Read more</a>
                <a href="#" class="plus">+</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- card section end -->

    <!-- recent photo start  -->
    <section class="cont mt-5 mb-5 text-center">
      <div class="photo-card">
        <div class="title">
          <div class="title-cont">
            <h3>Recent Photos</h3>
            <p>Some latest project pictures</p>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
          <div class="col">
            <div class="card">
              <img
                src="<?php echo get_template_directory_uri()?>./assets/img/thumbnail/p02.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Opening Ceremony of Padma Bridge</h5>
                <p class="card-text">Opening Ceremony of Padma Bridge</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img
                src="<?php echo get_template_directory_uri()?>./assets/img/thumbnail/5_Nos._Span_Erection.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">
                  Erection 05 Nos. Span on Pier 7A to 7F.jpg
                </h5>
                <p class="card-text">
                  Padma Bridge 1st Span 7A Erection on P37 & P38, 2nd Span 7B
                  Erection on P38 and P39, 3rd Span 7C Erection on P39 and P40,
                  4th Span 7E Erection on P40 and P41 and 5th Span 7F Erection
                  on P41 and P42
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img
                src="<?php echo get_template_directory_uri()?>./assets/img/thumbnail/Pier_7A_to_7F.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">
                  Erection 05 Nos. Span on Pier 7A to 7F.jpg
                </h5>
                <p class="card-text">
                  Main Bridge 05 Nos. Span erection on Pier P37 to P42
                </p>
              </div>
            </div>
          </div>
        </div>
        <nav aria-label="Page navigation example mx-auto mb-5">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </section>
    <!-- recent photo end -->

    <!-- news-events  -->
    <section class="cont text-center mt-5">
      <div class="title">
        <div class="title-cont">
          <h3>NEWS & EVENTS</h3>
          <p>CLICK HERE TO VIEW ALL!</p>
        </div>
      </div>

      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators bg-dark w-100 mx-auto">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner text-start">
          <div class="carousel-item active">
            <p class="pb-5">Forwarding Letter to PD</p>
          </div>
          <div class="carousel-item">
            <p class="pb-5">Notice for 11 to 20 grade exam_pmbp</p>
          </div>
          <div class="carousel-item">
            <p class="pb-5">Applicant's Details (Computer Operator)</p>
          </div>
        </div>
      </div>
    </section>
    <!-- news-events end -->

    <!-- footer  -->
    <footer class="container-fluid ps-0 pe-0 mt-5">
      <img src="<?php echo get_template_directory_uri()?>./assets/img/shadow.png" alt="" class="w-100 d-block" />
      <div class="cont row mx-auto pt-5">
        <div class="col-sm-6 f1 text-start">
          <h5>CONTACT US</h5>
          <ul class="ps-0 mt-3">
            <li class="d-flex">
              <img src="<?php echo get_template_directory_uri()?>./assets/img/icons/location.png" alt="" />
              <p>
                Address: Office of the Project Director Padma Multipurpose
                Bridge Project 4th floor, Setu Bhaban, New Airport Road, Banani,
                Dhaka-1212
              </p>
            </li>
            <li class="d-flex">
              <img src="<?php echo get_template_directory_uri()?>./assets/img/icons/contact-phone.png" alt="" />
              <p>Telephone: +880 2 55040451</p>
            </li>
            <li class="d-flex">
              <img src="<?php echo get_template_directory_uri()?>./assets/img/icons/contact-mail.png" alt="" />
              <p>Fax: +880 2 55040477</p>
            </li>
            <li class="d-flex">
              <img src="<?php echo get_template_directory_uri()?>./assets/img/icons/contact-mail.png" alt="" />
              <p>Email: padmabridgeweb@gmail.com</p>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 f2 text-start">
          <h5>INPORTANT LINKS</h5>
          <ul class="ps-0">
            <li><a href="#">Prime Minister's Office</a></li>
            <li><a href="#">PMIS</a></li>
            <li><a href="#">Bangladesh Bridge Authority</a></li>
            <li><a href="#">Bridges Division</a></li>
            <li><a href="#">Roads and Highways Department</a></li>
            <li><a href="#">Cabinet Division</a></li>
            <li><a href="#">Ministry of Public Administration</a></li>
            <li><a href="#">National Web Portal</a></li>
          </ul>
        </div>
        <div class="ending">
          <div class="row">
            <div class="col-sm-6 text-start">
              <a href=""><p>POWERED BY SOLUTION ART LTD</p></a>
            </div>
            <div class="col-sm-6 text-end">
              <a href=""
                ><p>COPYRIGHT © 2015. BANGLADESH BRIDGE AUTHORITY</p></a
              >
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->
  <?php wp_footer();?>
    
  </body>
</html>
