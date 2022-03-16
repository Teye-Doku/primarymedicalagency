<?php 
    include('includes/header.php');
    include('includes/navbar.php'); 
?>
<style>
    input.abss {
    width: 14% !important;
    height: 47%;
}
label.radio-inline {
    width: 50%;
}
.ppts p {
        margin: 0px;
    padding: 0px;
    line-height: unset;
}
</style>
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">
                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <!-- Media -->
                        <img src="assets/images/oncallm.jpg" alt="Full Image" class="full-image" data-mask="80">
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">MEMBER CONSULT FORM</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">MEMBER CONSULT FORM</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- About -->
        <section id="quetionans" style="padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 align-self-top text">
                        <div class="row">
                            <div class="col-12 p-0 pr-md-5">
                                <p><b>HomeCareOnCall welcomes new patient referrals in need of home care services. All treatment protocol and type of care forms will be used for confidential purposes. We will provide comfortable HomeCareOnCall services to each patient referred to us. Thank you for your trust and patience in our service.</b></p>
                                <p>You may use our online form below to refer a client.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="nippa" class="section-1 highlights team image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><span class="featured">*REQUIRED </span> INFORMATION</h2>
                    </div>
                    <div class="col-12">
                        <form action="controller/memberConsult" method="POST">
                            <div class="row form-group-margin">
                                <div class="col-12 m-0 p-2 input-group">
                                    <label><strong>Prefix </strong></label>
                                    <i class="icon-arrow-down mr-3"></i>
                                    <select name="gen" class="form-control field-info" required>
                                        <option value="">Please select.</option>
                                        <option value="Dr">Dr.</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Mr">Mr.</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Ms">Ms</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>First Name</strong></label>
                                    <input type="text" name="fname" class="form-control field-name" placeholder="Enter First Name" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Last Name</strong></label>
                                    <input type="text" name="lname" class="form-control field-name" placeholder="Enter Last Name" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Title </strong></label>
                                    <input type="text" name="title" class="form-control field-name" placeholder="Title" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Contact Type </strong></label>
                                    <input type="text" name="ctype" class="form-control field-name" placeholder="Contact Type " >
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Address Line 1</strong></label>
                                    <input type="text" name="addone" class="form-control field-name" placeholder="Enter address line 1 here" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Address Line 2</strong></label>
                                    <input type="text" name="addtwo" class="form-control field-name" placeholder="Enter address line 2 here">
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>City</strong></label>
                                    <input type="text" name="city" class="form-control field-name" placeholder="Enter city here" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>State/Province/Region  </strong></label>
                                    <input type="text" name="state" class="form-control field-name" placeholder="Enter state/province/region here" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Postal</strong></label>
                                    <input type="text" name="zip" class="form-control field-name" placeholder="Enter Postal here" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Country </strong></label>
                                    <i class="icon-arrow-down mr-3"></i>
                                    <select name="country" class="form-control field-info" required>
                                        <option value="">Please select country.</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguillar">Anguilla</option>
                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Eamil ID</strong></label>
                                    <input type="email" name="email" class="form-control field-email" placeholder="Enter Email ID" required>
                                </div>
                                 <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Email Notifications</strong></label>
                                         <label class="radio-inline">
                                          <input class="abss" type="radio" name="eeml"value="Opt-out">Opt-out
                                          </label>
                                          <label class="radio-inline">
                                          <input class="abss" type="radio" name="eeml" value="Email (1)">Email (1)
                                        </label>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Phone Number</strong></label>
                                    <input type="number" name="pnumber" class="form-control field-name" placeholder="(phone number)" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Extention </strong></label>
                                    <input type="text" name="ext" class="form-control field-name" placeholder="Enter Extention " required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Mobile Number</strong></label>
                                    <input type="number" name="mbumber" class="form-control field-name" placeholder="(Mobile Number)" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Fax </strong></label>
                                    <input type="text" name="fax" class="form-control field-name" placeholder="Enter Fax " required>
                                </div>
                                <div class="col-12 m-0 p-2 input-group">
                                    <label><strong>Online Directory Office Description </strong></label>
                                    <textarea name="comment" class="text form_field" id="Comment" placeholder="Enter certification type here"></textarea>
                                </div>
                                <div class="col-12 m-0 p-2 input-group">
                                    <p>Credentials:</p>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Certification Type</strong></label>
                                    <input type="text" name="cgt" class="form-control field-name" placeholder="(Certification Type )" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Licensing State  </strong></label>
                                    <input type="text" name="lstate" class="form-control field-name" placeholder="Enter Licensing State " required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>License Expiration Date </strong></label>
                                    <input type="date" name="ldob" class="form-control field-name" placeholder="Enter date here" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>License Number  </strong></label>
                                    <input type="text" name="lsnbr" class="form-control field-name" placeholder="Enter License Number " required>
                                </div>
                                 <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Practicing Now</strong></label>
                                         <label class="radio-inline">
                                          <input class="abss" type="radio" name="pn" value="Active">Active
                                          </label>
                                          <label class="radio-inline">
                                          <input class="abss" type="radio" name="pn" value="InActive">InActive
                                        </label>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Name of Medical Institution</strong></label>
                                    <input type="text" name="nmidical" class="form-control field-name" placeholder="Name of Medical Institution" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Graduation Year</strong></label>
                                    <input type="text" name="gyear" class="form-control field-name" placeholder="Enter Year here" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Professional Affiliated Memberships</strong></label>
                                    <input type="text" name="enmbersp" class="form-control field-name" placeholder="Enter membership here" required>
                                </div>
                                <div class="col-12 col-md-9 input-group m-0 p-2">
                                    <button type="submit" name="submit" class="btn primary-button">SUBMIT</a>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </section>
 <?php include('includes/footer.php'); ?>