<div class="mb-10">
    <div>
        <img src="{{ asset('images/about2.png') }}" class="w-full h-42 md:h-80 object-cover">
    </div>

    <div class="container mx-auto px-2 ">
        <div class="mt-20">
            <div class="side-line text-center text-3xl open-sans text-red-600 ">ABOUT FOUNDER</div>
            <div class="flex flex-wrap mt-10 md:mt-5">
                <div class="w-2/3 md:w-1/3 pt-3 mx-auto ">
                    <figure class="border p-0 mr-0 md:mr-5 rounded-lg overflow-hidden">
                        <img src="{{ asset('images/junaid.jpg') }}" class="w-full" alt="">
                        <figcaption class="p-2 bg-gray-100 text-gray-600 ">Mohamed Junaid – Founder</figcaption>
                    </figure>
                </div>
                <div class="w-full md:w-2/3 pr-0 md:pr-3 text-gray-600 pt-2">
                    {!! $about->about_founder !!}
                </div>
            </div>
        </div>
        <div class="mt-10 md:mt-16">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 px-2 ">
                    <div class="bg-gray-50 p-5 rounded shadow">
                        <div class="side-line text-center text-3xl open-sans text-red-600 ">OUR
                            MISSION</div>
                        <div class="mt-5 text-center text-gray-500">{!! $about->mission !!}</div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2 mt-5 md:mt-0 ">
                    <div class="bg-gray-50 p-5 rounded shadow">
                        <div class="side-line text-center text-3xl open-sans text-red-600 ">OUR
                            VISSION</div>
                        <div class="mt-5 text-center text-gray-500">{!! $about->vission !!}</div>
                    </div>
                </div>
            </div>
            <div class="mt-20">
                <div class="side-line text-center text-3xl open-sans text-red-600 ">OVERVIEW</div>
                <div class="flex flex-wrap">
                    <div class="w-full md:w-2/3 pr-0 md:pr-3 text-gray-600">
                        {!! $about->overview !!}
                    </div>
                    <div class="w-full md:w-1/3">
                        <img src="{{ asset('images/about-overview.png') }}" class="mt-7 rounded-lg" alt="">
                    </div>
                </div>
            </div>

            <div class="mt-20">
                <div class="side-line text-center text-3xl open-sans text-red-600 ">HISTORY</div>
                <div class=" mt-10">
                    <div class="w-full rounded-lg shadow-lg  bg-gray-100 text-gray-600 p-5">
                        {!! $about->history !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>