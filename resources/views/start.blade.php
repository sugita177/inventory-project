<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>在庫管理システム</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            @vite('resources/css/app.css')
    </head>


<body class="bg-slate-50 dark:bg-slate-900">
  <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full text-sm">
    <nav class="relative max-w-[85rem] w-full mx-auto bg-white border-b border-gray-200 py-3 px-4 sm:py-0 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:border-x dark:bg-gray-800 dark:border-gray-700" aria-label="Global">
    
    
    
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">在庫管理システム</a>
            
        </div>
      <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">
          @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                <a a href="{{ route('login') }}" class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 sm:my-6 sm:ps-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500" >
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                    Log in
                </a>
            @endauth
          @endif
        </div>
      </div>
    </nav>
  </header>

  <main id="content" role="main">
    <div class="max-w-[85rem] mx-auto min-h-screen bg-white border-x-gray-200 py-10 px-4 sm:px-6 lg:px-8 xl:border-x dark:bg-gray-800 dark:border-x-gray-700">
      <!-- Page Heading -->
      <header class="max-w-3xl">
        @if(Route::has('login'))
          @auth
          <a href="{{ route('article.index') }}">
              <p class="mb-2 text-sm font-semibold text-blue-600">システムを使用する</p>
          </a>
          @else
            <p class="mb-2 text-sm font-semibold text-gray-600 dark:text-gray-400">システムを使用するためには、ログインをしてください
              <br>「メールアドレス: test@example.com パスワード: 12345678」でログインできます
            </p>
          @endauth
        @endif
        </header>
        <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl my-2 dark:text-white">在庫管理システムへようこそ</h1>
            <h2 class="block text-1xl font-bold text-gray-800 sm:text-2xl mt-2 dark:text-white">作成動機</h2>
            <p class="mt-2 ml-2 text-base text-gray-800 dark:text-gray-400">
              一時担当していた在庫管理をしていく中で、業務の効率化と時間節約のためのシステムがあれば便利だと思ったのがきっかけです。<br>
              実際に在庫管理をしていた中で出てきたアイデアをもとに作成しています。
            </p>
            <h2 class="block text-2xl font-bold text-gray-800 sm:text-2xl mt-2 dark:text-white">機能</h2>
              <h3 class="block ml-1 text-1xl font-bold text-gray-800 sm:text-1.5xl mt-1 dark:text-white">在庫対象品データ登録・編集・削除</h3>
              <p class="mt-1 ml-2 text-base text-gray-800 dark:text-gray-400">
                在庫管理の対象となる物品を登録・編集・削除します。<br>
                登録データ項目は置き場所や発注先など、在庫管理の一連のプロセスに必要だと考えられるものを採用しました。
              </p>
              <h3 class="block ml-1 text-1xl font-bold text-gray-800 sm:text-1.5xl mt-1 dark:text-white">在庫チェック機能</h3>
              <p class="mt-1 ml-2 text-base text-gray-800 dark:text-gray-400">
                実際に在庫のチェックをする時に用いる機能です。<br>
                品目ごとに在庫数と不足数を入力し、チェックの完了をしています。
              </p>
              <h3 class="block ml-1 text-1xl font-bold text-gray-800 sm:text-1.5xl mt-1 dark:text-white">在庫状況の確認</h3>
              <p class="mt-1 ml-2 text-base text-gray-800 dark:text-gray-400">
                在庫チェックのデータ履歴から、現在の在庫状況を表示します。
              </p>
              <h3 class="block ml-1 text-1xl font-bold text-gray-800 sm:text-1.5xl mt-1 dark:text-white">データCSV読み込み</h3>
              <p class="mt-1 ml-2 text-base text-gray-800 dark:text-gray-400">
                在庫管理の対象となる物品データの登録をCSVファイルをインポートして行います。<br>
                大量のデータが存在するときに役に立つ機能です。
              </p>
              <h3 class="block ml-1 text-1xl font-bold text-gray-800 sm:text-1.5xl mt-1 dark:text-white">発注書作成</h3>
              <p class="mt-1 ml-2 text-base text-gray-800 dark:text-gray-400">
                完了済みの在庫チェック記録から不足分の発注書を作成します。<br>
                発注書出力の確認画面まで実装しています。
              </p>
            <h2 class="block text-2xl font-bold text-gray-800 sm:text-2xl mt-2 dark:text-white">これから実装したいこと</h2>
            <h3 class="block ml-1 text-1xl font-bold text-gray-800 sm:text-1.5xl mt-1 dark:text-white">選択・検索機能</h3>
              <p class="mt-1 ml-2 text-base text-gray-800 dark:text-gray-400">
                物品の分類や発注先から選択・検索する機能の実装。
              </p>
              <h3 class="block ml-1 text-1xl font-bold text-gray-800 sm:text-1.5xl mt-1 dark:text-white">在庫状況の可視化・グラフ化</h3>
              <p class="mt-1 ml-2 text-base text-gray-800 dark:text-gray-400">
                各データから在庫数の時系列推移の折れ線グラフや、在庫品の分類別の円グラフなど、可視化する機能の実装。<br>
                Chart.jsを使用する予定。
              </p>
              <h3 class="block ml-1 text-1xl font-bold text-gray-800 sm:text-1.5xl mt-1 dark:text-white">発注書Excel出力</h3>
              <p class="mt-1 ml-2 text-base text-gray-800 dark:text-gray-400">
                発注書を発注先ごとにExcel出力する機能。
              </p>
              <h3 class="block ml-1 text-1xl font-bold text-gray-800 sm:text-1.5xl mt-1 dark:text-white">エラー処理・バリデーションチェックなど</h3>
              <p class="mt-1 ml-2 text-base text-gray-800 dark:text-gray-400">
                ログイン関係のエラー処理やCSV読み込み時のバリデーションチェック等の実装。
              </p>
              <h3 class="block ml-1 text-1xl font-bold text-gray-800 sm:text-1.5xl mt-1 dark:text-white">画面構成の見直し</h3>
              <p class="mt-1 ml-2 text-base text-gray-800 dark:text-gray-400">
                ユーティリティ向上のために、画面の構成や画面遷移などを見直す。
              </p>
      
      <!-- End Page Heading -->
    </div>
  </main>
</body>

</html>