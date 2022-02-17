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
                <a href="/blog">
                    <h3>Back</h3>
                </a>
            </div>
            <form method="POST" action="/blog/{{$article->id}}">
                @csrf
                @method('PUT')
                <div>
                    <label for="title">Article Title</label><br>
                    <input type="text" id="title" name="title" value="{{$article->title}}"><br>
                </div>
                <div>
                    <label for="file_path">Path to photo</label><br>
                    <textarea  id="file_path" name="file_path" rows="1" cols="50">{{$article->file_path}}</textarea><br>
                </div>
                <div>
                    <label for="first_lines">The Excerpt</label><br>
                    <textarea id="first_lines" name="first_lines" rows="3" cols="70">{{$article->first_lines}}</textarea><br>
                </div>
                <div>
                    <label for="body">The Body</label><br>
                    <textarea id="body" name="body" rows="10" cols="100">{{$article->body}}</textarea>
                </div>
                <div>
                    <h3>If you want to submit the changes press 'Submit'</h3>
                    <button class="submit-button" type="submit">Submit</button>
                </div>
            </form>
            <form method="POST" action="/blog/{{ $article->id }}/edit">
                @csrf
                @method('DELETE')
                <h5>If you want to delete the whole Article press 'Submit'</h5>
                <button class="submit-button" id="delbutton2" type="submit">Delete</button>
            </form>
        </div>
        <div class="backgroundfade"></div>
    </div>
@endsection
