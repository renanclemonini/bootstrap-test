<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
            type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
            type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
        <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled"
            type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
            type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
            type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
            tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ratione. Ad ab maxime
            et ducimus ex dolorem fuga alias porro repellat nostrum amet, id tempore, libero quis iure, doloremque
            incidunt!</div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
            tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ratione. Ad ab maxime
            et ducimus ex dolorem fuga alias porro repellat nostrum amet, id tempore, libero quis iure, doloremque
            incidunt!</div>
        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab"
            tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ratione. Ad ab maxime
            et ducimus ex dolorem fuga alias porro repellat nostrum amet, id tempore, libero quis iure, doloremque
            incidunt!</div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
            tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ratione. Ad ab maxime
            et ducimus ex dolorem fuga alias porro repellat nostrum amet, id tempore, libero quis iure, doloremque
            incidunt!</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
            tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ratione. Ad ab maxime
            et ducimus ex dolorem fuga alias porro repellat nostrum amet, id tempore, libero quis iure, doloremque
            incidunt!</div>
    </div>
</div>