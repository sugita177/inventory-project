<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            フォーム
        </h2>
    </x-slot>

    <div class="max-w-7xl max-auto px-6">
        <form>
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="name" class="font-semifold mt-4">品名</label>
                    <input type="text" name="name" id="name" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="name">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="detail" class="font-semifold mt-4">細目</label>
                    <input type="text" name="detail" id="detail" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="detail">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="catogory" class="font-semifold mt-4">分類</label>
                    <input type="text" name="catogory" id="catogory" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="catogory">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="place" class="font-semifold mt-4">場所</label>
                    <input type="text" name="place" id="place" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="place">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="unit" class="font-semifold mt-4">単位</label>
                    <input type="text" name="unit" id="unit" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="unit">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="supplier" class="font-semifold mt-4">発注先</label>
                    <input type="text" name="supplier" id="supplier" class="py-3 px-4 block w-full border-gray-200 
                    rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 
                    dark:border-gray-700 dark:text-gray-400" placeholder="supplier">
                </div>
            </div>

            <div class="w-full flex flex-col">
                    <label for="remark" class="font-semifold mt-4">備考</label>
                    <textarea name="remark" id="remark" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 
                    focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" rows="3" 
                    placeholder="remark"></textarea>
            </div>
        </form>
    </div>
</x-app-layout>
