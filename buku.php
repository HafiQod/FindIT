<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindIT</title>
    <link rel="stylesheet" href="buku.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <div class="wrapper">
        <div class="cover cover-left"></div>
        <div class="cover cover-right"></div>

        <div class="book">
            <!-- profile page -->
            <div class="book-page page-left">
                <div class="profile-page">
                    <img src="gambar/foto.png" alt="">
                    <h1>Asrul Raditio</h1>
                    <h3>Web Developer</h3>

                    <div class="social-media">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                        <a href="#"><i class='bx bxl-linkedin' ></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    </div>

                    <p>Hi, I'm Asrul Raditio, a Web Developer. Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Quas, numquam? Esse pariatur a quas, molestiae enim temporibus, officiis possimus tempore consequatur 
                    ratione optio repudiandae deleniti vero commodi itaque, unde deserunt.</p>

                    <div class="btn-box">
                        <a href="#" class="btn">Download CV</a>
                        <a href="#" class="btn contact-me">Contact Me</a>
                    </div>
                </div>
            </div>

            <!-- page 1 & 2 -->
            <div class="book-page page-right turn" id="turn-1">
                <!-- page 1 (work experience) -->
                <div class="page-front">
                    <h1 class="title">Work Experience</h1>

                    <div class="workeduc-box">
                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar' ></i>2020 - 2021</span>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum voluptatibus, 
                            necessitatibus illo natus sequi cupiditate debitis.</p>
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar' ></i>2021 - 2022</span>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum voluptatibus, 
                            necessitatibus illo natus sequi cupiditate debitis.</p>
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar' ></i>2022 - 2023</span>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum voluptatibus, 
                            necessitatibus illo natus sequi cupiditate debitis.</p>
                        </div>
                    </div>

                    <span class="number-page">1</span>

                    <!-- next button  -->
                     <span class="nextprev-btn" data-page="turn-1">
                        <i class='bx bx-chevron-right' ></i>
                     </span>
                </div>
                
                <!-- page 2 (education) -->
                <div class="page-back">
                    <h1 class="title">Education</h1>

                    <div class="workeduc-box">
                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar' ></i>2017 - 2018</span>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum voluptatibus, 
                            necessitatibus illo natus sequi cupiditate debitis.</p>
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar' ></i>2018 - 2019</span>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum voluptatibus, 
                            necessitatibus illo natus sequi cupiditate debitis.</p>
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar' ></i>2019 - 2020</span>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum voluptatibus, 
                            necessitatibus illo natus sequi cupiditate debitis.</p>
                        </div>
                    </div>

                    <span class="number-page">2</span>

                    <!-- prev button  -->
                     <span class="nextprev-btn back" data-page="turn-1">
                        <i class='bx bx-chevron-left' ></i>
                     </span>
                </div>
            </div>

            <!-- page 3 & 4 -->
            <div class="book-page page-right turn" id="turn-2">
                <!-- page 3 (my services) -->
                <div class="page-front">
                    <h1 class="title">My Services</h1>

                    <div class="services-box">
                        <div class="services-content">
                            <i class='bx bx-code-alt' ></i>
                            <h3>Web Development</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                            <a href="#" class="btn">Read More</a>
                        </div>

                        <div class="services-content">
                            <i class='bx bxs-paint' ></i>
                            <h3>Creative Design</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                            <a href="#" class="btn">Read More</a>
                        </div>

                        <div class="services-content">
                            <i class='bx bx-bar-chart-alt' ></i>
                            <h3>Digital Marketing</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                            <a href="#" class="btn">Read More</a>
                        </div>

                        <div class="services-content">
                            <i class='bx bx-search' ></i>
                            <h3>SEO</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>

                    <span class="number-page">3</span>

                    <!-- next button  -->
                     <span class="nextprev-btn" data-page="turn-2">
                        <i class='bx bx-chevron-right' ></i>
                     </span>
                </div>
                
                <!-- page 4 (my skills) -->
                <div class="page-back">
                    <h1 class="title">My Skills</h1>

                    <div class="skills-box">
                        <div class="skills-content">
                            <h3>Front-End</h3>
                            <div class="content">
                                <span><i class='bx bxl-html5' ></i>HTML</span>
                                <span><i class='bx bxl-css3' ></i>CSS</span>
                                <span><i class='bx bxl-javascript' ></i>JS</span>
                                <span><i class='bx bxl-angular' ></i>Angular</span>
                                <span><i class='bx bxl-react' ></i>React</span>
                                <span><i class='bx bxl-bootstrap' ></i>Bootstrap</span>
                                <span><i class='bx bxl-tailwind-css' ></i>Tailwind</span>
                            </div>
                        </div>

                        <div class="skills-content">
                            <h3>Back-End</h3>
                            <div class="content">
                                <span><i class='bx bxl-python' ></i>Python</span>
                                <span><i class='bx bxl-java' ></i>Java</span>
                                <span><i class='bx bxl-php' ></i>PHP</span>
                                <span><i class='bx bxl-nodejs' ></i>Node</span>
                            </div>
                        </div>

                        <div class="skills-content">
                            <h3>UI/UX Design</h3>
                            <div class="content">
                                <span><i class='bx bxl-figma' ></i>Figma</span>
                            </div>
                        </div>
                    </div>

                    <span class="number-page">4</span>

                    <!-- prev button  -->
                     <span class="nextprev-btn back" data-page="turn-2">
                        <i class='bx bx-chevron-left' ></i>
                     </span>
                </div>
            </div>

            <!-- page 5 & 6 -->
            <div class="book-page page-right turn" id="turn-3">
                <!-- page 5 (latest project or my portfolio) -->
                <div class="page-front">
                    <h1 class="title">Latest Project</h1>

                    <div class="portfolio-box">
                        <div class="img-box">
                            <img src="gambar/portofolio.png" alt="">    
                        </div>
                        
                        <div class="info-box">
                            <div class="info-title">
                                <h3>Project Name</h3>
                                <a href="#">Live Preview<i class='bx bx-link-external' ></i></a>
                            </div>
                            <p>Tech Used:</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit non eius, ratione quasi reiciendis vitae?</p>
                        </div>
    
                        <div class="btn-box">
                            <a href="#" class="btn">Source Code</a>
                            <a href="#" class="btn">More Projects</a>
                        </div>
                    </div>

                    <span class="number-page">5</span>

                    <!-- next button  -->
                     <span class="nextprev-btn" data-page="turn-3">
                        <i class='bx bx-chevron-right' ></i>
                     </span>
                </div>
                
                <!-- page 6 (contact me) -->
                <div class="page-back">
                    <h1 class="title">Contact Me!</h1>

                    <div class="contact-box">
                        <form action="#">
                            <input type="text" class="field" placeholder="Full Name" required>
                            <input type="email" class="field" placeholder="Email Address" required>
                            <textarea name="" id="" cols="30" rows="10" class="field" placeholder="Your Message" required></textarea>
                            <input type="submit" class="btn" value="Send Message">
                        </form>
                    </div>

                    <span class="number-page">6</span>

                    <!-- prev button  -->
                    <span class="nextprev-btn back" data-page="turn-3">
                        <i class='bx bx-chevron-left' ></i>
                    </span>

                    <a href="#" class="back-profile">
                        <p>Profile</p>
                        <i class='bx bxs-user' ></i>
                    </a>
                </div>
            </div>
            
        </div>
    </div>


    <script src="buku.js"></script>

</body>
</html>