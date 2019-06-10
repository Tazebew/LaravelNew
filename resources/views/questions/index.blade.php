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
                                <td>Body</td>
                                <td>Views</td>
                                <td>Anwers</td>
                                <td>Votes</td>
                                <td>Creater</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{$question->title}}</td>
                                    <td>{{str_limit($question->body, 250)}}</td>
                                    <td>{{$question->views}}</td>
                                    <td>{{$question->answers}}</td>
                                    <td>{{$question->votes}}</td>
                                    <td>{{$question->user->name}}</td>
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
