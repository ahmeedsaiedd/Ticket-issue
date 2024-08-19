<?php

// app/Models/TicketAttachment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'path',
    ];

    // Define relationship with ticket
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
