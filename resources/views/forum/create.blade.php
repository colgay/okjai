@extends('layouts.app')

@section('content')
<div class="bg-secondary h-100">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                {!! Form::open(['route' => 'forum.store', 'id' => 'createForumForm', 'class' => 'card mx-auto']) !!}
                <div class="card-body">
                    <h2 class="card-title">建立討論區</h2>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        {!! Form::label('name', '名稱') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('desc', '資訊') !!}
                        {!! Form::text('desc', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('url', '網址') !!}
                        {!! Form::text('url', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('建立', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection