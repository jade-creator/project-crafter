@php
    $color = match ($record['status']) {
        \Domain\User\Enums\KanbanBoardStatus::PENDING->value => 'record-pending',
        \Domain\User\Enums\KanbanBoardStatus::INPROGRESS->value => 'record-progress',
        \Domain\User\Enums\KanbanBoardStatus::APPROVED->value => 'record-approved',
        \Domain\User\Enums\KanbanBoardStatus::REJECTED->value => 'record-rejected',
        \Domain\User\Enums\KanbanBoardStatus::COMPLETED->value => 'record-completed',
        default => '',
    }
@endphp
<div
    id="{{ $record['id'] }}"
    wire:click="recordClicked('{{ $record['id'] }}', {{ @json_encode($record) }})"
    class="record transition bg-white dark:bg-gray-700 rounded-lg px-4 py-2 cursor-grab font-medium text-gray-600 dark:text-gray-200 record-custom {{ $color }}"
    @if($record['just_updated'])
        x-data
        x-init="
            $el.classList.add('animate-pulse-twice', 'bg-primary-100', 'dark:bg-primary-800')
            $el.classList.remove('bg-white', 'dark:bg-gray-700')
            setTimeout(() => {
                $el.classList.remove('bg-primary-100', 'dark:bg-primary-800')
                $el.classList.add('bg-white', 'dark:bg-gray-700')
            }, 3000)
        "
    @endif
>
    <div>
        {{ $record['title'] }}
    </div>

    <div class="record-description {{ $record['description'] }}">
        <span class="record-description-span">
            {!! $record['description'] !!}
        </span>
    </div>

    <div class="record-date bg-primary-100 dark:bg-gray-800" title="{{$record['created_at']}}">
        {{ \Carbon\Carbon::parse($record['created_at'])->format('M. d') }}
    </div>
</div>
