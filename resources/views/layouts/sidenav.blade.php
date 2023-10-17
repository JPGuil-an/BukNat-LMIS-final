<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="" >
            <img src="{{ url('assets/assets/img/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">BukNat - LMIS</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    @if (Auth::user()->role == 1)  {{--Checks if its admin or not --}}
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('librarianDashboard') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('addBook') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-books text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Book Options</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('borrowingForm') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Book Forms</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('accountPending') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Accounts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('profile') }}"
                        onclick="event.preventDefault(); document.getElementById('profileUser').submit();">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('studentTransactions') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Student Transactions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('updateStudents') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Update Student Records</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('generateReport') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Generate Report</span>
                    </a>
                </li>

            </ul>
        </div>
    @else
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('studentDashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('studentBorrowed') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Borrowed Books</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('addResearch') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Upload Research</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('StudentbookLists') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">All Books</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('profile') }}"
                    onclick="event.preventDefault(); document.getElementById('profileUser').submit();">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        </ul>
    </div>
    @endif

    <div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <img class="w-50 mx-auto" src="{{ url('assets/assets/img/illustrations/icon-documentation.svg') }}"
                alt="sidebar_illustration">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">

                    <p class="text-xs font-weight-bold mb-0">Use the Scanner below for Record Keeping of the Library Visitors.</p>
                </div>
            </div>
        </div>
        <a href="/Librarian/transaction/logs" target="" class="btn btn-warning btn-sm w-100 mb-3">Scan Students' QR</a>
        {{-- <a href="" target="" class="btn btn-primary btn-sm mb-0 w-100" href="" type="button">Go to
            User Dashboard</a> --}}
    </div>
</aside>
