<nav id="fejlec-menu" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
    <div class="container">
        <span class="navbar-brand">Becenév</span>

        <!-- Mobil nézet kapcsoló gombja -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigacio-tartalom"
            aria-controls="navigacio-tartalom" aria-expanded="false" aria-label="Navigáció lenyitása">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menüpontok -->
        <div class="collapse navbar-collapse" id="navigacio-tartalom">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo uri(1) ?>">Űrlap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo uri(2) ?>">Adatok</a>
                </li>
            </ul>
        </div>
    </div>
</nav>