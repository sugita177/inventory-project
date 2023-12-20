<x-layouts.inventory-manager>

  <div class="max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                {{ $category->name }}
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                品目分類の詳細
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <a href="{{ route('category.index') }}">
                    <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                    一覧画面へ
                    </button>
                </a>
              </div>
            </div>
          </div>
          <!-- End Header -->


          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
              <tr>
                <th scope="col" class="px-6 py-3 text-left border-l border-gray-200 dark:border-gray-700">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    項目
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    内容
                  </span>
                </th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                
                <tr>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">保管場所名</span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $category->name }}</span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">詳細</span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $category->detail }}</span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">登録日</span>
                        </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                        <div class="px-6 py-2">
                            <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $category->created_at }}</span>
                        </div>
                    </td>
                </tr>
                
              
            </tbody>
          </table>
          <!-- End Table -->

          <!-- Footer -->
          <div class="px-6 py-4 grid gap-3 md:flex flex-row-reverse md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
            <div class="mt-1 grid sm:flex gap-2 ">
                <a href="{{route('category.edit', $category)}}" >
                <x-primary-button class="inline-flex justify-center items-center">編集</x-primary-button>
                </a>

                <form  id="deleteForm" method="post" action="{{route('category.destroy', $category)}}" >
                    @csrf
                    @method('delete')
                    <x-primary-button id="deleteButton" class="bg-red-700 ml-2 inline-flex justify-center items-center" >削除</x-primary-button>
                </form>
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
@vite(['resources/js/confirm_delete.js'])

</x-layouts.inventory-manager>