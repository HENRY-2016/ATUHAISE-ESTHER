    <x-app-layout>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Sales <span>| Today</span></h5>

                        <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                        </div>
                        <div class="ps-3">
                            <h6>145</h6>
                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                        </div>
                        </div>
                    </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Revenue <span>| This Month</span></h5>

                        <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                            <h6>$3,264</h6>
                            <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                        </div>
                        </div>
                    </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Customers <span>| This Year</span></h5>

                        <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>1244</h6>
                            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                        </div>
                        </div>

                    </div>
                    </div>

                </div><!-- End Customers Card -->

            

                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                        <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row"><a href="#">#2457</a></th>
                            <td>Brandon Jacob</td>
                            <td><a href="#" class="text-primary">At praesentium minu</a></td>
                            <td>$64</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="#">#2147</a></th>
                            <td>Bridie Kessler</td>
                            <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                            <td>$47</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="#">#2049</a></th>
                            <td>Ashleigh Langosh</td>
                            <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                            <td>$147</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Angus Grady</td>
                            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                            <td>$67</td>
                            <td><span class="badge bg-danger">Rejected</span></td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Raheem Lehner</td>
                            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                            <td>$165</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                        </tbody>
                        </table>

                    </div>

                    </div>
                </div><!-- End Recent Sales -->


                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Orgnazitions</span></h5>
                    <div class="activity">

                        <div class="activity-item d-flex">
                            <div class="activite-label">
                            {{trans_choice('general.org1',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org1',2)}}</div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org2',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org2',2)}} </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org3',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org3',2)}}</div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org4',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org4',2)}}</div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org5',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org5',2)}}</div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org6',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org6',2)}}</div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">
                            {{trans_choice('general.org7',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org7',2)}}</div>
                        </div><!-- End activity item-->
    
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org8',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org8',2)}} </div>
                        </div><!-- End activity item-->
    
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org9',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org9',2)}}</div>
                        </div><!-- End activity item-->
    
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org10',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org10',2)}}</div>
                        </div><!-- End activity item-->
    
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org11',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org11',2)}}</div>
                        </div><!-- End activity item-->
    
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org12',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org12',2)}}</div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org13',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org13',2)}}</div>
                        </div><!-- End activity item-->
    
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org14',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org14',2)}} </div>
                        </div><!-- End activity item-->
    
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org15',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org15',2)}}</div>
                        </div><!-- End activity item-->
    
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org16',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org16',2)}}</div>
                        </div><!-- End activity item-->
    
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org17',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org17',2)}}</div>
                        </div><!-- End activity item-->
    
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{trans_choice('general.org18',1)}}</div>
                            <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                            <div class="activity-content">{{trans_choice('general.org18',2)}}</div>
                        </div><!-- End activity item-->

                    </div>
                </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class="card" style="display: none">
                    <div class="filter"></div>
                    <div class="card-body pb-0"></div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class="card" style="display: none">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Organiztions</h5>
                    </div>
                </div><!-- End Website Traffic -->
            </div><!-- End Right side columns -->

            </div>
        </section>

        </main><!-- End #main -->
    </x-app-layout>