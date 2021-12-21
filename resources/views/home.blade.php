<x-app btitle="Dashboard">
    <div class="row mb-5">
        <div class="col-12 col-md-12">
            <div class="row">
                <!-- Sales Card -->
                <div class="col-12 col-md-6">
                    <div id="__card_responsive" class="card info-card sumbangan-card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><button onclick="__today()" class="dropdown-item">Hari ini</button></li>
                                <li><button onclick="__thisMonth()" class="dropdown-item">Bulan ini</button></li>
                                <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Sumbangan <span>| Hari ini</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-donate"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 id="__total">Rp. {{ $total }}</h6>
                                    <span id="__terbilang" class="text-success small pt-1 fw-bold">{{ $terbilang
                                        }} </span>
                                    {{-- <span class="text-muted small pt-2 ps-1">increase</span> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Pengeluaran Card -->
                <div class="col-12 col-md-6">
                    <div id="__card_responsive" class="card info-card pengeluaran-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Hari ini</a></li>
                                <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                                <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Pengeluaran <span>| Bulan ini</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 id="__total">$3,264</h6>
                                    <span id="__terbilang" class="text-success small pt-1 fw-bold">8%</span> <span
                                        class="text-muted small pt-2 ps-1">increase</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

            </div>
        </div>
        <!-- saldo total Card -->
        <div class="col-12 col-md-12">
            <div id="__card_responsive" class="card info-card total-sumbangan-card ">

                {{-- <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Hari ini</a></li>
                        <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                        <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                    </ul>
                </div> --}}

                <div class="card-body">
                    <h5 class="card-title">Saldo <span>| Semua</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="ps-3">
                            <h6 id="__total">{{$all}}</h6>
                            <span id="__terbilang" class="text-success small pt-1 fw-bold">
                                {{$terbilang_all}}
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End saldo total Card -->


        <!-- Sumbangan masuk Card -->
        {{-- <div class="col-12 col-md-7">
            <div id="__card_responsive" class="card info-card pengeluaran-card" style="min-height: 80vh">

                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                        <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Sumbangan Masuk <span>| Today</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                            <h6 id="__total">$3,264</h6>
                            <span class="text-success small pt-1 fw-bold">8%</span> <span
                                class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
        <!-- End Sumbangan masuk Card -->
    </div>
</x-app>