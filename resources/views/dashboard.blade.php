<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- __('Dashboard') --}}
            在庫管理システム
        </h2>
    </x-slot>

    <!-- Nav -->
    <nav class="sticky -top-px bg-white text-sm font-medium text-black ring-1 ring-gray-900 ring-opacity-5 border-t shadow-sm shadow-gray-100 pt-6 md:pb-6 -mt-px dark:bg-slate-900 dark:border-gray-800 dark:shadow-slate-700/[.7]" aria-label="Jump links">
      <div class="max-w-7xl snap-x w-full flex items-center overflow-x-auto scrollbar-x px-4 sm:px-6 lg:px-8 pb-4 md:pb-0 mx-auto dark:scrollbar-x">
        <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last-pr-0">
          <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500" href="{{route('article.index')}}">在庫管理対象データ</a>
        </div>
        <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
          <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500" href="{{route('check.index')}}">在庫チェック</a>
        </div>
        <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
          <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500" href="{{route('inventory.latest_state')}}">在庫状況</a>
        </div>
        <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
          <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500" href="{{route('csv.index')}}">CSV読み込み</a>
        </div>
        <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
          <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500" href="{{route('check.order_index')}}">発注書作成</a>
        </div>
        <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
          <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500" href="#">在庫状況時系列</a>
        </div>
      </div>
    </nav>
    <!-- End Nav -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>