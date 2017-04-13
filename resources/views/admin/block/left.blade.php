<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {
        }
    </script>
    <ul class="nav nav-list">
        <li class="active">
            <a href="{!! route('admin.dashboard') !!}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
            <b class="arrow"></b>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
								Product
							</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="{!! route('admin.product.list') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Products
                    </a>
                    <a href="{!! route('admin.product.add') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add Product
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Category </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="{!! route('admin.cate.list') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Categories
                    </a>
                    <a href="{!! route('admin.cate.add') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add Category
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Member </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="{!! route('admin.user.list') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Members
                    </a>
                    <a href="{!! route('admin.user.add') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add Members
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa fa-user"></i>
                <span class="menu-text"> Administrator </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="{!! route('admin.user.listadmin') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Admin
                    </a>
                    <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add More
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa fa-cogs"></i>
                <span class="menu-text"> Config </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Header
                    </a>
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Logo
                    </a>
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        font
                    </a>
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        slides
                    </a>
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Advertises
                    </a>
                    <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        footer
                    </a>
                    <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Language
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-envelope-o"></i>
                <span class="menu-text"> Emails </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Admin
                    </a>
                    <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add More
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-shopping-cart "></i>
                <span class="menu-text"> Transaction </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Transacion
                    </a>
                    <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add More
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pie-chart"></i>
                <span class="menu-text"> Statistic</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Transacion
                    </a>
                    <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add More
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-newspaper-o "></i>
                <span class="menu-text"> News</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        News
                    </a>
                    <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add More
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user-plus"></i>
                <span class="menu-text"> Recruitment</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        News
                    </a>
                    <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add More
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-cc-paypal"></i>
                <span class="menu-text"> E-shopping</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Transacion
                    </a>
                    <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Add More
                    </a>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
           data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>