@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-innner">
            <div class="cover-contents">
            <h1>素敵なモノと出会う場所</h1>
                @if (!Auth::check())
            <a href="" class="btn btn-success btn-lg">モノリストを始める</a>
                @endif
            </div>
        </div>
        
    </div>  
@endsection

@section('content')
    テスト
@endsection