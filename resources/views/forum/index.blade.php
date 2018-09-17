@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Hello, OK Jai!</h1>
        <p class="lead">OK仔，我哋好唔捨得你！</p>
        <p>溫拿成員彭健新向來與愛犬OK仔出雙入對，又不時攜同OK仔亮相節目，OK仔的人氣及知名度絕對不下於「老竇」彭健新！
        可惜「OK仔老竇」剛在微博宣布OK仔離世的消息，並上載OK仔的臥床照，場面令人傷感，他寫道：「Ok仔已經離開我們了，每一天，我都記
        得他帶來這15年無比的歡樂，OK仔，永遠懷念你。」</p>
        <p>
            <a class="btn btn-primary btn-lg" href="#" role="button">做個OK仔</a>
            <a class="btn btn-secondary btn-lg" href="#" role="button">做返OK仔</a>
        </p>
    </div>
</div>
<div class="container">
    @if (\Session::has('success'))
    <div class="row">
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <h1>討論區列表</h1>
            <hr>
        </div>
        @foreach($forums as $forums)
            <div class="col-sm-6 col-lg-3 py-2">
                <div class="card border-primary mb-3 h-100">
                    <div class="card-body">
                        <h3 class="card-title">{{$forums['name']}}</h3>
                        <p class="card-text">{{$forums['desc']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection