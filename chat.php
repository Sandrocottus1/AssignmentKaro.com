<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" type="text/css" href="chatstyle.css">
</head>
<body>
    <div id="chat-box"></div>
    <div class="input-container">
    <input type="text" id="message" placeholder="Type your message">
</div>
    <button onclick="sendMessage()" id="send">Send</button>
    <script>
        const userId = getParameterByName('user_id');
        const matchedUserId = getParameterByName('matched_user_id');
        const user1=getParameterByName('user1');

        function fetchMessages() {
            const chatBox = document.getElementById('chat-box');
            fetch(`get_messages.php?user_id=${userId}&matched_user_id=${matchedUserId}`)
                .then(response => response.json())
                .then(data => {
                    chatBox.innerHTML = data.map(msg => `<span class="styleuser">${msg.user1}:   </span><span>${msg.message}</span><br><br>`).join('');
                    chatBox.scrollTop = chatBox.scrollHeight;
                });
        }
        function sendMessage() {
            const messageInput = document.getElementById('message');
            const message = messageInput.value.trim();
            if (message !== '') {
                fetch('send_message.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ userId, matchedUserId, message ,user1}),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        fetchMessages();
                    } else {
                        alert('Failed to send message.');
                    }
                });

                messageInput.value = '';
            }
        }
        setInterval(fetchMessages, 2000);

        function getParameterByName(name, url = window.location.href) {
            name = name.replace(/[\[\]]/g, '\\$&');
            const regex = new RegExp(`[?&]${name}(=([^&#]*)|&|#|$)`);
            const results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }
    </script>
</body>
</html>
