<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['trace_id', 'company', 'provider', 'datetime'];

    public function attachments()
    {
        return $this->hasMany(TicketAttachment::class);
    }
    protected $casts = [
        'closed_at' => 'datetime',
    ];
}
