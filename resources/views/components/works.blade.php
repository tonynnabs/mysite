<div class="flex flex-col lg:flex-row border-2 border-black shadow my-12">
    <div class="w-full lg:w-1/2 relative flex">
        <div class="max-w-full splide">
            <div class="splide__arrows">
                <button class="w-12 h-12  hover:text-white transition-all duration-300 ease-in-out bg-white rounded-full shadow splide__arrow splide__arrow--prev ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                      </svg>
                </button>
                <button class="w-12 h-12  hover:text-white transition-all duration-300 ease-in-out bg-white rounded-full shadow splide__arrow splide__arrow--next">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <div class="h-full splide__track">
                <ul class="splide__list h-full">
                    {{$galley_list}}
                </ul>
            </div>
        </div>

    </div>
    <div class="w-full lg:w-1/2 flex flex-col p-10 justify-between">
        <div class="flex flex-col space-y-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                  </svg>
                  <a href="{{$attributes->get('link')}}">{{$link_title}}</a>

            </div>
            <h3 class="text-xl lg:text-3xl font-bold">{{$title}}</h3>
            <p>{{$description}}</p>
        </div>
        <div class="mt-5 lg:mt-10">
            <h4 class="font-bold text-sm">STACK USED</h4>
            <div class="flex items-center mt-3 space-x-3 flex-wrap">
                {{$stack}}
            </div>
        </div>
    </div>


</div>
