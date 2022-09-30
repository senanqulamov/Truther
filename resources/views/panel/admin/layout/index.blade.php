@include('panel.admin.layout.header')

<main class="main-page">
    <navbar class="left-navbar">
        <div class="navbar-holder">
            <div class="navbar-item navbar-block-item modal-toggle" data-toggle="profile-navbar-modal">
                <div class="profile-block-navbar">
                    <div class="profile-block-item">
                        <p>Senan</p>
                    </div>
                    <div class="profile-block-item">
                        <i class="fa-solid fa-gear"></i>
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </div>
                </div>
                <div class="badges-holder">
                    <div class="badge-item">
                        <img src="{{ asset('/') }}panel/img/svg/badge_dark_blue.svg" alt="">
                    </div>
                    <div class="badge-item">
                        <img src="{{ asset('/') }}panel/img/svg/badge_light_blue.svg" alt="">
                    </div>
                    <div class="badge-item">
                        <img src="{{ asset('/') }}panel/img/svg/badge_red.svg" alt="">
                    </div>
                    <div class="badge-item">
                        <img src="{{ asset('/') }}panel/img/svg/badge_yellow.svg" alt="">
                    </div>
                    <div class="badge-item">
                        <img src="{{ asset('/') }}panel/img/svg/badge_dark_blue.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="navbar-item">
                <p>Friends</p>
            </div>

            <div class="navbar-item">
                <p>Groups</p>
            </div>

            <div class="navbar-item navbar-block-item modal-toggle" data-toggle="events-navbar-modal">
                <div class="events-block-navbar">
                    <p>Events</p>
                </div>
                <div class="events-holder">
                    <div class="event-item event-item-navbar"></div>
                    <div class="event-item event-item-navbar"></div>
                    <div class="event-item event-item-navbar"></div>
                    <div class="event-item event-item-navbar"></div>
                </div>
            </div>

            <div class="navbar-item">
                <p>Link</p>
            </div>
        </div>
    </navbar>
    <div class="page-content-holder">
        @yield('page')

        <footer class="footer-holder"></footer>
    </div>
</main>


<div class="modal" id="profile-navbar-modal">
    <div class="modal-inner">
        <div class="modal-header">
            <div class="modal-header-left">
                <p>Profile</p>
            </div>
            <div class="modal-header-left modal-header-buttons">
                <div class="modal-close-btn" data-toggle="profile-navbar-modal" onclick="CloseModal(this)">
                    <i class="fa fa-close"></i>
                </div>
            </div>
        </div>
        <div class="modal-body modal-body-scroll">
            <div class="modal-profile">
                <h3>Senan</h3>
                <div class="profile-block-item">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </div>
            </div>
            <div class="modal-profile-form">
                <form>
                    <div class="form-holder">
                        <div class="form-row">
                            <div class="form-heading">
                                <p>User Information</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="name">Name</label>
                                <input class="form-input" type="text" name="name" id="name">
                            </div>
                            <div class="form-col">
                                <label for="surname">Surname</label>
                                <input class="form-input" type="text" name="surname" id="surname">
                            </div>
                            <div class="form-col">
                                <label for="email">Email</label>
                                <input class="form-input" type="email" name="email" id="email">
                            </div>
                            <div class="form-col">
                                <label for="password">Password</label>
                                <input class="form-input" type="password" name="password" id="password">
                            </div>
                        </div>
                    </div>
                    <div class="form-holder">
                        <div class="form-row">
                            <div class="form-heading">
                                <p>Address Information</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="name">Name</label>
                                <input class="form-input" type="text" name="name" id="name">
                            </div>
                            <div class="form-col">
                                <label for="surname">Surname</label>
                                <input class="form-input" type="text" name="surname" id="surname">
                            </div>
                            <div class="form-col">
                                <label for="email">Email</label>
                                <input class="form-input" type="email" name="email" id="email">
                            </div>
                            <div class="form-col">
                                <label for="password">Password</label>
                                <input class="form-input" type="password" name="password" id="password">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer"></div>
    </div>
</div>
<div class="modal" id="events-navbar-modal">
    <div class="modal-inner modal-inner-large">
        <div class="modal-header">
            <div class="modal-header-left">
                <p>Events</p>
            </div>
            <div class="modal-header-left modal-header-buttons">
                <div class="modal-close-btn" data-toggle="events-navbar-modal" onclick="CloseModal(this)">
                    <i class="fa fa-close"></i>
                </div>
            </div>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer"></div>
    </div>
</div>
@include('panel.admin.layout.footer')
