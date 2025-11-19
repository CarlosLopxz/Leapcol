
<section class="position-relative pt-20 bg-white overflow-hidden"
      style="background-image: url('euphoria-assets/elements/pattern-light.png')">
      <div class="position-absolute top-0 start-0 h-100 w-100"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%);"></div>
      <div class="position-relative container pb-12" style="z-index:1;">
        <div class="row g-16">
          <div class="col-12 col-md-8">
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
            <div class="d-flex mb-6"><a href="#"><img class="img-fluid" src="<?= media_url() ?>img/Logo.png" alt="leapcol" width="150" /></a></div>
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

  <?= $this->include('layouts/chat') ?>

  <script src="<?= media_url() ?>js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?= media_url() ?>js/main.js"></script>
  
  <style>
    .grayscale {
      filter: grayscale(100%);
      opacity: 0.6;
      transition: all 0.4s ease;
      height: 40px;
      width: auto;
      max-width: 120px;
      object-fit: contain;
    }
    .grayscale:hover {
      filter: grayscale(0%);
      opacity: 1;
    }
  </style>
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
    document.addEventListener('click', function(e) {
      var chatWidget = document.getElementById('chatWidget');
      if (!chatWidget.contains(e.target)) {
        document.getElementById('chatWindow').style.display = 'none';
      }
    });
  </script>

</body>
</html>