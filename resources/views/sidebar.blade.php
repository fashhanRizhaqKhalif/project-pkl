<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Linking Google fonts for icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    {{-- @vite('resources/css/sidebar.css') --}}
    @vite(['resources/css/sidebar.css', 'resources/js/sidebar.js'])
</head>
<body>
    <aside class="sidebar">
        {{-- Sidebar header --}}
        <header class="sidebar-header">
            <a href="#" class="header-logo">
                <img src="img/logobulat.png" alt="PLN">
            </a>
            <button class="toggler sidebar-toggler">
                <span class="material-symbols-rounded">
                    chevron_left
                    </span>
            </button>
            <button class="toggler menu-toggler">
                <span class="material-symbols-rounded">
                    menu
                    </span>
            </button>
        </header>

        <nav class="sidebar-nav">
            {{-- Primary top nav --}}
            <ul class="nav-list primary-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-icon material-symbols-rounded">
                            dashboard
                            </span>
                        <span class="nav-label">Dashboard</span>
                    </a>
                    <span class="nav-tooltip">Dashboard</span>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-icon material-symbols-rounded">
                            calendar_today
                            </span>
                        <span class="nav-label">Calendar</span>
                    </a>
                    <span class="nav-tooltip">Calendar</span>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-icon material-symbols-rounded">
                            notifications
                            </span>
                        <span class="nav-label">Notifications</span>
                    </a>
                    <span class="nav-tooltip">Notifications</span>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-icon material-symbols-rounded">
                            group
                            </span>
                        <span class="nav-label">Team</span>
                    </a>
                    <span class="nav-tooltip">Team</span>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-icon material-symbols-rounded">
                            analytics
                            </span>
                        <span class="nav-label">Analytics</span>
                    </a>
                    <span class="nav-tooltip">Analytics</span>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-icon material-symbols-rounded">
                            star
                            </span>
                        <span class="nav-label">Bookmarks</span>
                    </a>
                    <span class="nav-tooltip">Bookmarks</span>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-icon material-symbols-rounded">
                            settings
                            </span>
                        <span class="nav-label">Settings</span>
                    </a>
                    <span class="nav-tooltip">Settings</span>
                </li>
            </ul>

            {{-- Secondary top nav --}}
            <ul class="nav-list secondary-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-icon material-symbols-rounded">
                            account_circle
                            </span>
                        <span class="nav-label">Profil</span>
                    </a>
                    <span class="nav-tooltip">Profil</span>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-icon material-symbols-rounded">
                            logout
                            </span>
                        <span class="nav-label">Logout</span>
                    </a>
                    <span class="nav-tooltip">Logout</span>
                </li>
            </ul>
        </nav>
    </aside>
</body>
</html>