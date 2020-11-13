<nav id="sidebar">
    <div class="shadow-bottom"></div>
    <ul class="list-unstyled menu-categories" id="accordionExample">
        <li class="menu">
            <a href="{{url('/admin')}}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                </div>
            </a>
        </li>

        <li class="menu">
            <a href="#Medicine" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i data-feather="plus-circle"></i>
                    <span>Medicine</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="Medicine" data-parent="#accordionExample">
                <li>
                    <a href="{{ url('/admin/medicine/create') }}"> Add Medicine </a>
                </li>
                <li>
                    <a href="{{ url('/admin/medicine') }}">Medicine List</a>
                </li>
                <li>
                    <a href="{{ url('/admin/category') }}">Medicine Category</a>
                </li>
                <li>
                    <a href="{{ url('/admin/type') }}">Medicine Type</a>
                </li>
                <li>
                    <a href="{{ url('/admin/unit') }}">Unit</a>
                </li>

            </ul>
        </li>

        <li class="menu">
            <a href="{{ url('/admin/manufacture') }}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i data-feather="archive"></i>
                    <span>Manufacture</span>
                </div>
            </a>
        </li>
        <li class="menu">
            <a href="{{ url('/admin/generic') }}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i data-feather="layers"></i>
                    <span>Generic</span>
                </div>
            </a>
        </li>
        <li class="menu">
            <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                <div class="">
                    <i data-feather="shopping-cart"></i>
                    <span>Stock</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="submenu list-unstyled collapse" id="pages" data-parent="#accordionExample" style="">
                <li>
                    <a href="pages_helpdesk.html"> Stock List </a>
                </li>
                <li>
                    <a href="{{ url('admin/stock') }}"> Add Stock</a>
                </li>
               
                <li>
                    <a href="{{ url('/admin/supplier') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span>Supplier</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
   



        <li class="menu">
            <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i data-feather="shopping-bag"></i>
                    <span>Sale</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                <li>
                    <a href=""> Sale List </a>
                </li>
                <li>
                    <a href="{{ url('/admin/sell') }}"> Add Sale  </a>
                </li>
                <li>
                    <a href="/admin/customar"> Customer</a>
                </li>                            
               
            </ul>
        </li>
        

    </ul>
</nav>