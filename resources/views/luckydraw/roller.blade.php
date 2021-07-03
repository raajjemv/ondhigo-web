<!DOCTYPE html>
<html>

<head>
     <title>Ondhigo Lucky Draw</title>
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
     <style type="text/css">
          html {
               background: url('https://onlyvectorbackgrounds.com/wp-content/uploads/2018/09/Abstract-Ambient-Light-Background-Day-Blue.jpg') no-repeat center center fixed;
               -webkit-background-size: cover;
               -moz-background-size: cover;
               -o-background-size: cover;
               background-size: cover;
          }

          .container {
               text-align: center;
          }

          .alphaText-w-logo {
               width: 500px;
          }

          .number-roll {
               position: relative;
          }

          .number-roll-bg img {
               width: 700px;
          }

          .number-roll>h1 {
               font-size: 8em;
               margin-top: 0;
               margin-bottom: 0;
               font-family: "Times New Roman", Times, serif;
               color: white;
               position: absolute;
               top: 21px;
               width: 100%;
          }

          .buttons img {
               width: 200px
          }
     </style>
</head>

<body>
     <div id="app" class="relative">
          <div class="container mx-auto h-screen flex items-center justify-center">
               <lottie-player v-if="animation" class="absolute left-0"
                    src="https://assets6.lottiefiles.com/packages/lf20_5hufvwkz.json" background="transparent" speed="1"
                    style="width: 500px; height: 400px;" loop autoplay></lottie-player>

               <div>
                    <div class="text-center mb-10">
                         <img src="{{ asset('images/lucky-draw/logo.png') }}" class="w-72 rounded-lg mx-auto">
                    </div>
                    <div class="my-10">
                         <div class="text-9xl">
                              @{{ number }}
                         </div>

                    </div>
                    <div class="buttons ">
                         <button v-if="!start" class="text-6xl rounded-3xl bg-red-600 text-white px-10 py-4"
                              @click="goFetch">Start</button>
                         <button v-else class="text-6xl rounded-3xl bg-red-600 text-white px-10 py-4"
                              @click="start=false;animation=true">Stop</button>
                    </div>
                    <div class="w-full mt-10">
                         <img src="{{ asset('images/logo.png') }}" class="mx-auto w-48">
                    </div>
               </div>
               <lottie-player v-if="animation" class="absolute right-0"
                    src="https://assets6.lottiefiles.com/packages/lf20_5hufvwkz.json" background="transparent" speed="1"
                    style="width: 500px; height: 400px;" loop autoplay></lottie-player>
          </div>



     </div>

     <script src="https://cdn.jsdelivr.net/npm/vue"></script>
     <script>
          var app = new Vue({
            el: '#app',
            data:{
                number: '0000000',
                numbers:@json($numbers),
                start: false,
                animation: false
            },
            methods:{
                goFetch(){
                    this.start = true
                    window.setInterval(function(){
                        if (!this.start) {
                            return;
                        }
                        for (var i = 0; i < this.numbers.length; i++) {
                            let numb = Math.floor(Math.random() * this.numbers.length);
                            this.number = this.numbers[numb]
                        }
                    }.bind(this),50)
                }
            }
        });
     </script>
     <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>