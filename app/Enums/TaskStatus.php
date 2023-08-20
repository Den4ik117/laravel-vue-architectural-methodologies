<?php

namespace App\Enums;

enum TaskStatus: string
{
    case Created = 'CREATED';
    case InWork = 'IN_WORK';
    case Completed = 'COMPLETED';
}
