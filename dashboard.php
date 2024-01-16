<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #chatButton{
      display: none;
    }
  </style>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h2 class="logo"><a href="login page.php">AssignmentKaro.com</a></h2>
        <nav class="navigation">
            <a href="#">HOME</a>
            <a href="#">SERVICES</a>
            <a href="#">CONTACT</a>
            <button class="btnLogin-popup">Your profile</button>
            
        </nav>
    </header>    
    <div id="notification">
        <button id="fetchMatchedUserData" onclick="showStartChatButton()">Matched Status</button>
        <div id="matchedUserData">

        </div>
        
        <button id="chatButton" onclick="startChat()">Start Chatting</button>
        
    </div>
    
  
    <script>
       function showStartChatButton() {
            var showButton = document.getElementById("fetchMatchedUserData");
            var startChatButton = document.getElementById("chatButton");
            startChatButton.style.display = "block";
            showButton.style.display = "none";
        }

      function redirect(id,status,username1,musername) {
        window.location.href=`chat.php?user_id=${id}&matched_user_id=${status}&user1=${username1}&user2=${musername}`
      }
      document.addEventListener('DOMContentLoaded', function() {
    const fetchMatchedUserDataButton = document.getElementById('fetchMatchedUserData');
    const matchedUserDataDiv = document.getElementById('matchedUserData');
    fetchMatchedUserDataButton.addEventListener('click', function() {
        fetch('dashboserv1.php')
        .then(response=>response.json())
        .then(data=>{
          let matchedData='';
          data.forEach(item =>{
            matchedData+=`<div class="data"><p>User ID: ${item.status}<br>Username: ${item.musername}</p>
            </div>`; 
            document.getElementById('chatButton').addEventListener('click',function(){
              redirect(item.id,item.status,item.username1,item.musername);
          });
          matchedUserDataDiv.innerHTML=matchedData;
          });
        })
        .catch(error=>console.error('Error:',error));
    });
});
      </script>
        <div class="loader">
        <h3> What is your interest for <span class="auto-type"></span></h3>
        </div>
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script>
          var typed =new Typed(".auto-type",{
            strings: ["today?","tomorrow?","everyday?"],
            typeSpeed:50,
            backSpeed:50,
            loop: true
          })
          </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.2.0/socket.io.js"></script>
    <script src="dashboard.js"></script>
    <form id="hero1">
    <div class="hero" id="hero">
      <div class="container">
       <div class="row"><p>Get your assignment done!</p>
        <label><input type="radio" id="checkbox1" name="option" value="1">
        <span></span>
        </label> 
       </div> 
       <div class="row"><p>Do assignment</p>
        <label><input type="radio" id="checkbox2" name="option" value="2">
        <span></span>
      </label> 
       </div> 
       <div class="conti">
       <button type="submit" class="btn2 btn3" name="submit" id="submit">Submit</button>
       </div>
      </div>
    </div>
    </form>
    
<script>
  document.getElementById('submit').addEventListener('click', function () {
    const selectedOption = [];
    const checkboxes = document.querySelectorAll('input[type="radio"]:checked');
    checkboxes.forEach(radio=> {
      selectedOption.push(radio.value);
    });
    if(selectedOption.length===0) {
      alert('Please select any one option.');
      return;
    }
    fetch('dashboserv.php', {
        method: 'POST',
        body: JSON.stringify(selectedOption),
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href=data.redirect
        } else {
            alert('Error saving preferences. Please try again.');
        }
    })
    .catch(error => {
        console.error(error);
    });
});
</script>

</body>
</html>



