@extends('layouts_site.email')

@section('titulo','Hotel Caranda Eco Ville')

@section('conteudo')
<b>Nome:</b>{{$nome}} <br>
<b>Cidade:</b>{{$cidade}} <br>
<b>E-mail:</b>{{$email}} <br>
<b>Telefone:</b>{{$telefone}} <br>
<b>Mensagem:</b>{{$mensagem}} <br>



@endsection

