<div class="col-md-3">
    <div class="list-group">
        <a href="{{ url('admin') }}" class="list-group-item {{ request()->is('admin/posts') ? 'active' : '' }}">Manage Posts</a>
        <a href="{{ url('manage-users') }}" class="list-group-item {{ request()->is('admin/users') ? 'active' : '' }}">Manage Users</a>
        <a href="{{ url('admin.approve') }}" class="list-group-item {{ request()->is('admin/approve') ? 'active' : '' }}">Approve Posts</a>
        <a href="{{ url('admin.delete') }}" class="list-group-item {{ request()->is('admin/delete') ? 'active' : '' }}">Delete Posts</a>
    </div>
</div>