
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="position-fixed">
              <ul class="nav flex-column">
                <li class="nav-item">
                <a class="nav-link active" href="{{route('dashboard')}}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('orders.index') }}">
                    <span data-feather="file"></span>
                    Orders
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('products')}}">
                    <span data-feather="shopping-cart"></span>
                    Products
                  </a>
                </li>
              </ul>
            </div>
          </nav>