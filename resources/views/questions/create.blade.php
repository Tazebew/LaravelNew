@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>{{ __("Question List") }}</h2>
                        <div class="ml-auto">
                            <a href="{{route("questions.index")}}" class="btn btn-outline-danger">Back to All Question</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <form action="{{route('questions.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="question-title">Question Title</label>
                    <input type="text" id="question-title" name="title" value="{{old("title")}}" class="form-control {{$errors->has("title")?"is-invalid":""}}">
                        @if($errors->has("title"))
                            <div class="invalid-feedback">
                                <strong>{{$errors->first("title")}}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="question-body">Explain Your Question</label>
                    <textarea id="question-body" name="body" rows="6" class="form-control {{$errors->has("body")?"is-invalid":""}}">{{old("body")}}</textarea>
                        @if($errors->has("body"))
                            <div class="invalid-feedback">
                                <strong>{{$errors->first("body")}}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary btn-lg">Ask This Question</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
