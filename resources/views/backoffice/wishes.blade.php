@extends('backoffice.layouts.master')

@section('content')
<h1>Opiniões</h1>

<p>
</p>

<table class="table table-bordered table-hover">
    <thead>
        <th>Nome</th>
        <th>Data nascimento</th>
        <th>Freguesia</th>
        <th>E-mail</th>
        <th>Data</th>
    </thead>
    <tbody>
        @if ($wishes->count() == 0)
        <tr>
            <td colspan="5">No records.</td>
        </tr>
        @endif

        @foreach ($wishes as $wishe)
        <tr>
            <td>{{ $wishe->nome }}</td>
            <td>{{ $wishe->data_nascimento }}</td>
            <td>{{ $wishe->freguesia }}</td>
            <td>{{ $wishe->email }}</td>
            <td>{{ $wishe->created_at }}</td>

        </tr>
        @endforeach
    </tbody>
</table>

{{ $wishes->links() }}

<p>
    Displaying {{$wishes->count()}} of {{ $wishes->total() }} product(s).
</p>

@endsection
