@extends('layouts.master')
@section('content')
<section class="section">
          <h1 class="section-header">
            <div>Simple Maps</div>
          </h1>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Simple Maps</h4>
                  </div>
                  <div class="card-body">
                    <div class="alert alert-light">
                      Here is a simple example using the map, we use the plugin <code>gmaps.js</code> made by <a href="https://github.com/hpneo" target="_blank">@hpneo</a>. You can learn more about this plugin <a href="https://github.com/hpneo/gmaps" target="_blank">here</a>.
                    </div>
                    <div id="simple-map" style="height:400px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        // init map
    var simple_map = new GMaps({
      div: '#simple-map',
      lat: -6.5637928,
      lng: 106.7535061
    })
@endsection