<div>
    <div class="container mx-auto p-2">
        <div class="mt-10">
            <div class="text-3xl text-center mb-10">
                <img src="{{ asset('images/lucky-draw/logo.png') }}" class="w-56 rounded-lg mx-auto">
            </div>

            @if (session()->has('message'))
            <div class="bg-green-500 text-white p-4 rounded-lg  w-full lg:w-1/3 mx-auto ">
                <span class="text-4xl fas fa-check-circle mr-3 block mb-2"></span>
                <span>{!! session('message') !!}</span>
            </div>
            @else
            @if (Session::has('fb_token'))
            <form wire:submit.prevent="submit">
                <x-luckydraw.card label="step 1" description="LIKE OUR FACEBOOK PAGE">
                    <div class="p-3 flex justify-center py-5">
                        <div class="fb-page" data-href="https://www.facebook.com/ondhigo.mv" data-tabs="" data-width=""
                            data-height="" data-small-header="false" data-adapt-container-width="false"
                            data-hide-cover="false" data-show-facepile="false">
                            <blockquote cite="https://www.facebook.com/ondhigo.mv" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/ondhigo.mv">Ondhigo</a></blockquote>
                        </div>
                    </div>

                </x-luckydraw.card>
                <x-luckydraw.card label="step 2" description="LIKE & SHARE THIS POST">
                    <div class="p-3">
                        <iframe
                            src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fondhigo.mv%2Fposts%2F115366914124418&show_text=true&width=500"
                            width="500" height="699" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true" class="mx-auto w-full"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </x-luckydraw.card>

                <x-luckydraw.card label="step 3" description="Enter your mobile number">
                    <div class="p-3">
                        <div class="flex flex-wrap items-stretch  mb-4 relative w-1/3">
                            <div class="flex -mr-px">
                                <span
                                    class="flex items-center leading-normal bg-grey-lighter rounded  border border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                    <img src="{{ asset('images/flag.png') }}" class="w-10 rounded pr-2">
                                    +960</span>
                            </div>
                            <input type="text"
                                class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded rounded-l-none px-3 relative"
                                placeholder="mobile number" wire:model="mobile_number">
                            @error('mobile_number') <span class="w-full text-red-600 error">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="flex items-center">
                            <img src="{{ $fb_user['avatar'] }}" class="w-14 rounded-full">
                            <div class="px-3">
                                <div class="text-sm text-gray-500">Logged in as</div>
                                <div class="text-gray-700">{{ $fb_user['name'] }}</div>
                            </div>

                        </div>

                    </div>
                </x-luckydraw.card>
                @if (session()->has('duplicate'))
                <div class="bg-red-500 text-white p-2 rounded-lg  w-full lg:w-1/3  flex items-center mb-2">
                    <span class="text-4xl fas fa-exclamation-triangle mr-3  mb-2"></span>
                    <span>{!! session('duplicate') !!}</span>
                </div>
                @endif
                <button class="border rounded-lg px-4 py-3 bg-green-500 text-white">
                    <span class="fas fa-paper-plane"></span>
                    Submit</button>

            </form>
            @else
            <div class="text-center text-gray-700 uppercase font-semibold">
                To continue please login
                <a href="{{ route('fb.login') }}">
                    <img src="{{ asset('images/facebook-login.png') }}" class="w-56 mx-auto">
                </a>
            </div>

            @endif

            @endif
        </div>
    </div>