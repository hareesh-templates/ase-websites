<?php
include 'header.php';

include './backend/connection.php';
$relatedBlogSql = "select * from blog";
$relatedBlogResult = $conn->query($relatedBlogSql);

?>
<style>
    .booking-container {
        position: absolute;
        margin-top: -40px;
        z-index: 1 !important;
    }
</style>
<!--     Slider Code-->

<!--google-site-verification-->
<meta name="google-site-verification" content="wQ8G7pP9RXeR_cmhCsoi83STbfMPFuEijqCB0pqzI8c" />

<div class="slider container-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/slider1.jpg" class="d-block w-100 pt-md-5 mt-md-4" alt="slider1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <!--<h3 class="animate__animated animate__backInLeft">Get Better care </span> <br>-->
                    <!--                    for your teeth </h3>-->
                    <!--<p class="animate__animated animate__backInRight">Dr Prudviraj parimi - Specialist in Endodontist <br>BDS, MDS</p>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slider2.jpg" class="d-block w-100 pt-md-5 mt-md-4" alt="slider2.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h3 class="animate__animated animate__backInLeft">25 years of experiences</h3> -->
                    <!--<p class="animate__animated animate__backInRight">Perseverance.Patience.Passion.Perfection</p>-->
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!--    Services Starts Here   -->

<section class="services container-fluid">
    <div class="container">
        <div class="row section-title">
            <h2>How Can We Serve You</h2>
            <p>
                General dentists are the main providers of dental care to people of all ages. Cosmetic dentistry is generally used
                to refer to any dental work that improves the appearance of teeth.
            </p>
        </div>
        <div class="servic-row row">
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/General_Dentistry_Icon.png" alt="General_Dentistry_Icon.png" class="servIcon">
                    <h4>GENERAL DENTISTRY</h4>
                    <p>
                        The process involves oral examination, radiographic evaluation (x-rays), Diagnosis, tooth filling,
                        removal of loose teeth, creating awareness to the patients and maintenance of oral health and hygiene.
                    </p>
                    <a href="./general-dentistry.php" class="btn btn-info float-end">Read more</a>
                </div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/Cosmetic_Dentistry_Icon.png" alt="Cosmetic_Dentistry_Icon.png" class="servIcon">
                    <h4>COSMETIC DENTISTRY</h4>
                    <p>
                        Our cosmetic dentists corrects your smile by smile designing in ways that it becomes impossible to tell if one
                        has gone through cosmetic smile designing treatment. We offer a range of cosmetic services in Vizag.
                    </p>
                    <a href="./cosmetic-dentistry.php" class="btn btn-info float-end">Read more</a>
                </div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/Tooth_Brace_Icon.png" alt="Tooth_Brace_Icon.png" class="servIcon">
                    <h4>TOOTH BRACE</h4>
                    <p>
                        Dental Braces are meant to straighten teeth. We offer good quality treatment
                        and affordable dental braces with the help of our top dental braces specialists in Vishakhapatnam.
                    </p>
                    <a href="./dental-braces.php" class="btn btn-info float-end">Read more</a>
                </div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/dental_Implants_Icon.png" alt="dental_Implants_Icon.png" class="servIcon">
                    <h4>DENTAL IMPLANTS</h4>
                    <p>
                        With best dental implants in Vishakhapatnam the dentists position a titanium post which allows the dentist
                        to mount a replacement tooth to the area. For affordable dental implants in Vizag you are welcome.
                    </p>
                    <a href="./dental-implants.php" class="btn btn-info float-end">Read more</a>
                </div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/Child_Denistry_Icon.png" alt="Child_Denistry_Icon.png" class="servIcon">
                    <h4>PEDIATRIC DENTISTRY</h4>
                    <p>
                        Pediatric Dentistry is mainly for the treatment of the oral health of children from infancy through
                        their teen years. Also know as children dentist they have their own specialty.
                        Children are the ones most prone to oral problems
                    </p>
                    <a href="./pediatric-dentistry.php" class="btn btn-info float-end">Read more</a>
                </div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/Root_Canal_Treatment_Icon.png" alt="Root_Canal_Treatment_Icon.png" class="servIcon">
                    <h4>ROOT CANAL TREATMENT</h4>
                    <p>
                        PARIMI’S dental care is well equipped with the advanced technologies and a Dental Microscope which helps in
                        deep invasive procedures like removal of broken instruments within the tooth and eliminating the minor defects.
                    </p>
                    <a href="./root-canal-treatment.php" class="btn btn-info float-end">Read more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--    Team Member Starts Here   -->

