<div class="container">
    <div class="row justify-content-end">
        <div class="col-12 col-lg-3">
            <div class="align-items-end card mb-1">
                <div class="card-body py-2 px-2">
                    <div class="align-items-center small">
                        <div class="dropdown">
                            <a class="btn btn-outline-secondary dropdown-toggle" style="background-color: #fff000;" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                                <form id="logout-form" method="POST" action="{{ route('admin.logout') }}" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


