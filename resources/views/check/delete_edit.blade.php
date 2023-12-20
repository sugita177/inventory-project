<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        在庫管理システム
        </h2>
    </x-slot>
    
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    @if(session('message'))
                <div class="text-red-600 font-bold">
                    {{ session('message') }}
                </div>
            @endif
    <form id="deleteForm" method="post" action="{{ route('check.destroy',$check) }}">
        @csrf
        @method('delete')
        <!-- Card -->
        <div class="bg-white rounded-xl shadow dark:bg-slate-900">
            <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                <!-- Grid -->
                <div class="space-y-4 sm:space-y-6">
                    <div class="space-y-2">
                        <label for="check_start_date" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        開始日
                        </label>
                        <x-input-error :messages="$errors->get('check_start_date')" class="mt-2" />
                        <input disabled id="check_start_date" name="check_start_date" type="date" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="開始日" value="{{ $check->check_start_date }}">
                    </div>

                    <div class="space-y-2">
                        <label for="check_start_time" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        開始時刻
                        </label>
                        <x-input-error :messages="$errors->get('check_start_time')" class="mt-2" />
                        <input disabled id="check_start_time" name="check_start_time" type="time" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="開始時刻" value="{{ $check->check_start_time }}">
                    </div>

                    <div class="space-y-2">
                        <label for="check_start_date" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        終了日
                        </label>
                        <x-input-error :messages="$errors->get('check_end_date')" class="mt-2" />
                        <input id="check_end_date" name="check_end_date" type="date" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="開始日" value="{{ $check->check_end_date }}"
                        disabled>
                    </div>

                    <div class="space-y-2">
                        <label for="check_start_time" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        終了時刻
                        </label>
                        <x-input-error :messages="$errors->get('check_end_time')" class="mt-2" />
                        <input id="check_end_time" name="check_end_time" type="time" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="開始時刻" value="{{ $check->check_end_time }}"
                        disabled>
                    </div>

                    
                </div>
                <!-- End Grid -->

                <div class="mt-5 flex justify-center gap-x-2">
                    <a href="{{ route('check.index') }}">
                    <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                        在庫チェック表一覧画面へ
                    </button>
                    </a>
                    <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                    >
                        上記の在庫チェックの記録を削除する
                    </button>    
                </div>
            </div>
        </div>
        <!-- End Card -->
    </form>
    </div>
    <!-- End Card Section -->
    @vite(['resources/js/confirm_delete.js'])
</x-app-layout>
