<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav rtl" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#profile" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-fill mx-2"></i><span>{{ auth()->user()->name }}</span><i
                    class="bi bi-chevron-down flex-grow-1"></i>
            </a>
            <ul id="profile" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('user.show', auth()->user()->id) }}">
                        <i class="bi bi-circle mx-3"></i><span>حسابي الشخصي</span>
                    </a>
                    <a href="{{ route('logout') }}">
                        <i class="bi bi-circle mx-3"></i><span>تسجيل الخروج</span>
                    </a>
                </li>
            </ul>
        </li>
        <hr>
        @if (auth()->user()->role == 'مسؤول نظام' || auth()->user()->role == 'super_admin')
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user*') ? '' : 'collapsed' }}" data-bs-target="#users" data-bs-toggle="{{ request()->is('user*') ? '' : 'collapse' }}" href="#">
                    <i class="bi bi-menu-button-wide mx-2"></i><span>المستخدمين</span><i
                        class="bi bi-chevron-down flex-grow-1"></i>
                </a>
                <ul id="users" class="nav-content {{ request()->is('user*') ? '' : 'collapse' }}" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('user.index') }}" class="{{ request()->is('user*') ? 'active' : '' }}">
                            <i class="bi bi-circle mx-3"></i><span>قائمة المستخدمين</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link {{ request()->is('book*') ? '' : 'collapsed' }}" data-bs-target="#books" data-bs-toggle="{{ request()->is('book*') ? '' : 'collapse' }}" href="#">
                <i class="bi bi-menu-button-wide mx-2"></i><span>الكتب</span><i
                    class="bi bi-chevron-down flex-grow-1"></i>
            </a>
            <ul id="books" class="nav-content {{ request()->is('book*') ? '' : 'collapse' }} " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('book.index') }}" class="{{ request()->is('book*') ? 'active' : '' }}">
                        <i class="bi bi-circle mx-3"></i><span>قائمة الكتب</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('scintific-journals*') ? '' : 'collapsed' }}" data-bs-target="#scintific-journals" data-bs-toggle="{{ request()->is('scintific-journals*') ? '' : 'collapse' }}" href="#">
                <i class="bi bi-menu-button-wide mx-2"></i><span>المجلات العلمية</span><i
                    class="bi bi-chevron-down flex-grow-1"></i>
            </a>
            <ul id="scintific-journals" class="nav-content {{ request()->is('scintific-journals*') ? '' : 'collapse' }} " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('scintific-journals.index') }}" class="{{ request()->is('scintific-journals*') ? 'active' : '' }}">
                        <i class="bi bi-circle mx-3"></i><span>قائمة المجلات</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
