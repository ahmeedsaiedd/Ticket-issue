<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Method to show the form
    public function create()
    {
        return view('ticket.create');
    }

    // Method to handle form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'trace_id' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'provider' => 'required|string|max:255',
            'datetime' => 'required|date',
            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $ticket = new Ticket();
        $ticket->trace_id = $validated['trace_id'];
        $ticket->company = $validated['company'];
        $ticket->provider = $validated['provider'];
        $ticket->datetime = $validated['datetime'];
        $ticket->save();

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $path = $file->store('attachments');
                $ticket->attachments()->create(['path' => $path]);
            }
        }

        return redirect()->route('ticket.create')->with('success', 'Ticket created successfully!');
    }

    // Method to list all tickets
    public function list()
    {
        $tickets = Ticket::all(); // Fetch all tickets from the database
        return view('ticket.list', compact('tickets')); // Pass tickets to the view
    }
    
    public function index()
    {
        $tickets = Ticket::all()->map(function ($ticket) {
            $ticket->datetime = \Carbon\Carbon::parse($ticket->datetime);
            $ticket->closed_date = $ticket->closed_date ? \Carbon\Carbon::parse($ticket->closed_date) : null;
            return $ticket;
        });

        return view('tickets.index', compact('tickets'));
    }
    
    public function updateStatus(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
    
        $request->validate([
            'status' => 'required|in:open,in progress,solved,done,closed',
        ]);
    
        $status = $request->input('status');
        $ticket->status = $status;
    
        if ($status === 'closed') {
            $ticket->closed_at = now();
        } else {
            if ($ticket->status === 'closed') {
                $ticket->closed_at = null;
            }
        }
    
        $ticket->save();
    
        return response()->json(['success' => true]);
    }
    

    
    public function close($id)
    {
        // Find the ticket by its ID
        $ticket = Ticket::findOrFail($id);

        // Mark the ticket as closed
        $ticket->status = 'closed';
        $ticket->closed_at = now(); // Set the closed date and time
        $ticket->save();

        // Redirect back with a success message
        return redirect()->route('ticket.index')->with('success', 'Ticket closed successfully.');
    }
    public function active()
{
    $tickets = Ticket::where('status', '!=', 'closed')->get(); // Fetch active tickets
    return view('ticket.active', compact('tickets')); // Pass tickets to the view
}

    
}
