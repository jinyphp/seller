<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='50'>Id</th>
        <th width='100'>
            {!! xWireLink('주문번호', "orderBy('orderno')") !!}
        </th>
        <th width='200'>판매자</th>
        <th width='200'>구매자</th>
        <th>상품</th>

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
                        {{$item->orderno}}
                    </x-click>
                </td>
                <td width='200'>
                    {{$item->seller_email}}
                </td>
                <td width='200'>
                    {{$item->email}}
                </td>
                <td>
                    {{$item->product_title}}
                    @if($item->product_options)
                        <div class="text-muted small">옵션: {{$item->product_options}}</div>
                    @endif
                    @if($item->product_price)
                        <div class="text-muted small">가격: {{number_format($item->product_price)}}원
                        @if($item->product_unit)
                            / {{$item->product_unit}}
                        @endif
                        </div>
                    @endif
                </td>

                <td width='200'>
                    <div>{{$item->created_at}}</div>
                </td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
