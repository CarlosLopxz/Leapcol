<!-- Chat funcional - Widget de chat interactivo para atención al cliente -->
<div id="chatWidget" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
  <!-- Botón -->
  <div id="chatBtn" onclick="toggleChat()"
    style="width: 56px; height: 56px; background: #dc3545; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(220,53,69,0.3); transition: all 0.3s ease;">
    <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
      <path
        d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 9H6V9h7v2zm3-4H6V5h10v2z" />
    </svg>
  </div>

  <!-- Ventana de chat -->
  <div id="chatWindow"
    style="position: absolute; bottom: 65px; right: 0; width: 320px; height: 400px; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); display: none; overflow: hidden; border: 1px solid #e5e7eb;">
    <!-- Header -->
    <div
      style="background: #dc3545; color: white; padding: 12px 16px; font-size: 14px; font-weight: 500; display: flex; justify-content: space-between; align-items: center;">
      <span>Chat con Asesor</span>
      <button onclick="toggleChat()" style="background: none; border: none; color: white; cursor: pointer; padding: 0;">
        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path
            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
        </svg>
      </button>
    </div>

    <!-- Mensajes -->
    <div id="chatMessages" style="height: 300px; overflow-y: auto; padding: 16px; background: #f9fafb;">
      <div
        style="background: #e5e7eb; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;">
        ¡Hola! Soy tu asesor virtual. ¿En qué puedo ayudarte?
      </div>
    </div>

    <!-- Input -->
    <div style="padding: 12px; border-top: 1px solid #e5e7eb; background: white;">
      <div style="display: flex; gap: 8px;">
        <input id="chatInput" type="text" placeholder="Escribe tu mensaje..."
          style="flex: 1; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 20px; font-size: 13px; outline: none;"
          onkeypress="if(event.key==='Enter') sendMessage()">
        <button onclick="sendMessage()"
          style="background: #dc3545; color: white; border: none; border-radius: 50%; width: 36px; height: 36px; cursor: pointer; display: flex; align-items: center; justify-content: center;">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path
              d="M15.854.146a.5.5 0 0 1 .11.54L13.026 8.5l2.938 7.814a.5.5 0 0 1-.11.54.5.5 0 0 1-.54.11L1 9.5l14.314-9.354a.5.5 0 0 1 .54-.11z" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>
</div>

<script>
  function toggleChat() {
    var chatWindow = document.getElementById('chatWindow');
    if (chatWindow.style.display === 'block') {
      chatWindow.style.display = 'none';
    } else {
      chatWindow.style.display = 'block';
      document.getElementById('chatInput').focus();
    }
  }

  function sendMessage() {
    var input = document.getElementById('chatInput');
    var message = input.value.trim();

    if (message) {
      var messagesDiv = document.getElementById('chatMessages');

      // Mensaje del usuario
      var userMsg = document.createElement('div');
      userMsg.style.cssText = 'background: #dc3545; color: white; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%; margin-left: auto; text-align: right; display: inline-block; width: fit-content; margin-left: auto;';
      userMsg.textContent = message;

      var userMsgContainer = document.createElement('div');
      userMsgContainer.style.cssText = 'display: flex; justify-content: flex-end; margin-bottom: 8px;';
      userMsgContainer.appendChild(userMsg);
      messagesDiv.appendChild(userMsgContainer);
      messagesDiv.scrollTop = messagesDiv.scrollHeight;

      var originalValue = input.value;
      input.value = '';
      input.disabled = true;

      // Enviar al backend
      fetch('<?= base_url("telegram/send") ?>', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
          'X-Requested-With': 'XMLHttpRequest'
        },
        body: 'message=' + encodeURIComponent(message)
      })
        .then(response => response.json())
        .then(data => {
          input.disabled = false;
          input.focus();

          var botMsg = document.createElement('div');
          botMsg.style.cssText = 'background: #e5e7eb; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;';

          if (data.status === 'success') {
            botMsg.textContent = 'Mensaje enviado. Un asesor te contactará pronto.';
          } else {
            botMsg.textContent = 'Error: ' + data.message;
          }
          messagesDiv.appendChild(botMsg);
          messagesDiv.scrollTop = messagesDiv.scrollHeight;
        })
        .catch(error => {
          input.disabled = false;
          console.error('Error:', error);
          var botMsg = document.createElement('div');
          botMsg.style.cssText = 'background: #fee2e2; color: #991b1b; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;';
          botMsg.textContent = 'Error de conexión. Intenta nuevamente.';
          messagesDiv.appendChild(botMsg);
        });
    }
  }

  document.addEventListener('click', function (e) {
    var chatWidget = document.getElementById('chatWidget');
    var chatBtn = document.getElementById('chatBtn');
    var chatWindow = document.getElementById('chatWindow');

    if (!chatWidget.contains(e.target) && chatWindow.style.display === 'block') {
      chatWindow.style.display = 'none';
    }
  });
</script>