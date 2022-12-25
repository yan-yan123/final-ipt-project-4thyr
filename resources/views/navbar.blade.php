<nav class="navbar navbar-expand shadow bg-secondary text-white">

    <h2 class="p-2 text-dark" style="font-size:23px; font-weight:400;">Final Project in IPT</h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse text-white navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-end justify-content-end">
            <li class="nav-item">
                <a class="nav-link text-dark {{ 'dashboard' == request()->path() ? 'active' : '' }}"
                    href="{{ '/dashboard' }}"><i class="fa-thin fa-gauge"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ 'recent-post' == request()->path() ? 'active' : '' }}"
                    href="{{ '/recent-post' }}"><i class="fa-regular fa-address-card"></i></a>
            </li>

            @role('admin')
                <span class="nav-line"></span>

                <span class="nav-line"></span>

                <span class="nav-line"></span>

                <div class="dropdown">
                    <a class="btn dropdown-toggle text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" id="select3">

                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link text-dark {{ 'log' == request()->path() ? 'active' : '' }}"
                                href="{{ '/log' }}">Logs</a>
                        </li>
                        <span class="nav-line"></span>

                        <span class="nav-line"></span>

                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link text-dark {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                                href="{{ route('admin.users.index') }}">Users</a>
                        </li>
                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link text-dark {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                                href="{{ '/my-post' }}">My Posts</a>
                        </li>

                    </div>

                </div>
            @endrole
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ '/logout' }}"><i class="fa-solid fa-lock"></i></a>
            </li>
    </div>
</nav>

<style>
    #profile-name a {
        text-decoration: none;
        color: rgb(225, 222, 222);
    }

    #profile-name a:hover {
        background-color: rgba(255, 255, 255, 0);

    }

    .navbar-nav a {
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 5px;
        width: 120px;
        margin: 5px;
        text-align: center;
    }

    #select {
        color: dimgray;
    }


    #select2 li:hover {
        background-color: rgb(17, 162, 172);
    }
</style>
