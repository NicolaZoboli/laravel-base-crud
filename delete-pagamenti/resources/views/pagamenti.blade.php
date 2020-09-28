@extends('layouts.main-layout')
@section('content')

  <h1>PAGAMENTI:</h1>
  <ul>
    @foreach ($pagamenti as $pagamento)
      <li>
        {{ $pagamento -> status }}
        {{ $pagamento -> price }}

        <a href="{{ route('pagamento.edit', $pagamento -> id) }}">E</a>
        <a href="{{ route('pagamento.destroy', $pagamento -> id) }}">X</a>
      </li>
    @endforeach
  </ul>


@endsection
