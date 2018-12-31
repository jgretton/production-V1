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
                                <th scope="col">Single Cycle</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Cycle Time</th>
                                <th scope="col">Machine</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->partNumber}}</td>
                                    <td>{{$order->orderNumber}}</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{$order->cycleTime}}">
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">Seconds</span>
                                            </div>
                                          </div>
                                    </td>
                                    <td> <input type="text" class="form-control" id="textbox_id"></td>
                                    <td>Seconds</td>
                                    <td> 
                                        <select class="form-control" name="machine" id="" placeholder=" ">
                                          <option label=""> </option>
                                            <option value="32-1">32-1</option>
                                            <option value="32-2">32-2</option>
                                            <option value="20">20</option>
                                            <option value="16">16</option>
                                        </select>
                                    </td>
                                </tr>
                              @endforeach
        
                            </tbody>
                          </table>

              </div>
          </div>
@endsection]


<script>

const cycle = document.getElementById('textbox_id').value;

console.log(cycle);

</script>