@extends('layouts.app')
@section('title', '週報提出ページ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>週報提出</h2>
                <form action="{{ action('MypageController@sendReport') }}" method="post" enctype="multipart/form-data">


                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="startday">週開始日</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="startday" value="{{ old('startday') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="actionreport">行動報告</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="actionreport" rows="15">{{ old('actionreport') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="topics">Topics</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="topics" rows="15">{{ old('topics') }}</textarea>
                        </div>
                    </div>
                    
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="提出">
                </form>
            </div>
        </div>
    </div>
@endsection