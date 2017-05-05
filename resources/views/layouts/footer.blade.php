<section class="footer-section top">
    <div class="container">
        <div class="columns">
            <div data-wow-delay=".5s" class="column is-5 wow fadeIn" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                <h2 class="newsletter-heading pr-1-tablet has-text-centered-mobile">
                   Voulez-vous recevoir des news et des bons promos? 
                </h2>
            </div>
            <div class="column is-6 is-offset-1">
                <form id="newsletter-form" method="POST" action="/newsletters/subscribe">
                    <div class="newsletter-signup control has-addons wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;">
                        <input type="email" name="email" placeholder="Entrez votre Email" autocomplete="off" required="required" class="input">
                        <button type="submit" class="button is-outlined is-primary">
                            Souscrire
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="main">
  
  <ul>
    <li class="nav-docs">
      <a href="/services">Services</a>
    </li>
    <li class="nav-laravel-news">
      <a href="/about">À propos</a>
    </li>
    <li class="nav-forge">
      <a href="/contact">Contact</a>
    </li>
  </ul>
  
  <p>Copyright © Jonathan Conde.</p>
  
  <p class="less">
      Faites quelque chose que vous aimez
  </p>
  
</footer>
