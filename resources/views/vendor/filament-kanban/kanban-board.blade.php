<x-filament-panels::page>
    <div
        x-data wire:ignore.self class="md:flex overflow-x-auto overflow-y-hidden gap-4 pb-4"
        x-load-css="[@js(\Filament\Support\Facades\FilamentAsset::getStyleHref('custom-stylesheet'))]">
        @foreach($statuses as $status)
            @include('filament-kanban::kanban-status')
        @endforeach

        <div wire:ignore>
            @include('filament-kanban::kanban-scripts')
        </div>
    </div>

    @unless($disableEditModal)
        <x-filament-kanban::edit-record-modal/>
    @endunless
</x-filament-panels::page>
