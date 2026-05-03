

<footer id="footer" class="footer">

  <!-- ── Main body ── -->
  <div class="footer__body">

    <!-- SERVICES -->
    <div class="footer__col">
      <h3 class="footer__col-title">Services</h3>
      <ul class="footer__services">
        <li><a href="#">Branding &amp; Identity</a></li>
        <li><a href="#">Mobile Applications</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">UI/UX Design</a></li>
        <li><a href="#">SMM &amp; Ads</a></li>
        <li><a href="#">AI Integrations</a></li>
      </ul>
    </div>

    <!-- COMMUNICATION -->
    <div class="footer__col">
      <h3 class="footer__col-title">Communication</h3>

      <ul class="footer__services">

        <a href="#" class="footer__logo">
            <object data="/assets/icons/full-logo.svg" type="image/svg+xml"></object>
        </a>


        <li>
          <!-- Phone icon -->
            <svg width="24" height="24">
                <use href="#phone-gray"></use>
            </svg>
            <a href="tel:+10012221234">+1 001-222-1234</a>
        </li>
        <li>
          <!-- Mail icon -->
            <svg width="24" height="24">
                <use href="#email-gray"></use>
            </svg>
            <a href="mailto:hello@yokasoft.com">
                hello@yokasoft.com
            </a>
            <button class="footer__copy-btn" aria-label="Copy email" onclick="copyText('hello@yokasoft.com')">
              <svg width="16" height="16">
                  <use href="#copy"></use>
              </svg>
            </button>

        </li>
        <li>
          <!-- Telegram icon -->
        <svg width="24" height="24">
            <use href="#telegram"></use>
        </svg>
          <a href="#">Telegram</a>
        </li>
        <li>
            <!-- WhatsApp icon -->
            <svg width="24" height="24">
                <use href="#whatsapp"></use>
            </svg>
            <a href="#">WhatsApp</a>
        </li>
      </ul>
    </div>

    <!-- HEADQUARTERS -->
    <div class="footer__col">
      <h3 class="footer__col-title">Headquarters</h3>
      <div class="footer__address">
        <p>Los Angeles, CA<br>742 Evergreen Terrace, CA 90012</p>
        <button class="footer__copy-btn" aria-label="Copy address" onclick="copyText('742 Evergreen Terrace, Los Angeles, CA 90012')">
            <svg width="16" height="16">
                <use href="#copy"></use>
            </svg>
        </button>
      </div>
      <a href="#" class="footer__directions">Get directions</a>
    </div>

    <!-- NETWORK & CAREERS -->
    <div class="footer__col">
      <h3 class="footer__col-title">Network &amp; Careers</h3>

      <div class="footer__socials">
        <!-- YouTube -->
        <a href="#" class="footer__social-link" aria-label="YouTube">
            <svg width="24" height="24">
                <use href="#youtube"></use>
            </svg>
        </a>
        <!-- LinkedIn -->
        <a href="#" class="footer__social-link" aria-label="LinkedIn">
            <svg width="24" height="24">
                <use href="#linkedin"></use>
            </svg>
        </a>
        <!-- Instagram -->
        <a href="#" class="footer__social-link" aria-label="Instagram">
            <svg width="24" height="24">
                <use href="#instagram"></use>
            </svg>
        </a>
        <!-- TikTok -->
        <a href="#" class="footer__social-link" aria-label="TikTok">
            <svg width="24" height="24">
                <use href="#tiktok"></use>
            </svg>
        </a>
      </div>

      <div class="footer__career-links">
        <a href="#">Careers</a>
        <span>/</span>
        <a href="#">Send CV</a>
      </div>
    </div>

  </div><!-- /.footer__body -->

  <div class="footer__divider"></div>

  <!-- ── Bottom bar ── -->
  <div class="footer__bar">
    <div class="footer__bar-inner">
      <a href="#" class="footer__logo">
        <object data="/assets/icons/full-logo-small.svg" type="image/svg+xml"></object>
      </a>

      <p class="footer__copyright">Copyright © 2018–2026 Yoka-Soft Inc. All Rights Reserved.</p>

      <nav class="footer__legal">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Use</a>
        <a href="#">Sitemap</a>
      </nav>
    </div>
  </div>

</footer>

<!-- Toast notification -->
<div class="copy-toast" id="copyToast">Copied!</div>

<script>
  function copyText(text) {
    navigator.clipboard.writeText(text).then(() => {
      const toast = document.getElementById('copyToast');
      toast.classList.add('show');
      setTimeout(() => toast.classList.remove('show'), 1800);
    });
  }
</script>

