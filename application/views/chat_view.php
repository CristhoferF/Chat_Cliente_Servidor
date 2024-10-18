<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat en Tiempo Real</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2C2F33; /* Fondo gris oscuro */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            width: 90%;
            max-width: 400px;
            background-color: #3B3F45;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .header {
            background-color: #7289DA; /* Color celeste-morado */
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            position: relative;
        }

        .header:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 4px;
            background-color: #5B6EAE; /* Tono más oscuro del celeste-morado */
            border-radius: 2px;
        }

        .chat-container {
            padding: 15px;
            display: flex;
            flex-direction: column;
            height: 400px;
            overflow-y: auto;
            background-color: #424752; /* Fondo ligeramente más oscuro */
        }

        .message-bubble {
            margin: 10px 0;
            padding: 12px 18px;
            border-radius: 20px;
            max-width: 70%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .sent {
            background-color: #7289DA; /* Celeste-morado */
            color: white;
            align-self: flex-end;
        }

        .received {
            background-color: #4B4F59;
            color: #DDD;
            align-self: flex-start;
            border: 1px solid #5B6EAE; /* Tono más oscuro */
        }

        .input-container {
            display: flex;
            padding: 10px;
            background-color: #3B3F45;
            border-top: 1px solid #5B6EAE;
        }

        .input-container input {
            flex: 1;
            padding: 12px;
            border-radius: 20px;
            border: 1px solid #666;
            outline: none;
            margin-right: 10px;
            background-color: #2C2F33;
            color: #DDD;
        }

        .input-container input::placeholder {
            color: #AAA;
        }

        .input-container button {
            background-color: #7289DA;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 12px 15px;
            cursor: pointer;
            font-size: 16px;
            outline: none;
            transition: background-color 0.3s;
        }

        .input-container button:hover {
            background-color: #5B6EAE;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            Chat en tiempo real
        </div>
        <div class="chat-container" id="chat">
        </div>
        <div class="input-container">
            <input type="text" id="message" placeholder="Escribe un mensaje">
            <button id="send">Enviar</button>
        </div>
    </div>

    <script>
        var conn = new WebSocket('ws://192.168.56.1:8080');
        var chat = document.getElementById('chat');
        var sendButton = document.getElementById('send');
        var messageInput = document.getElementById('message');

        conn.onopen = function(e) {
            chat.innerHTML += '<div class="message-bubble received">Conexión establecida</div>';
        };

        conn.onmessage = function(e) {
            chat.innerHTML += '<div class="message-bubble received">' + e.data + '</div>';
            chat.scrollTop = chat.scrollHeight;
        };

        function sendMessage() {
            var msg = messageInput.value;
            if (msg.trim() !== '') {
                chat.innerHTML += '<div class="message-bubble sent">' + msg + '</div>';
                conn.send(msg);
                messageInput.value = '';
                chat.scrollTop = chat.scrollHeight;
            }
        }

        sendButton.onclick = sendMessage;

        messageInput.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        });
    </script>
</body>
</html>
