@extends('layouts.app')
@section('title', '問い合わせ履歴')

@section('content')
    <div class="container">
        <div class="row">
            <h2>問い合わせ履歴一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\ContactController@inquiry) }}" role="button" class="btn btn-primary">新規</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\ContactController@inquIndex') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">会社名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="15%">会社名</th>
                                <th width="15%">担当者名</th>
                                <th width="15%">電話番号</th>
                                <th width="15%">使用製品</th>
                                <th width="15%">内容</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $inquiry)
                                <tr>
                                    <th>{{ $holiday->id }}</th>
                                    <th>{{ $holiday->requestday }}</th>
                                    <th>{{ $holiday->appclass }}</th>
                                    <th>{{ $holiday->start }}</th>
                                    <th>{{ $holiday->end }}</th>
                                    <th>{{ $holiday->alltime}}</th>
                                </tr>
                                <div>
                                    <a href="{{ action('Admin\RequestController@holiEdit', ['id' => $holiday->id]) }}">再申請</a>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection