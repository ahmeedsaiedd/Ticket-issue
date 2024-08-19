
@extends('layouts.master')

@section('content')
   

    <div class="overflow-x-auto ml-auto mx-2 mt-16">
        <!-- Container to align the table to the right -->
        <div class="min-w-full max-w-full flex justify-end ml-4">
            <table class="divide-y divide-gray-200" style="width: 75vw;">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Ticket ID
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Trace ID
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Company Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Provider Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date and Time
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Closed Date
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Attachment
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                       
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Loop through each ticket -->
                    @foreach ($tickets as $ticket)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $ticket->id }} <!-- Ticket ID -->
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $ticket->trace_id }} <!-- Trace ID -->
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $ticket->company }} <!-- Company Name -->
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $ticket->provider }} <!-- Provider Name -->
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $ticket->created_at->format('Y-m-d H:i') }} <!-- Date and Time -->
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $ticket->closed_at ? $ticket->closed_at->format('Y-m-d H:i') : 'N/A' }}
                                <!-- Closed Date -->
                            </td>
                            
                            
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $ticket_attachments->attachment ?? 'N/A' }} <!-- Attachment -->
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <select name="status" id="status-{{ $ticket->id }}" data-ticket-id="{{ $ticket->id }}">
                                    <option value="open" {{ $ticket->status == 'open' ? 'selected' : '' }}>Open</option>
                                    <option value="in progress" {{ $ticket->status == 'in progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="solved" {{ $ticket->status == 'solved' ? 'selected' : '' }}>Solved</option>
                                    <option value="done" {{ $ticket->status == 'done' ? 'selected' : '' }}>Done</option>
                                    <option value="closed" {{ $ticket->status == 'closed' ? 'selected' : '' }}>Closed</option>
                                </select>
                                {{-- <span id="status-message-{{ $ticket->id }}" class="text-sm text-gray-500"></span> --}}
                            </td>
                            
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
