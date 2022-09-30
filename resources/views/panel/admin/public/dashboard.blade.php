@extends('panel.admin.layout.index')

@section('page')
    {{-- <div class="form-holder">
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
    </div> --}}

    <div class="cards-holder">
        <div class="card-item">
            <div class="card-header">
                <div class="card-header-text">
                    <p>Main Space</p>
                </div>
                <div class="card-identity">
                    <div class="card-rating">
                        <p>1.1</p>
                    </div>
                    <div class="card-close" onclick="closeCardItem(this)">
                        <p>
                            <i class="fas fa-close"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body" onclick="enLargeCardItem(this)">
                <div class="card-body-image">
                    <img src="{{ asset('/') }}panel/img/png/shadov-2.jpg" alt="card image" width="100px" height="auto">
                </div>
                <div class="card-body-text">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, blanditiis quibusdam odio
                        placeat
                        voluptates vitae fugiat minima ipsam vel, nostrum ad amet saepe ipsum omnis. Perspiciatis veritatis
                        ea
                        vero ut.
                    </p>
                    <div class="card-body-text-buttons"></div>
                    <div class="card-body-text-tags">
                        <div class="badge badge-light">
                            <p>#Spaces</p>
                        </div>
                        <div class="badge badge-green">
                            <p>#Spaces</p>
                        </div>
                        <div class="badge badge-yellow">
                            <p>#Spaces</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="card-footer-date">
                    <p>22/10/2000</p>
                </div>
                <div class="card-footer-by">
                    <a href="#" class="link card-link">by: <b>Senan</b></a>
                </div>
                <div class="card-footer-badge">
                    <div class="badge badge-light">
                        <p>#Spaces</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-item">
            <div class="card-header">
                <div class="card-header-text">
                    <p>Developers' Space</p>
                </div>
                <div class="card-identity">
                    <div class="card-rating">
                        <p>4.8</p>
                    </div>
                    <div class="card-close" onclick="closeCardItem(this)">
                        <p>
                            <i class="fas fa-close"></i>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-body" onclick="enLargeCardItem(this)"></div>

            <div class="card-footer">
                <div class="card-footer-date">
                    <p>22/10/2000</p>
                </div>
                <div class="card-footer-by">
                    <a href="#" class="link card-link">by: <b>Alakbar</b></a>
                </div>
                <div class="card-footer-badge">
                    <div class="badge badge-light">
                        <p>#Developers</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-item">
            <div class="card-header">
                <div class="card-header-text">
                    <p>Main Space</p>
                </div>
                <div class="card-identity">
                    <div class="card-rating">
                        <p>1.1</p>
                    </div>
                    <div class="card-close" onclick="closeCardItem(this)">
                        <p>
                            <i class="fas fa-close"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body" onclick="enLargeCardItem(this)"></div>
            <div class="card-footer">
                <div class="card-footer-date">
                    <p>22/10/2000</p>
                </div>
                <div class="card-footer-by">
                    <a href="#" class="link card-link">by: <b>Senan</b></a>
                </div>
                <div class="card-footer-badge">
                    <div class="badge badge-light">
                        <p>#Spaces</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-item">
            <div class="card-header">
                <div class="card-header-text">
                    <p>Main Space</p>
                </div>
                <div class="card-identity">
                    <div class="card-rating">
                        <p>1.1</p>
                    </div>
                    <div class="card-close" onclick="closeCardItem(this)">
                        <p>
                            <i class="fas fa-close"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body" onclick="enLargeCardItem(this)"></div>
            <div class="card-footer">
                <div class="card-footer-date">
                    <p>22/10/2000</p>
                </div>
                <div class="card-footer-by">
                    <a href="#" class="link card-link">by: <b>Senan</b></a>
                </div>
                <div class="card-footer-badge">
                    <div class="badge badge-light">
                        <p>#Spaces</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-item">
            <div class="card-header">
                <div class="card-header-text">
                    <p>Main Space</p>
                </div>
                <div class="card-identity">
                    <div class="card-rating">
                        <p>1.1</p>
                    </div>
                    <div class="card-close" onclick="closeCardItem(this)">
                        <p>
                            <i class="fas fa-close"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body" onclick="enLargeCardItem(this)"></div>
            <div class="card-footer">
                <div class="card-footer-date">
                    <p>22/10/2000</p>
                </div>
                <div class="card-footer-by">
                    <a href="#" class="link card-link">by: <b>Senan</b></a>
                </div>
                <div class="card-footer-badge">
                    <div class="badge badge-light">
                        <p>#Spaces</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-item">
            <div class="card-header">
                <div class="card-header-text">
                    <p>Main Space</p>
                </div>
                <div class="card-identity">
                    <div class="card-rating">
                        <p>1.1</p>
                    </div>
                    <div class="card-close" onclick="closeCardItem(this)">
                        <p>
                            <i class="fas fa-close"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body" onclick="enLargeCardItem(this)"></div>
            <div class="card-footer">
                <div class="card-footer-date">
                    <p>22/10/2000</p>
                </div>
                <div class="card-footer-by">
                    <a href="#" class="link card-link">by: <b>Senan</b></a>
                </div>
                <div class="card-footer-badge">
                    <div class="badge badge-light">
                        <p>#Spaces</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-page-holder">

    </div>
@endsection
