<nav class="navbar navbar-expand-md navbar-white" id="menubar">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">

        <a class="navbar-brand violence" href="./"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav mr-auto">
            {menulist}
                <li class="nav-item">
                    <a class="nav-link" href="{link}">{name}</a>
                </li>
            {/menulist}
        </ul>
    </div>
    <!-- <div class="mx-auto order-0">
    </div> -->
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <p class="nav-link" id="user-role-display"><?php echo $this->data['userrole']; ?></p>
            </li>
            <li class="dropdown align-self-end" id="role-dropdown">
                <a class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" href="#">User Role<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li class="dropdown-item"><a href="/roles/actor/Guest">Guest</a></li>
                    <li class="dropdown-item"><a href="/roles/actor/User">User</a></li>
                    <li class="dropdown-item"><a href="/roles/actor/Admin">Admin</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>