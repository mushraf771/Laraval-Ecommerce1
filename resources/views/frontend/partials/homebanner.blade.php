  @extends('frontend.pages.welcome')
  @section('banner')
      <!-- banner -->
      {{-- <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('assets/images/banner-bg.jpg');">
    <div class="container">
        <h1 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
            best collection for <br> home decoration
        </h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam <br>
            accusantium perspiciatis, sapiente
            magni eos dolorum ex quos dolores odio</p>
        <div class="mt-12">
            <a href="#" class="bg-primary border border-primary text-white px-8 py-3 font-medium
                rounded-md hover:bg-transparent hover:text-primary">Shop Now</a>
        </div>
    </div>
</div>
  <!-- ./banner -->
--}}
      {{-- <div id="animation-carousel" class="relative w-full" data-carousel="static">
      <!-- Carousel wrapper -->
      <div class="relative h-72 overflow-hidden">
          @php
              $a = 'https://m.media-amazon.com/images/I/61TD5JLGhIL._SX3000_.jpg';
              $b = 'https://m.media-amazon.com/images/I/61jovjd+f9L._SX3000_.jpg';
              $c = 'https://m.media-amazon.com/images/I/61DUO0NqyyL._SX3000_.jpg';
              $d = 'https://m.media-amazon.com/images/I/71qid7QFWJL._SX3000_.jpg';
              $e = 'https://m.media-amazon.com/images/I/71tIrZqybrL._SX3000_.jpg';
              $f = 'https://cdn.pixabay.com/photo/2018/03/01/14/48/woman-3190829_960_720.jpg';
              $image = [$a, $b, $c, $d,$e,$f];
          @endphp

              @foreach ($image as $item) {
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                 <a href="" class="cursor-pointer"> <img src="{{ $item }}"
                      class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                      alt="image not found"></a>
              </div>

              }
            @endforeach

      </div>

      <!-- Slider controls -->
      <button type="button"
          class="absolute top-0 left-0 z-30 flex items-center justify-center h-full   px-4 cursor-pointer group focus:outline-none"
          data-carousel-prev>
          <span
              class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button"
          class="absolute top-0  right-0 z-30 flex items-center justify-center h-full  px-4 cursor-pointer group focus:outline-none"
          data-carousel-next>
          <span
              class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
  </div> --}}

      <div id="gallery" class="relative w-ful bottom-auto" data-carousel="slide">
          <!-- Carousel wrapper -->
          <div class="relative h-80  overflow-hidden ">
              <!-- Item 1 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="../assets/images/banner/b1.jpg"
                      class="absolute object-fill w-full block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                      alt="">
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                  <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                      class="absolute w-full block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                      alt="">
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                      class="absolute w-full block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                      alt="">
              </div>
              <!-- Item 4 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                      class="absolute w-full block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                      alt="">
              </div>
              <!-- Item 5 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
                      class="absolute w-full block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                      alt="">
              </div>
          </div>
          <!-- Slider controls -->
          <button type="button"
              class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
              data-carousel-prev>
              <span
                  class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                      viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                  </svg>
                  <span class="sr-only">Previous</span>
              </span>
          </button>
          <button type="button"
              class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
              data-carousel-next>
              <span
                  class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                      viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>
      </div>
  @endsection
