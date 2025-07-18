@extends('layouts.app')

@section('title', 'Employees Dashboard')

@section('main-content')
<div class="p-4 md:p-6">
    <!-- Summary Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        @php
            $employeeStats = [
                ['card' => 'Total Employees', 'count' => 150, 'icon' => 'users', 'trend' => 'up', 'change' => '5%'],
                ['card' => 'Temporary', 'count' => 40, 'icon' => 'clock', 'trend' => 'down', 'change' => '2%'],
                ['card' => 'Male', 'count' => 50, 'icon' => 'male', 'trend' => 'up', 'change' => '3%'],
                ['card' => 'Female', 'count' => 70, 'icon' => 'female', 'trend' => 'up', 'change' => '7%']
            ];
        @endphp

        @foreach ($employeeStats as $stat)
            <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-200">
                <div class="p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">{{ $stat['card'] }}</p>
                            <h3 class="mt-2 text-3xl font-semibold text-gray-800">{{ $stat['count'] }}</h3>
                        </div>
                        <div class="p-3 rounded-sm bg-[var(--color-accent)]/10 text-[var(--color-accent)]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                @if($stat['icon'] === 'users')
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                @elseif($stat['icon'] === 'clock')
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                @elseif($stat['icon'] === 'male')
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                @elseif($stat['icon'] === 'female')
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14v5m0 0v-5m0 0H9m3 0h3"></path>
                                @endif
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        @if($stat['trend'] === 'up')
                            <span class="text-green-500 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                                {{ $stat['change'] }}
                            </span>
                        @else
                            <span class="text-red-500 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                {{ $stat['change'] }}
                            </span>
                        @endif
                        <span class="text-gray-500 ml-2">vs last month</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Filter Section -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-100 mb-8">
        <div class="p-4 border-b border-gray-100">
            <h2 class="text-lg font-semibold text-gray-800">Employee Filters</h2>
        </div>
        <div class="p-4">
            @php
                $departments = ['All', 'Engineering', 'HR', 'Marketing', 'Finance', 'Support', 'Operations', 'Sales'];
                $statuses = ['Active', 'On Leave', 'Terminated'];
            @endphp

            <div class="mb-4">
                <h3 class="text-sm font-medium text-gray-500 mb-2">DEPARTMENTS</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach ($departments as $department)
                        <button class="px-3 py-1 text-sm rounded-sm border border-gray-200 hover:bg-[var(--color-accent)]/10 hover:text-[var(--color-accent)] hover:border-[var(--color-accent)]/20 transition {{ $loop->first ? 'bg-[var(--color-accent)]/10 text-[var(--color-accent)] border-[var(--color-accent)]/20' : 'bg-white text-gray-700' }}">
                            {{ $department }}
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="mb-2">
                <h3 class="text-sm font-medium text-gray-500 mb-2">STATUS</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach ($statuses as $status)
                        <button class="px-3 py-1 text-sm rounded-sm border border-gray-200 hover:bg-[var(--color-accent)]/10 hover:text-[var(--color-accent)] hover:border-[var(--color-accent)]/20 transition {{ $loop->first ? 'bg-[var(--color-accent)]/10 text-[var(--color-accent)] border-[var(--color-accent)]/20' : 'bg-white text-gray-700' }}">
                            {{ $status }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

                    <!-- Employee Directory Table -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
                            <h2 class="text-lg font-semibold text-gray-800">Employee Directory</h2>
                            <div class="flex items-center space-x-2">

                {{-- EMPLOYEE BUTTON USING COMPONENT AND FORM--}}
                <x-add-modal title="Add New Employee">
                    <h2 class="text-xl font-semibold mb-4">Add New Employee</h2>
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700">Title</label>
                            <input type="text" name="title" class="w-full border rounded p-2" required>
                        </div>

                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                            Submit
                        </button>
                    </form>
                </x-add-modal>

                    
                <button class="p-2 rounded-md border border-gray-200 hover:bg-gray-50">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="p-4 overflow-auto">
    <table class="min-w-full bg-white border border-gray-200 text-[var(--color-text)] text-sm text-left rounded-sm overflow-hidden">
    <thead class="bg-indigo-50 text-[var(--color-text)] text-xs uppercase tracking-wide sticky top-0 z-10">
        <tr>
            
            <th class="px-4 py-3 border-b">Name</th>
            <th class="px-4 py-3 border-b">Department</th>
            <th class="px-4 py-3 border-b">Email</th>
            <th class="px-4 py-3 border-b">Role</th>
            <th class="px-4 py-3 border-b">Type</th>
            <th class="px-4 py-3 border-b">Status</th>
            <th class="px-4 py-3 border-b">Actions</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-100">
        @forelse ($employees as $employee)
            <tr class="hover:bg-indigo-50 transition-colors duration-150">
               
                <td class="px-4 py-3">
                    {{ $employee->firstname }} {{ $employee->middlename ? $employee->middlename . ' ' : '' }}{{ $employee->lastname }}
                </td>
                <td class="px-4 py-3">{{ $employee->department }}</td>
      
                <td class="px-4 py-3">{{ $employee->email }}</td>
                <td class="px-4 py-3">{{ $employee->role }}</td>
                <td class="px-4 py-3 capitalize">{{ $employee->employment_type }}</td>
                <td class="px-4 py-3">
                    @php
                        $statusColors = [
                            'active' => ' text-green-600',
                            'left' => ' text-yellow-700',
                            'terminated' => ' text-red-600',
                        ];
                    @endphp
                    <span class="px-2 py-1 text-xs font-medium rounded-sm {{ $statusColors[strtolower($employee->status)] ?? 'bg-gray-100 text-gray-600' }}">
                        {{ ucfirst($employee->status) }}
                    </span>
                </td>
               <td class="px-4 py-5 flex items-center gap-2">
                   
                <x-view-modal><!-- Delete Button using modal--></x-view-modal>
             

                {{-- edit employee --}}
               <x-edit-modal>
                     {{-- <form action="#" method="POST"> {{-- {{ route('employees.update', $employee->id) }} 
                         @csrf
                        @method('PUT')

                        <label class="block mb-2 text-sm">Name</label>
                        <input type="text" name="name" value="{{ $employee->name }}" class="w-full border rounded p-2 mb-4" required>

                        <!-- Submit button is already in modal footer --> 
                     </form> --}} 
              </x-edit-modal>

              {{-- delete employee --}}
              <x-delete-modal><!-- Delete Button using modal--></x-delete-modal>

    </td>

            </tr>
        @empty
            <tr>
                <td colspan="10" class="text-center px-4 py-4 text-gray-500">No employees found.</td>
            </tr>
        @endforelse
    </tbody>
    <tfoot class="bg-gray-50">
        <tr>
            <td colspan="10" class="px-4 py-3 text-sm text-gray-500">
                Showing {{ $employees->count() }} of {{ $employees->total() }} employees
            </td>
        </tr>
    
</table>


</div>
    </div>
</div>





@endsection
