@extends('./layouts/main')

@section('container')

                                <!----------------- HEADER ----------------->

<header>
    <div class="container cabecalho_container">
        <div class="cabecalho_esquerdo">
            <h1>Desenvolvimento de Sistemas</h1>
            <p>O curso é...</p>

        </div>
        <div class="cabecalho_direito">
            <div class="cabecalho_direito-image">
                <img src="">
            </div>

        </div>
    </div>

</header>

<!-- Fim do HEADER-->

                                <!---------  Começo ÁREA DE ATUAÇÃO  -------------->
<section class="categorias">
    <div class="container categorias_container">

        <div class="categorias_esquerda">
            <h1>Área de Atuação</h1>
            <p>
                Desenvolvimento de Sistemas
            </p>

        </div>

        <div class="categorias_direita">
            <article class="categoria">
                <span class="categoria_icon">
                    <i class="uil uil-database"></i>
                </span>
                <h5> Banco de Dados </h5>
                <p> Se aprende a administrar Banco de Dados </p>
            </article>

            <article class="categoria">
                <span class="categoria_icon">
                    <i class="uil uil-cloud-wifi"></i>
                </span>
                <h5> Redes </h5>
                <p> Se aprende protocolos etc. </p>
            </article>

            <article class="categoria">
                <span class="categoria_icon">
                    <i class="uil uil-bitcoin-circle"></i>
                </span>
                <h5> Negócios </h5>
                <p> Levantamento de Requisitos, Reuniões, Briefings </p>
            </article>

            <article class="categoria">
                <span class="categoria_icon">
                    <i class="uil uil-desktop"></i>
                </span>
                <h5> Infraestrutura de TI </h5>
                <p> Responsável por implementar soluções computacionais  </p>
            </article>

        </div>
    </div>
</section>

<!-- Fim da SECTION -->

                                                <!-- Começo das FAQs (Frequently Asked Questions) do Curso  -->
<section class="perguntas_freq">
    <h2>Perguntas Frequentes</h2>
    <div class="container perguntas_freq_container">
        <article class="pergunta_freq">
            <div class="pergunta_icon"> <i class="uil uil-plus-circle"></i> </div>
            <div class="pergunta_resposta">
                <h4>Como funciona o curso?</h4>
                <p>
                    Lorem ipsum dolor sit amet. Et voluptatum possimus eum odit quidem non commodi sint non corporis temporibus ut quia facilis!
                    Qui omnis totam eos perspiciatis architecto et sint dolorum qui suscipit voluptas!
                    Non voluptate nemo et corporis nisi et ipsam rerum eos voluptas dolor nam minus dolores et sunt velit qui enim quaerat.
                </p>
            </div>
        </article>

        <article class="pergunta_freq">
            <div class="pergunta_icon"> <i class="uil uil-plus-circle"></i> </div>
            <div class="pergunta_resposta">
                <h4>Como funciona o curso?</h4>
                <p>
                    Lorem ipsum dolor sit amet. Et voluptatum possimus eum odit quidem non commodi sint non corporis temporibus ut quia facilis!
                    Qui omnis totam eos perspiciatis architecto et sint dolorum qui suscipit voluptas!
                    Non voluptate nemo et corporis nisi et ipsam rerum eos voluptas dolor nam minus dolores et sunt velit qui enim quaerat.
                </p>
            </div>
        </article>

        <article class="pergunta_freq">
            <div class="pergunta_icon"> <i class="uil uil-plus-circle"></i> </div>
            <div class="pergunta_resposta">
                <h4>Como funciona o curso?</h4>
                <p>
                    Lorem ipsum dolor sit amet. Et voluptatum possimus eum odit quidem non commodi sint non corporis temporibus ut quia facilis!
                    Qui omnis totam eos perspiciatis architecto et sint dolorum qui suscipit voluptas!
                    Non voluptate nemo et corporis nisi et ipsam rerum eos voluptas dolor nam minus dolores et sunt velit qui enim quaerat.
                </p>
            </div>
        </article>

        <article class="pergunta_freq">
            <div class="pergunta_icon"> <i class="uil uil-plus-circle"></i> </div>
            <div class="pergunta_resposta">
                <h4>Como funciona o curso?</h4>
                <p>
                    Lorem ipsum dolor sit amet. Et voluptatum possimus eum odit quidem non commodi sint non corporis temporibus ut quia facilis!
                    Qui omnis totam eos perspiciatis architecto et sint dolorum qui suscipit voluptas!
                    Non voluptate nemo et corporis nisi et ipsam rerum eos voluptas dolor nam minus dolores et sunt velit qui enim quaerat.
                </p>
            </div>
        </article>

    </div>
</section>

{{-- Fim dos FAQS do curso? --}}

<section class="container comentarios_container mySwiper">
    <h2>Comentários de Ex-Estudantes</h2>
    <div class="swiper-wrapper">
        <article class="comentario swiper-slide">
            <div class="avatar">
                {{-- <img src="/images/" alt=""> --}}
            </div>
            <div class="comentario_info">
                <h5>Estudante 1</h5>
                <small>Analista de Sistemas</small>
            </div>
            <div class="comentario_corpo">
                <p>
                    Lorem ipsum dolor sit amet. Et voluptates unde ea labore quod ut cupiditate sequi est quidem voluptas sed omnis omnis.
                </p>
            </div>
        </article>

        <article class="comentario swiper-slide">
            <div class="avatar">
                {{-- <img src="" alt=""> --}}
            </div>
            <div class="comentario_info">
                <h5>Estudante 2</h5>
                <small>Gerente de Projetos</small>
            </div>
            <div class="comentario_corpo">
                <p>
                    Lorem ipsum dolor sit amet. Et voluptates unde ea labore quod ut cupiditate sequi est quidem voluptas sed omnis omnis.
                </p>
            </div>
        </article>

        <article class="comentario swiper-slide">
            <div class="avatar">
                {{-- <img src="" alt=""> --}}
            </div>
            <div class="comentario_info">
                <h5>Estudante 3</h5>
                <small>Programador Back-End</small>
            </div>
            <div class="comentario_corpo">
                <p>
                    Lorem ipsum dolor sit amet. Et voluptates unde ea labore quod ut cupiditate sequi est quidem voluptas sed omnis omnis.
                </p>
            </div>
        </article>

        <article class="comentario swiper-slide">
            <div class="avatar">
                {{-- <img src="" alt=""> --}}
            </div>
            <div class="comentario_info">
                <h5>Estudante 4</h5>
                <small>Desenvolvedor WEB</small>
            </div>
            <div class="comentario_corpo">
                <p>
                    Lorem ipsum dolor sit amet. Et voluptates unde ea labore quod ut cupiditate sequi est quidem voluptas sed omnis omnis.
                </p>
            </div>
        </article>
    </div>
    <div class="swiper-pagination"></div>
</section>

{{-- Fím dos comentários --}}

@endsection