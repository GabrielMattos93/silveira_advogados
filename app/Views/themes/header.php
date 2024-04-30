    <!--- Topbar
    ================================================== -->
    <div class="container-fluid bg-dark py-2 d-none d-md-flex">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa-solid fa-clock me-2"></i>Seg-Sex 09:00-17:30</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>090-080-0760</small>
                </div>
                <div class="top-link">
                    <a href class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                    <a href class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-linkedin text-primary"></i></a>
                    <a href class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                    <a href class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--- Header
    ================================================== -->

    <nav class="navbar navbar-expand-lg bg-light navbar sticky-top px-4 px-lg-5">
        <a href="./" class="navbar-brand d-flex align-items-center">
            <img src="<?= base_url('assets/frontend/images/logo/logo.png') ?>" alt="logotipo">
        </a>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto  rounded pe-4 py-3 py-lg-0">
                <a href="./" class="nav-item nav-link active">Home</a>
                <a href="<?= site_url('#institucional') ?>" class="nav-item nav-link">Institucional</a>
                <a href="<?= site_url('#areas-de-atuacao') ?>" class="nav-item nav-link">Áreas de Atuação</a>
                <a href="<?= site_url('#equipe') ?>" class="nav-item nav-link">Especialistas</a>
                <a href="<?= site_url('#contato') ?>" class="nav-item nav-link">Contato</a>
            </div>
        </div>
        <a href class="btn btn-primary px-3 d-none d-lg-block"><i class="fa-brands fa-whatsapp"></i> Advogado Online</a>
    </nav>