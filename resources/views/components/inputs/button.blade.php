
<a href='{{ url("/posts/{$data->id}") }}' class="btn btn-small {{$class ?? 'btn-default'}}"><i class="fa {{ $fa ?? 'fa-list' }}"></i>
    {{ $slot }}
</a>