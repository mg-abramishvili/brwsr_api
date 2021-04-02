@extends('layouts.app')
@section('content')

<style>
	table tr:first-child {
		display:none;
	}
</style>

    <div class="row">

        <div class="col-12 mb-4">
            <form action="/homepage/{{$homepage->id}}" method="post" enctype="multipart/form-data" class="bg-info p-4">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$homepage->id}}">

                <label>Домашняя страница</label>
                <input type="text" class="form-control" name="url" placeholder="Домашняя страница" value="{{$homepage->url}}">
                @if ($errors->has('url'))
                    <div class="alert alert-danger">
                        Укажите адрес домашней страницы
                    </div>
                @endif

                <button type="submit" class="btn btn-lg btn-success">Сохранить</button>
            </form>
        </div>

        <div class="col-12 col-md-6">
            <div class="row align-items-center mb-4">
                <div class="col-12">
                    <h4>Белый список страниц</h4>
                    <a href="/new-link" class="btn btn-primary mb-2">Добавить</a>
                </div>
            </div>

            <table class="table table-bordered table-hover">
                @foreach($links as $link)
                    <tr>
                        <td>{{ $link->url }}</td>
                        <td class="text-center" style="width: 30%">
                            <a href="/links/delete/{{ $link->id }}" class="btn btn-sm btn-secondary">Удалить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-12 col-md-6">
            <div class="row align-items-center mb-4">
                <div class="col-12">
                    <h4>Белый список доменов</h4>
                    <a href="/new-domain" class="btn btn-primary mb-2">Добавить</a>
                </div>
            </div>

            <table class="table table-bordered table-hover">
                @foreach($domains as $domain)
                    <tr>
                        <td>{{ $domain->url }}</td>
                        <td class="text-center" style="width: 30%">
                            <a href="/domains/delete/{{ $domain->id }}" class="btn btn-sm btn-secondary">Удалить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection