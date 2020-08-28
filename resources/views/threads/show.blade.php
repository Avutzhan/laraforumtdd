@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/profiles/{{ $thread->creator->name }}">{{ $thread->creator->name }}</a> posted:
                        {{ $thread->title }}</div>

                    <div class="panel-body">
                        {{ $thread->body }}
                    </div>
                </div>

                @foreach($replies as $reply)
                    @include('threads.reply')
                @endforeach

                {{ $replies->links() }}

                @if(auth()->check())
                    <form method="POST" action="{{ $thread->path() . '/replies' }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea name="body" id="body" class="form-control" placeholder="Say!" rows="5"></textarea>

                            <button type="submit" class="btn btn-default">Post</button>
                        </div>
                    </form>
                @else
                    <p class="text-center"><a href="{{ route('login') }}">Sign in</a> to participate</p>
                @endif
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        Tjis thread was published {{ $thread->created_at->diffForHumans() }} by
                        <a href="#">{{ $thread->creator->name }}</a>, and currently has
                        {{ $thread->replies_count }} {{ str_plural('comment', $thread->repies_count) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
