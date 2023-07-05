<?php
$user = auth()->user(); // Retrieve the logged-in user

if ($user) {
    // Access user properties
    $userId = $user->id;
    $name = $user->name;
    $email = $user->email;
    $role=$user->role;

    // Perform actions with user data
    // ...
}
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">House Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                @if(Auth::check())
                <a href="" class="d-block"><strong> {{ $user->name }} <br> ( {{ $user->role }})</strong> </a>
    
  
@endif
               
         
             
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            {{-- user --}}

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-user'></i>
                        <p>
                       Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('user.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User status</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>
                {{-- Tenant --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-home'></i>
                      
                        <p>
                            Tenants
                            <i class="fas fa-angle-left right"></i>
                       
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('tenant.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tenant Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tenant.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tenants Status</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- flats --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-building'></i>
                      
                        <p>
                           Flats
                            <i class="fas fa-angle-left right"></i>
                       
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('flat.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flat Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('flat.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flat Status</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-building'></i>
                      
                        <p>
                           FlatAssign
                            <i class="fas fa-angle-left right"></i>
                       
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('fagn.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FlatAssign Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('fagn.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FlatAssign  Status</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                       
                        <i class="far fa-credit-card"></i>
                      
                        <p>
                           Payment
                            <i class="fas fa-angle-left right"></i>
                       
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('payment.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('payment.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment status</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-money-bill-wave-alt'></i>
                      
                        <p>
                           Bills
                            <i class="fas fa-angle-left right"></i>
                       
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('bill.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bill Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('bill.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bill Status</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-tools'></i>
                      
                        <p>
                            Maintenances
                            <i class="fas fa-angle-left right"></i>
                       
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('maintenance.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Maintenance Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('maintenance.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Maintenance Status</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-calculator'></i>
                      
                        <p>
                           Expenses
                            <i class="fas fa-angle-left right"></i>
                       
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('expense.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Expense management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('expense.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Expense status</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-envelope"></i>
                        <p>
                      Message 
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('ct.show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Message</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{route('sub.show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subscriber Msg</p>
                            </a>
                        </li> --}}
                       
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-calculator'></i>
                      
                        <p>
                          Reports
                            <i class="fas fa-angle-left right"></i>
                       
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('frep.filter') }}" class="nav-link">
                            
                                <i class="far fa-circle nav-icon"></i>
                                <p>FlatAssign Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('main.filter') }}" class="nav-link">
                            {{-- <a href="{{ route('flatreport.filter') }}" class="nav-link"> --}}
                                <i class="far fa-circle nav-icon"></i>
                                <p>Maintenance Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pay.filter') }}" class="nav-link">
                            {{-- <a href="{{ route('flatreport.filter') }}" class="nav-link"> --}}
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('expense.filter') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Expense Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('flat.filter') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flats Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ten.filter') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tenants Report</p>
                            </a>
                        </li>
                        

                    </ul>
                </li>
                
            
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-key"></i>
                        <p>
                            Authentication
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('profile') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logout</p>
                            </a>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                     
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
