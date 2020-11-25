@php
    
    use App\Helper\Template;

@endphp

<table class="table list-content">
    <thead>
        <tr>
            <th><input type="checkbox" id="check-all"></th>
            <th>Name</th>
            <th>Picture</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
    </thead>
    <tbody>
        @if($items->count() > 0)
            @foreach ($items as $key => $item)
                @php
                    $id = $item->id;
                    $name = $item->name;
                    $picture = $item->getImage();
                    $status = Template::showStatus($item->status);
                    $created_at = $item->created_at;
                    $updated_at = $item->created_at;   
                @endphp
                <tr>
                <td><input name="cid[]" value="{{$id}}" type="checkbox"></td>
                    <td>{{ $name }}</td>
                    <td><img style="width:150px" src="{{ $picture }}" alt=""></td>
                    <td>{!! $status !!}</td>
                    <td>{{ $created_at }}</td>
                    <td>{{ $updated_at }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<div class="pagination-content" style="float:right">
    {!! $items->links() !!}
</div>
