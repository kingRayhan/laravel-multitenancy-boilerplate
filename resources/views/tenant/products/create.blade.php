<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Dashboard for x</h1>
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('products.store' , config('tenant.slug')) }}" method="POST">
                        @csrf

                        <input type="text" name="name" id="name">

                        <br>
                        <button>Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
