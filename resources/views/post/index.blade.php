@extends('layouts.app')

@section('content')
    <div class="container">
    <div align="center">
            <a href="{{ route('post.create') }}" class="btn btn-primary">我要新增會員</a>
        </div>

        @foreach ($posts as $key => $post)
         <div class="card text-center">
                <div class="card-header">
                    帳號：{{ $post->cAccount }}
                </div>
                <div class="card-body">

                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-secondary">查看詳細資料</a>
                </div>
                <div class="card-footer text-muted">
                    創建日期：{{ $post->created_at }}
                </div>
            </div><br>
        @endforeach
    </div>
@endsection
