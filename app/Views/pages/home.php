<?= $this->extend('master') ?>

<?= $this->section('conteudo') ?>
<!--- Banner Hero
    ================================================== -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?= base_url('assets/frontend/images/bg/slider-bg-1.jpg') ?>" alt="slider-background-1">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h1 class="display-3 text-dark mb-4 animated slideInDown">Precisando de Advogados Para Sua Defesa?</h1>
                                <p class="fs-5 text-primary mb-5">Somos um conceituado escritório de advogados do Brasil e temos por objetivo prestar serviços jurídicos com alto padrão de qualidade e excelência. </p>
                                <a href="#institucional" class="btn btn-primary py-3 px-5 text-uppercase">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?= base_url('assets/images/bg/slider-bg-2.jpg') ?>" alt="slider-background-2">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h1 class="display-3 text-dark mb-4 animated slideInDown">Precisando de Advogados Para Sua Defesa?</h1>
                                <p class="fs-5 text-primary mb-5">Somos um conceituado escritório de advogados do Brasil e temos por objetivo prestar serviços jurídicos com alto padrão de qualidade e excelência. </p>
                                <a href="#institucional" class="btn btn-primary rounded-pill py-3 px-5 text-uppercase">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<!--- Sobre o Escritório
    ================================================== -->
<div class="container-xxl py-5" id="institucional">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="<?= base_url('assets/frontend/images/about/sobre.jpg') ?>">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-5 mb-4">Silveira Advogados
                    Escritório de Advocacia</h1>
                <p class="mb-4">Somos um conceituado escritório de advocacia dedicado a fornecer soluções jurídicas excepcionais para nossos clientes. Com uma equipe de advogados altamente qualificados e especializados em diversas áreas do direito, estamos comprometidos em oferecer um aconselhamento estratégico que atenda às necessidades específicas de cada caso.
                <p> Nossa abordagem focada na obtenção de resultados eficazes é respaldada por nossa vasta expertise e especialização, garantindo que nossos clientes recebam a melhor representação possível em todas as etapas do processo legal.</p>
                <p><i class="fa fa-check text-primary me-3"></i>Aconselhamento Estratégico</p>
                <p><i class="fa fa-check text-primary me-3"></i>Resultados Eficazes</p>
                <p><i class="fa fa-check text-primary me-3"></i>Expertise e Especialização</p>
            </div>
        </div>
    </div>
</div>

<!--- Áreas de Atuação
    ================================================== -->
<section class="atuacao section" id="areas-de-atuacao">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <span class="text-body">Áreas de Atuação</span>
                <h1 class="display-6 mb-5">Nossa Equipe de Especialistas Atua em Diversas Áreas</h1>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="atuacao-item  position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Direito Criminal</h3>
                            </a>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                        </div>
                    </div><!-- Item 1 -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="atuacao-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Direito Digital e /LGPD</h3>
                            </a>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                        </div>
                    </div><!-- Item 2 -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="atuacao-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Direito Tributário</h3>
                            </a>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                        </div>
                    </div><!-- Item 3 -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="atuacao-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Compliance</h3>
                            </a>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- Item 4 -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="atuacao-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Novos Negócios</h3>
                            </a>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- Item 5 -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="atuacao-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>
                                    Marcas e Patentes</h3>
                            </a>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- Item 6 -->
                </div>
            </div>
</section>

<!--- Solicitação de Cotação
    ================================================== -->
<div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s" id="contato">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-5">Consulte nossos especialistas e agende seu atendimento</h1>
                <p class="text-white mb-5">Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna.</p>
                <div class="bg-white rounded p-3">
                    <div class="d-flex align-items-center bg-info rounded p-3">
                        <h3 class="text-white mb-0"><i class="fa-brands fa-whatsapp"></i> 21 98849-3781</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded p-5">
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="gname" placeholder="Gurdian Name">
                                    <label for="gname">Nome</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="gmail" placeholder="Gurdian Email">
                                    <label for="gmail">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cname" placeholder="Child Name">
                                    <label for="cname">Telefone</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cage" placeholder="Child Age">
                                    <label for="cage">Assunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                                    <label for="message">Mensagem</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="#institucional" class="btn btn-primary py-3 px-5 text-uppercase">Saiba Mais</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- Equipe de Especialistas
    ================================================== -->
<div class="container-xxl py-5" id="equipe">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px;">
            <h1 class="display-6 mb-5">Conheça Nossos Especialistas</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="<?= base_url('assets/frontend/images/team/1.jpg') ?>" alt>
                    <div class="text-center p-4">
                        <h5>Raul Oliveira</h5>
                        <span>Especialista em Direito Criminal</span>
                    </div>
                    <div class="team-text text-center bg-white p-4">
                        <h5>Raul Oliveira</h5>
                        <p>Especialista em Direito Criminal</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="<?= base_url('assets/frontend/images/team/2.jpg') ?>" alt>
                    <div class="text-center p-4">
                        <h5>Fernando Castro</h5>
                        <span>Especialista em Direito Trabalhista</span>
                    </div>
                    <div class="team-text text-center bg-white p-4">
                        <h5>Fernando Castro</h5>
                        <p>Especialista em Direito Trabalhista</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="<?= base_url('assets/frontend/images/team/3.jpg') ?>" alt>
                    <div class="text-center p-4">
                        <h5>Luciana Gutemberg</h5>
                        <span>Especialista em Direito Digital e Novos Negócios</span>
                    </div>
                    <div class="team-text text-center bg-white p-4">
                        <h5>Luciana Gutemberg</h5>
                        <p>Especialista em Direito Digital e Novos Negócios</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="<?= base_url('assets/frontend/images/team/4.jpg') ?>" alt>
                    <div class="text-center p-4">
                        <h5>Sandro Avelar</h5>
                        <span>Especialista em Direito Tributário e Compliance</span>
                    </div>
                    <div class="team-text text-center bg-white p-4">
                        <h5>Sandro Avelar</h5>
                        <p>Especialista em Direito Tributário e Compliance</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-light m-1" href><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>