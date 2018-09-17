@extends('layouts.app')

@section('content')
<div class="bg-secondary h-100">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="card mx-auto" id="createForum">
                    <div class="card-body">
                        <h2 class="card-title">新起一個討論區</h2>
                        {!! Form::open(['route'=>'forum.store']) !!}
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                {!! Form::label('討論區個名') !!}
                                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'討論區叫咩名']) !!}
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group {{ $errors->has('desc') ? 'has-error' : '' }}">
                                {!! Form::label('討論區介紹') !!}
                                {!! Form::text('desc', old('desc'), ['class'=>'form-control', 'placeholder'=>'介紹一下個討論區係點']) !!}
                                <span class="text-danger">{{ $errors->first('desc') }}</span>
                            </div>
                            <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
                                {!! Form::label('討論區網址') !!}
                                {!! Form::text('url', old('url'), ['class'=>'form-control', 'placeholder'=>'討論區條link係咩']) !!}
                                <span class="text-danger">{{ $errors->first('url') }}</span>
                            </div>
                            <button type="submit" class="btn btn-primary">整</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection