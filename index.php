
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h2 class="logo"><a href="index.php" class="logo1">AssignmentKaro.com</a></h2>
        <nav class="navigation">
            <a href="login page.php" class="logo1">HOME</a>
            <a href="#faq-section" class="faq-link">FAQs</a>
            <a href="#foot-notes" class="con">CONTACT</a>
            <button class="btnLogin-popup" id="joinUsBtn">Sign up/Login</button>
        </nav> 
    </header>
    <div class="login-container" id="loginContainer">
    <div class="blur-background"></div>
    <div class="head">
        <span class="auto-type"></span>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script>
          var typed =new Typed(".auto-type",{
            strings: ["Tired of doing assignments ?","We have a great solution!"],
            typeSpeed:25,
            backSpeed:25,
            loop: true
          })
          </script>
    </div>
    <img src="assign.png" class="img1">
    <p class="p">We have come up with an expert solution to get rid of loads of assignments given to you!!.<br>Get it done by someone in your locality or do his/her assignment and earn money for the deed!!<br> The platform is open to all and easy to use just login enter your location find a match and get your assignment done at minimal cost!!
    </p>
    </section>
    <section>
    <div class="head1">Save time or earn easy money!</div>
    <p class="p1"> What's more, our services come at a minimal cost, making academic success both accessible and affordable for you. Say goodbye to the stress of assignments and hello to a hassle-free, cost-effective solution for all your academic needs.</p>
    <img src="assign1.png" class="img2">
    </section>
    <section>
    <div class="head3">Find an efficient way to bust your assignments!!</div>
        <p class="p2">Experience the convenience of accomplishing your assignments effortlessly through our user-friendly platform. We provide you with an easy and efficient way to tackle your academic tasks, ensuring that your assignments are completed with minimal effort on your part.</p>
        <img src="delivery_guy.gif" class="img3">
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.2.0/socket.io.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        <div class="form-box login">
            <h2><centre>Login</centre></h2>
            <form action ="server2.php"method="post" id="loginForm">
                <div class="input-box">
                    <input type="text" required name="username1" id="userId">
                    <label>Username</label>
                </div> 
                <div class ="input-box">
                    <input type="password" required name="password_11" id="password">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Remember me</label>
                    <a href="#">Forgot password?</a>
                    </div>
                        <button type="submit" class="btn" name="login_Btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account ?
                            <a href="#"  class="register-link">Sign Up</a></p>
                </div>
            </form>
           
        </div>
        <div class="form-box register">
            <h2><centre>Register</centre></h2>
            <form action="server.php" method="post">
                 <div class="input-box">
                    <input type="text" required  id="username1" name="username1">
                    <label>Username</label>
                </div>
                <div class ="input-box">
                    <input type="Mail" required name="email1" id="email1">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" required name="password_11" id="password_11">
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <input type="password" required name="password_22" id="password_22">
                    <label>Confirm Password</label>
                </div>
                    <button type="submit" class="btn">Sign up</button>
                <div class="login-register">
                    <p>Already have an account ? <a href="#" 
                    class="login-link">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
    </div>
    <section id="faq-section">
    <h2>Frequently Asked Questions(FAQs)<img src="light.gif" id="light"></h2>
    <div class="faq-item">
        <div class="faq-box">
            <h3 class="question">Q : How does your assignment service work?</h3>
            <div class="answer">
                <p>A : Our assignment service simplifies the process for you.<br> You submit your assignment details, and we match you with a qualified<br> expert who will complete your task. Once done, you can easily access<br> and download the completed assignment or get it delivered to you.</p>
            </div>
        </div>
    </div>
    <div class="faq-item">
        <div class="faq-box">
            <h3 class="question">Q : What types of assignments do you handle?</h3>
            <div class="answer">
                <p>A : We handle a wide range of assignments across<br> various subjects and disciplines. Whether it's essays,<br> research papers, presentations, or other academic tasks, our <br>experts are here to help.</p>
            </div>
        </div>
    </div>
    <div class="faq-item">
        <div class="faq-box">
            <h3 class="question">Q : How can I submit my assignment?</h3>
            <div class="answer">
                <p>A : You can submit your assignment through our<br> user-friendly platform. Simply log in, provide the <br>assignment details, and our system will guide you through <br>the process. It's quick and straightforward.</p>
            </div>
        </div>
    </div>
    <div class="faq-item">
        <div class="faq-box">
            <h3 class="question">Q : Is my information and assignment content secure?</h3>
            <div class="answer">
                <p>A : Yes, we prioritize the security and confidentiality <br>of your information. Our platform uses industry-standard <br>encryption and security measures to protect your data.<br> Additionally, our experts adhere to a strict code <br>of ethics regarding user privacy.</p>
            </div>
        </div>
    </div>
</section>
    <footer id="foot-notes">
        <p>&copy; 2024 AssignmentKaro.com | All Rights Reserved</p><br>
        <p><ion-icon name="logo-instagram"></ion-icon>:  @AssignmentKaro.com</p>
        <p><ion-icon name="call"></ion-icon>: +91-95552-65752</p>
        <p><ion-icon name="mail"></ion-icon>: AssignmentKaro@gmail.com</p>
    </footer>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.faq-link').addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector('#faq-section').scrollIntoView({
            behavior: 'smooth'
        });
    });
    });

const faqBoxes = document.querySelectorAll('.faq-box');
faqBoxes.forEach(box => {
    box.addEventListener('click', function () {
        const answer = this.querySelector('.answer');
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            answer.style.display = 'block';
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.con').addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector('#foot-notes').scrollIntoView({
            behavior: 'smooth'
        });
    });
    });
</script>

</body>
</html>

