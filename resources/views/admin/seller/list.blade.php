<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='50'>Id</th>
        <th>
            {!! xWireLink('이메일', "orderBy('email')") !!}
        </th>
        <th width='100'>타입</th>
        <th width='100'>적립금</th>
        <th width='100'>할인</th>
        <th width='100'>마진</th>
        <th width='100'>상태</th>
        <th width='200'>만료일</th>
        <th width='200'>생성일자</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">
                <td width='50'>{{$item->id}}</td>
                <td>
                    {{$item->company}}
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->email}}
                    </x-click>
                </td>
                <td width='100'>
                    <div>{{$item->type}}</div>
                </td>
                <td width='100'>
                    <div>{{$item->emoney}}</div>
                </td>
                <td width='100'>
                    <div>{{$item->discount}}</div>
                </td>
                <td width='100'>
                    <div>{{$item->margin}}</div>
                </td>
                <td width='100'>
                    <div>{{$item->status}}</div>
                </td>
                <td width='200'>
                    <div>{{$item->expired_at}}</div>
                </td>
                <td width='200'>
                    <div>{{$item->created_at}}</div>
                </td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
