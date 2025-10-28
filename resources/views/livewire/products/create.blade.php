<div>
    <form wire:submit='save' class="space-y-6">
        <x-form.input wire:model="form.name" label="Name" name="form.name" placeholder="Enter product name" />
        <x-form.input wire:model="form.stock" label="Stock" name="form.stock" placeholder="Enter stock quantity" />
        <x-form.input wire:model="form.price" label="Price" name="form.price" placeholder="Enter product price" />
        <div>
            <label for="description" class="block text-sm font-medium text-white-700">Description</label>
            <textarea id="description" wire:model="form.description"
                class="w-100 h-40 rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark"
                placeholder="Enter product description"></textarea>
            @error('form.description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <!-- primary Button with Icon -->
        <button type="submit"
            class="inline-flex justify-center items-center gap-2 whitespace-nowrap rounded-radius bg-primary border border-primary dark:border-primary-dark px-4 py-2 text-base font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            <span wire:loading.remove>
                {{ request()->routeIs('products.create') ? 'Create' : 'Update' }}
            </span>

            <span wire:loading>
                Loading...
            </span>
        </button>
    </form>
</div>