<section id="teacher" class="team-member pt-5 contaienr-fluid">
    <div class="container">
        <div class="session-title">
            <h2>Our Team</h2>
            <!-- <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et
                dolore magna aliquyam.
            </p> -->
        </div>
        <div class="team-row team row">
            <div class="team-col col-md-2">
                <!-- <div class="teamdiv">
                    <div class="image-part">
                        <img src="assets/images/team/manager.png" alt="">
                    </div>
                    <div class="detail-part">
                        <h3>Joney James</h3>
                        <span>Team Leader</span>
                        <p>Various versions have evolved over the years, purpose (injected humour and the like).</p>
                        <div class="social-links">
                            <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" tabindex="-1"><i class="fab fa-twitter"></i></a>
                            <a href="#" tabindex="-1"><i class="fab fa-google"></i></a>
                            <a href="#" tabindex="-1"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class=" team-col col-md-4">
                <div class="teamdiv">
                    <div class="image-part">
                        <img src="assets/images/team/team10.jpg" alt="Dr.Prudviraj Parimi">
                    </div>
                    <div class="detail-part">
                        <h3>Dr.Prudviraj Parimi</h3>
                        <span>
                            B.D.S, M.D.S <br>
                            Endodontist & Conservative Dentist <br>
                            (Root canal Specialist)
                        </span>
                        <br>
                        <p>
                            The <b>CMD</b> of <b>PARIMI’S DENTAL Care</b> is a conservative Dentist and endodontist. Expert in Microscopic Root Canal treatment. </p>
                        <!-- <div class="social-links">
                            <a href="https://www.facebook.com/profile.php?id=100063685100559&mibextid=LQQJ4d" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://instagram.com/myselfprudvi?igshid=YmMyMTA2M2Y=" tabindex="-1"><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class=" team-col col-md-4">
                <div class="teamdiv">
                    <div class="image-part">
                        <img src="assets/images/team/team2.jpg" alt="Dr.Parvathi Ramya Parimi">
                    </div>
                    <div class="detail-part">
                        <h3>Dr.Parvathi Ramya Parimi</h3>
                        <span>
                            B.D.S, M.C.P <br>
                            Endodontics & Aesthetic Dentistry
                        </span><br>
                        <p>
                            Skilled Dental Professional in Dental Surgery procedures. Specially root canal therapy, laser & Aesthetic Dentistry with rich Clinical experience Over 8 years. </p>
                        <!-- <div class="social-links">
                            <a href="https://www.facebook.com/profile.php?id=100063685100559&mibextid=LQQJ4d" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://instagram.com/myselfprudvi?igshid=YmMyMTA2M2Y=" tabindex="-1"><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class=" team-col col-md-2">
                <!-- <div class="teamdiv">
                    <div class="image-part">
                        <img src="assets/images/team/manager.png" alt="">
                    </div>
                    <div class="detail-part">
                        <h3>James Anderson</h3>
                        <span>Team Leader</span>
                        <p>Various versions have evolved over the years, on purpose (injected humour and the like).</p>
                        <div class="social-links">
                            <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" tabindex="-1"><i class="fab fa-twitter"></i></a>
                            <a href="#" tabindex="-1"><i class="fab fa-google"></i></a>
                            <a href="#" tabindex="-1"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!--   Blog Starts Here   -->

<section class="bg-06">
    <div class="container">
        <div class="row">
            <div class="session-title">
                <h2>Our Blog</h2>
            </div>
            <section class="ftco-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-carousel owl-carousel">

                            <?php
                            $relatedBlogCount = $relatedBlogResult->rowCount();
                            if ($relatedBlogCount > 0) {
                                while ($row = $relatedBlogResult->fetch(PDO::FETCH_ASSOC)) {
                                    $date = date('M j, Y', strtotime($row['date']));
                                    echo '
                                    <div class="item">
                                        <a href="./blogDetails.php?key=' . $row['key_url'] . '">
                                            <article class="blog-sub shadow">
                                                <div class="blog-content">
                                                    <img src="./adminPanel/images/blogImgs/' . $row['image'] . '" alt="' . $row['image'] . '" style="width: 365px; height: 240px;">
                                                </div>
                                                <div class="blog-content-section">
                                                    <div class="blo-content-title">
                                                        <h4 class="titleClass my-3">' . $row['title'] . '</h4>
                                                        <p class="text-wrapper">' . $row['description'] . '</p>
                                                    </div>
                                                    <div class="blog-admin">
                                                        <ol class="d-flex justify-content-between">
                                                            <li><i class="far fa-user"></i> By Admin</li>
                                                            <li><i class="far fa-calendar-alt"></i>&nbsp ' . $date . '</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </article>
                                        </a>
                                    </div>
                                ';
                                }
                            } else {
                                echo '<p class="errors">No data found</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <style>
                .titleClass {
                    min-height: 70px;
                }

                .text-wrapper {
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 3;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    min-height: 70px;
                    margin-bottom: 2rem;
                }
            </style>

        </div>
</section>
</div>
</div>
</section>

<?php include 'whatsapp.php' ?>
<?php include 'footer.php'; ?>