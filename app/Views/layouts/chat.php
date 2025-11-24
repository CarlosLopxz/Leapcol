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
    var badge = document.getElementById('notificationBadge');
    
    if (chatWindow.style.display === 'block') {
      chatWindow.style.display = 'none';
      if (messageInterval) {
        clearInterval(messageInterval);
      }
    } else {
      chatWindow.style.display = 'block';
      document.getElementById('chatInput').focus();
      startMessagePolling();
      
      if (badge) {
        badge.remove();
      }
    }
  }

  function startMessagePolling() {
    if (messageInterval) {
      clearInterval(messageInterval);
    }
    messageInterval = setInterval(checkForMessages, 3000);
    checkForMessages();
  }

  function checkForMessages() {
    if (!formSubmitted) return;
    
    fetch('<?= base_url("telegram/messages") ?>?last_update_id=' + lastUpdateId)
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success' && data.messages.length > 0) {
          var messagesDiv = document.getElementById('chatMessages');
          var chatWindow = document.getElementById('chatWindow');
          
          data.messages.forEach(function(msg) {
            var botMsg = document.createElement('div');
            botMsg.style.cssText = 'background: #e5e7eb; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;';
            botMsg.innerHTML = '<strong>' + msg.from + ':</strong> ' + msg.text;
            messagesDiv.appendChild(botMsg);
          });
          
          messagesDiv.scrollTop = messagesDiv.scrollHeight;
          lastUpdateId = data.last_update_id;
          
          if (chatWindow.style.display !== 'block') {
            showNotification();
          }
        }
      })
      .catch(error => {
        console.error('Error checking messages:', error);
      });
  }
  
  function showNotification() {
    var chatBtn = document.getElementById('chatBtn');
    
    if (!document.getElementById('notificationBadge')) {
      var badge = document.createElement('div');
      badge.id = 'notificationBadge';
      badge.style.cssText = 'position: absolute; top: -5px; right: -5px; background: #ff4444; color: white; border-radius: 50%; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold; animation: pulse 1s infinite;';
      badge.textContent = '1';
      chatBtn.parentElement.appendChild(badge);
      
      if (!document.getElementById('pulseCSS')) {
        var style = document.createElement('style');
        style.id = 'pulseCSS';
        style.textContent = '@keyframes pulse { 0% { transform: scale(1); } 50% { transform: scale(1.1); } 100% { transform: scale(1); } }';
        document.head.appendChild(style);
      }
    }
  }

  var hasShownForm = false;
  var formSubmitted = false;
  var lastUpdateId = 0;
  var messageInterval;

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

      input.value = '';

      if (!hasShownForm) {
        showContactForm(message);
        hasShownForm = true;
      } else if (!formSubmitted) {
        var messagesDiv = document.getElementById('chatMessages');
        var botMsg = document.createElement('div');
        botMsg.style.cssText = 'background: #e5e7eb; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;';
        botMsg.textContent = 'Por favor completa el formulario antes de enviar más mensajes.';
        messagesDiv.appendChild(botMsg);
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
      } else {
        sendToTelegram(message);
      }
    }
  }

  function showContactForm(originalMessage) {
    var messagesDiv = document.getElementById('chatMessages');
    
    // Mostrar indicador de "escribiendo"
    var typingMsg = document.createElement('div');
    typingMsg.id = 'typingIndicator';
    typingMsg.style.cssText = 'background: #e5e7eb; padding: 6px 10px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;';
    typingMsg.innerHTML = '<span class="typing-dots"><span style="font-size: 18px;">.</span><span style="font-size: 18px;">.</span><span style="font-size: 18px;">.</span></span>';
    messagesDiv.appendChild(typingMsg);
    messagesDiv.scrollTop = messagesDiv.scrollHeight;

    // Agregar CSS para animación de puntos
    if (!document.getElementById('typingCSS')) {
      var style = document.createElement('style');
      style.id = 'typingCSS';
      style.textContent = `
        .typing-dots span {
          animation: typing 1.4s infinite;
        }
        .typing-dots span:nth-child(2) {
          animation-delay: 0.2s;
        }
        .typing-dots span:nth-child(3) {
          animation-delay: 0.4s;
        }
        .typing-dots span:nth-child(4) {
          animation-delay: 0.6s;
        }
        @keyframes typing {
          0%, 60%, 100% { opacity: 0.3; }
          30% { opacity: 1; }
        }
      `;
      document.head.appendChild(style);
    }

    // Después de 2 segundos, mostrar el formulario
    setTimeout(() => {
      typingMsg.remove();
      
      var botMsg = document.createElement('div');
      botMsg.style.cssText = 'background: #e5e7eb; padding: 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 90%;';
      botMsg.innerHTML = `
        <p style="margin: 0 0 12px 0; font-weight: 500;">Antes de que un asesor se comunique contigo, por favor llena este formulario:</p>
        <form id="contactForm" style="display: flex; flex-direction: column; gap: 8px;">
          <input type="text" id="userName" placeholder="Tu nombre completo" required style="padding: 6px 8px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 12px;">
          <input type="tel" id="userPhone" placeholder="Número de teléfono" required style="padding: 6px 8px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 12px;">
          <textarea id="userSpecs" placeholder="Especificaciones del soporte que necesitas" required style="padding: 6px 8px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 12px; resize: vertical; min-height: 40px;"></textarea>
          <button type="button" onclick="event.stopPropagation(); submitContactForm('${originalMessage}')" style="background: #dc3545; color: white; border: none; padding: 8px 12px; border-radius: 6px; font-size: 12px; cursor: pointer; margin-top: 4px;">Enviar información</button>
        </form>
      `;
      messagesDiv.appendChild(botMsg);
      messagesDiv.scrollTop = messagesDiv.scrollHeight;
    }, 2000);
  }

  function submitContactForm(originalMessage) {
    var name = document.getElementById('userName').value.trim();
    var phone = document.getElementById('userPhone').value.trim();
    var specs = document.getElementById('userSpecs').value.trim();

    if (!name || !phone || !specs) {
      alert('Por favor completa todos los campos');
      return;
    }

    var fullMessage = `📋 SOLICITUD DE SOPORTE\n\n👤 Nombre: ${name}\n📞 Teléfono: ${phone}\n💬 Mensaje inicial: ${originalMessage}\n📝 Especificaciones: ${specs}`;

    var formElement = document.getElementById('contactForm');
    formElement.innerHTML = '<p style="margin: 0; color: #059669;">Enviando información...</p>';

    fetch('<?= base_url("telegram/send") ?>', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        'X-Requested-With': 'XMLHttpRequest'
      },
      body: 'message=' + encodeURIComponent(fullMessage) + '&contact=' + encodeURIComponent(name)
    })
    .then(response => response.json())
    .then(data => {
      formElement.style.display = 'none';
      
      var messagesDiv = document.getElementById('chatMessages');
      var botMsg = document.createElement('div');
      botMsg.style.cssText = 'background: #dcfce7; color: #166534; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;';
      
      if (data.status === 'success') {
        formSubmitted = true;
        startMessagePolling();
        botMsg.textContent = '✅ Información enviada correctamente. Un asesor se comunicará contigo pronto.';
      } else {
        botMsg.textContent = '❌ Error al enviar. Intenta nuevamente.';
      }
      messagesDiv.appendChild(botMsg);
      messagesDiv.scrollTop = messagesDiv.scrollHeight;
    })
    .catch(error => {
      formElement.style.display = 'none';
      
      console.error('Error:', error);
      var messagesDiv = document.getElementById('chatMessages');
      var botMsg = document.createElement('div');
      botMsg.style.cssText = 'background: #fee2e2; color: #991b1b; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;';
      botMsg.textContent = '❌ Error de conexión. Intenta nuevamente.';
      messagesDiv.appendChild(botMsg);
    });
  }

  function sendToTelegram(message) {
    var input = document.getElementById('chatInput');
    input.disabled = true;

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

      var messagesDiv = document.getElementById('chatMessages');
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
      var messagesDiv = document.getElementById('chatMessages');
      var botMsg = document.createElement('div');
      botMsg.style.cssText = 'background: #fee2e2; color: #991b1b; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;';
      botMsg.textContent = 'Error de conexión. Intenta nuevamente.';
      messagesDiv.appendChild(botMsg);
    });
  }

  document.addEventListener('click', function (e) {
    var chatWidget = document.getElementById('chatWidget');
    var chatBtn = document.getElementById('chatBtn');
    var chatWindow = document.getElementById('chatWindow');

    if (!chatWidget.contains(e.target) && chatWindow.style.display === 'block' && !e.target.closest('#contactForm')) {
      chatWindow.style.display = 'none';
    }
  });
</script>