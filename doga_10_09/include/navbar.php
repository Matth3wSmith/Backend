 <header class="navbar" role="banner">
        <div class="navbar__container">
            <a href="#" class="navbar__brand">Oldal</a>
            <button class="navbar__toggle" 
                    id="navbarToggle" 
                    aria-label="Toggle navigation" 
                    aria-controls="navbarMenu" 
                    aria-expanded="false">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            
            <nav id="navbarMenu" class="navbar__menu" role="navigation" aria-labelledby="navbarToggle">
                <ul class="navbar__list">
                    <li class="navbar__item"><a href="<?php echo uri(1) ?>" class="navbar__link">Főoldal</a></li>
                    <li class="navbar__item"><a href="<?php echo uri(2) ?>" class="navbar__link">Aloldal</a></li>
                    <li class="navbar__item"><a href="<?php echo uri(3) ?>" class="navbar__link">Űrlap</a></li>
                    <li class="navbar__item"><a href="<?php echo uri(4) ?>" class="navbar__link">Táblázat</a></li>
                </ul>
            </nav>
        </div>
    </header>