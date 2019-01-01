@extends ("layouts.dashboard")

@section ('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Parts Page</h1>
        </div>
        
        <div class="col-md-4">
                <a href="{{route('parts.create')}}"><button class="btn btn-primary btn-lg">Add new part</button></a>
        </div>
    </div>

    
    <div class="row mt-5">
        <div class="col-lg-12">
            <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Drawing Number</th>
                        <th scope="col">Material</th>
                        <th scope="col">Program Number</th>
                        <th scope="col">Cycle Time</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($part as $part)
                        <tr>
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


                  {{-- <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item">
                                {{$part->links()}}
                          </li>
                        </ul>
                      </nav> --}}
            </div>
    </div>

@endsection
