<a href="" title="Mark as favorite"
    class="favorite mt-2 {{ Auth::guest() ? 'off' : ($model->is_favorited ? 'favorited' : '') }} "
    onclick="event.preventDefault(); document.getElementById('favorite-{{ $name }}-{{ $model->id }}').submit();"
    >
 {{-- <i class="fas fa-star fa-3x"></i> fontawesome doesn't work --}}
    <img src="/svg/open-iconic/svg/star.svg" alt="icon name">
    <span class="favorites-count">{{ $model->favorites_count }}</span>
</a>
<form action="/{{ $firstURISegment }}/{{ $model->id }}/favorites" id="favorite-{{ $name }}-{{ $model->id }}" method="POST" style="display: none;">
    @csrf
    @if ($model->is_favorited)
        @method('DELETE')
    @endif
</form>
