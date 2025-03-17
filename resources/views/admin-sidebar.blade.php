<div class="col-lg-3 mb-3">
    <div class="list-group">
        <a href="{{ url('admin') }}" class="list-group-item {{ request()->is('admin/posts') ? 'active' : '' }}">Manage Posts</a>
        <a href="{{ url('manage-users') }}" class="list-group-item {{ request()->is('admin/users') ? 'active' : '' }}">Manage Users</a>
    </div>
</div>