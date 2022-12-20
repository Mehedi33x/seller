<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('user') }}">
                <i class="bi bi-person-fill""></i>
                <span>User</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('category.list') }}">
                <i class="bi bi-stack-overflow"></i>
                <span>Product Category</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('product') }}">
                <i class="bi bi-basket-fill"></i>
                <span>Product</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('customer') }}">
                <i class="bi bi-people-fill"></i>
                <span>Customers List</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('order') }}">
                <i class="bi bi-stack"></i>
                <span>Orders</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="cart">
                <i class="bi bi-cart-check-fill"></i>
                <span>Carts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('transaction') }}">
                <i class="bi bi-currency-dollar"></i>
                <span>Transactions</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-person-lines-fill"></i>
                <span>Sellers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li>

    </ul>

</aside>
