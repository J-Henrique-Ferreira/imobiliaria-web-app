<!-- resources/views/errors/400.blade.php -->

@extends('errors.error')

@section('title', 'Erro 400 - Solicitação Inválida')
@section('code', '400')
@section('message', 'Solicitação Inválida')
@section('description', 'A solicitação que você enviou ao servidor é inválida. Verifique os dados e tente novamente.')