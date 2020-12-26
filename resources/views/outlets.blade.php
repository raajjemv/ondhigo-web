@extends('layouts.main')
@section('content')
<div class="container mx-auto my-10 py-10">
     <div class="text-3xl text-red-600 open-sans">Head Office</div>
     <div class="flex border rounded shadow-lg">
          <div id='map' class="w-1/2" style='height: 350px;'></div>
          <div class="flex items-center">
               <div class="px-3 text-gray-600">
                    Ondhigo Pvt. Ltd<br>
                    M.Reef villa, Block 266, Muiveyo Magu,<br>
                    20-266, Male’,<br>
                    Maldives.
               </div>
          </div>
     </div>
     <br>
     <div class="text-3xl text-red-600 open-sans">Whole Sale Office</div>
     <div class="mt-3 mb-10 flex border rounded shadow-lg">
          <div id='map_two' class="w-1/2" style='height: 350px;'></div>
          <div class="flex items-center">
               <div class="px-3 text-gray-600">
                    LH. Fihaara<br> Boduthakurufaanu Magu<br> Male’ 20-022<br>Maldives.
               </div>
          </div>
     </div>
</div>
@endsection
@push('scripts')
<script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
<script>
     mapboxgl.accessToken = 'pk.eyJ1IjoiaW1zYW1hYWgiLCJhIjoiY2szNzJ4YnlrMDg4NTNucGE2c2VkdXM2NiJ9.SM3d1tEad1H5punc-Fy7KQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [73.51172775049508, 4.174192610225191],
            zoom: 15
        });
        var map = new mapboxgl.Map({
               container: 'map_two',
               style: 'mapbox://styles/mapbox/streets-v11',
               center: [73.51172775049508, 4.174192610225191],
               zoom: 15
               });
        var size = 200;
map.scrollZoom.disable();
        // implementation of CustomLayerInterface to draw a pulsing dot icon on the map
        // see https://docs.mapbox.com/mapbox-gl-js/api/#customlayerinterface for more info
        var pulsingDot = {
            width: size,
            height: size,
            data: new Uint8Array(size * size * 4),

            // get rendering context for the map canvas when layer is added to the map
            onAdd: function() {
                var canvas = document.createElement('canvas');
                canvas.width = this.width;
                canvas.height = this.height;
                this.context = canvas.getContext('2d');
            },

            // called once before every frame where the icon will be used
            render: function() {
                var duration = 1000;
                var t = (performance.now() % duration) / duration;

                var radius = size / 2 * 0.3;
                var outerRadius = size / 2 * 0.7 * t + radius;
                var context = this.context;

                // draw outer circle
                context.clearRect(0, 0, this.width, this.height);
                context.beginPath();
                context.arc(this.width / 2, this.height / 2, outerRadius, 0, Math.PI * 2);
                context.fillStyle = 'rgba(255, 200, 200,' + (1 - t) + ')';
                context.fill();

                // draw inner circle
                context.beginPath();
                context.arc(this.width / 2, this.height / 2, radius, 0, Math.PI * 2);
                context.fillStyle = 'rgba(255, 100, 100, 1)';
                context.strokeStyle = 'white';
                context.lineWidth = 2 + 4 * (1 - t);
                context.fill();
                context.stroke();

                // update this image's data with data from the canvas
                this.data = context.getImageData(0, 0, this.width, this.height).data;

                // continuously repaint the map, resulting in the smooth animation of the dot
                map.triggerRepaint();

                // return `true` to let the map know that the image was updated
                return true;
            }
        };

        map.on('load', function() {

            map.addImage('pulsing-dot', pulsingDot, {
                pixelRatio: 2
            });

            map.addLayer({
                "id": "points",
                "type": "symbol",
                "source": {
                    "type": "geojson",
                    "data": {
                        "type": "FeatureCollection",
                        "features": [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [73.51172775049508, 4.174192610225191]
                            }
                        }]
                    }
                },
                "layout": {
                    "icon-image": "pulsing-dot"
                }
            });
        });
</script>
@endpush