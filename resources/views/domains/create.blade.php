@extends('layouts.app')
@section('content')

    <h1>Новая запись</h1>

    <form action="/domains" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-12">
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Ссылка</label>
                    <input type="text" class="form-control" name="url" placeholder="Ссылка">
                    @if ($errors->has('url'))
                        <div class="alert alert-danger">
                            Укажите ссылку
                        </div>
                    @endif
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-lg btn-success">Добавить</button>
    </form>

@endsection