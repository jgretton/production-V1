@extends ("layouts.dashboard")

@section ('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Create Orders Page </h1>
        </div>
        
    </div>


    <div class="row">
        <div class="col-lg-12">

            {{-- If there are errors, display --}}
            @if ($errors -> any())
                
                <div class="alert alert-danger alert-dismissible show fade" role="alert">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    <hr>
                @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            @endif

            <form method="POST" action="{{route('orders.store')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="partNumber">Part Number</label>
                        <input type="text" class="form-control {{$errors->has('partNumber') ? 'is-invalid' : ''}}" name="partNumber"  value="{{old('partNumber')}}">
                    </div>

                    <div class="form-group">
                        <label for="orderNumber">Order Number</label>
                        <input type="text" class="form-control {{$errors->has('orderNumber') ? 'is-invalid' : ''}}" name="orderNumber" value="{{old('orderNumber')}}">
                    </div>

                    <div class="form-group">
                        <label for="material">Material</label>
                        <input type="text" class="form-control {{$errors->has('material') ? 'is-invalid' : ''}}" name="material" value="{{old('material')}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="programNumber">Program Number</label>
                        <input type="text" class="form-control {{$errors->has('programNumber') ? 'is-invalid' : ''}}" name="programNumber" value="{{old('programNumber')}}">
                    </div>

                    <div class="form-group">
                        <label for="cycleTime">Cycle Time</label>
                        <input type="text" class="form-control {{$errors->has('cycleTime') ? 'is-invalid' : ''}}" name="cycleTime" value="{{old('cycleTime')}}">
                    </div>

                    <button class="btn btn-primary "type="submit"> Create</button>

                      </form>

        </div>
    </div>


@endsection