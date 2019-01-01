@extends ("layouts.dashboard")

@section ('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Edit Parts List </h1>
        </div>
        
    </div>

    <a href="/dashboard/parts"> << Back</a>
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

    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="/dashboard/parts/{{$part->id}}">

                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="programNumber">Drawing Number</label>
                        <input type="text" class="form-control" name="drawingNumber" value="{{ $part->drawingNumber}}" required>
                    </div>

                    <div class="form-group">
                        <label for="material">Material</label>
                        <input type="text" class="form-control" name="material" value="{{ $part->material}}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="programNumber">Program Number</label>
                        <input type="text" class="form-control" name="programNumber" value="{{ $part->programNumber}}" required>
                    </div>

                    <div class="form-group">
                        <label for="cycleTime">Cycle Time</label>
                        <input type="text" class="form-control" name="cycleTime" value="{{ $part->cycleTime}}" required>
                    </div>

                    <button class="btn btn-primary "type="submit"> Update</button>

                      </form>
        </div>
    </div>



@endsection