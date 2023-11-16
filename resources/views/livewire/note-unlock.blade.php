<form id="data_link_2" autocomplete="off" wire:submit="">
    <div class="px-5 bg-white sm:p-7 sm:pb-0">
        <div>
            <div class="mt-5 sm:mt-0">
                <x-modal-title>{{ __('Buka Password Catatan') }}</x-modal-title>
                <div class="my-2">
                    <x-form-input type="password" name="passwordUnlock" ph="Masukkan Password" wire:model="passwordUnlock" required />
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 py-4 sm:flex sm:flex-row-reverse">
        <x-modal-button type="submit" class="text-white bg-teal-500 hover:bg-teal-600">{{ __('Buka') }}</x-modal-button>
        
        <x-modal-button x-on:click="$store.modal.unlock = false" type="button" id="button-unlock-close" class="text-black bg-transparent hover:bg-transparent">{{ __('Batal') }}</x-modal-button>
    </div>
</form>