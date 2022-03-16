<?php 
    include('includes/header.php');
    include('includes/navbar.php'); 
?>
        <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="assets/images/nippas.jpg" alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">NHPPA</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">NHPPA</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- About -->
        <section id="nippa" class="section-1 highlights team image-right">
            <div class="container">
                <div class="row">
                   <blockquote class="qts"> The National Healthcare of
Professional Providers Association, <strong>NHPPA.</strong> <em>®</em></blockquote>
                    <div class="col-12 col-lg-8 align-self-top text">
                        <div class="row intro m-0">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">NHPPA</span>
                                <h2><span class="featured">Welcome To </span> HEALTHASST.<em>®</em></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 pr-md-5">
                                <p>Represents all Medical, Preventive, and Alternative Health Field Providers through, Association Credentialing, Accredited Verification, Advanced Education</p>
                                 <p class="qtsm">Career Services & Professional Recognition.</p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-in" class="col-12 col-lg-4">
                        <div class="quote mt-5 mt-lg-0 nst">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-center align-items-center">
                                    <a href="#"><i class="icon fas fa-fighter-jet mr-2"></i></a>
                                    <div class="list-group-content">
                                        <h4>Quick Links</h4>
                                    </div>
                                </li>
                                <div class="qc">
                                    <li><a href="healthasst">Healthasst</a></li>
                                    <li><a href="membership">Membership</a></li>
                                    <li><a href="membership">Membership</a></li>
                                    <li><a href="certification">Certification</a></li>
                                    <li><a href="continued-medical-education">Continued Medical Education</a></li>
                                    <li><a href="oncall-support">Oncall Support</a></li>  
                                </div>       
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="quetionans" class="">
            <div class="container">
                <div class="row">
                    <div class="quetionans">
                        <h4 class="questons"> Are You Interested in the Medical Field Industry?</h4>
                        <p>Welcome to the National Healthcare of Professional Providers Association, a worldwide, membership-based association catering to students, medical professionals, employers, medical facilities, educational institutions, certification boards, and continuing education providers. Through medical internships and other programs, we strive to ensure that students and professionals have the educations and resources they need to succeed in the medical field.</p>
                        <p>The National Healthcare of Professional Providers Association offers students assistance by creating a portfolio pertaining to medical career achievements and internship or externship opportunities. Our nonprofit department offers assistance towards academic or loan dispute representation, as well as medical career study kits and professional training resources.</p>
                        <p>We also assist with refresher courses and continuing education unit courses for structuring re-certification before the expiry date. NHPPA, Inc. advises against losing any medical professional certification due to license or national certification expiration.</p>
                        <h4 class="questons"> HIPPA</h4>
                        <p>The NHPPA, Inc. strongly advises all medical students and professionals in the healthcare industry to be mindful of the 2013 strict HIPPA Act. Patient Health Information is not to be taken for granted. We warn every medical professional against taking pictures of patients or sharing patient medical information with coworkers not related to the course of treatment and to avoid exposure of patient file information. Any of these disregarded rules will result in permanent revocation of all medical field accreditation.</p>
                    </div>
                </div>
                <div class="row qtss">
                    <div class="col-md-8">
                                <h4 class="questons"> What We Offer</h4>
                                <p>National Healthcare of Professional Providers Association offers medical professional assistance by offering a top medical field portfolio pertaining to medical careers, study aid material for better achievement, and medical career externships and internships placement assistance. Our affiliation departments offers physicians worldwide healthcare expo other events. Join us to:</p>
                                <ul>
                                    <li>Take Advantage Of Practice-Building Opportunities</li>
                                    <li>Get Continuing Education Credits</li>
                                    <li>Network With Like-Minded Practitioners, Globally</li>
                                    <li>Improve Provider Health & Build Better Patient Relationships</li>
                                    <li>Expand Your Capability To Address Many Medical Students Issues</li>
                                    <li>Advance Your Medical Skills</li>
                                </ul>                  
                    </div>
                    <div class="col-md-4">
                        <div class="contacts">
                            <img src="assets/useer/hippa.jpg" alt="USER">
                        </div>
                    </div>
                </div> 
            </div>  
        </section>
        <section id="nippa" class="section-1 highlights team image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                            <span class="pre-title m-0">PROFESSIONAL NURSE ASSOCIATION REPRESENTATIONS.</span>
                            <h2><span class="featured">HEALTH </span> ASST.<em>®</em></h2>
                    </div>
                    
                     <?php 

                                            $sql="";
                                            $selectUser= $objFun->selectData('links',$sql);
            
                                            if(!empty($selectUser))
                                            {
                                                foreach ($selectUser as $valueUser) {
            
                                                   
                                                    # code...
                                 ?>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="implink">
                                
                                <li><a href="<?=$valueUser['url']?>" target="_blank"><?=$valueUser['name']?></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <?php }} ?>
                    <!--<div class="col-12 col-lg-6">-->
                    <!--    <div class="linkss">-->
                    <!--        <ul class="implink">-->
                    <!--        <li><a href="javascript:void(0);">NATIONAL STUDENT NURSES’ ASSOCIATION (NSNA)</a></li>-->
                    <!--        <li><a href="javascript:void(0);">NURSE HEALERS – PROFESSIONAL ASSOCIATES INTERNATIONAL, INC. (NH-PAI)</a></li>-->
                    <!--        <li><a href="javascript:void(0);">ONCOLOGY NURSING SOCIETY (ONS)</a></li>-->
                    <!--        <li><a href="javascript:void(0);">PHILIPPINE NURSES ASSOCIATION OF AMERICA (PNAA)</a></li>-->
                    <!--        <li><a href="javascript:void(0);">PREVENTIVE CARDIOVASCULAR NURSES ASSOCIATION (PCNA)</a></li>-->
                    <!--    </ul>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </section>
        <section id="quetionans">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><span class="featured">NHPPA.<em>®</em> </span> Loan Mediation Strategies for Members and Non Member Assistance:</h2>
                        <p>Non-Graduation or graduation determination Internship or externship and employability Which entity has documents on defaulted loan/ guaranteed, government or private loan</p>
                        <p><strong>File for a free Credit Report</strong></p>
                        <p>Borrower vs. Loan Agency vs. Third Party</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>National Student Loan Data System (NSLDS)</li>
                                <li>www.nslds.ed.gov locate info regarding loan</li>
                                <li>Documentation of Defaulted Loan (Bill of Particulars)</li>
                                <li>Promissory Note, Disclosure Statement, Collection/Payment History</li>
                                <li>Authorization to Release Information</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>Office of the Ombudsman – Privacy Release Statement</li>
                                <li>Merit of Conflict</li>
                                <li>Arbitration, Mediation, and Litigation</li>
                                <li>Government Loans throughout the country</li>
                                <li>Negotiations regarding private loans (non-government)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
        <section id="nippa" class="section-1 highlights team image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                            <span class="pre-title m-0">ARBITRATION</span>
                            <h2><span class="featured">Options </span> to take further negotiation or legal action requests:</h2>
                            <p>Is the referral of a dispute to one or more impartial persons for final and binding determination outside of the judicial system.</p>
                            <p><strong>Benefits of Arbitration:</strong></p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>Confidential, no public record</li>
                                <li>Limited exchange of documentation, information</li>
                                <li>Quick, don’t have to wait for a court date</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>Arbitrators have expertise in the subject matter and are trained in conflict resolution</li>
                                <li>Cheaper than litigation</li>
                                <li>Preserves business relationships</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">   
                         <p><strong>Negatives of Arbitration:</strong></p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>It’s a compromise, no 100% winner</li>
                                <li>Complex arbitration can be costly</li>
                                <li>If not satisfied, may litigate the arbitration procedure</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>Poor results with an unskilled arbitrator</li>
                                <li>Both parties must agree to cooperate in the process</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">   
                        <p><strong>Mediation</strong></p>
                        <p>The process by which parties submit their dispute to a neutral third party (the mediator) who works with the parties to reach a settlement of their dispute.</p>
                   </div>
                </div>
                <div class="row" style="margin-top: 22px;">
                    <div class="col-12">
                            <p><strong>Benefits of Mediation:</strong></p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>Neutral mediator can objectively suggest alternatives not considered before</li>
                                <li>Parties are directly engaged in negotiating the settlement</li>
                                <li>Can be quicker than litigation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>Less costly than litigation</li>
                                <li>Preserves business relationships</li>
                                <li>85% of American Arbitration Association cases mediated find successful solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 22px;">
                    <div class="col-12">
                            <p><strong>Negatives of Mediation</strong></p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>May or may not reach a binding decision</li>
                                <li>Unskilled mediator</li>
                           </ul>
                        </div>
                    </div>

                </div>
                <div class="row" style="margin-top: 22px;">
                    <div class="col-12">   
                            <p><strong>Litigation</strong></p>
                            <p>Using the judicial system to resolve disputes.</p>
                     </div>
                 </div>
                <div class="row" style="margin-top: 22px;">
                    <div class="col-12">
                            <p><strong>Benefits of litigation:</strong></p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>A Clear winner and loser</li>
                                <li>Uses a prescribed set of procedures</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>More predictable outcomes</li>
                                <li>Is final</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 22px;">
                    <div class="col-12">
                            <p><strong>Negatives of litigation:</strong></p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>Waiting for court updates</li>
                                <li>More expensive than mediation and arbitration</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="linkss">
                            <ul class="nipaaimplink">
                                <li>Part of public record</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
<?php include('includes/footer.php'); ?>