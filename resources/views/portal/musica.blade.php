@extends('template.app')
@section('title', 'Home - Musica')
@section('musica', 'current')

@section('content')
    <section class="portfolio-block block-intro">
        <div class="container">
            <div class="about-me">
                <p class="text-center">Minha mãe me deu um hinário de louvor na língua Kikongo.<br>Comecei a cantar os louvores do hinário, os louvores&nbsp; que eu não conhecia minha mãe ajudava me a cantar.<br>Na Frente missionaria do "Sequele", o&nbsp; irmão <strong>Francisco Diogo</strong>, pregava dizendo "que tudo na vida tem um propósito. Deus cria o homem com um propósito, o homem vem para a sociedade como um todo, viemos apenas para das sequencia&nbsp; doque realmente já existe em nós." : Esta mensagem mexeu com algo em mim, e decidi trazer à tona o que há muito queimou dentro de mim.<br>Porém, foi assim que comecei a trabalhar no álbum "Deus de Excelencia". Graças a Deus em menos de três meses as 11 faixas já haviam sido gravadas<br>&nbsp;e o projeto fluiu normalmente.</p>
            </div>
        </div>
        <section class="portfolio-block mobile-app">
            <p><strong>Álbum</strong>. Deus de Excelência.</p>
            <div class="container align-items-center">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-5 text">
                        <p><img src="{{ asset('assets/img/capa.png') }}" style="width: 400px;" height="700px" loading="auto"></p>
                    </div>
                    <div class="col-xl-1"><audio controls="">
                            <source src="musica1.mpeg" type="audio/mpeg">
                        </audio><audio autoplay="" controls="" preload="auto">
                            <source src="musica2.mpeg" type="audio/mpeg">
                        </audio><audio controls="">
                            <source src="musica3.mpeg" type="audio/mpeg">
                        </audio><audio controls="">
                            <source src="musica4.mpeg" type="audio/mpeg">
                        </audio><audio controls="">
                            <source src="musica5.mpeg" type="audio/mpeg">
                        </audio><audio controls="">
                            <source type="audio/mpeg">
                        </audio><audio controls="">
                            <source type="audio/mpeg">
                        </audio><audio controls="">
                            <source type="audio/mpeg">
                        </audio><audio controls="">
                            <source type="audio/mpeg">
                        </audio><audio controls="">
                            <source type="audio/mpeg">
                        </audio><audio controls="">
                            <source type="audio/mpeg">
                        </audio></div>
                </div>
            </div>
        </section>
    </section>
    <section class="portfolio-block skills"></section>
@endsection
