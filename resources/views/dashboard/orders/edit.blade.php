@extends ("layouts.dashboard")

@section ('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Edit Orders </h1>
        </div>
        
    </div>


    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="/dashboard/orders/{{$order->id}}">

                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="partNumber">Part Number</label>
                        <input type="text" class="form-control" name="partNumber" value="{{ $order->partNumber}}">
                    </div>

                    <div class="form-group">
                        <label for="orderNumber">Order Number</label>
                        <input type="text" class="form-control" name="orderNumber" value="{{ $order->orderNumber}}">
                    </div>

                    <div class="form-group">
                        <label for="material">Material</label>
                        <input type="text" class="form-control" name="material" value="{{ $order->material}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="programNumber">Program Number</label>
                        <input type="text" class="form-control" name="programNumber" value="{{ $order->programNumber}}">
                    </div>

                    <div class="form-group">
                        <label for="cycleTime">Cycle Time</label>
                        <input type="text" class="form-control" name="cycleTime" value="{{ $order->cycleTime}}">
                    </div>

                    <button class="btn btn-primary "type="submit"> Update</button>

                      </form>
        </div>
    </div>



@endsection