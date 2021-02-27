<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src=" {{ asset('assets/backend/img/profile_small.jpg')}} " />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">
                        <span class="block m-t-xs font-bold"></span>
                        <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="">Profile</a></li>

                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href=""
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                            </a>
                            <form id="logout-form" action="" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="{{ url('dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span>   
            </li>
            <li>
                <a href="{{ url('/admin/category') }}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Category</span> 
            </li>
            <li>
                <a href="{{ url('/admin/parent-category') }}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Parent Category</span> 
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Product</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="create_product.php">Product create</a></li>
                    <li><a href="product_list.php">Product list</a></li>
                    <li><a href="create_category.php">Category create</a></li>
                    <li><a href="category_list.php">Category list</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Products/items </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#" id="damian">All create<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="create_product.php">Product create</a></li>
                            <li><a href="create_category.php">Category</a></li>
                            <li><a href="#">Specification</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Packets</a></li>
                            <li><a href="#">Product type</a></li>
                            <li><a href="#">Attributes</a></li>
                            <li><a href="#">Suppliar</a></li>
                            <li><a href="#">Gift wrapper</a></li>
                            <li><a href="#">Competitor</a></li>
                            <li><a href="#">Size chart</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" id="damian">Product<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="create_product.php">Product create</a></li>
                            <li><a href="product_list.php">Product list</a></li>
                            <li><a href="create_category.php">Category create</a></li>
                            <li><a href="category_list.php">Category list</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" id="damian">Discount<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">Discount list</a></li>
                            <li><a href="#">Discount type</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Product gallery</a>

                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Inventory</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#" id="damian">Store<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">StockIn/Purchase</a></li>
                            <li><a href="#">Transfer</a></li>
                            <li><a href="#">Godwon/Display</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" id="damian">Requisition</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Accounts</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Group</a></li>
                    <li><a href="#">Ledger</a></li>
                    <li><a href="#">Day Book</a></li>
                    <li><a href="#">Income Statement</a></li>
                    <li><a href="#">Payment Voucher</a></li>
                    <li><a href="#">Receipt Voucher</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Customer</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Physical Customer</a></li>
                    <li><a href="#">Customer list</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Settings</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Global Vat</a></li>
                    <li><a href="#">Bank And EMI</a></li>
                    <li><a href="#">KPI Setup</a></li>
                    <li><a href="#">Shippment Policy</a></li>
                    <li><a href="#">User management</a></li>
                    <li><a href="#">Company Information</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Developer</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">SMS Settings</a></li>
                    <li><a href="#">Email Settings</a></li>
                    <li><a href="#">Email Template</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
