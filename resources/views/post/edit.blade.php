@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('post.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="cAccount" class="col-sm-1 col-form-label">帳號</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="cAccount" name="cAccount" value="{{ $post->cAccount }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="cName" class="col-sm-1 col-form-label">姓名</label>
                <div class="col-sm-4">
                    <input type="varchar" class="form-control" id="cName" name="cName" value="{{ $post->cName }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="cGender" class="col-sm-1 col-form-label">性別</label>
                <div class="col-sm-4">
                    <input type="varchar" class="form-control" id="cGender" name="cGender" value="{{ $post->cGender }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="cBirthday" class="col-sm-1 col-form-label">生日</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="cBirthday" name="cBirthday" value="{{ $post->cBirthday }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="cEmail" class="col-sm-1 col-form-label">Email</label>
                <div class="col-sm-4">
                    <input type="varchar" class="form-control" id="cEmail" name="cEmail" value="{{ $post->cEmail }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="cExplain" class="col-sm-1 col-form-label">備註</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="cExplain" name="cExplain" value="{{ $post->cExplain }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="送出">
                </div>
            </div>
        </form>
    </div>
@endsection
