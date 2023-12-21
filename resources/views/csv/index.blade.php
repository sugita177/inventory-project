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
                CSV読み込み
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                在庫管理対象のマスターデータをCSVファイルから読み込み、登録します
              </p>
            </div>

          </div>
          <!-- End Header -->

          @if(session('message'))
            <div class="text-red-600 font-bold">
              {{session('message')}}
            </div>
          @endif

          
          <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <p class="mb-1 text-sm text-gray-600 dark:text-white">
                  CSVファイルは下記の例のようにしてください。第1行目は読み込み時には無視されます。<br>
                  分類、保管場所、発注先に関して、データ登録されていない名称が記されている場合、「未登録」として登録されます。
      </p>
      <p class="ml-3 mb-3 text-sm text-gray-600 dark:text-white">
        (例)<br>
        名称,細目,分類,保管場所,単位,発注先,備考<br>
        ラッカーシンナー,,ペンキ,ペンキ棚,缶,田中ペンキ店,1/2以下になったら購入すること<br>
        電気配線,黒色,電気,電気棚,巻,宮崎電気,<br>
        溶接ガス,酸素,溶接,ガス置き場,ボンベ,福山ガス,1本以上は常備しておくこと
      </p>
      
    <form method="post" enctype="multipart/form-data" action="{{ route('article.csv_import') }}">
        @csrf
        <!-- Card -->
        <div class="bg-white rounded-xl shadow dark:bg-slate-900">
            <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                <!-- Grid -->
                <div class="space-y-4 sm:space-y-6">
                    <div class="space-y-2">
                        <x-input-error :messages="$errors->get('csv_file')" class="mt-2" />
                        <div class="mb-3">
                        <label
                            for="formFileLg"
                            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                            >CSVファイル選択</label
                        >
                        <input
                            
                            class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                            id="csv_file" name="csv_file"
                            type="file" />
                        </div>
                    </div>         
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
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->

</x-layouts.inventory-manager>