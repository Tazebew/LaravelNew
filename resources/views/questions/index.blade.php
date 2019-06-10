@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Question') }}</div>
                <div class="card-body">
                    <table class="table">
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
                    </table>
                </div>
            </div>
            {{$questions->links()}}
        </div>
    </div>
</div>
@endsection
