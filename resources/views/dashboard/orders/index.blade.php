@extends ("layouts.dashboard")

@section ('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Orders Page</h1>
        </div>
        
        <div class="col-md-4">
                <a href="{{route('orders.create')}}"><button class="btn btn-primary btn-lg">Create Data</button></a>
        </div>
    </div>

    
    <div class="row mt-5">
        <div class="col-lg-12">
            <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Part Number</th>
                        <th scope="col">Order Number</th>
                        <th scope="col">Material</th>
                        <th scope="col">Program Number</th>
                        <th scope="col">Cycle Time</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <th>{{$order->id}}</th>
                            <td>{{$order->partNumber}}</td>
                            <td>{{$order->orderNumber}}</td>
                            <td>{{$order->material}}</td>
                            <td>{{$order->programNumber}}</td>
                            <td>{{$order->cycleTime}} Seconds</td>
                            <td>
                                <a href="{{route('orders.edit', $order->id)}}"><button class="btn btn-secondary"> Edit</button></a>
                                <form method="POST" action="/dashboard/orders/{{$order->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger"> Delete</button>
                                </form>
                            </td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>


                  <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item">
                                {{$orders->links()}}
                          </li>
                        </ul>
                      </nav>
            </div>
    </div>


@endsection