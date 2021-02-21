<!-- need to remove -->
<li class="nav-item">
    <a href="{{route('home')}}" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('product.index')}}" class="nav-link">
        <i class="nav-icon fas fa-link"></i>
        <p>Products</p>
    </a>
</li>
@if(\Illuminate\Support\Facades\Auth::user()->role == 0)
    <li class="nav-item">
        <a href="{{route('admin')}}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>Admin</p>
        </a>
    </li>
@endif

