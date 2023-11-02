<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            フォーム
        </h2>
    </x-slot>
    
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    @if(session('message'))
                <div class="text-red-600 font-bold">
                    {{ session('message') }}
                </div>
            @endif
    <form method="post" action="{{ route('article.store') }}">
        @csrf
        <!-- Card -->
        <div class="bg-white rounded-xl shadow dark:bg-slate-900">
            <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                <!-- Grid -->
                <div class="space-y-4 sm:space-y-6">
                    <div class="space-y-2">
                        <label for="name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        品名
                        </label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <input id="name" name="name" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="品名" value="{{old('name')}}">
                    </div>

                    <div class="space-y-2">
                        <label for="detail" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        細目
                        </label>
                        <x-input-error :messages="$errors->get('detail')" class="mt-2" />
                        <input id="detail" name="detail" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="細目" value="{{old('detail')}}">
                    </div>

                    <div class="space-y-2">
                        <label for="category" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        分類
                        </label>
                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                        <input id="category" name="category" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="分類" value="{{old('category')}}">
                    </div>

                    <div class="space-y-2">
                        <label for="place" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        場所
                        </label>
                        <x-input-error :messages="$errors->get('place')" class="mt-2" />
                        <input id="place" name="place" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="場所" value="{{old('place')}}">
                    </div>

                    <div class="space-y-2">
                        <label for="unit" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        単位
                        </label>
                        <x-input-error :messages="$errors->get('unit')" class="mt-2" />
                        <input id="unit" name="unit" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="単位" value="{{old('unit')}}">
                    </div>

                    <div class="space-y-2">
                        <label for="supplier" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        発注先
                        </label>
                        <x-input-error :messages="$errors->get('supplier')" class="mt-2" />
                        <input id="supplier" name="supplier" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="発注先" value="{{old('supplier')}}">
                    </div>

                    <div class="space-y-2">
                        <label for="remark" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        備考
                        </label>
                        <x-input-error :messages="$errors->get('remark')" class="mt-2" />
                        <textarea id="remark" name="remark" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" rows="6" placeholder="備考" value="{{old('remark')}}"></textarea>
                    </div>
                </div>
                <!-- End Grid -->

                <div class="mt-5 flex justify-center gap-x-2">
                    <a href="{{ route('article.index') }}">
                    <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                        一覧画面へ
                    </button>
                    </a>
                    <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        登録する
                    </button>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </form>
    </div>
    <!-- End Card Section -->
</x-app-layout>
