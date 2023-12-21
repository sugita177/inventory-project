<x-layouts.inventory-manager>

    <!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">

        <form method="post" action="{{ route('inventory.update', $check) }}">
            @csrf
            @method('patch')
        <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                在庫チェック(チェック完了済み)
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                {{$check->check_start_date}} ~ {{$check->check_end_date}}
              </p>
              <p class="text-sm ml-1 text-gray-600 dark:text-gray-400">
                チェック完了済みの在庫チェック表の内容です<br>
                内容を修正するには、一覧画面に戻って確定の取り消しを行ってください
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                  View all
                </a>

                <a href="{{ route('check.index') }}">
                    <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                        一覧画面へ
                    </button>
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
                        品名
                    </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-left">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        細目
                    </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-left">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        場所
                    </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-left">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        備考
                    </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-left">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        在庫数
                    </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-left">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        単位
                    </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-left">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        不足数
                    </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-left">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        単位
                    </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-left">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        チェック済み
                    </span>
                    </th>
                    

                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($inventories as $inventory)
                    <tr>
                        <td class="h-px w-auto whitespace-nowrap">
                            <div class="px-6 py-2">
                                <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">
                                <a href="{{route('article.show', $inventory->article)}}" class="text-blue-600">
                                    {{ $inventory->article->name }}
                                </a>
                                </span>
                            </div>
                        </td>
                        <td class="h-px w-auto whitespace-nowrap">
                            <div class="px-6 py-2">
                                <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $inventory->article->detail }}</span>
                            </div>
                        </td>
                        <td class="h-px w-auto whitespace-nowrap">
                            <div class="px-6 py-2">
                                <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $inventory->article->place->name }}</span>
                            </div>
                        </td>
                        <td class="h-px w-auto whitespace-nowrap">
                            <div class="px-6 py-2">
                                <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $inventory->article->remark }}</span>
                            </div>
                        </td>
                        <td class="h-px w-auto whitespace-nowrap">
                            <div class="px-6 py-2">
                                <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">
                                <x-input-error :messages="$errors->get('{{$inventory->id}}_inventory_number')" class="mt-2" />
                                  <input disabled id="{{$inventory->id}}_inventory_number" name="{{$inventory->id}}_inventory_number" 
                                  type="number" step="1" min="0" class="py-2 px-3 pr-11 block w-full border-gray-200 
                                  shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" 
                                  placeholder="" value="{{$inventory->inventory_number}}"
                                  {{$inventory->checked == 1 ? 'readonly':''}}>
                                </span>
                            </div>
                        </td>
                        <td class="h-px w-auto whitespace-nowrap">
                            <div class="px-6 py-2">
                                <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $inventory->article->unit }}</span>
                            </div>
                        </td>
                        <td class="h-px w-auto whitespace-nowrap">
                            <div class="px-6 py-2">
                                <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">
                                  <x-input-error :messages="$errors->get('{{$inventory->id}}_shortage_number')" class="mt-2" />
                                  <input disabled id="{{$inventory->id}}_shortage_number" name="{{$inventory->id}}_shortage_number" 
                                  type="number" step="1" min="0" class="py-2 px-3 pr-11 block w-full border-gray-200 
                                  shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" 
                                  placeholder="" value="{{$inventory->shortage_number}}"
                                  {{$inventory->checked == 1 ? 'readonly':''}}>
                                </span>
                            </div>
                        </td>
                        <td class="h-px w-auto whitespace-nowrap">
                            <div class="px-6 py-2">
                                <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">{{ $inventory->article->unit }}</span>
                            </div>
                        </td>
                        <td class="h-px w-auto whitespace-nowrap">
                            <div class="px-6 py-2">
                                <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">
                                <label for="checked_{{$inventory->id}}" class="flex">
                                  <input disabled type="hidden" name="{{$inventory->id}}_checked" value="0">
                                  <input disabled type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none 
                                  focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 
                                  dark:focus:ring-offset-gray-800"  
                                  id="checked_{{$inventory->id}}" name="{{$inventory->id}}_checked" value="1"
                                  {{$inventory->checked == 1 ? 'checked':''}}>
                                  <span class="sr-only">Checkbox</span>
                                </label>
                            </div>
                        </td>
                        
                    </tr>
                    @endforeach
                
                </tbody>
            </table>
            <!-- End Table -->
        </form>

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
@vite(['resources/js/check_show.js'])

</x-layouts.inventory-manager>