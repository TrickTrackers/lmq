<!DOCTYPE html>
<html class="is-smooth-scroll-compatible is-loading" lang="zxx">
            <head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Lumiq - Contact Us Thank You</title>
<meta name="description" content="" />
<?php include("includes/header.php") ?>

<div id="smooth-wrapper">
<div id="smooth-content">
<!-- Add your site or application content here -->
<main> 
  <!-- hero area start  -->
  <section class="p-relative section-spacing pb-5">
    <div class="adjust-header-space"></div>
    <div class="hero-area__bg"> <img src="assets/img/about-bg.jpg" alt="image not found" class="object-fit-fill des" /><img src="assets/img/bg/mobile-bg.jpg" alt="image not found" class="object-fit-fill mob" /> </div>
    <div class="container">
      <div class="hero-inner p-relative">
        <div class="row">
          <div class="col-xl-5">
            <div class="hero__content">
              <p class="animation__char_come fs-20 fw-bold text-primary mb-1 text-uppercase">  </p>
              <h1
                                            class="hero__title animation__char_come fs-60 text-m-48 fw-bold lh-1 position-relative addstarafter d-inline"> Thank You </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- hero area end  -->
  
  
  
  <div class="mt-5 ">
    <section class="py-5 ">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4"> <img src="assets/img/g8.svg" class="img-fluid" alt=""> </div>
          <div class="col-lg-8">
            <p>Thank you for your query. We will get back to you soon.</p>
           
            <p>We appreciate your trust in our tool and look forward to contributing to your financial success.</p>
            <p>Please submit any questions to: <a href="mailto:care@lumiq.com"> care@lumiq.com</a>.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<!-- footer-area-start -->

<?php include("includes/footer.php") ?>
<script>
            function createStickyTimeline(sectionId, leftColumnClass) {
                const section = document.getElementById(sectionId);
                const leftColumn = section.querySelector(`.${leftColumnClass}`);

                const timeline = gsap.timeline({
                    scrollTrigger: {
                        trigger: section,
                        start: "top top",
                        end: "bottom top",
                        pin: leftColumn,
                        scrub: true
                    }
                });

                return timeline;
            }

            const timeline1 = createStickyTimeline("section1", "sticky-left");
            const timeline2 = createStickyTimeline("section2", "sticky-left");
            const timeline3 = createStickyTimeline("section3", "sticky-left");
            </script>