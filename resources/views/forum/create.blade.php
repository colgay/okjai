@extends('layouts.app')

@section('content')
<div class="bg-secondary h-100">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="card mx-auto" id="createForum">
                    <div class="card-body">
                        <h2 class="card-title">新起一個討論區</h2>
                        <form method="post" action="/forum/store">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">討論區個名</label>
                                <input name="name" type="text" class="form-control" id="nameid" placeholder="討論區叫咩名">
                            </div>
                            <div class="form-group">
                                <label for="desc">討論區介紹</label>
                                <input name="desc" type="text" class="form-control" id="descid" placeholder="介紹下個討論區係點">
                            </div>
                            <div class="form-group">
                                <label for="url">討論區網址</label>
                                <input name="url" type="text" class="form-control" id="urlid" placeholder="討論區條link係點">
                            </div>
                            <button type="submit" class="btn btn-primary">整</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection