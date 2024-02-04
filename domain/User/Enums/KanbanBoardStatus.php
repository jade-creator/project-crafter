<?php

namespace Domain\User\Enums;

use Mokhosh\FilamentKanban\Concerns\IsKanbanStatus;

enum KanbanBoardStatus: string
{
    use IsKanbanStatus;

    case PENDING = 'pending';
    case INPROGRESS = 'in progress';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
    case COMPLETED = 'completed';
}
