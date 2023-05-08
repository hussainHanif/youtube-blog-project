<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="" class="logo">
            <img src="assets/images/logo-v3.png" alt="">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a href="#top" class="active">{{ __('header.home') }}</a></li>
            <li class="scroll-to-section"><a href="#about">{{ __('header.about') }}</a></li>
            <li class="scroll-to-section"><a href="#blog">{{ __('header.blog') }}</a></li>
            <li class="scroll-to-section"><a href="#contact">{{ __('header.contact') }}</a></li> 
            <li>
              <div class="dropdown">
                  <a style="color:black !important" class="dropdown-toggle" href="#" role="button" id="languageDropdown"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      
                      <span>Language</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="languageDropdown">
                      <a class="dropdown-item" href="en">
                          English
                      </a>
                      <a class="dropdown-item" href="fr">
                          Français
                      </a>
                  </div>
          </li>
          </ul>        
          <a class='menu-trigger'>
              <span>{{ __('header.menu') }}</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>