 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ \Request::route()->getName() !== 'dashboard' ? 'collapsed' : ''}}" href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ in_array( \Request()->route()->getName(), array('list_users')) ? '' : 'collapsed' }}" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-square"></i><span>Người dùng</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav1" class="nav-content collapse {{\Request::route()->getName() == 'list_users' ? 'show' : '' }} {{\Request::route()->getName() == 'list_users' ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin/users" class="{{ \Request::route()->getName() == 'list_users' ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Danh sách người dùng</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ in_array( \Request()->route()->getPrefix(), array('admin/blog', 'admin/categories')) ? '' : 'collapsed' }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Bài viết</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse {{\Request::route()->getPrefix() == 'admin/categories' ? 'show' : '' }} {{\Request::route()->getPrefix() == 'admin/blog' ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin/blog" class="{{ \Request::route()->getName() == 'list_blog' ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Danh sách bài viết</span>
            </a>
          </li>
          <li>
            <a class="{{ \Request::route()->getName() == 'categories' ? 'active' : ''}}" href="/admin/categories">
              <i class="bi bi-circle"></i><span>Danh mục</span>
            </a>
          </li>
          <li>
            <a class="{{ \Request::route()->getName() == 'outstanding' ? 'active' : ''}}" href="/admin/blog/outstanding">
              <i class="bi bi-circle"></i><span>Bài viết nổi bật</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ in_array( \Request()->route()->getName(), array('contact')) ? '' : 'collapsed' }}" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-text"></i><span>Liên hệ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav2" class="nav-content collapse {{\Request::route()->getName() == 'contact' ? 'show' : '' }} {{\Request::route()->getName() == 'contact' ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin/contact" class="{{ \Request::route()->getName() == 'contact' ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Danh sách liên hệ</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>

  </aside><!-- End Sidebar-->
