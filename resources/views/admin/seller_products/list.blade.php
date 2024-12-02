<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='50'>Id</th>
        <th width='100'>
            {!! xWireLink('판매자', "orderBy('email')") !!}
        </th>
        <th width='100'>이미지</th>
        <th>상품명</th>

        <th width='100'>가격/단위</th>


        <th width='100'>판매수</th>
        <th width='100'>좋아요/리뷰</th>
        <th width='200'>생성일자</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">
                <td width='50'>{{$item->id}}</td>
                <td width='100'>
                    {{$item->company}}
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->email}}
                    </x-click>
                </td>
                <td width='100'>
                    @if($item->image)
                        <img src="{{$item->image}}" alt="상품이미지" style="width: 50px; height: 50px;">
                    @endif
                </td>
                <td >
                    <x-click wire:click="edit({{$item->id}})">
                    {{$item->title}}
                    </x-click>
                    @if($item->category)
                        <x-badge-primary>
                            {{$item->category}}
                        </x-badge-primary>
                    @endif
                    <p>{{$item->description}}</p>
                </td>

                <td width='100'>{{$item->price}}/{{$item->unit}}</td>


                <td width='100'>{{$item->cnt}}</td>
                <td width='100'>{{$item->like}}/{{$item->review}}</td>
                <td width='200'>{{$item->created_at}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
