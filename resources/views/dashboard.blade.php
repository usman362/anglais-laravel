@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

    <!-- MAIN-CONTENT -->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Sales Dashboard</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- END PAGE HEADER -->

                <!-- ROW -->
                <div class="row row-sm">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <!--Row-->
                        <div class="row row-sm">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-primary wd-20 ht-20" xmlns="http://www.w3.org/2000/svg"
                                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M22.5,10h-4.0005493C18.2234497,10.0001831,17.9998169,10.223999,18,10.5v12.0005493C18.0001831,22.7765503,18.223999,23.0001831,18.5,23h4.0006104C22.7765503,22.9998169,23.0001831,22.776001,23,22.5V10.4993896C22.9998169,10.2234497,22.776001,9.9998169,22.5,10z M22,22h-3V11h3V22z M14.5,2h-4.0005493C10.2234497,2.0001831,9.9998169,2.223999,10,2.5v20.0005493C10.0001831,22.7765503,10.223999,23.0001831,10.5,23h4.0006104C14.7765503,22.9998169,15.0001831,22.776001,15,22.5V2.4993896C14.9998169,2.2234497,14.776001,1.9998169,14.5,2z M14,22h-3V3h3V22z M6.5,14H2.4993896C2.2234497,14.0001831,1.9998169,14.223999,2,14.5v8.0005493C2.0001831,22.7765503,2.223999,23.0001831,2.5,23h4.0006104C6.7765503,22.9998169,7.0001831,22.776001,7,22.5v-8.0006104C6.9998169,14.2234497,6.776001,13.9998169,6.5,14z M6,22H3v-7h3V22z" />
                                                </svg>
                                            </div>
                                            <div class="card-item-title mb-2">
                                                <label class="main-content-label tx-13 mb-1">Total Revenue</label>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="font-weight-normal">$6,800.00</h4>
                                                    <small><b class="badge rounded-pill bg-success fs-11">65%</b><span
                                                            class="px-1">Higher</span></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-primary wd-20 ht-20" xmlns="http://www.w3.org/2000/svg"
                                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M14.6650391,13.3672485C16.6381226,12.3842773,17.9974365,10.3535767,18,8c0-3.3137207-2.6862793-6-6-6S6,4.6862793,6,8c0,2.3545532,1.3595581,4.3865967,3.3334961,5.3690186c-3.6583862,1.0119019-6.5859375,4.0562134-7.2387695,8.0479736c-0.0002441,0.0013428-0.0004272,0.0026855-0.0006714,0.0040283c-0.0447388,0.272583,0.1399536,0.5297852,0.4125366,0.5745239c0.272522,0.0446777,0.5297241-0.1400146,0.5744629-0.4125366c0.624939-3.8344727,3.6308594-6.8403931,7.465332-7.465332c4.9257812-0.8027954,9.5697632,2.5395508,10.3725586,7.465332C20.9594727,21.8233643,21.1673584,21.9995117,21.4111328,22c0.0281372,0.0001831,0.0562134-0.0021362,0.0839844-0.0068359h0.0001831c0.2723389-0.0458984,0.4558716-0.303833,0.4099731-0.5761719C21.2677002,17.5184937,18.411377,14.3986206,14.6650391,13.3672485z M12,13c-2.7614136,0-5-2.2385864-5-5s2.2385864-5,5-5c2.7600708,0.0032349,4.9967651,2.2399292,5,5C17,10.7614136,14.7614136,13,12,13z" />
                                                </svg>
                                            </div>
                                            <div class="card-item-title mb-2">
                                                <label class="main-content-label tx-13 mb-1">New Customers</label>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="font-weight-normal">5,031</h4>
                                                    <small><b class="badge rounded-pill bg-warning fs-11">25%</b><span
                                                            class="px-1">Increased</span></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-primary wd-20 ht-20" xmlns="http://www.w3.org/2000/svg"
                                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M17.5,9.0009766c0.0001831,0,0.0003662,0,0.0005493,0c0.276001-0.0001221,0.4996338-0.223999,0.4994507-0.5V8.0020142c0.0003662-0.1011963-0.0302734-0.2000732-0.0878906-0.2832642c-0.3666992-1.5889282-1.7803955-2.715271-3.4111328-2.7177734L12.5,5.0001831V2.5C12.5,2.223877,12.276123,2,12,2s-0.5,0.223877-0.5,0.5V5h-2C7.5679932,5.0023193,6.0023193,6.5679932,6,8.5v0.5009766c0.0025635,1.9315796,1.5674438,3.4968872,3.4990234,3.5L12,12.5020142c0.0001221,0,0.0001831-0.000061,0.0003052-0.000061h2.5006714c1.3795776,0.0023804,2.4971924,1.1204224,2.4990234,2.5v0.5009766c-0.0012817,1.380188-1.119812,2.4987183-2.5,2.5h-2.4854736C12.0093994,18.0027466,12.005127,18,12,18c-0.005249,0-0.0096436,0.0028076-0.0148315,0.0029907h-2.486145c-1.3795776-0.0023804-2.4971924-1.1204224-2.4990234-2.5c0-0.276123-0.223877-0.5-0.5-0.5s-0.5,0.223877-0.5,0.5v0.4990234c-0.0002441,0.1014404,0.0303955,0.2005005,0.0878906,0.2841187c0.3677979,1.5880737,1.7810059,2.713623,3.4111328,2.7167969H11.5V21.5c0,0.0001831,0,0.0003662,0,0.0005493C11.5001831,21.7765503,11.723999,22.0001831,12,22c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-2.4970703h2c1.9320068-0.0023193,3.4976196-1.5679321,3.5-3.499939v-0.5009766c-0.0025024-1.9315796-1.5674438-3.4969482-3.4990234-3.500061H12c-0.0001221,0-0.0001831,0.000061-0.0003052,0.000061l-2.5006714-0.0010376C8.1194458,11.4985962,7.0018311,10.3805542,7,9.0009766V8.5C7.0012817,7.119812,8.119812,6.0012817,9.5,6H12l2.5009766,0.0009766c1.3798828,0.001709,2.4978638,1.1201782,2.4990234,2.5c0,0.0001831,0,0.0004272,0,0.0006104C17.0001831,8.7775269,17.223999,9.0011597,17.5,9.0009766z" />
                                                </svg>
                                            </div>
                                            <div class="card-item-title  mb-2">
                                                <label class="main-content-label tx-13 mb-1">Total Expenses</label>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="font-weight-normal">$2,500</h4>
                                                    <small><b class="badge rounded-pill bg-danger fs-11">15%</b>
                                                        <span class="px-1">Decreased</span></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-primary wd-20 ht-20" xmlns="http://www.w3.org/2000/svg"
                                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M17.3809204,13.3710938C18.934082,12.5227661,20,10.8944092,20,9c0-2.7614136-2.2385864-5-5-5c-0.140625,0.0025635-0.2809448,0.0146484-0.4199219,0.0361328l-0.1357422,0.0175781c-0.0012207,0.0001221-0.0024414,0.0002441-0.0036621,0.0004272c-0.2744141,0.0317383-0.4711304,0.2799072-0.4393921,0.5543213c0.0317993,0.2744141,0.2799683,0.4711304,0.5543823,0.4393921l0.1591797-0.0205078C14.8092041,5.0118408,14.9044189,5.0027466,15,5c2.2091675,0,4,1.7908325,4,4s-1.7908325,4-4,4c-0.276123,0-0.5,0.223877-0.5,0.5S14.723877,14,15,14c3.6798096,0.008728,6.7261353,2.8618774,6.9755859,6.5332031C21.9933472,20.7957764,22.2114258,20.9998169,22.4746094,21c0.0107422,0,0.0214844,0,0.0332031-0.0009766c0.2755127-0.0184937,0.4840088-0.2566528,0.4658203-0.5322266C22.7439575,17.0975952,20.4518433,14.3356323,17.3809204,13.3710938z M11.3793945,13.3696289C12.9319458,12.5209961,13.9978027,10.8936157,14,9c0-2.7614136-2.2385864-5-5-5S4,6.2385864,4,9c0,1.8936157,1.0650635,3.5214233,2.6171265,4.3700562c-3.0588379,0.9575195-5.3679199,3.706665-5.5907593,7.0967407c-0.0181885,0.2755737,0.1903076,0.5137329,0.4658203,0.5322266c0.0041504,0.0003052,0.0083618,0.0006104,0.0125122,0.0008545c0.2723999,0.0146484,0.5050659-0.1942749,0.5197144-0.4666748c0.2295532-3.5004272,3.0177612-6.2886963,6.5181885-6.5181885c3.8525391-0.2526245,7.1804199,2.6656494,7.4329834,6.5181885C15.9933472,20.7957764,16.2114258,20.9998169,16.4746094,21c0.0107422,0,0.0214844,0,0.0332031-0.0009766c0.2755737-0.0184937,0.4840088-0.2566528,0.4658203-0.5322266C16.7530518,17.1099243,14.4707031,14.3337402,11.3793945,13.3696289z M9,13c-2.2091675,0-4-1.7908325-4-4s1.7908325-4,4-4c2.208252,0.0021973,3.9978027,1.791748,4,4C13,11.2091675,11.2091675,13,9,13z" />
                                                </svg>
                                            </div>
                                            <div class="card-item-title  mb-2">
                                                <label class="main-content-label tx-13 mb-1">Total Followers</label>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="font-weight-normal">300k</h4>
                                                    <small><b class="badge rounded-pill bg-success fs-11">10%</b><span
                                                            class="px-1">than last month</span></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End row-->

                        <!--row-->
                        <div class="row row-sm">
                            <div class="col-sm-12 col-lg-12 col-xl-8">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header border-bottom d-flex">
                                        <div>
                                            <h3 class="card-title tx-18"><label class="main-content-label tx-15">Sales
                                                    summary</label></h3>
                                        </div>
                                        <div class="ms-auto float-end">
                                            <a href="javascript:;" class="text-muted" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fe fe-more-vertical fs-16 "></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:;">Today</a>
                                                <a class="dropdown-item" href="javascript:;">Last Week</a>
                                                <a class="dropdown-item" href="javascript:;">Last Month</a>
                                                <a class="dropdown-item" href="javascript:;">Last Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body my-2">
                                        <div class="chart-wrapper m-0">
                                            <canvas id="sales-summary" class="h-300 w-100"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header border-bottom">
                                        <div>
                                            <h3 class="card-title  tx-18"><label
                                                    class="main-content-label tx-15">Revenue</label></h3>
                                        </div>
                                    </div>
                                    <div class="card-body mt-1">
                                        <div class="morris-wrapper-demo mt-3 mb-4" id="revenuemorrischart"></div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-lg-6 d-block mx-auto justify-content-center">
                                                <ul class="morris-legends">
                                                    <li>
                                                        <span class="d-flex"><span
                                                                class="legend bg-primary rounded-circle"></span>Sales</span>
                                                    </li>
                                                    <li>
                                                        <span class="d-flex justify-content-end"><span
                                                                class="legend bg-primary-light-1 rounded-circle"></span>Clients</span>
                                                    </li>
                                                    <li>
                                                        <span class="d-flex"><span
                                                                class="legend bg-primary-light-2 rounded-circle"></span>Profits</span>
                                                    </li>
                                                    <li>
                                                        <span class="d-flex justify-content-end"><span
                                                                class="legend bg-primary-light-3 rounded-circle"></span>Shares</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- col end -->
                </div>
                <!-- END ROW -->

                <!-- ROW -->
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header border-bottom">
                                <div>
                                    <h3 class="card-title tx-18"><label
                                            class="main-content-label tx-15">TRANSACTIONS</label></h3>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="transaction">
                                    <div class="transaction-blog">
                                        <div
                                            class="transaction-img rounded-50 border-primary bg-primary-transparent text-primary mt-1">
                                            <svg class="transcation-icon" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z" />
                                            </svg>
                                        </div>
                                        <div class="transaction-details d-flex">
                                            <div><span class="text-dark tx-semibold"> Electricity Bill</span>
                                                <p class="text-muted tx-12"> 11 Mar 3:00PM</p>
                                            </div>
                                            <div class="ms-auto fs-14 text-danger font-weight-normal">-$15.30</div>
                                        </div>
                                    </div>
                                    <div class="transaction-blog">
                                        <div
                                            class="transaction-img rounded-50 border-secondary bg-secondary-transparent text-secondary mt-1">
                                            <span class="avatar-1">AL</span>
                                        </div>
                                        <div class="transaction-details d-flex">
                                            <div><span class="text-dark tx-semibold"> Maxin Till </span>
                                                <p class="text-muted tx-12"> 13 Mar 11:49AM</p>
                                            </div>
                                            <div class="ms-auto fs-14 text-success font-weight-normal">+$100.00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="transaction-blog">
                                        <div
                                            class="transaction-img rounded-50 border-success bg-success-transparent text-success mt-1">
                                            <span class="avatar-1">KL</span>
                                        </div>
                                        <div class="transaction-details d-flex">
                                            <div><span class="text-dark tx-semibold"> Keval Lia</span>
                                                <p class="text-muted tx-12"> 16 Mar 1:06PM</p>
                                            </div>
                                            <div class="ms-auto fs-14 text-success font-weight-normal">+$89.06
                                            </div>
                                        </div>
                                    </div>
                                    <div class="transaction-blog">
                                        <div
                                            class="transaction-img rounded-50 border-info bg-info-transparent text-info mt-1">
                                            <svg class="transcation-icon" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path fill="#01b8ff"
                                                    d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z" />
                                            </svg>
                                        </div>
                                        <div class="transaction-details d-flex">
                                            <div><span class="text-dark tx-semibold"> Net Flix </span>
                                                <p class="text-muted tx-12"> 20 Mar 4:00PM</p>
                                            </div>
                                            <div class="ms-auto fs-14 text-danger font-weight-normal">-$10.00</div>
                                        </div>
                                    </div>
                                    <div class="transaction-blog">
                                        <div
                                            class="transaction-img rounded-50 border-danger bg-danger-transparent text-danger mt-1">
                                            <span class="avatar-1">RT</span>
                                        </div>
                                        <div class="transaction-details d-flex">
                                            <div><span class="text-dark tx-semibold"> Rita Mark </span>
                                                <p class="text-muted tx-12"> 20 Mar 4:00PM</p>
                                            </div>
                                            <div class="ms-auto fs-14 text-success font-weight-normal">+$125</div>
                                        </div>
                                    </div>
                                    <div class="transaction-blog">
                                        <div
                                            class="transaction-img rounded-50 border-warning bg-warning-transparent text-warning mt-1">
                                            <span class="avatar-1">PE</span>
                                        </div>
                                        <div class="transaction-details d-flex">
                                            <div><span class="text-dark tx-semibold"> Park Entri </span>
                                                <p class="text-muted tx-12"> 24 Mar 6:06PM</p>
                                            </div>
                                            <div class="ms-auto fs-14 text-danger font-weight-normal">-$40.99</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header border-bottom">
                                <div>
                                    <h3 class="card-title tx-18"><label class="main-content-label tx-15">SALES
                                            ANALYTICS</label></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="clearfix mb-3">
                                    <div class="clearfix">
                                        <span class="float-start text-dark">Women's Fashion</span>
                                        <span class="float-end text-dark">86%</span>
                                    </div>
                                    <div class="progress ht-7 mt-1">
                                        <div class="progress-bar ht-7 progress-bar-striped progress-bar-animated wd-90p"
                                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix mb-3">
                                    <div class="clearfix">
                                        <span class="float-start text-dark">Electronics</span>
                                        <span class="float-end text-dark">83%</span>
                                    </div>
                                    <div class="progress ht-7 mt-1">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="83"
                                            class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-85p bg-success"
                                            role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="clearfix mb-3">
                                    <div class="clearfix">
                                        <span class="float-start text-dark">Mobiles</span>
                                        <span class="float-end text-dark">76%</span>
                                    </div>
                                    <div class="progress ht-7 mt-1">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="76"
                                            class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-80p bg-info"
                                            role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="clearfix mb-3">
                                    <div class="clearfix">
                                        <span class="float-start text-dark">Footwear</span>
                                        <span class="float-end text-dark">71%</span>
                                    </div>
                                    <div class="progress ht-7 mt-2">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="71"
                                            class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-75p bg-secondary"
                                            role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="clearfix mb-3">
                                    <div class="clearfix">
                                        <span class="float-start text-dark">Refridgerators</span>
                                        <span class="float-end text-dark">66%</span>
                                    </div>
                                    <div class="progress ht-7 mt-1">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="66"
                                            class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-70p bg-warning"
                                            role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="clearfix mb-3">
                                    <div class="clearfix">
                                        <span class="float-start text-dark">Furniture</span>
                                        <span class="float-end text-dark">60%</span>
                                    </div>
                                    <div class="progress ht-7 mt-1">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60"
                                            class="progress-bar ht-7 progress-bar-striped progress-bar-animated wd-65p bg-danger"
                                            role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="clearfix mb-3">
                                    <div class="clearfix">
                                        <span class="float-start text-dark">Grocery</span>
                                        <span class="float-end text-dark">55%</span>
                                    </div>
                                    <div class="progress ht-7 mt-1">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55"
                                            class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-60p bg-primary"
                                            role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="clearfix mb-3">
                                    <div class="clearfix">
                                        <span class="float-start text-dark">Accueil</span>
                                        <span class="float-end text-dark">52%</span>
                                    </div>
                                    <div class="progress ht-7 mt-2">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="52"
                                            class="progress-bar ht-7  progress-bar-striped progress-bar-animated wd-55p bg-info"
                                            role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header pb-1">
                                <h3 class="card-title mb-2 tx-18"><label class="main-content-label tx-15">SALES
                                        ACTIVITY</label></h3>
                            </div>
                            <div class="product-timeline card-body">
                                <ul class="timeline-1 mb-0">
                                    <li class="mt-0">
                                        <svg class="bg-primary-gradient text-white product-icon"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M14.5,2L14.5,2C14.2,2,14,2.2,14,2.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v0C22,5.4,18.6,2,14.5,2z M15,9V3c3.2,0.2,5.7,2.8,6,6H15z M19.5,12.5h-8v-8C11.5,4.2,11.3,4,11,4c-5,0-9,4-9,9s4,9,9,9c5,0,9-4,9-9v0C20,12.7,19.8,12.5,19.5,12.5z M11.5,21c-4.4,0.3-8.2-3.1-8.5-7.5C2.7,9.1,6.1,5.3,10.5,5v8c0,0.3,0.2,0.5,0.5,0.5h8C18.7,17.5,15.5,20.7,11.5,21z" />
                                        </svg>
                                        <span class="tx-semibold mb-4 tx-14 ms-3">Total Products</span>
                                        <a href="javascript:;" class="float-end tx-11 text-muted">2 days ago</a>
                                        <p class="mb-0 text-muted tx-12 ms-3">1.2k New Products</p>
                                    </li>
                                    <li class="mt-0">
                                        <svg class="bg-danger-gradient text-white product-icon"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M21.5,17h-15C5.6715698,17,5,16.3284302,5,15.5S5.6715698,14,6.5,14h10.9638672c1.2661133,0.0041504,2.3724365-0.8544312,2.6826172-2.0819702l1.8378906-7.2959595c0.0680542-0.2669678-0.0932617-0.5385742-0.3602905-0.6066284C21.5834961,4.005127,21.5418091,3.999939,21.5,4H6.3908691L6.3642578,3.8935547C6.0869751,2.7798462,5.0861816,1.9986572,3.9384766,2H2.5C2.223877,2,2,2.223877,2,2.5S2.223877,3,2.5,3h1.4384766C4.6269531,2.9990234,5.227356,3.4676514,5.3935547,4.1357422L7.609375,13H6.5C5.1192627,13,4,14.1192627,4,15.5S5.1192627,18,6.5,18h1.0124512C7.1818848,18.4303589,7.0018311,18.9573364,7,19.5C7,20.8807373,8.1192627,22,9.5,22s2.5-1.1192627,2.5-2.5c-0.0018311-0.5426636-0.1818848-1.0696411-0.5124512-1.5h4.0249023C15.1818848,18.4303589,15.0018311,18.9573364,15,19.5c0,1.3807373,1.1192627,2.5,2.5,2.5s2.5-1.1192627,2.5-2.5c-0.0018311-0.5426636-0.1818848-1.0696411-0.5124512-1.5H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17,21.5,17z M6.6416016,5h14.2167969l-1.6816406,6.6738281C18.9780884,12.4567871,18.2716675,13.0037842,17.4638672,13H8.65625L6.6416016,5z M9.5,21C8.6715698,21,8,20.3284302,8,19.5S8.6715698,18,9.5,18s1.5,0.6715698,1.5,1.5C10.9990845,20.328064,10.328064,20.9990845,9.5,21z M17.5,21c-0.8284302,0-1.5-0.6715698-1.5-1.5s0.6715698-1.5,1.5-1.5s1.5,0.6715698,1.5,1.5C18.9990845,20.328064,18.328064,20.9990845,17.5,21z" />
                                        </svg>
                                        <span class="tx-semibold mb-4 tx-14 ms-3">Total Sales</span>
                                        <a href="javascript:;" class="float-end tx-11 text-muted">25 mins ago</a>
                                        <p class="mb-0 text-muted tx-12 ms-3">1.1k New Sales</p>
                                    </li>
                                    <li class="mt-0">
                                        <svg class="bg-success-gradient text-white product-icon"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M9.5,2C9.223877,2,9,2.223877,9,2.5v19c0,0.0001831,0,0.0003662,0,0.0005493C9.0001831,21.7765503,9.223999,22.0001831,9.5,22c0.0001831,0,0.0003662,0,0.0006104,0C9.7765503,21.9998169,10.0001831,21.776001,10,21.5v-19C10,2.223877,9.776123,2,9.5,2z M4.5,12C4.223877,12,4,12.223877,4,12.5v9c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,21.7765503,4.223999,22.0001831,4.5,22c0.0001831,0,0.0003662,0,0.0006104,0C4.7765503,21.9998169,5.0001831,21.776001,5,21.5v-9C5,12.223877,4.776123,12,4.5,12z M19.5,16c-0.276123,0-0.5,0.223877-0.5,0.5v5c0,0.0001831,0,0.0003662,0,0.0005493C19.0001831,21.7765503,19.223999,22.0001831,19.5,22c0.0001831,0,0.0003662,0,0.0006104,0C19.7765503,21.9998169,20.0001831,21.776001,20,21.5v-5C20,16.223877,19.776123,16,19.5,16z M14.5,8C14.223877,8,14,8.223877,14,8.5v13c0,0.0001831,0,0.0003662,0,0.0005493C14.0001831,21.7765503,14.223999,22.0001831,14.5,22c0.0001831,0,0.0003662,0,0.0006104,0C14.7765503,21.9998169,15.0001831,21.776001,15,21.5v-13C15,8.223877,14.776123,8,14.5,8z" />
                                        </svg>
                                        <span class="tx-semibold mb-4 tx-14 ms-3">Total Revenue</span>
                                        <a href="javascript:;" class="float-end tx-11 text-muted">40 mins ago</a>
                                        <p class="mb-0 text-muted tx-12 ms-3">22.5K New Revenue</p>
                                    </li>
                                    <li class="mt-0">
                                        <svg class="bg-warning-gradient text-white product-icon"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M19.5,7H18V6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3H4.5C3.119812,3.0012817,2.0012817,4.119812,2,5.5V18c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-9C21.9987183,8.119812,20.880188,7.0012817,19.5,7z M4.5,4H15c1.1040039,0.0014038,1.9985962,0.8959961,2,2v1H4.5C3.6715698,7,3,6.3284302,3,5.5S3.6715698,4,4.5,4z M21,16h-2c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2h2V16z M21,11h-2c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3h2v1.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7.4990234C3.4321899,7.8247681,3.9588013,8.0006714,4.5,8h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V11z" />
                                        </svg>
                                        <span class="tx-semibold mb-4 tx-14 ms-3">Total Profit</span>
                                        <a href="javascript:;" class="float-end tx-11 text-muted">1 hour ago</a>
                                        <p class="mb-0 text-muted tx-12 ms-3">4k New Profit</p>
                                    </li>
                                    <li class="mt-0">
                                        <svg class="bg-purple-gradient text-white product-icon"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M12,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C16,9.7908325,14.2091675,8,12,8z M12,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C15,13.6568604,13.6568604,15,12,15z M21.960022,11.8046875C19.9189453,6.9902344,16.1025391,4,12,4s-7.9189453,2.9902344-9.960022,7.8046875c-0.0537109,0.1246948-0.0537109,0.2659302,0,0.390625C4.0810547,17.0097656,7.8974609,20,12,20s7.9190063-2.9902344,9.960022-7.8046875C22.0137329,12.0706177,22.0137329,11.9293823,21.960022,11.8046875z M12,19c-3.6396484,0-7.0556641-2.6767578-8.9550781-7C4.9443359,7.6767578,8.3603516,5,12,5s7.0556641,2.6767578,8.9550781,7C19.0556641,16.3232422,15.6396484,19,12,19z" />
                                        </svg>
                                        <span class="tx-semibold mb-4 tx-14 ms-3">Customer Visits</span>
                                        <a href="javascript:;" class="float-end tx-11 text-muted">1 day ago</a>
                                        <p class="mb-0 text-muted tx-12 ms-3">16% Increased</p>
                                    </li>
                                    <li class="mt-0">
                                        <svg class="bg-primary-gradient text-white product-icon"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M21.8534546,7.1464844l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-14,14C2.0526733,16.2402344,2,16.3673706,2,16.5v5.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l14-14c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221C22.0487671,7.6581421,22.0487061,7.3416138,21.8534546,7.1464844z M7.2930298,21H3v-4.2930298l10.671814-10.671814l4.2926025,4.293457L7.2930298,21z M18.6714478,9.621582l-4.2926636-4.293396L16.5,3.2069702L20.7930298,7.5L18.6714478,9.621582z" />
                                        </svg>
                                        <span class="tx-semibold mb-4 tx-14 ms-3">Customer Reviews</span>
                                        <a href="javascript:;" class="float-end tx-11 text-muted">1 day ago</a>
                                        <p class="mb-0 text-muted tx-12 ms-3">1.4k Reviews</p>
                                    </li>
                                    <li class="mt-0 mb-0">
                                        <svg class="bg-danger-gradient text-white product-icon"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M21.5,17h-15C5.6715698,17,5,16.3284302,5,15.5S5.6715698,14,6.5,14h10.9638672c1.2661133,0.0041504,2.3724365-0.8544312,2.6826172-2.0819702l1.8378906-7.2959595c0.0680542-0.2669678-0.0932617-0.5385742-0.3602905-0.6066284C21.5834961,4.005127,21.5418091,3.999939,21.5,4H6.3908691L6.3642578,3.8935547C6.0869751,2.7798462,5.0861816,1.9986572,3.9384766,2H2.5C2.223877,2,2,2.223877,2,2.5S2.223877,3,2.5,3h1.4384766C4.6269531,2.9990234,5.227356,3.4676514,5.3935547,4.1357422L7.609375,13H6.5C5.1192627,13,4,14.1192627,4,15.5S5.1192627,18,6.5,18h1.0124512C7.1818848,18.4303589,7.0018311,18.9573364,7,19.5C7,20.8807373,8.1192627,22,9.5,22s2.5-1.1192627,2.5-2.5c-0.0018311-0.5426636-0.1818848-1.0696411-0.5124512-1.5h4.0249023C15.1818848,18.4303589,15.0018311,18.9573364,15,19.5c0,1.3807373,1.1192627,2.5,2.5,2.5s2.5-1.1192627,2.5-2.5c-0.0018311-0.5426636-0.1818848-1.0696411-0.5124512-1.5H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17,21.5,17z M6.6416016,5h14.2167969l-1.6816406,6.6738281C18.9780884,12.4567871,18.2716675,13.0037842,17.4638672,13H8.65625L6.6416016,5z M9.5,21C8.6715698,21,8,20.3284302,8,19.5S8.6715698,18,9.5,18s1.5,0.6715698,1.5,1.5C10.9990845,20.328064,10.328064,20.9990845,9.5,21z M17.5,21c-0.8284302,0-1.5-0.6715698-1.5-1.5s0.6715698-1.5,1.5-1.5s1.5,0.6715698,1.5,1.5C18.9990845,20.328064,18.328064,20.9990845,17.5,21z" />
                                        </svg>
                                        <span class="tx-semibold mb-4 tx-14 ms-3">Total Orders</span>
                                        <a href="javascript:;" class="float-end tx-11 text-muted">35 mins ago</a>
                                        <p class="mb-0 text-muted tx-12 ms-3">1k New Orders</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ROW -->

                <!-- ROW -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title tx-18"><label class="main-content-label tx-15">RECENT
                                        ORDERS</label></h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom mb-0  border"
                                        id="recentorders">
                                        <thead>
                                            <tr>
                                                <th class="wd-lg-10p">CUSTOMER</th>
                                                <th class="wd-lg-10p">ORDER ID</th>
                                                <th class="wd-lg-10p">DATE</th>
                                                <th class="wd-lg-10p">PRICE</th>
                                                <th class="wd-lg-10p">STATUS</th>
                                                <th class="wd-lg-10p">COUNTRY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <span class="main-img-user">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{ asset('assets/img/users/1.jpg') }}">
                                                    </span>
                                                    <span class="mt-2 ms-2">Andrea Sun </span>
                                                </td>
                                                <td class="font-weight-normal">#10001</td>
                                                <td class="text-muted tx-13">01 MAR 2021</td>
                                                <td class="font-weight-normal">$146</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">Australia</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <span class="main-img-user">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{ asset('assets/img/users/2.jpg') }}">
                                                    </span>
                                                    <span class="mt-2 ms-2"> Ben Shall </span>
                                                </td>
                                                <td class="font-weight-normal">#10002</td>
                                                <td class="text-muted tx-13">02 MAR 2021</td>
                                                <td class="font-weight-normal">$179</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">Australia</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <div class="avatar bg-info-transparent text-info">
                                                        CT
                                                    </div>
                                                    <span class="mt-2 ms-2"> Cinel Toa</span>
                                                </td>
                                                <td class="font-weight-normal">#10003</td>
                                                <td class=" text-muted tx-13">03 MAR 2021</td>
                                                <td class="font-weight-normal">$188</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">Canada</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <span class="main-img-user">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{ asset('assets/img/users/4.jpg') }}">
                                                    </span>
                                                    <span class="mt-2 ms-2">Dia Mark </span>
                                                </td>
                                                <td class="font-weight-normal">#10004</td>
                                                <td class="text-muted tx-13">04 MAR 2021</td>
                                                <td class="font-weight-normal">$193</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">Denmark</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <div class="avatar bg-success-transparent text-success">
                                                        ER
                                                    </div>
                                                    <span class="mt-2 ms-2"> Eutica Ria </span>
                                                </td>
                                                <td class="font-weight-normal">#10005</td>
                                                <td class="text-muted tx-13">05 MAR 2021</td>
                                                <td class="font-weight-normal">$209</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">France</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <span class="main-img-user">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{ asset('assets/img/users/6.jpg') }}">
                                                    </span>
                                                    <span class="mt-2 ms-2"> Frano Rit </span>
                                                </td>
                                                <td class="font-weight-normal">#10006</td>
                                                <td class="text-muted tx-13">06 MAR 2021</td>
                                                <td class="font-weight-normal">$218</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-warning bg-warning-transparent py-1 px-2">Pending</span>
                                                </td>
                                                <td class="text-dark tx-13">Iran</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <span class="main-img-user">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{ asset('assets/img/users/7.jpg') }}">
                                                    </span>
                                                    <span class="mt-2 ms-2">Goldie Mat </span>
                                                </td>
                                                <td class="font-weight-normal">#10007</td>
                                                <td class="text-muted tx-13">07 MAR 2021</td>
                                                <td class="font-weight-normal">$227</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">London</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <div class="avatar bg-danger-transparent text-danger">
                                                        HD
                                                    </div>
                                                    <span class="mt-2 ms-2"> Henry Dia </span>
                                                </td>
                                                <td class="font-weight-normal">#10008</td>
                                                <td class="text-muted tx-13">08 MAR 2021</td>
                                                <td class="font-weight-normal">$234</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">Malasia</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <span class="main-img-user">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{ asset('assets/img/users/9.jpg') }}">
                                                    </span>
                                                    <span class="mt-2 ms-2"> Hustro Mark </span>
                                                </td>
                                                <td class="font-weight-normal">#10009</td>
                                                <td class="text-muted tx-13">09 MAR 2021</td>
                                                <td class="font-weight-normal">$246</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-danger bg-danger-transparent py-1 px-2">Cancelled</span>
                                                </td>
                                                <td class="text-dark tx-13">Malasia</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <span class="main-img-user">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{ asset('assets/img/users/10.jpg') }}">
                                                    </span>
                                                    <span class="mt-2 ms-2">Jack Fince </span>
                                                </td>
                                                <td class="font-weight-normal">#10010</td>
                                                <td class="text-muted tx-13">10 MAR 2021</td>
                                                <td class="font-weight-normal">$253</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">Russia</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <span class="main-img-user">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{ asset('assets/img/users/11.jpg') }}">
                                                    </span>
                                                    <span class="mt-2 ms-2"> Kanae Tom</span>
                                                </td>
                                                <td class="font-weight-normal">#10011</td>
                                                <td class="text-muted tx-13">11 MAR 2021</td>
                                                <td class="font-weight-normal">$260</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">Sweden</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <div class="avatar bg-secondary-transparent text-secondary">
                                                        LD
                                                    </div>
                                                    <span class="mt-2 ms-2"> Luci Dia </span>
                                                </td>
                                                <td class="font-weight-normal">#10012</td>
                                                <td class="text-muted tx-13">12 MAR 2021</td>
                                                <td class="font-weight-normal">$268</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-warning bg-warning-transparent py-1 px-2">Pending</span>
                                                </td>
                                                <td class="text-dark tx-13">Sweden</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <span class="main-img-user">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{ asset('assets/img/users/3.jpg') }}">
                                                    </span>
                                                    <span class="mt-2 ms-2">Mercy Rico</span>
                                                </td>
                                                <td class="font-weight-normal">#10013</td>
                                                <td class="text-muted tx-13">13 MAR 2021</td>
                                                <td class="font-weight-normal">$275</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">Brazil</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <div class="avatar bg-warning-transparent text-warning">
                                                        NR
                                                    </div>
                                                    <span class="mt-2 ms-2"> Niccy Ricco </span>
                                                </td>
                                                <td class="font-weight-normal">#10014</td>
                                                <td class="text-muted tx-13">14 MAR 2021</td>
                                                <td class="font-weight-normal">$286</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-success bg-success-transparent py-1 px-2">Delivered</span>
                                                </td>
                                                <td class="text-dark tx-13">UK</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal d-flex">
                                                    <span class="main-img-user">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{ asset('assets/img/users/5.jpg') }}">
                                                    </span>
                                                    <span class="mt-2 ms-2"> Vashti Faw </span>
                                                </td>
                                                <td class="font-weight-normal">#10015</td>
                                                <td class="text-muted tx-13">15 MAR 2021</td>
                                                <td class="font-weight-normal">$289</td>
                                                <td class=""><span
                                                        class="badge rounded-pill text-danger bg-danger-transparent py-1 px-2">Cancelled</span>
                                                </td>
                                                <td class="text-dark tx-13">USA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- col end -->
                        </div><!-- col end -->
                    </div><!-- col end -->
                </div>
                <!-- END ROW -->
            </div>
        </div>
    </div>
    <!-- END MAIN-CONTENT -->

@endsection
