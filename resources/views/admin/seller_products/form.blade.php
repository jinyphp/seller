<div>
    <x-navtab class="mb-3 nav-bordered">
        <x-navtab-item class="show active">
            <x-navtab-link class="rounded-0 active">
                <span class="d-none d-md-block">기본정보</span>
            </x-navtab-link>

            <x-form-hor>
                <x-form-label>활성화</x-form-label>
                <x-form-item>
                    <input type="checkbox" class="form-check-input" wire:model.defer="forms.enable"
                        {{ isset($forms['enable']) && $forms['enable'] ? 'checked' : '' }} />
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>회사명</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.company')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>이메일</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.email')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>카테고리</x-form-label>
                <x-form-item>
                    {{-- {!! xInputText()
                        ->setWire('model.defer',"forms.category")
                        ->setWidth("standard")
                    !!} --}}
                    <select class="form-select" style="width:453px;" wire:model.defer="forms.category">
                        <option value="">선택</option>
                        @foreach (DB::table('seller_product_category')->get() as $item)
                            <option value="{{ $item->id }}:{{ $item->category }}">
                                {{ $item->category }}
                            </option>
                        @endforeach
                    </select>
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>상품명</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.title')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>이미지</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.image')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>옵션</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.options')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>가격</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.price')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>가격 변동일자</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.price_at')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>단위</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.unit')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>조회수</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.cnt')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>좋아요</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.like')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>리뷰수</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.review')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>순위</x-form-label>
                <x-form-item>
                    {!! xInputText()->setWire('model.defer', 'forms.rank')->setWidth('standard') !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>메모</x-form-label>
                <x-form-item>
                    {!! xTextarea()->setWire('model.defer', 'forms.description') !!}
                </x-form-item>
            </x-form-hor>

        </x-navtab-item>
    </x-navtab>
</div>
