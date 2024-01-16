<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Match Users</title>
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
      }
        #plane {
      position: absolute;
      top: 40%;
      left: 30%;
      transform: translateY(-50%);
      width: 50px; 
      height: auto;
      z-index: 99;
      animation: travelSinePath 4s linear infinite;
    }
    
    @keyframes travelSinePath {
      0% {
        transform: translate(30, 30);
      }
      25% {
        transform: translate(300px, calc(200px * sin(90deg)));
      }
      50% {
        transform: translate(400px, 0);
      }
      75% {
        transform: translate(500px, calc(-200px * sin(90deg)));
      }
      100% {
        transform: translate(950px, 0);
      }
    }
        .button{
            position: fixed;
            display: inline-flex;
            top: 47%;
            left: 70%;
            height: 70px;
            padding: 0;
            background:#526D82;
            border: none;
            outline: none;
            border-radius: 5px;
            overflow: hidden;
            font-family: 'Poppins',sans-serif;
            font-size: 30px;
            font-weight: 500;
            cursor: pointer;
        }
        .button:hover{
            background: #27374D;
        }
        .button:active{
            background: #9DB2BF;
        }
        .button__text,
        .button__icon{
            display:inline-flex;
            align-items: center;
            padding:0 30px;
            height: 100%;
            color: #fff;
            height: 100%;  
        }
        .button__icon{
            font-size: 1.5em;
            background: rgba(0,0,0,0.08);
        }
        #carousel-container{
      
      position: fixed;
      border: solid 5px black;
      top: 28%;
      left: 8%;
      width: 600px;
      height: 400px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .carousel-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      animation: rotateImages 10s infinite; /* Adjust the duration based on your preference */
    }

    @keyframes rotateImages {
      0%, 100% {
        opacity: 0;
        transform: translateX(100%);
      }
      16.666%, 83.333% {
        opacity: 1;
        transform: translateX(0);
      }
      33.333%, 66.666% {
        opacity: 0;
        transform: translateX(-100%);
      }
    }
    body{
      display: flex;
      justify-content: center;
      min-height: 100vh;
      background: #DDE6ED;
    }
    .content{
      position: fixed;
    }
    .content h2{
      position: fixed;
      top: 15%;
      left: 30%;
      color: #27374D;
      transform: translate(-50%,-50%);
      font-size: 5em;
      width: 900px;
    }
    .content h2:nth-child(1)
    {
      color: transparent;
      -webkit-text-stroke: 2px #27374D;
    }
    .content h2:nth-child(2)
    {
      color: #526D82;
      animation: animate 4s ease-in-out infinite;
    }
    @keyframes animate
    {
      0%,100%
      {
        clip-path: polygon(0% 44%, 5% 49%, 13% 53%, 19% 55%, 34% 58%, 43% 55%, 55% 50%, 70% 45%, 84% 40%, 93% 40%, 98% 40%, 100% 99%, 0% 100%);
      }
      50%{
        clip-path: polygon(0% 46%, 5% 46%, 14% 45%, 24% 47%, 31% 51%, 40% 61%, 53% 63%, 72% 64%, 81% 58%, 96% 54%, 100% 47%, 100% 100%, 0% 100%);
      }

    }
    </style>
</head>
<body>
  <div class="content">
  <h2>Don't let it overflow!</h2>
  <h2>Don't let it overflow!</h2>
  </div> 
    <img id="plane" src="plane.png" alt="Paper Plane"></img>
<div id="carousel-container">
  <img class="carousel-image" src="tension.jpg" alt="Image 1">
  <img class="carousel-image" src="notension.jpg" alt="Image 2">
  <img class="carousel-image" src="chatting.jpg" alt="Image 3">
</div>
    <button type="button" class="button" id ="matchButton">
        <span class="button__text">Find Match</span>
        <span class="button__icon">    
        <ion-icon name="person-add-outline"></ion-icon>
        </span>
</button>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
    let currentSlide = 0;
  const slides = document.querySelectorAll('.carousel-image');
  const intervalTime = 3000;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      if (i === index) {
        slide.style.display = 'block';
      } else {
        slide.style.display = 'none';
      }
    });
  }
  function changeSlide(direction) {
    currentSlide += direction;
    
    if (currentSlide < 0) {
      currentSlide = slides.length - 1;
    } else if (currentSlide >= slides.length) {
      currentSlide = 0;
    }

    showSlide(currentSlide);
  }

  function autoSlide() {
    setInterval(() => {
      changeSlide(1);
    }, intervalTime);
  }
  showSlide(currentSlide);
  autoSlide();

        document.addEventListener("DOMContentLoaded", function() {
    const matchButton = document.getElementById("matchButton");
    matchButton.addEventListener("click", function() {
        fetch("searchserv.php")
            .then(response => response.json())
            .then(data => {
                if (data.matched) {
                    const user1 = data.user1;
                    const user2 = data.user2;
                    const user1Confirmation = confirm(`You have a match with User @${user2.user_name}. Do you want to proceed?`);
                    if (user1Confirmation) {
                        Swal.fire("Match confirmed! You are now connected.");
                        document.ready(window.setTimeout(location.href = `chat.php?user_id=${user1.user_id}&matched_user_id=${user2.user_id}&user1=${user1.user_name}&user2=${user2.user_name}`,10000));
                    } else {
                        Swal.fire("Match declined.");
                    }
                } else {
                    Swal.fire("No matches found. Retry later.");
                }
            })
            .catch(error => {
                console.error("Error finding a match:", error);
            });
            
    });
});

    </script>
</body>
</html>
