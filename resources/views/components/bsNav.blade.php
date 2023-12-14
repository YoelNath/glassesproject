<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="icon" href="{{ URL('storage/images/glassespedia_logo.png') }}">
<style>
    nav {
        display: flex;
        position: sticky;
        top: 0;
        background-color: #1c5253;
        align-items: center;
        justify-content: flex-start;
        height: 72px;
        width: 100%;
        z-index: 1000;
    }

    .icon {
        color: #00a888;
        margin-left: 20px;
        cursor: pointer;
    }

    .sidebar-bg {
        position: fixed;
        display: none;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .sidebar {
        background-color: #00a888;
        padding: 20px;
    }
</style>

<nav class="header">
    <a class="icon" id="hamburger" data-bs-toggle="offcanvas" href="#offcanvasSidebar" role="button"
        aria-controls="offcanvasSidebar">
        <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48" viewBox="0 0 448 512">
            <path fill="#ffffff"
                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
        </svg></a>
    <a href="" style="justify-self: center; margin:auto">
        <img src="{{ URL('storage/images/glassespedia_logo.png') }}" style="width: 60px; cursor:pointer;" />
    </a>
</nav>

<div class="sidebar offcanvas offcanvas-start" id="offcanvasSidebar" tabindex="-1"
    aria-labelledby="offcanvasSidebarLabel">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
        style="font-size: 24px"></button>
    <form class="d-flex w-100 mt-4" role="search">
        <div class="input-group me-3">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-primary" type="button" id="button-addon2">
                Search
            </button>
        </div>
    </form>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item mx-2"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item mx-2"><a href="/" class="nav-link">Categories</a></li>
        <li class="nav-item mx-2"><a href="/" class="nav-link">Account</a></li>
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
