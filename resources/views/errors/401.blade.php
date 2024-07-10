<!-- resources/views/errors/401.blade.php -->

@extends('errors.error')

@section('title', 'Erro 401 - Não Autorizado')
@section('code', '401')
@section('message', 'Não Autorizado')
@section('description', 'Você precisa estar autenticado para acessar este recurso. Por favor, faça login e tente novamente.')