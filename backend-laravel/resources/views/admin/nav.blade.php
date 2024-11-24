<div class="container-fluid bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">Admin Dashboard</div>
  <div class="list-group list-group-flush">
    <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action bg-light">Thống Kê</a>
    <a href="{{ route('admin.loaisp') }}" class="list-group-item list-group-item-action bg-light">Quản Lý Loại</a>
    <a href="{{ route('admin.sp') }}" class="list-group-item list-group-item-action bg-light">Quản Lý Sản Phẩm</a> <a href="{{ route('admin.user') }}" class="list-group-item list-group-item-action bg-light">Quản Lý User</a>
  </div>
</div>