<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            フォーム
        </h2>
    </x-slot>
<!-- FAQ -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">個別表示</h2>
  </div>
  <!-- End Title -->

  <div class="text-right flex">
    <a href="{{route('article.edit', $article)}}" class="flex-1">
        <x-primary-button>編集</x-primary-button>
    </a>

    <form method="post" action="{{route('article.destroy', $article)}}" class="flex-2">
        @csrf
        @method('delete')
        <x-primary-button class="bg-red-700 ml-2">削除</x-primary-button>
    </form>
  </div>

  <div class="max-w-2xl mx-auto divide-y divide-gray-200 dark:divide-gray-700">
    <div class="py-8 first:pt-0 last:pb-0">
      <div class="flex gap-x-5">

        <div>
          <h3 class="md:text-lg font-semibold text-gray-800 dark:text-gray-200">
            品名
          </h3>
          <p class="mt-1 text-gray-500">
            {{$article->name}}
          </p>
        </div>
      </div>
    </div>

    <div class="py-8 first:pt-0 last:pb-0">
      <div class="flex gap-x-5">

        <div>
          <h3 class="md:text-lg font-semibold text-gray-800 dark:text-gray-200">
            細目
          </h3>
          <p class="mt-1 text-gray-500">
          {{$article->detail}}
          </p>
        </div>
      </div>
    </div>

    <div class="py-8 first:pt-0 last:pb-0">
      <div class="flex gap-x-5">

        <div>
          <h3 class="md:text-lg font-semibold text-gray-800 dark:text-gray-200">
            分類
          </h3>
          <p class="mt-1 text-gray-500">
          {{$article->category}}
          </p>
        </div>
      </div>
    </div>

    <div class="py-8 first:pt-0 last:pb-0">
      <div class="flex gap-x-5">

        <div>
          <h3 class="md:text-lg font-semibold text-gray-800 dark:text-gray-200">
            場所
          </h3>
          <p class="mt-1 text-gray-500">
          {{$article->place}}
          </p>
        </div>
      </div>
    </div>

    <div class="py-8 first:pt-0 last:pb-0">
      <div class="flex gap-x-5">

        <div>
          <h3 class="md:text-lg font-semibold text-gray-800 dark:text-gray-200">
            管理単位
          </h3>
          <p class="mt-1 text-gray-500">
          {{$article->unit}}
          </p>
        </div>
      </div>
    </div>

    <div class="py-8 first:pt-0 last:pb-0">
      <div class="flex gap-x-5">

        <div>
          <h3 class="md:text-lg font-semibold text-gray-800 dark:text-gray-200">
            発注先
          </h3>
          <p class="mt-1 text-gray-500">
          {{$article->supplier}}
          </p>
        </div>
      </div>
    </div>

    <div class="py-8 first:pt-0 last:pb-0">
      <div class="flex gap-x-5">

        <div>
          <h3 class="md:text-lg font-semibold text-gray-800 dark:text-gray-200">
            備考
          </h3>
          <p class="mt-1 text-gray-500">
          {{$article->remark}}
          </p>
        </div>
      </div>
    </div>

    <div class="py-8 first:pt-0 last:pb-0">
      <div class="flex gap-x-5">

        <div>
          <h3 class="md:text-lg font-semibold text-gray-800 dark:text-gray-200">
            登録日
          </h3>
          <p class="mt-1 text-gray-500">
          {{$article->created_at}}
          </p>
        </div>
      </div>
    </div>


  </div>
</div>
<!-- End FAQ -->

</x-app-layout>