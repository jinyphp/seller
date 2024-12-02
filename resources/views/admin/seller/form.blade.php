<div>
    <x-navtab class="mb-3 nav-bordered">

        <!-- formTab -->
        <x-navtab-item class="show active" >
            <x-navtab-link class="rounded-0 active">
                <span class="d-none d-md-block">기본정보</span>
            </x-navtab-link>

            <x-form-hor>
                <x-form-label>활성화</x-form-label>
                <x-form-item>
                    <input type="checkbox" class="form-check-input"
                        wire:model.defer="forms.enable"
                        {{ isset($forms['enable']) && $forms['enable'] ? 'checked' : '' }}/>
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>승인</x-form-label>
                <x-form-item>
                    <input type="checkbox" class="form-check-input"
                        wire:model.defer="forms.auth"
                        {{ isset($forms['auth']) && $forms['auth'] ? 'checked' : '' }}>
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>이메일</x-form-label>
                <x-form-item>
                    <input type="text" class="form-control"
                        style="width:453px;"
                        wire:model.defer="forms.email">


                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>타입</x-form-label>
                <x-form-item>
                    <select class="form-select"
                        style="width:453px;"
                        wire:model.defer="forms.type">
                        <option value="">선택</option>
                        @foreach (DB::table('seller_type')->get() as $item)
                            <option value="{{$item->id}}:{{$item->type}}">
                                {{$item->type}}
                            </option>
                        @endforeach
                    </select>

                    {{-- {!! xInputText()
                        ->setWire('model.defer',"forms.type")
                        ->setWidth("standard")
                    !!} --}}


                </x-form-item>
            </x-form-hor>



            <x-form-hor>
                <x-form-label>할인</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.discount")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>마진</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.margin")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>상태</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.status")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>만료일</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.expired_at")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>


            <x-form-hor>
                <x-form-label>메모</x-form-label>
                <x-form-item>
                    {!! xTextarea()
                        ->setWire('model.defer',"forms.description")
                    !!}
                </x-form-item>
            </x-form-hor>

        </x-navtab-item>



    </x-navtab>
</div>
