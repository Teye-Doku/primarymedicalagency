<?php 
    include('includes/header.php');
    include('includes/navbar.php'); 
?>
<style>
    input.abss {
    width: 15% !important;
    height: 65%;
}
label.radio-inline {
    width: 29%;
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
                                        <li class="breadcrumb-item active" aria-current="page">EVALUATION CONSULT</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">EVALUATION CONSULT</h1>
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
                                <p><b>Evaluation & Overview Assessments are:</b></p>
                                <div class="linkss">
                                    <ul class="nipaaimplink">
                                        <li>A Healthy Care Plan and History Intake Evaluation</li>
                                        <li>A Diet and Nutrition Meal Food Plan Evaluation</li>
                                        <li>A Home Repair Maintenance and Housekeeping Evaluation</li>
                                        <li>A Lab Testing and IV Therapy Evaluation</li>
                                    </ul>
                                </div>
                                <p>Once these evaluations are completed. The HomeCareOnCall.® will provide immediate placement for the scheduling of home care service delivery.</p>
                                <p>Our team conducts an assessment of your needs. Please do not hesitate to get in touch with us to request for an assessment or submit our online form below. We will make the necessary preparations to proceed.</p>
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
                        <form action="controller/evalutionConsult.php" method="POST">
                            <div class="row form-group-margin">
                                <div class="col-12 m-0 p-2 input-group">
                                    <label><strong>Name</strong></label>
                                    <input type="text" name="nms" class="form-control field-name" placeholder="Enter Name" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Address</strong></label>
                                    <input type="text" name="addone" class="form-control field-name" placeholder="Enter address here" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>City</strong></label>
                                    <input type="text" name="city" class="form-control field-name" placeholder="Enter city here" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>State</strong></label>
                                    <i class="icon-arrow-down mr-3"></i>
                                    <select name="state" class="form-control field-info" required>
                                        <option value="">Please select state.</option>
                                        <option value="Alabama">Alabama</option>
                                        <option value="Alaska">Alaska</option>
                                        <option value="Arizona">Arizona</option>
                                        <option value="Arkansas">Arkansas</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Zip</strong></label>
                                    <input type="text" name="zip" class="form-control field-name" placeholder="Enter Zip here" required>
                                </div>
                                 <div class="col-12 m-0 p-2 input-group">
                                    <label><strong>How do you prefer to be contacted?</strong></label>
                                         <label class="radio-inline">
                                          <input class="abss" type="radio" name="contact"value="Phone">Phone
                                          </label>
                                          <label class="radio-inline">
                                          <input class="abss" type="radio" name="contact" value="Fax">Fax
                                        </label>
                                        <label class="radio-inline">
                                          <input class="abss" type="radio" name="contact" value="Email">Email
                                        </label>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Email Address</strong></label>
                                    <input type="email" name="email" class="form-control field-email" placeholder="Enter Email Address" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Fax </strong></label>
                                    <input type="text" name="fax" class="form-control field-name" placeholder="Enter Fax " required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Phone</strong></label>
                                    <input type="number" name="phone" class="form-control field-name" placeholder="(phone number)" required>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Best time to call</strong></label>
                                    <i class="icon-arrow-down mr-3"></i>
                                    <select name="weneed" class="form-control field-info" required>
                                        <option value="">- Please select -</option>
                                        <option value="Morning at Home">Morning at Home</option>
                                        <option value="Morning at Work">Morning at Work</option>
                                        <option value="Afternoon at Home">Afternoon at Home</option>
                                        <option value="Afternoon at Work">Afternoon at Work</option>
                                        <option value="Evening at Home">Evening at Home</option>
                                        <option value="Evening at Work">Evening at Work</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Preferred Date</strong></label>
                                    <input type="date" name="ldob" class="form-control field-name" placeholder="Enter date here" required>
                                </div>
                                 <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <label><strong>Preferred Time</strong></label>
                                    <input type="time" name="cgt" class="form-control field-name" placeholder="Preferred Time " required>
                                </div>
                                <div class="col-12 m-0 p-2 input-group">
                                    <label><strong>Online Directory Office Description </strong></label>
                                    <textarea name="Comment" class="text form_field" id="Comment" placeholder="Enter certification type here"></textarea>
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