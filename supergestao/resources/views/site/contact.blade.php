@extends('site.layouts.template')

@section('title', 'Contato')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Contato</h1>
            <p class="lead">"Deixe sua mensagem após o sinal..."</p>
        </div>
    </div>
    <div class="container">
        @component('site.components.contact-form', ['route' => route('site.contact')])
            <p class="text-muted"><i>Todos os campos são obrigatórios.</i></p>
        @endcomponent

    @endsection
