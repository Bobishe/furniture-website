@foreach ($items as $item)
    {{ $item->name }}
@endforeach

{{ $items->links() }}
