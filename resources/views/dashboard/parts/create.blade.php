@extends ("layouts.dashboard")

@section ('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Create parts Page </h1>
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

            <form method="POST" action="{{route('parts.store')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="orderNumber">Drawing Number</label>
                        <input type="text" class="form-control {{$errors->has('drawingNumber') ? 'is-invalid' : ''}}" name="drawingNumber" >
                    </div>

                    <div class="form-group">
                        <label for="material">Material</label>
                        <input type="text" class="form-control {{$errors->has('material') ? 'is-invalid' : ''}}" name="material" >
                    </div>
                    
                    <div class="form-group">
                        <label for="programNumber">Program Number</label>
                        <input type="text" class="form-control {{$errors->has('programNumber') ? 'is-invalid' : ''}}" name="programNumber" >
                    </div>

                    <div class="form-group">
                        <label for="cycleTime">Cycle Time</label>
                        <input type="text" class="form-control {{$errors->has('cycleTime') ? 'is-invalid' : ''}}" name="cycleTime" >
                    </div>

                    <button class="btn btn-primary "type="submit"> Create</button>

                      </form>

        </div>
    </div>


@endsection