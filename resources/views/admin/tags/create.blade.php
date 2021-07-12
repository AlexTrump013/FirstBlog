@extends('admin/admin_layout')

@section('content')
    <section class="content-header">
        <h1>
            Добавить тег
            <small>приятные слова..</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    {{ Form::open(['route' => 'tags.store', 'files' => true]) }}
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Добавляем тег</h3>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-default">Назад</button>
                <button class="btn btn-success pull-right">Добавить</button>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    {{Form::close()}}
    </section>
    <!-- /.content -->
@endsection

