@extends('layouts.master')

<!-- TITULO DE LA PAGINA -->
@section('title', 'NOVATEC | ROBERT')

<!-- Mis CSS -->
@section('head')
<!-- Mi hoja de estilos -->
<link rel="stylesheet" href="/assets/css/styles_cliente.css">
<!-- Hoja de estilos de inputs de tipo file modificados -->
<link rel="stylesheet" href="/assets/css/styles_inputmodificados.css">
<!-- Iconos de Bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection

<!-- CONTENIDO DE LA PAGINA -->
@section('content')
    <livewire:asignacion-cli-cul-ing/>
@endsection

@section('footer')
    <!-- Archivo JS robert -->
    <script src="/assets/js/scripts_cliente.js"></script>
@endsection
