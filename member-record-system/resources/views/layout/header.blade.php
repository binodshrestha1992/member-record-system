<!-- Main Container -->
        <!-- Navigation Menu -->
        
        <header id="header">
            <nav class="nav" id="nav">
                <a href="" class="logo">Member Record System</a>
                <div id="hamBurger" class="toggle-bar" onclick="onClickHamBurger()">
                    <i class="fa fa-bars"></i>
                </div>
                <div class='nav-lists' id="navlist">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="/user/list" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="/event/list" class="nav-link">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="#" class="nav-link"></a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="/logout">
                                @csrf
                               <button class="logout" type="submit">Logout</button>
                            </form>
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </header>