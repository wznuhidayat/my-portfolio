<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('img/mwh.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ (request()->is('admin'))  ? 'active' : '' }} ">
                    <a href="/admin" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class="sidebar-item  {{ (request()->is('project*'))  ? 'active' : '' }} ">
                    <a href="/project" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>My Project</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('categoryprojects*'))  ? 'active' : '' }}  ">
                    <a href="/categoryprojects" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Category Project</span>
                    </a>
                </li>



            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>