<nav class="main">
  <!-- Branding Image -->
  <a class="brand nav-block" href="{{ url('/') }}">
   <svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   width="160mm"
   height="150mm"
   viewBox="0 0 744.09449 1052.3622"
   id="main_logo_svg"
   version="1.1">
  <defs
     id="defs4138" />
  <metadata
     id="metadata4141">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <flowRoot
     transform="matrix(1.6907004,0,0,1.6907004,-206.71557,-124.71395)"
     style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
     id="flowRoot4383"
     xml:space="preserve"><flowRegion
       id="flowRegion4385"><rect
         y="51.496063"
         x="-200"
         height="700"
         width="1140"
         id="rect4387" /></flowRegion><flowPara
       id="flowPara4389" /></flowRoot>  <path
     d="m 793.30494,517.64483 c 0.64499,48.36372 -7.17312,95.99144 -22.68076,140.8963 -19.01012,55.0469 -49.57546,106.0021 -90.27097,149.20556 C 606.46007,886.19365 504.93736,932.9585 397.17311,938.18916 289.40885,943.41982 183.81691,906.7079 102.64257,835.7876 21.46824,764.8673 -28.950675,665.27581 -37.992297,557.99432 -56.785235,335.01058 104.76495,137.22598 330.26733,114.25543 L 591.08612,529.84175 C 587.34598,610.46585 509.52316,705.66602 427.56113,721.48553 345.5991,737.30504 263.03154,697.10082 227.47915,624.06057 191.92677,551.02032 212.55971,463.98358 277.47797,413.14865"
     id="path4403"
     style="opacity:1;fill:none;fill-opacity:1;stroke:#fb503b;stroke-width:46.80163068;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
  <path
     id="path4434"
     d="M 362.52134,531.62436 Z"
     style="fill:none;fill-rule:evenodd;stroke:#fb503b;stroke-width:2.37008524px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
</svg>

    <span>Jonathan Conde</span>
  </a>

  <!-- bloc vide -->
  <div class="search nav-block"></div>

  <ul class="main-nav">
    @if (Route::has('login'))
      <li>
        <a href="{{ url('/services') }}">Services</a>
      </li>
      <li>
        <a href="{{ url('/about') }}">À propos</a>
      </li>
      <li>
        <a href="{{ url('/contact') }}">Contact</a>
      </li>
      @if (Auth::check())
        <li>
          <a href="{{ url('/home') }}">Home</a>
        </li>
      @else
        <li>
          <a href="{{ url('/login') }}">Login</a>
        </li>
      @endif
    @endif
  </ul>

  <div class="responsive-sidebar-nav">
    <a href="#" class="toggle-slide menu-link btn">☰</a>
  </div>

</nav>
