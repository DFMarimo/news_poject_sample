{{-- Navbar --}}
<nav class="navbar">
    <section class="container">
        <nav class="info-bar">
            <a href="#" class="title">
                <h1>خبرنامه</h1>
                <span class="description">رسانه ای برای همه..</span>
            </a>

            <div class="control">
                <a href="#" class="svg">
                    <i class="fa-duotone fa-magnifying-glass">رسانه ای برای همه</i>
                </a>
                @auth()
                    <a href="#" class="avatar">
                        <img src="#" alt="@">
                    </a>

                    <a href="#" class="svg">
                        <i class="fa-duotone fa-bell"></i>
                    </a>
                @else
                    <a href="#" class="btn-outline-dark-2">
                        <span>ورود</span>
                        <i class="fa-duotone fa-right-to-bracket"></i>
                    </a>
                @endauth
            </div>
        </nav>
    </section>

    {{-- Menu --}}
    <section>
        <section class="container">
            <ul class="menu">
                <li>
                    <a href="#" class="menu-item">صفحه اصلی</a>
                </li>
                <li>
                    <a href="#" class="menu-item">دسته 1</a>
                </li>
                <li>
                    <a href="#" class="menu-item">دسته 2</a>
                </li>
                <li>
                    <a href="#" class="menu-item">دسته 3</a>
                </li>
                <li>
                    <a href="#" class="menu-item">دسته 4</a>
                </li>
            </ul>
        </section>
    </section>
</nav>
