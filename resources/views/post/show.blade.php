@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                帳號：{{ $post->cAccount }}
            </div>
            <div class="card-body">

                <p class="card-name">
                    {{ $post->cName }}
                </p>
                <p class="card-gender">
                    {{ $post->cGender }}
                </p>
                <p class="card-birthday">
                    {{ $post->cBirthday }}
                </p>
                <p class="card-email">
                    {{ $post->cEmail }}
                </p>
                <p class="card-explain">
                    {{ $post->cExplain }}
                </p>
            </div>
            <div class="card-footer text-muted">
                創建日期：{{ $post->created_at }}
            </div>
            <div align="center">
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">編輯</a>

                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">刪除</button>
                </form>
            </div>
        </div>
    </div>
@endsection
