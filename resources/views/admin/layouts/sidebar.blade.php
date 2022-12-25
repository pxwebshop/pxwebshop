 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ \Request::route()->getName() !== 'dashboard' ? 'collapsed' : ''}}" href="#">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{\Request()->route()->getPrefix() == '/admin' ? 'collapsed' : '' }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
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
        </ul>
      </li><!-- End Components Nav -->
    </ul>

  </aside><!-- End Sidebar-->
