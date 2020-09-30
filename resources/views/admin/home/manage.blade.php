@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">管理システム TSUKUYOMI</div>
                
                <a href="{{ action('Admin\ManageController@Key') }}" role="button" class="btn btn-primary">事務所鍵管理</a>
            　　<a href="{{ action('Admin\ManageController@Shelf') }}" role="button" class="btn btn-primary">棚管理</a>
                
            </div>
        </div>
    </div>
</div>
@endsection
