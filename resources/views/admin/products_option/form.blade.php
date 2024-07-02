<div>
    <x-navtab class="mb-3 nav-bordered">

        <!-- formTab -->
        <x-navtab-item class="show active" >

            <x-navtab-link class="rounded-0 active">
                <span class="d-none d-md-block">기본정보</span>
            </x-navtab-link>
            {{--
            <x-form-hor>
                <x-form-label>활성화</x-form-label>
                <x-form-item>
                    {!! xCheckbox()
                        ->setWire('model.defer',"forms.enable")
                    !!}
                </x-form-item>
            </x-form-hor>
            --}}


            <x-form-hor>
                <x-form-label>enable</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.enable")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>product_id</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.product_id")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>option_id</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.option_id")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>require</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.require")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>expire</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.expire")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>
        </x-navtab-item>

    </x-navtab>
</div>
