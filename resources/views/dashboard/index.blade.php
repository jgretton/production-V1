@extends ("layouts.dashboard")

@section ('content')
    <h1>This is the home page for dashboard</h1>

    {{-- Search --}}
    <div class="card">
            <div class="card-body">
                <form >
                        <div class="form-group">
                                <label for="exampleInputEmail1">Choose Order</label>
                                <input type="text" class="form-control">
                              </div>
                </form>
            </div>
          </div>


          {{-- Table --}}

          <div class="card">
              <div class="card-body">

                    <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Part Number</th>
                                <th scope="col">Order Number</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Cycle Time</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->partNumber}}</td>
                                    <td>{{$order->orderNumber}}</td>
                                    <td> <input type="text" class="form-control"></td>
                                    <td>Seconds</td>
                                </tr>
                              @endforeach
        
                            </tbody>
                          </table>

              </div>
          </div>
@endsection