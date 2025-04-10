<?php

include 'db_connection.php';
$messageSent = "";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $sql = "INSERT INTO contact_form (firstname, lastname, email, subject, message) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";
    if (mysqli_query($conn, $sql) === TRUE) {
        $messageSent = "Message sent successfully...✅✅";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$disappearTime = 4000; // 3 seconds

echo  "<script>
  setTimeout(() => {
    document.getElementById('response').classList.add('hidden');
  }, $disappearTime);
</script>";

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio Document</title>
    <link rel="shortcut icon" href="image2.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IN:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline:opsz,wght@10..72,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <header>
        <div class="first">
            <a href="#portfolio">
                <p class="p1">Chima Chibuike's</p>
                <p class="p2">Portfolio</p>
            </a>
        </div>
        <div class="second">
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#project">Project</a></li>
            <li><a href="#contact">Contact</a></li>
        </div>
    </header>

    <main>
        <section class="portfolio" id="portfolio">
            <div class="paragraph">
                <h1>Hello, It's Me,</h1>
                <h1 class="h1">Chima Chibuike</h1>
                <h2>And I'm a Web Developer</h2>
                <a href="Chima Chibuike.pdf" target="_blank" >Click CV <i class="bi bi-file-earmark-pdf-fill"></i></a>
            </div>

            <div class="image1">
                <img src="img/WhatsApp Image 2025-01-21 at 12.11.21_c526a0a6.jpg" alt="myImage">
            </div>
        </section>
 
        <section class="services animate" id="services">
            <h1>Our Services</h1>
            
            <div class="services2">

               <div class="boxes">
                    <i class="bi bi-pc-display-horizontal"></i>
                    <h3>Front-end Development</h3>
                    <li><i class="bi bi-window-stack"></i>A responsive Web Design</li>
                    <li><i class="bi bi-brush-fill"></i>UI/UX Design</li>
                    <li><i class="bi bi-file-earmark-code-fill"></i>Building a client-side of websits and web applications using HTML,CSS, JavaScript, and frameworks like React</li>
               </div>

               <div class="boxes">
                    <i class="bi bi-database-fill-gear"></i>
                    <h3>Back-end Development</h3>
                    <li><i class="bi bi-filetype-php"></i></i>A server-side Development(PHP)</li>
                    <li><i class="bi bi-hdd-fill"></i>Database Development</li>
                    <li><i class="bi bi-cloud-download"></i>Back-end Frameworks</li>
               </div>

               <div class="boxes">
                <i class="bi bi-cart4"></i>
                    <h3>E-commerce Development</h3>
                    <li><i class="bi bi-cart-check-fill"></i></i>Online Store Development</li>
                    <li><i class="bi bi-kanban"></i>Order Management Systems to streamline e-commerce operations</li>
               </div>

               <div class="boxes">  
                    <i class="bi bi-globe2"></i>
                    <h3>Web Application Development</h3>
                    <li><i class="bi bi-browser-edge"></i></i>Custom web Application Development</li>
                    <li><i class="bi bi-browser-chrome"></i>Progressive Web App Development</li>
                    <li><i class="bi bi-browser-safari"></i>Single-page Application Development</li>
               </div>

               <div class="boxes">  
                <i class="bi bi-gear-wide-connected"></i>
                    <h3>Web Maintenance and Support</h3>
                    <li><i class="bi bi-gear"></i></i></i>Website Updates and Maintenance to ensure website stability</li>
                    <li> <i class="bi bi-headset"></i></i>Offering Technical Support and services</li>
                    <li><i class="bi bi-speedometer"></i>Website Optimization, performance and speed</li>
               </div>

               <div class="boxes">  
                <i class="bi bi-window-desktop"></i></i>
                    <h3>Other Services</h3>
                    <li><i class="bi bi-shield-lock-fill"></i>Web Security services</li>
                    <li><i class="bi bi-pc-display"></i>Content Management System Development: Building custom solutions to enable easy content management and updates.</li>
               </div>
            </div>
        </section>

        <section class="about animate" id="about">
            <h1>About Me</h1>

            <div class="about2">
                <div class="bio">
                    <h2>Biography</h2>

                    <p>Hello World! I'm <span class="bigin">Chima Chibuike</span>, a passionate Web Developer based in Lagos, Nigeria. I started my journey back in 2023 with continuous learning of programming languages, I've honed my skills in programming and developed a strong foundation in communication, teamwork and curiosity. Now i love combining the worlds logic and creative designs to make eye-catching, accessible, and user-friendly websites with the latest trends in the technology industry and the exciting world of blockchain technology(Web3).</p>
                    <p>Technology has always lead the world, The move towards increasing inclusivity and diversity in the industry through representation is of importance to me.</p>
                    <p>Being a web developer has opened my eyes into seeing the world's problems being solved with the help of Technology resolution.</p>
                    <p>I'm excited to make the leap and continue refining my skills with the right company and mentorship.</p>
                </div>

                <div class="certEdu animate">
                    <h2>Education & Certification</h2>

                    <div class="sen">
                        <h4>Birrel Avenue Senior High School</h4>
                        <p>Senior Secondary School Certificate(S.S.C.E) <span class="spac">2018-2022</span></p>
                    </div>

                    <div class="sen">
                        <h4>IIHT Tech Institute</h4>
                        <p>Front-End Development Certification<span class="spac">February - June 2024</span></p>
                    </div>
                    <div class="sen">
                        <h4>GlobalTech World Computer Institute</h4>
                        <p>Back-End Development Certification <span class="spac">September 2024 - Till Date</span></p>
                    </div>
                </div>

                <div class="workEx animate">
                    <h2>Work Experience</h2>

                    <div class="workEx1">
                        <h5>July-August 2024</h5>
                        <h4>Front-end development instructor (Volunteer)</h4>
                        <h3>IIHT Tech Institute</h3>
                    </div>
                    <div class="rool">
                        <div class="workEx2">
                            <h3>Technical Skills</h3>
                            <p>Workfolio</p>
                            <p>Programming</p>
                            <p>User experience design</p>
                            <p>Computing</p>
                            <p>Design</p>
                        </div>
                        
                        <div class="workEx3">
                            <h3>Soft Skills</h3>
                            <p>Problem-solving</p>
                            <p>Communication</p>
                            <p>Adaptability</p>
                            <p>Strategic thinking</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="project animate" id="project">
            <h1>Project</h1>

            <div class="services2">
                <div class="boxes1">
                    <img src="img/Screenshot (4).png" alt="">
                    <h3>OPay Front-Page(DEMO)</h3>
                    <a href="Project OPAY/Index1.html" target="_blank">View</a>
                </div>

                <div class="boxes1">
                    <img src="img/Screenshot (24).png" alt="">
                    <h3>Lilygate Hotels Website</h3>
                    <a href="LilyGate Website/LilyGate.html" target="_blank">View</a>
                </div>

                <div class="boxes1">
                    <img src="img/Screenshot (25).png" alt="">
                    <h3>PayLessGainMore E-commerce Website</h3>
                    <a href="PaylessGainMore/Index.html" target="_blank">View</a>
                </div>

                <div class="boxes1">
                    <img src="img/Screenshot (26).png" alt="">
                    <h3>Auto-Parts Stores Websites</h3>
                    <a href="Auto-Parts Websites/mainpage.html" target="_blank">View</a>
                </div>

                <div class="boxes1">
                    <img src="img/Screenshot (29).png" alt="">
                    <h3>Bookshelves Library Website</h3>
                    <a href="Bookshelves.web/Index1.php" target="_blank">View</a>
                </div>
            </div>
        </section>
    </main>

    <footer id="contact" class="animate">
        <div class="contact">
            <h1>Contact</h1>
            <h2>Let's make something great together</h2>
        </div>

        <div class="row1">
            <form action="index.php" method="post">
                <div>
                    <div class="col-8 mb-3">
                        <label for="firstname" class="form-label fs-5 fw-bold">First name: *</label>
                        <input type="text" class="form-control" placeholder="Insert Firstname..." aria-label="First name" id="firstname" name="firstname" required>
                    </div>
                    <div class="col-8 mb-3">
                        <label for="lastname" class="form-label fs-5 fw-bold">Last name: *</label>
                        <input type="text" class="form-control" placeholder="Insert Lastname..." aria-label="Last name" id="lastname" name="lastname" required>
                    </div>
                    <div class="col-8 mb-4">
                        <label for="email" class="form-label fs-5 fw-bold">Email: *</label>
                        <input type="email" class="form-control" placeholder="Insert email..." aria-label="email" id="email" name="email" require autocomplete="on">
                    </div>
                    <div class="col-8 mb-4">
                        <label for="subject" class="form-label fs-5 fw-bold">Subject: *</label>
                        <input type="text" class="form-control" placeholder="Subject.." aria-label="subject" id="subject" name="subject" require>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control col-10" placeholder="Leave a message here..." id="message" name="message" style="height: 250px;" required></textarea>
                        <label for="message">Message: *</label>
                    </div>
                  </div>
                  
                  <p id="response"><?php echo $messageSent ?></p>
                  <button>Submit</button>
            </form>

            <div class="ddi">
                <a href="https://wa.me/+2348112717345" class="a" target="_blank"><p>WhatsApp</p><i class="bi bi-whatsapp"></i></a>
                <a href="https://www.instagram.com/chimachibuike57?igsh=MTA5ZjAwd253eHZmNg%3D%3D&utm_source=qr" class="b" target="_blank"><p>Instagram</p><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/chima-chibuike-a68115323?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="c" target="_blank"><p>LinkedIn</p><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/Taichi-coder" class="d" target="_blank"><p>Github</p><i class="bi bi-github"></i></a>
                <a href="tel:+234-8112-717-345" class="e" target="_blank"><p>Telephone</p><i class="bi bi-telephone-fill"></i></a>
                <a href="mailto:chimachibuike200@gmail.com" class="f"><p>Mail</p><i class="bi bi-envelope-at-fill"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
