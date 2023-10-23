<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            フォーム
        </h2>
    </x-slot>

    <div class="max-w-7xl max-auto px-6">
        @if(session('message'))
            <div class="text-red-600 font-bold">
                {{ session('message') }}
            </div>
        @endif

        <form method="post" action="{{ route('article.store') }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="name" class="font-semifold mt-4">品名</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <input type="text" name="name" id="name" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="name"
                    value="{{old('name')}}">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="detail" class="font-semifold mt-4">細目</label>
                    <x-input-error :messages="$errors->get('detail')" class="mt-2" />
                    <input type="text" name="detail" id="detail" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="detail"
                    value="{{old('detail')}}">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="category" class="font-semifold mt-4">分類</label>
                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    <input type="text" name="category" id="category" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="category"
                    value="{{old('category')}}">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="place" class="font-semifold mt-4">場所</label>
                    <x-input-error :messages="$errors->get('place')" class="mt-2" />
                    <input type="text" name="place" id="place" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="place"
                    value="{{old('place')}}">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="unit" class="font-semifold mt-4">単位</label>
                    <x-input-error :messages="$errors->get('unit')" class="mt-2" />
                    <input type="text" name="unit" id="unit" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="unit"
                    value="{{old('unit')}}">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="supplier" class="font-semifold mt-4">発注先</label>
                    <x-input-error :messages="$errors->get('supplier')" class="mt-2" />
                    <input type="text" name="supplier" id="supplier" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="supplier"
                    value="{{old('supplier')}}">
                </div>
            </div>

            <div class="w-full flex flex-col">
                    <label for="remark" class="font-semifold mt-4">備考</label>
                    <x-input-error :messages="$errors->get('remark')" class="mt-2" />
                    <textarea name="remark" id="remark" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 
                    focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" rows="3" 
                    placeholder="remark">
                        {{old('remark')}}
                    </textarea>
            </div>

            <x-primary-button class="mt-4">
                登録する
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
