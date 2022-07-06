@extends('layout.header')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Daftar Buku.</h1>
        <!-- <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Buku dapat membantu kamu untuk mendapatkan pengetahuan yang bermanfaat dalam kehidupan.</p> -->
    </div>
</section>
<section>

<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 text-center">Masa Muda</h2>

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
        <video width="320" height="240" controls>
  <source src="{{ asset('video/1.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <!-- <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a> -->
            </h3>
            <!-- <p class="mt-1 text-sm text-gray-500">Black</p> -->
          </div>
          <p class="text-sm font-medium text-gray-900">Rp. 50.000</p>
        </div>
      </div>

      <!-- More products... -->
    </div>
  </div>


  
</div>
</section>



@endsection