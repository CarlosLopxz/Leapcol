     <!-- Texto pequeño (opcional) -->
      <p class="mt-4 mb-0 text-secondary fs-11">
        También puedes escribir a <strong>hola@tusistema.com</strong> o llamarnos al <strong>+57 300 123 4567</strong>
      </p>
      
    </div>
  </div>
</section>
    </div>
  <section class="position-relative pt-20 bg-white overflow-hidden"
      style="background-image: url('euphoria-assets/elements/pattern-light.png')">
      <div class="position-absolute top-0 start-0 h-100 w-100"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%);"></div>
      <div class="position-relative container pb-12" style="z-index:1;">
        <div class="row g-16">
          <div class="col-12 col-md-8">
            <div class="d-flex mb-6"><a href="#"><img class="img-fluid" src="<?= media_url() ?>img/Logo.png" alt="" width="250" /></a></div>
            <ul class="nav ms-n6">
              <li class="nav-item"><a class="nav-link p-6 fs-11 link-secondary-light" href="#">Productos</a></li>
              <li class="nav-item"><a class="nav-link p-6 fs-11 link-secondary-light" href="#">Prueba gratis</a></li>
              <li class="nav-item"><a class="nav-link p-6 fs-11 link-secondary-light" href="#">Sistemas</a></li>
              <li class="nav-item"><a class="nav-link p-6 fs-11 link-secondary-light" href="#">Recursos</a></li>
              <li class="nav-item"><a class="nav-link p-6 fs-11 link-secondary-light" href="#">Carreras</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-4">
            <div class="mw-md-sm ms-auto">
              <h3 class="font-heading mb-5 fs-10">Informacion</h3>
              <div class="row g-4 justify-content-center">
                <div class="col">
                  <div class="form-group">
                    <input class="form-control text-secondary-dark p-3 shadow" id="footerInput29-1" type="email"
                      aria-describedby="emailHelp"  placeholder="Introduce tu correo electrónico" />
                  </div>
                </div>
                <div class="col-12 col-lg-auto">
                  <button class="btn btn-lg btn-danger fs-11 w-100 py-3 px-4 h-100 shadow"
                    type="submit">Suscribirse</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="position-relative border-bottom border-light" style="z-index: 1;"></div>
      <div class="position-relative container" style="z-index: 1;">
        <div class="row align-items-center justify-content-between pt-12 pb-20 g-4">
          <div class="col-auto">
            <p class="mb-0 fs-11 fw-medium text-center text-secondary-light">2025- Leapcol S.A.S</p>
          </div>
          <div class="col-auto">
            <ul class="nav ms-n6">
              <li class="nav-item"><a class="nav-link p-4 fs-11 link-secondary-light" href="#">Términos</a></li>
              <li class="nav-item"><a class="nav-link p-4 fs-11 link-secondary-light" href="#">Privacidad</a></li>
              <li class="nav-item"><a class="nav-link p-4 fs-11 link-secondary-light" href="#">Cookies</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- Chat funcional -->
  <div id="chatWidget" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
    <!-- Botón -->
    <div id="chatBtn" onclick="toggleChat()" style="width: 56px; height: 56px; background: #dc3545; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(220,53,69,0.3); transition: all 0.3s ease;">
      <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
        <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 9H6V9h7v2zm3-4H6V5h10v2z"/>
      </svg>
    </div>
    
    <!-- Ventana de chat -->
    <div id="chatWindow" style="position: absolute; bottom: 65px; right: 0; width: 320px; height: 400px; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); display: none; overflow: hidden; border: 1px solid #e5e7eb;">
      <!-- Header -->
      <div style="background: #dc3545; color: white; padding: 12px 16px; font-size: 14px; font-weight: 500; display: flex; justify-content: space-between; align-items: center;">
        <span>Chat con Asesor</span>
        <button onclick="toggleChat()" style="background: none; border: none; color: white; cursor: pointer; padding: 0;">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
          </svg>
        </button>
      </div>
      
      <!-- Mensajes -->
      <div id="chatMessages" style="height: 300px; overflow-y: auto; padding: 16px; background: #f9fafb;">
        <div style="background: #e5e7eb; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;">
          ¡Hola! Soy tu asesor virtual. ¿En qué puedo ayudarte?
        </div>
      </div>
      
      <!-- Input -->
      <div style="padding: 12px; border-top: 1px solid #e5e7eb; background: white;">
        <div style="display: flex; gap: 8px;">
          <input id="chatInput" type="text" placeholder="Escribe tu mensaje..." style="flex: 1; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 20px; font-size: 13px; outline: none;" onkeypress="if(event.key==='Enter') sendMessage()">
          <button onclick="sendMessage()" style="background: #dc3545; color: white; border: none; border-radius: 50%; width: 36px; height: 36px; cursor: pointer; display: flex; align-items: center; justify-content: center;">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M15.854.146a.5.5 0 0 1 .11.54L13.026 8.5l2.938 7.814a.5.5 0 0 1-.11.54.5.5 0 0 1-.54.11L1 9.5l14.314-9.354a.5.5 0 0 1 .54-.11z"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= media_url() ?>js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?= media_url() ?>js/main.js"></script>
  
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
        
        // Respuesta automática
        setTimeout(function() {
          var botMsg = document.createElement('div');
          botMsg.style.cssText = 'background: #e5e7eb; padding: 8px 12px; border-radius: 12px; margin-bottom: 8px; font-size: 13px; max-width: 80%;';
          botMsg.textContent = 'Gracias por tu mensaje. Un asesor te contactará pronto. También puedes escribirnos a soporte@leapcol.com';
          messagesDiv.appendChild(botMsg);
          messagesDiv.scrollTop = messagesDiv.scrollHeight;
        }, 1000);
        
        input.value = '';
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
      }
    }
    
    // Cerrar al hacer clic fuera
    document.addEventListener('click', function(e) {
      var chatWidget = document.getElementById('chatWidget');
      if (!chatWidget.contains(e.target)) {
        document.getElementById('chatWindow').style.display = 'none';
      }
    });
  </script>
</body>

</html>