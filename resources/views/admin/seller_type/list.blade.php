<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='50'>Id</th>
        <th width='100'>
            {!! xWireLink('타입', "orderBy('type')") !!}
        </th>
        <th>설명</th>

        <th width='100'>할인</th>
        <th width='100'>마진</th>
        <th width='100'>판매자</th>
        <th width='200'>생성일자</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">
                <td width='50'>{{$item->id}}</td>
                <td width='100'>

                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->type}}
                    </x-click>
                </td>
                <td>
                    {{$item->description}}
                </td>

                <td width='100'>
                    <div>{{$item->discount}}</div>
                </td>
                <td width='100'>
                    <div>{{$item->margin}}</div>
                </td>

                <td width='100'>
                    <div>{{$item->cnt}}</div>
                </td>

                <td width='200'>
                    <div>{{$item->created_at}}</div>
                </td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
