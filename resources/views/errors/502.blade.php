<!-- resources/views/errors/502.blade.php -->

@extends('errors.error')

@section('title', 'Erro 502 - Bad Gateway')
@section('code', '502')
@section('message', 'Bad Gateway')
@section('description', 'O servidor recebeu uma resposta inválida de um servidor upstream.')