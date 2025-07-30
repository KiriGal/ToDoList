<?php

namespace App\Enums;

enum TaskStatus : string
{
    case Accepted = 'Accepted';
    case InProgress = 'In Progress';
    case Completed = 'Completed';
    case Cancelled = 'Cancelled';
}
