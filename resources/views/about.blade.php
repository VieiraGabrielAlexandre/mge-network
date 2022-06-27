@extends('index')
@section('content')
    @include('partials.hero-area')
    <section class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <!-- ========== Progress Bars & Accordions ========== -->
                <div class="c sol-12">
                    <div class="elements-title mb-30">
                        <div class="line"></div>
                        <h2>Conheça um pouco de nossa história</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Missão
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                </a>
                            </h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>ANossa missão no início foi de trazer para as comunidades um serviço de internet de
                                    qualidade, com uso das mais altas tecnologias, um atendimento rápido e personalizado,
                                    uma vez que muitos bairros ou ruas da região, não tinham sequer disponibilidade
                                    de serviço de internet ou tinham um serviço muito ruim, com tecnologia completamente
                                    ultrapassada</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">
                                    Assinar Agora !
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>Tenha a melhor expêriencia em bandar larga assina agora mesmo. <a href="#">Clique aqui</a></p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">
                                    Teste de Velocidade
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>Ferramenta para que você possa nedir a velocidade de sua internet. <a href="http://velocidade.algartelecom.com.br/">Clique aqui</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <div class="credit-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Sobre nós</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="credit-tab-content">
                                    <!-- Tab Text -->
                                    <div class="credit-tab-text">
                                        <p>Um pouco sobre a empresa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
