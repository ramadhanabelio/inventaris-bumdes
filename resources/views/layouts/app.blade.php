<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BUMDes Sumber Rezeki - Desa Bantan Sari</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Lato:300,400,700,900"]
            },
            custom: {
                families: [
                    "Flaticon",
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/atlantis.min.css') }}" />
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                <a href="" class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="navbar brand" class="navbar-brand" width="23%" />
                    &nbsp;
                    <span class="text-white">Sumber
                        Rezeki</span>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more">
                    <i class="icon-options-vertical"></i>
                </button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                <div class="container-fluid">

                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="{{ asset('img/profile.png') }}" alt="..."
                                        class="avatar-img rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg">
                                                <img src="{{ asset('img/profile.png') }}" alt="image profile"
                                                    class="avatar-img rounded" />
                                            </div>
                                            <div class="u-text">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <p class="text-muted">
                                                    {{ Auth::user()->email }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        <a class="dropdown-item text-danger" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Keluar
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="{{ asset('img/profile.png') }}" alt="..."
                                class="avatar-img rounded-circle" />
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    {{ Auth::user()->name }}
                                    <span class="user-level">{{ Auth::user()->phone_number }}</span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        {{-- Dashboard --}}
                        <li
                            class="nav-item {{ request()->is('home') || request()->is('admin/dashboard') ? 'active' : '' }}">
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}">
                                    <i class="fas fa-home"></i>
                                    <p>Dashboard</p>
                                </a>
                            @else
                                <a href="{{ url('/home') }}">
                                    <i class="fas fa-home"></i>
                                    <p>Dashboard</p>
                                </a>
                            @endif
                        </li>

                        {{-- Section title --}}
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Menu</h4>
                        </li>

                        @if (Auth::user()->role === 'admin')
                            {{-- Admin Section --}}
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#base"
                                    {{ request()->is('admin/users*') || request()->is('admin/categories*') ? 'aria-expanded=true' : 'aria-expanded=false' }}
                                    class="{{ request()->is('admin/users*') || request()->is('admin/categories*') ? '' : 'collapsed' }}">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Data Master</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse {{ request()->is('admin/users*') || request()->is('admin/categories*') ? 'show' : '' }}"
                                    id="base">
                                    <ul class="nav nav-collapse">
                                        <li class="{{ request()->is('admin/users*') ? 'active' : '' }}">
                                            <a href="{{ route('admin.users.index') }}">
                                                <span class="sub-item">Data Pengguna</span>
                                            </a>
                                        </li>
                                        <li class="{{ request()->is('admin/categories*') ? 'active' : '' }}">
                                            <a href="{{ route('admin.categories.index') }}">
                                                <span class="sub-item">Data Kategori</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Data Barang --}}
                            <li class="nav-item {{ request()->is('admin/items*') ? 'active' : '' }}">
                                <a href="{{ route('admin.items.index') }}">
                                    <i class="fas fa-pen-square"></i>
                                    <p>Data Barang</p>
                                </a>
                            </li>

                            {{-- Transaksi --}}
                            <li class="nav-item {{ request()->is('admin/loans*') ? 'active' : '' }}">
                                <a href="{{ route('admin.loans.index') }}">
                                    <i class="fas fa-table"></i>
                                    <p>Transaksi Peminjaman</p>
                                </a>
                            </li>
                        @else
                            {{-- User Section --}}
                            <li class="nav-item {{ request()->is('asset') ? 'active' : '' }}">
                                <a href="{{ route('borrow.asset') }}">
                                    <i class="fas fa-box"></i>
                                    <p>Data Aset</p>
                                </a>
                            </li>

                            <li class="nav-item {{ request()->is('loan') ? 'active' : '' }}">
                                <a href="{{ route('borrow.loan.create') }}">
                                    <i class="fas fa-hand-holding"></i>
                                    <p>Peminjaman Aset</p>
                                </a>
                            </li>

                            <li class="nav-item {{ request()->is('history') ? 'active' : '' }}">
                                <a href="{{ route('borrow.history') }}">
                                    <i class="fas fa-history"></i>
                                    <p>Riwayat Peminjaman</p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">
                                    @if (Auth::user()->role === 'admin')
                                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    @else
                                        <a href="{{ url('home') }}">Dashboard</a>
                                    @endif
                                </h2>
                                <h5 class="text-white op-7 mb-2">
                                    BUMDes Sumber Rezeki - Desa Bantan Sari
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright ml-auto">
                        2025, Designed by <a href="">Nurul Hafiza</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- jQuery Scrollbar -->
    <script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/plugin/chart.js/chart.min.js') }}"></script>
    <!-- jQuery Sparkline -->
    <script src="{{ asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Chart Circle -->
    <script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('js/plugin/datatables/datatables.min.js') }}"></script>
    <!-- Bootstrap Notify -->
    <script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <!-- jQuery Vector Maps -->
    <script src="{{ asset('js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <!-- Atlantis JS -->
    <script src="{{ asset('js/atlantis.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#basic-datatables").DataTable({});

            $("#multi-filter-select").DataTable({
                pageLength: 5,
                initComplete: function() {
                    this.api()
                        .columns()
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-control"><option value=""></option></select>'
                                )
                                .appendTo($(column.footer()).empty())
                                .on("change", function() {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                    column.search(val ? "^" + val + "$" : "", true, false)
                                        .draw();
                                });

                            column
                                .data()
                                .unique()
                                .sort()
                                .each(function(d, j) {
                                    select.append('<option value="' + d + '">' + d +
                                        "</option>");
                                });
                        });
                },
            });

            // Add Row
            $("#add-row").DataTable({
                pageLength: 5,
            });

            var action =
                '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $("#addRowButton").click(function() {
                $("#add-row")
                    .dataTable()
                    .fnAddData([$("#addName").val(), $("#addPosition").val(), $("#addOffice").val(),
                        action
                    ]);
                $("#addRowModal").modal("hide");
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
