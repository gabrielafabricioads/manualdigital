@extends('layouts.app')

@section('title', 'Início')

@section('content')
    <section class="destaque">
        <p class="destaque-pequeno">manuais de redes</p>
        <h1>Sem internet?<br>A gente te <span>reconecta.</span></h1>
        <p class="destaque-en">No internet? We'll get you back online.</p>
        <p class="destaque-texto">
            Manuais passo a passo, com linguagem simples, para quem nunca configurou nada de redes.
            Leia online, salve para ver sem internet ou baixe o PDF.
        </p>
    </section>

    <section class="catalogo">
        <h2>Nossos manuais</h2>

        <div class="cards">
            @foreach ($manuals as $manual)
                <article class="card {{ $manual->available ? '' : 'card-em-breve' }}">
                    <div class="capa">
                        @if ($manual->cover)
                            <img src="{{ asset($manual->cover) }}" alt="Capa do manual: {{ $manual->title_pt }}">
                        @else
                            <p class="capa-manual">manual</p>
                            <p class="capa-titulo">{{ $manual->title_pt }}</p>
                            <p class="capa-en">{{ $manual->title_en }}</p>
                        @endif

                        @unless ($manual->available)
                            <span class="selo">Em breve</span>
                        @endunless
                    </div>

                    <div class="card-corpo">
                        <h3>{{ $manual->title_pt }}</h3>
                        <p>{{ $manual->description_pt }}</p>

                        @if ($manual->available)
                            <a href="#" class="botao">Abrir manual</a>
                        @else
                            <span class="botao botao-desativado">Em breve</span>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
