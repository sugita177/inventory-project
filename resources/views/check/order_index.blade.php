<x-layouts.inventory-manager>

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
                発注書作成
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                発注書を作成する在庫チェック表を選択してください(*チェック完了済みのみ対象)
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                  View all
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

            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($completed_checks as $check)
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
                              <a href="{{route('check.order_show', $check)}}" class="text-blue-600">
                                発注書作成
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
                <span class="font-semibold text-gray-800 dark:text-gray-200">{{ count($completed_checks) }}</span> 項目
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

</x-layouts.inventory-manager>