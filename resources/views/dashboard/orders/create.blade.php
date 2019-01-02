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
                        <label for="orderNumber">Order Number</label>
                        <input type="text" class="form-control {{$errors->has('orderNumber') ? 'is-invalid' : ''}}" name="orderNumber" value="{{old('orderNumber')}}">
                    </div>



                    <div class="card">
                            <div class="card-body">
                                <form >
                                        <div class="form-group">
                                                <label for="exampleInputEmail1">Choose Parts</label></br>
                                                <label for="exampleInputEmail1">Search by Drawing Number</label>
                                                <input type="text" class="form-control">
                                              </div>
                                </form>
                            </div>
                          </div>

                    <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Selected</th>
                                <th scope="col">Drawing Number</th>
                                <th scope="col">Material</th>
                                <th scope="col">Program Number</th>
                                <th scope="col">Cycle Time</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($part as $part)
                                <tr>
                                    <td><input type="checkbox" name="selected"></td>
                                    <td>{{$part->drawingNumber}}</td>
                                    <td>{{$part->material}}</td>
                                    <td>{{$part->programNumber}}</td>
                                    <td>{{$part->cycleTime}} Seconds</td>
                                    <td><a href="{{route('parts.edit', $part->id)}}"><button class="btn btn-primary">Edit</button></a> </td>
                                    <td>
                                        <form method="POST" action="/dashboard/parts/{{$part->id}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger"> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                              @endforeach
        
                            </tbody>
                        </table>






                    <button class="btn btn-primary "type="submit"> Create</button>

                      </form>

        </div>
    </div>


@endsection