<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('ip.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="ip" class = 'text-white border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600' placeholder="Input IP Address">
                        <button type="submit" class="p-2 bg-red-600 rounded">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
