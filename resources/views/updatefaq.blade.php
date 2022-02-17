@extends('layout')

@section('create-new-article-content')
    <div class="container">
        <div class="article-form">
            <style>
                .backbutton {
                    padding: 10px;
                    margin-left: -100px;
                    background-color: #3CB371;
                    width: 43px;
                }
                .backbutton a{
                    color: white;
                }
            </style>
            <div class="backbutton">
                <a href="/faq">
                    <h3>Back</h3>
                </a>
            </div>
            <form method="POST" action="/faq/{{$faq->id}}">
                @csrf
                @method('PUT')
                <div>
                    <label for="question">Question</label><br>
                    <textarea id="question" name="question" rows="3" cols="70">{{ $faq->question }}</textarea><br>
                </div>
                <div>
                    <label for="answer">Answer</label><br>
                    <textarea id="answer" name="answer" rows="10" cols="100">{{ $faq->answer }}</textarea>
                </div>
                <div>
                    <h3>If you want to submit the changes press 'Submit'</h3>
                    <button class="submit-button" type="submit">Submit</button>
                </div>
            </form>
            <form method="POST" action="/faq/{{ $faq->id }}">
                @csrf
                @method('DELETE')
                <h5>If you want to delete the whole FAQ press 'Submit'</h5>
                <button class="submit-button" id="delbutton2" type="submit">Delete</button>
            </form>
        </div>
        <div class="backgroundfade"></div>
    </div>
@endsection
