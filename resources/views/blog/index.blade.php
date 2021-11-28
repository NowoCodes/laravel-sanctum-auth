<x-app-layout>
  <section class="text-gray-400 bg-gray-900 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="-my-8 divide-y-2 divide-gray-800">
        @foreach($blogs as $blog)
          <div class="py-8 flex flex-wrap md:flex-nowrap">
            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
              <span class="font-semibold title-font text-white">CATEGORY</span>
              <span class="mt-1 text-gray-500 text-sm">{{ $blog?->created_at->format( 'd M, Y')}}</span>
            </div>
            <div class="md:flex-grow">
              <h2 class="text-2xl font-medium text-white title-font mb-2">{{ $blog->title }}</h2>
              <p class="leading-relaxed">{{ Str::limit($blog->description, 150) }}.</p>
              <a href="{{ route('blog.show-full-blog-post', [$blog]) }}" target="_blank" class="text-indigo-400 inline-flex items-center mt-4">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</x-app-layout>