<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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
          <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500" href="#">在庫状況</a>
        </div>
        <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
          <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500" href="{{route('csv.index')}}">CSV読み込み</a>
        </div>
        <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
          <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500" href="#">発注書作成</a>
        </div>
        <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
          <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500" href="#">在庫状況時系列</a>
        </div>
      </div>
    </nav>
    <!-- End Nav -->

    <!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                在庫チェック一覧
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                これまでの在庫チェックの記録
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                  View all
                </a>

                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 
                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" 
                href="{{ route('check.create') }}">
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                  新規作成
                </a>
              </div>
            </div>
          </div>
          <!-- End Header -->

          @if(session('message'))
            <div class="text-red-600 font-bold">
              {{session('message')}}
            </div>
          @endif

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
              <tr>
                <th scope="col" class="px-6 py-3 text-left border-l border-gray-200 dark:border-gray-700">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    開始日
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    開始時刻
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    終了日
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    終了時刻
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    確認者
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    状況
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">

                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    
                  </span>
                </th>

              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($checks as $check)
                <tr>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $check->check_start_date }}</span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $check->check_start_time }}</span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $check->check_end_date }}</span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $check->check_end_time }}</span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $check->user->name }}</span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">
                            @if($check->completed)
                                完了
                            @else
                                チェック中
                            @endif
                            </span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">
                              @if(!($check->completed))
                              <a href="{{route('check.show', $check)}}" class="text-blue-600">
                                在庫チェックを行う
                              </a>
                              @else
                              <span class="text-gray-600">
                                在庫チェックを行う
                              </span>
                              @endif
                            </span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">
                              <a href="{{route('check.edit', $check)}}" class="text-blue-600">
                                確定・取消
                              </a>
                            </span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">
                              <a href="{{route('check.delete_edit', $check)}}" class="text-red-600">
                                削除
                              </a>
                            </span>
                        </div>
                    </td>
                    
                </tr>
                @endforeach
              
            </tbody>
          </table>
          <!-- End Table -->

          <!-- Footer -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
            <div>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                <span class="font-semibold text-gray-800 dark:text-gray-200">XX</span> results
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                  </svg>
                  Prev
                </button>

                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                  Next
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->

</x-app-layout>