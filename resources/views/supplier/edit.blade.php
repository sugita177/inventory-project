<x-layouts.inventory-manager>
    
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        
    @if(session('message'))
                <div class="text-red-600 font-bold">
                    {{ session('message') }}
                </div>
    @endif
    <form method="post" action="{{ route('supplier.update', $supplier) }}">
        @csrf
        @method('patch')
        <!-- Card -->
        <div class="bg-white rounded-xl shadow dark:bg-slate-900">
            <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                発注先の内容更新
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                下項目の変更箇所を修正し、更新してください
              </p>
            </div>
            <a href="{{ route('supplier.index') }}">
                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                    一覧画面へ
                </button>
            </a>
          </div>
          <!-- End Header -->
            <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                <!-- Grid -->
                <div class="space-y-4 sm:space-y-6">
                    <div class="space-y-2">
                        <label for="name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        発注先名
                        </label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <input id="name" name="name" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="発注先名" value="{{old('name', $supplier->name)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="posting_code" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        郵便番号
                        </label>
                        <x-input-error :messages="$errors->get('posting_code')" class="mt-2" />
                        <input id="posting_code" name="posting_code" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="郵便番号xxx-xxxx" value="{{old('posting_code', $supplier->posting_code)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="address" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        住所
                        </label>
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        <input id="address" name="address" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="住所" value="{{old('address', $supplier->address)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="telephone_number" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        電話番号
                        </label>
                        <x-input-error :messages="$errors->get('telephone_number')" class="mt-2" />
                        <input id="telephone_number" name="telephone_number" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="電話番号" value="{{old('telephone_number', $supplier->telephone_number)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="fax_number" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        FAX番号
                        </label>
                        <x-input-error :messages="$errors->get('fax_nunber')" class="mt-2" />
                        <input id="fax_number" name="fax_number" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="FAX番号" value="{{old('fax_number', $supplier->fax_number)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="remark" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        備考
                        </label>
                        <x-input-error :messages="$errors->get('remark')" class="mt-2" />
                        <textarea id="remark" name="remark" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="備考" >{{old('remark', $supplier->remark)}}</textarea>
                    </div>

                    
                <!-- End Grid -->

                <div class="mt-5 flex justify-center gap-x-2">
                    
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
</x-layouts.inventory-manager>
