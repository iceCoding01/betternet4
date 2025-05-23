<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6 border-b-2 border-slate-100 pb-4">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Billing') }}
                        </h2>
                        <div class="flex items-center">
                            @if (auth()->user()->isAdmin())
                                <a href="{{ route('billing.download') }}" class="inline-flex items-center px-4 py-2 bg-orange-400 text-white dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs rounded uppercase">
                                    {{ __('Download') }}
                                </a>

                                <a href="{{ route('billing.create') }}" class="ml-2 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white rounded uppercase">
                                    {{ __('Create') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div>
                        @if (auth()->user()->isAdmin())
                            <livewire:billing-table/>
                        @endif
                        @if (auth()->user()->isUser())
                            <livewire:user-billing-table/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
