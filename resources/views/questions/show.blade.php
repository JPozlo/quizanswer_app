@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <div class="card-title">
                                <div class="d-flex align-items-center">
                                    <h2>{{ $question->title }}</h2>
                                    <div class="ml-auto">
                                        <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to all questions</a>
                                    </div>
                                </div>
                        </div>

                        <hr>


                        <div class="media">
                            <div class="d-flex flex-column vote-controls">
                                <a href="" title="This quiz is helpful" class="vote-up">
                                     {{-- <i class="fas fa-caret-up fa-3x"></i> --}}
                                    <img src="/svg/open-iconic/svg/caret-top.svg" alt="icon name">
                                </a>
                                <span class="votes-count">12230</span>
                                <a href="" title="This quiz doesn't help" class="vote-down off">
                                    {{-- <i class="fas fa-caret-down fa-3x"></i> --}}
                                    <img src="/svg/open-iconic/svg/caret-bottom.svg" alt="icon name">
                                </a>
                                <a href="" title="Mark as favorite" class="favorite mt-2">
                                    {{-- <i class="fas fa-star fa-3x"></i> fontawesome doesn't work --}}
                                    <img src="/svg/open-iconic/svg/star.svg" alt="icon name">
                                    <span class="favorites-count">123</span>
                                </a>
                            </div>
                            <div class="media-body">
                                {{-- {{ $question->body }} --}}
                                {!! $question->body_html !!}
                                <div class="float-right">
                                    <span class="text-muted">Answered {{ $question->created_date }}</span>
                                    <div class="media mt-2">
                                        <a href="{{ $question->user->url }}" class="pr-2">
                                            <img src="{{ $question->user->avatar }}" alt="User Avatar">
                                        </a>
                                        <div class="media-body mt-1">
                                            <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{ $question->answers_count . " " . str_plural('Answer', $question->answers_count) }}</h2>
                    </div>
                    <hr>
                    @foreach ($question->answers as $answer)
                        <div class="media">
                            <div class="d-flex flex-column vote-controls">
                                <a href="" title="This answer is helpful" class="vote-up">
                                     {{-- <i class="fas fa-caret-up fa-3x"></i> --}}
                                    <img src="/svg/open-iconic/svg/caret-top.svg" alt="icon name">
                                </a>
                                <span class="votes-count">12230</span>
                                <a href="" title="This answer doesn't help" class="vote-down off">
                                    {{-- <i class="fas fa-caret-down fa-3x"></i> --}}
                                    <img src="/svg/open-iconic/svg/caret-bottom.svg" alt="icon name">
                                </a>
                                <a href="" title="Mark as best" class="vote-accepted mt-2">
                                    {{-- <i class="fas fa-star fa-3x"></i> fontawesome doesn't work --}}
                                    <img src="/svg/open-iconic/svg/check.svg" alt="icon name">
                                </a>
                            </div>
                            <div class="media-body">
                                {!! $answer->body_html !!}
                                <div class="float-right">
                                    <span class="text-muted">Answered {{ $answer->created_date }}</span>
                                    <div class="media mt-2">
                                        <a href="{{ $answer->user->url }}" class="pr-2">
                                            <img src="{{ $answer->user->avatar }}" alt="User Avatar">
                                        </a>
                                        <div class="media-body mt-1">
                                            <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
