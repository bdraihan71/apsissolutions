<li>{{ $child_item->name }}</li>
@if ($child_item->items)
    <ul>
        @foreach ($child_item->items as $childItem)
            @include('child_item', ['child_item' => $childItem])
        @endforeach
    </ul>
@endif
