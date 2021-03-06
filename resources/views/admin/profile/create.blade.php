@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '私のプロフィールです')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>個人情報</h2>
            <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="title">氏名(name)</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="name" value="{{ old('title') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="title">性別(gender)</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="gender" value="{{ old('title') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="title">趣味(hobby)</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="hobby" value="{{ old('title') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="body">自己紹介(introduction)</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="introduction" rows="20">{{ old('body') }}</textarea>
                    </div>
                </div>

                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
            </form>
        </div>    
    </div>
</div>
@endsection