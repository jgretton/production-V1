@extends ("layouts.dashboard")

@section ('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Create Orders Page </h1>
        </div>
        
    </div>


    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{route('orders.store')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="partNumber">Part Number</label>
                        <input type="text" class="form-control" name="partNumber>
                    </div>

                    <div class="form-group">
                        <label for="orderNumber">Order Number</label>
                        <input type="text" class="form-control" name="orderNumber">
                    </div>

                    <div class="form-group">
                        <label for="material">Material</label>
                        <input type="text" class="form-control" name="material">
                    </div>
                    
                    <div class="form-group">
                        <label for="programNumber">Program Number</label>
                        <input type="text" class="form-control" name="programNumber">
                    </div>

                    <div class="form-group">
                        <label for="cycleTime">Cycle Time</label>
                        <input type="text" class="form-control" name="cycleTime">
                    </div>

                    <button class="btn btn-primary "type="submit"> Create</button>

                      </form>
        </div>
    </div>


@endsection