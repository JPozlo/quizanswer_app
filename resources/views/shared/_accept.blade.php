@can('accept', $model)
    <a href="" title="Mark as best" class="{{ $model->status }} mt-2" onclick="event.preventDefault(); document.getElementById('accept-answer-{{ $model->id }}').submit();">
        {{-- <i class="fas fa-star fa-3x"></i> fontawesome doesn't work --}}
        <img src="/svg/open-iconic/svg/check.svg" alt="icon name">
    </a>
    <form action="{{ route('answers.accept', $model->id) }}" id="accept-answer-{{ $model->id }}" method="POST" style="display: none;">
        @csrf
    </form>
@else
    @if ($model->is_best)
        <a href="" title="The quiz owner accepted this as best" class="{{ $model->status }} mt-2" onclick="event.preventDefault(); document.getElementById('accept-answer-{{ $model->id }}').submit();">
            <img src="/svg/open-iconic/svg/check.svg" alt="icon name">
        </a>
    @endif
@endcan
