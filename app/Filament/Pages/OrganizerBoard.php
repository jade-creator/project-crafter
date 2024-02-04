<?php

namespace App\Filament\Pages;

use Carbon\Carbon;
use Domain\User\Enums\KanbanBoardStatus;
use Domain\User\Models\Item;
use Filament\Actions\Action;
use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Mokhosh\FilamentKanban\Pages\KanbanBoard;

class OrganizerBoard extends KanbanBoard
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $recordTitleAttribute = 'title';

    protected static string $recordStatusAttribute = 'status';

    #[\Override]
    public static function getNavigationGroup(): ?string
    {
        return trans('Workspace');
    }

    #[\Override]
    protected function statuses(): Collection
    {
        return KanbanBoardStatus::statuses();
    }

    #[\Override]
    protected function records(): Collection
    {
        return Item::latest('updated_at')->get();
    }

    #[\Override]
    public function onStatusChanged(int $recordId, string $status, array $fromOrderedIds, array $toOrderedIds): void
    {
        $item = Item::find($recordId);

        if ($item instanceof Item) {
            $item->update(['status' => $status]);
        }

        Item::setNewOrder($toOrderedIds);
    }

    #[\Override]
    public function onSortChanged(int $recordId, string $status, array $orderedIds): void
    {
        Item::setNewOrder($orderedIds);
    }

    #[\Override]
    protected function getEditModalFormSchema(?int $recordId): array
    {
        return self::getCustomFormSchema();
    }

    #[\Override]
    protected function editRecord(int $recordId, array $data, array $state): void
    {
        $item = Item::find($recordId);

        if ($item instanceof Item) {
            $item->update([
                'title' => $data['title'],
                'description' => $data['description'],
                'status' => $data['status'],
            ]);
        }
    }

    #[\Override]
    protected function getEditModalRecordData(int $recordId, array $data): array
    {
        $item = Item::find($recordId);

        return $item instanceof Item
            ? $item->toArray()
            : [];
    }

    #[\Override]
    /** @return \Illuminate\Support\Collection<int, array<string, mixed>> */
    protected function additionalRecordData(Model $record): Collection
    {
        /** @var \Domain\User\Models\Item */
        $data = $record;

        return collect([
            'description' => $data->description,
            'created_at' => $data->created_at,
        ]);
    }

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            Action::make('create')
                ->translateLabel()
                ->form(self::getCustomFormSchema())
                ->action(function (array $data): void {
                    Item::create($data);
                }),
        ];
    }

    private static function getCustomFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('title')
                ->translateLabel()
                ->required()
                ->string()
                ->maxLength(255),
            Forms\Components\RichEditor::make('description')
                ->translateLabel()
                ->nullable()
                ->columnSpanFull(),
            Forms\Components\Select::make('status')
                ->translateLabel()
                ->required()
                ->string()
                ->default(KanbanBoardStatus::PENDING->value)
                ->options(KanbanBoardStatus::class),
        ];
    }

    #[\Override]
    public static function getNavigationBadge(): ?string
    {
        $count = Item::whereDate('created_at', Carbon::today())->count();

        return $count > 0 ? (string) $count : '';
    }
}
