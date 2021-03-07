@extends('layouts.app')
@section('content')

    <div class="row mb-3">
        <div class="col-12 col-md-6">
            <h1>Белый список</h1>
        </div>
        <div class="col-12 col-md-6 text-right">
            <a href="/new-link" class="btn btn-primary">Добавить</a>
        </div>
    </div>

    <table class="table table-bordered table-hover">
        @foreach($links as $link)
            <tr>
                <td>{{ $link->url }}</td>
                <td class="text-center" style="width: 30%">
                    <a href="#" class="btn btn-warning">Правка</a>
                    <a href="/links/delete/{{ $link->id }}" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection