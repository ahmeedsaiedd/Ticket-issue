@extends('layouts.master')

@section('content')
    <div class="relative">
        <!-- Awesome Button -->
        <a href="{{ route('ticket.create') }}"
            class="absolute top-4 right-4 bg-gradient-to-r from-green-400 to-green-600 text-white font-bold py-2 px-4 rounded-md shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out flex items-center space-x-2 hover:shadow-lg hover:rotate-1">
            <i class="fas fa-plus-circle text-lg"></i>
            <span class="text-sm">Add New Ticket</span>
        </a>
    </div>

    <div class="centered-container">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md max-h-[90vh] overflow-y-auto">
            <h1 class="text-2xl font-bold mb-4 text-black">Add New Ticket</h1>

            <form action="{{ route('ticket.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Form fields -->
                <div class="grid grid-cols-1 gap-4 mb-4">
                    <div>
                        <label for="trace_id" class="block text-black font-medium mb-1">Trace ID of Transaction</label>
                        <input type="text" id="trace_id" name="trace_id" placeholder="Enter Trace ID"
                            class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-green-500 h-12 pl-3 text-black"
                            required>
                    </div>
            
                    <div>
                        <label for="company" class="block text-black font-medium mb-1">Name of the Company</label>
                        <input type="text" id="company" name="company" placeholder="Enter Company Name"
                            class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-green-500 h-12 pl-3 text-black"
                            required>
                    </div>
            
                    <div>
                        <label for="provider" class="block text-black font-medium mb-1">Name of the Provider</label>
                        <input type="text" id="provider" name="provider" placeholder="Enter Provider Name"
                            class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-green-500 h-12 pl-3 text-black"
                            required>
                    </div>
            
                    <div>
                        <label for="datetime" class="block text-black font-medium mb-1">Date and Time</label>
                        <input type="datetime-local" id="datetime" name="datetime"
                            value="{{ now()->format('Y-m-d\TH:i') }}"
                            class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-green-500 h-12 pl-3 text-black"
                            required>
                    </div>
            
                    <div>
                        <label for="attachments" class="block text-black font-medium mb-1">Attachments</label>
                        <input type="file" id="attachments" name="attachments[]"
                            class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-green-500 h-12 pl-3 text-black"
                            multiple>
                    </div>
                </div>
            
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-gradient-to-r from-green-400 to-green-600 text-white font-bold py-1 px-4 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-transform duration-300 ease-in-out flex items-center space-x-2">
                        <i class="fas fa-check-circle text-base"></i>
                        <span class="text-sm">Submit</span>
                    </button>
                </div>
                
            </form>
            
        </div>
    </div>
@endsection
