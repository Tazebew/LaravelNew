@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>{{ __('Question List') }}</h2>
                        <div class="ml-auto">
                            <a href="{{route('questions.create')}}" class="btn btn-outline-danger">Ask Question</a>
                        </div>
                    </div>
                </div>
                @include('layouts._messages')
                <div class="card-body">
                    @foreach($questions as $question)
                        <div class="media">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>{{$question->votes}}</strong>{{str_plural('vote',$question->votes)}}
                                </div>
                                <div class="answer {{$question->status}}">
                                    <strong>{{$question->answers}}</strong>{{str_plural('answer',$question->answers)}}
                                </div>
                                <div class="view">
                                    {{$question->views. " " .str_plural('view',$question->views)}}
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="mt-0"><a href="{{$question->url}}">{{$question->title}}</a></h3>
                                <p class="lead">
                                    Asked By
                                    <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                    <small class="text-muted">{{$question->created_date}}</small>
                                </p>
                                {{str_limit($question->body, 250)}}
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
            {{$questions->links()}}
        </div>
    </div>
</div>
@endsection

{{-- <table class="table">
    <thead>
        <tr>
            <td>Title</td>
            <td>Creater Name</td>
            <td>Created Date</td>
            <td>Body</td>
            <td>Views</td>
            <td>Anwers</td>
            <td>Votes</td>
        </tr>
    </thead>
    <tbody>
        @foreach($questions as $question)
            <tr>
                <td><a href="{{$question->url}}">{{$question->title}}</a></td>
                <td><a href="{{$question->user->url}}">{{$question->user->name}}</a></td>
                <td>{{$question->created_date}}</td>
                <td>{{str_limit($question->body, 150)}}</td>
                <td>{{$question->views}}</td>
                <td>{{$question->answers}}</td>
                <td>{{$question->votes}}</td>
            </tr>
        @endforeach
    </tbody>
</table> --}}
