<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif " href="{{ url('admin/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'blog') collapsed @endif" href="{{ url('admin/blog/list') }}">
                <i class="bi bi-file-earmark-ppt"></i><span>All Blog Post</span>
            </a>
        </li>
        <!-- End All Blog Post Nav -->

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'blogadd') collapsed @endif" href="{{ url('admin/blog/add') }}">
                <i class="bi bi-file-earmark-plus"></i><span>Add New Blog</span>
            </a>
        </li>
        <!-- End Add New Blog Nav -->

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'category') collapsed @endif" href="{{ url('admin/category/list') }}">
                <i class="bi bi-bookmark-plus"></i><span>Category</span>
            </a>
        </li>
        <!-- End Category Nav -->

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'user') collapsed @endif" href="{{ url('admin/user/list') }}">
                <i class="bi bi-person-add"></i><span>User </span>
            </a>
        </li>
        <!-- End User Nav -->

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'change-password') collapsed @endif" href="{{ url('admin/change-password') }}">
                <i class="bi bi-key"></i>
                <span>Change Password</span>
            </a>
        </li>
        <!-- End Change Password Nav -->
    </ul>
</aside>
<!-- ====== End Sidebar ======= -->
