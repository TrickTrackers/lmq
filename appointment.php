<!DOCTYPE html>
<html class="is-smooth-scroll-compatible is-loading" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Lumiq - Schedule   an Appointment</title>
    <meta name="description" content="" />
    <?php include("includes/header.php") ?>
    <div>
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
                                <div class="col-xl-6">
                                    <div class="hero__content">
                                        <p class="animation__char_come fs-20 fw-bold  text-primary mb-1 text-uppercase">
                                            Contact us
                                        </p>
                                        <h1 class="hero__title animation__char_come text-m-48 fs-60 fw-bold lh-small d-inline position-relative addstarafter">
                                            Schedule  


                                        </h1>
                                        <h1 class="hero__title animation__char_come text-m-48 fs-60 fw-bold lh-small position-relative">
                                          an Appointment


                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- hero area end  -->

                <section class="py-5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <img src="assets/img/contact-1.png" alt="" />
                            </div>
                            <div class="col-lg-9">

                                <p class="fw-light fs-3 mt-4">
                                    Unlock Your Path to Success: Schedule a Personalized Appointment with Our Experts Today!
                                </p>
                            </div>
                        </div>
                    </div>
                </section>



                <section class="py-5 bg-blue4">
                    <div class="container">
                        <div class="row  justify-content-between">

                            <div class="col-lg-5">
                                <form action="sendmailappointment.php" method="post" id="myform" enctype="multipart/form-data">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <label for="" class="col-form-label fw-light fs-5">Full Name</label>
                                            <input type="text" name="full_name" class="form-control border-grey2" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="" class="col-form-label fw-light fs-5">Email ID</label>
                                            <input type="text" name="email" class="form-control" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="" class="col-form-label fw-light fs-5">Mobile Number</label>
                                            <input type="number" name="mobile" class="form-control" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="" class="col-form-label fw-light fs-5">Preferred Date</label>
											
                                            <input type="date" name="Preferred_Date" class="form-control" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="" class="col-form-label fw-light fs-5">Preferred Time</label>
                                            <select name="Preferred_Time" class="form-select border-primary" id="time" required>
                              <option value="">Select</option>
                              <option value="10 am - 12 pm">10 am - 12 pm</option>
                              <option value="12 pm - 4pm">12 pm - 4pm</option>
                              <option value="4pm - 7pm">4pm - 7pm</option>
                        
                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info rounded-1 mt-4 fw-bold btn-lg">Submit</button>
                                </form>
                            </div>

                            <div class="col-lg-5">
                                <p class="fw-light fs-5 mt-4">
                                    If you still need help, we’d love to assist you. Feel free to reach us at:
                                </p>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="p-0 m-0 list-unstyled list-gap fs-5">
                                            <li class="fw-light"><img src="assets/img/icons/location.svg" alt=""> 91 Springboard Business Hub Pvt Ltd, Plot No. 175, Behind Metro House, CST Road, Kalina, Bandra Kurla Complex, Santacruz East, Mumbai 400098
                                            </li>
                                          <!--  <li class="fw-bold"><img src="assets/img/icons/phone.svg" alt=""> <a href="tel:+911234567890">(+91) 123 456 7890 </a> </li>-->
                                             <li class="fw-bold"><img src="assets/img/icons/phone-2.svg" alt=""><a href="tel:+919136640905">(+91) 91366 40905 </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="fw-bold d-block fs-5">General Inquiries</span> <a href="mailto:hello@lumiq.in" class="text-decoration-underline fs-5 text-secondary">hello@lumiq.in</a><br><br>
										<span class="fw-bold d-block fs-5">Existing Customer Queries</span> <a href="mailto:care@lumiq.in" class="text-decoration-underline fs-5 text-secondary">care@lumiq.in</a><br><br>
                                        <span class="fw-bold d-block fs-5"> Compliance</span><a href="mailto:compliance@lumiq.in" class="text-decoration-underline fs-5 text-secondary">compliance@lumiq.in
</a>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </section>
                <?php include("includes/faq.php") ?>
            </main>
            <!-- footer-area-start -->

            <?php include("includes/footer.php") ?> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
            <script>
                $(document).ready(function() {
                    $("#myform").validate({
                        errorClass: 'text-danger small',
                    });
                });
            </script>