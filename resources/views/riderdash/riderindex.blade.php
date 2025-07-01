
@extends('riderdash.layout')
@section('content2')

    <div class="body-wrapper">
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <!--  Row 1 -->
          <div class="row">
            <div class="col-lg-8">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h3 class="card-title fw-bold">parcel status</h3>
                      <p class="card-subtitle fw-bold">
                        our courier management system is designed to provide a seamless <br> experience for both riders  and customers.
                      </p>
                    </div>
                    <div class="ms-auto">
                      <ul class="list-unstyled mb-0">
                        <li class="list-inline-item text-primary">
                          <span class="round-8 text-bg-primary rounded-circle me-1 d-inline-block"></span>
                          RECEIVED
                        </li>
                        <li class="list-inline-item text-info">
                          <span class="round-8 text-bg-info rounded-circle me-1 d-inline-block"></span>
                        DELIVERED
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div id="sales-overview" class="mt-4 mx-n6"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card overflow-hidden">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-start">
                    <div>
                      <h4 class="card-title">Weekly Stats</h4>
                      <p class="card-subtitle">Parcels Delivered </p>
                    </div>
                    <div class="ms-auto">
                      <div class="dropdown">
                        <a href="javascript:void(0)" class="text-muted" id="year1-dropdown" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <i class="ti ti-dots fs-7"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="year1-dropdown">
                          <li>
                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 pb-3 d-flex align-items-center">
                    <span class="btn btn-primary rounded-circle round-48 hstack justify-content-center">
                      <i class="ti ti-shopping-cart fs-6"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bolder fs-4">Rider of the Week</h5>
                      <span class="text-muted fs-3">Johnathan Doe</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-secondary-subtle text-muted">+68%</span>
                    </div>
                  </div>
                  <div class="py-3 d-flex align-items-center">
                    <span class="btn btn-warning rounded-circle round-48 hstack justify-content-center">
                      <i class="ti ti-star fs-6"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bolder fs-4">Most Active City</h5>
                      <span class="text-muted fs-3">karachi</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-secondary-subtle text-muted">+68%</span>
                    </div>
                  </div>
                  <div class="py-3 d-flex align-items-center">
                    <span class="btn btn-success rounded-circle round-48 hstack justify-content-center">
                      <i class="ti ti-message-dots fs-6"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bolder fs-4">On-Time Delivery rate</h5>
                      <span class="text-muted fs-3">In pakistan</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-secondary-subtle text-muted">+50%</span>
                    </div>
                  </div>
                  <div class="pt-3 mb-7 d-flex align-items-center">
                    <span class="btn btn-secondary rounded-circle round-48 hstack justify-content-center">
                      <i class="ti ti-diamond fs-6"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bolder fs-4">Top sales</h5>
                      <span class="text-muted fs-3">islamabad</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-secondary-subtle text-muted">+15%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Rider Performance</h4>
                      <p class="card-subtitle">
                        projected through the sales and on time delivery
                      </p>
                    </div>
                    <div class="ms-auto mt-3 mt-md-0">
                      <select class="form-select theme-select border-0" aria-label="Default select example">
                        <option value="1">March 2025</option>
                        <option value="2">april 2025</option>
                        <option value="3">may 2025</option>
                      </select>
                    </div>
                  </div>
                  <div class="table-responsive mt-4">
                    <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                      <thead>
                        <tr>
                          <th scope="col" class="px-0 text-muted">
                            Rider	
                          </th>
                      
                          <th scope="col" class="px-0 text-muted">
                           Deliveries
                          </th>
                          <th scope="col" class="px-0 text-muted text-end">
                            On-Time %
                          </th>
                            <th scope="col" class="px-0 text-muted text-end">
                            Avg. Delivery Time
                          </th>
                            <th scope="col" class="px-0 text-muted text-end">
                           Performance
                          </th>
                            <th scope="col" class="px-0 text-muted text-end">
                            Earnings
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="px-0">
                            <div class="d-flex align-items-center">
                              <img src="./assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                                alt="flexy" />
                              <div class="ms-3">
                                <h6 class="mb-0 fw-bolder">shoaib akhter</h6>
                                <span class="text-muted">since:17 years</span>
                              </div>
                            </div>
                          </td>
                          <td class="px-0">1000</td>
                          <td class="px-0">
                            <span class="badge bg-info">80%</span>
                          </td>
                          <td class="px-0 text-dark fw-medium text-end">
                            22mins
                          </td>
                          <td class="px-0  fw-medium text-end">
                            excellent
                          </td>
                           <td class="px-0  fw-medium text-end">
                            1.5lacs per month
                          </td>
                        </tr>
                         <tr>
                          <td class="px-0">
                            <div class="d-flex align-items-center">
                              <img src="./assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                                alt="flexy" />
                              <div class="ms-3">
                                <h6 class="mb-0 fw-bolder">areeb khan</h6>
                                <span class="text-muted">since: 4 years</span>
                              </div>
                            </div>
                          </td>
                          <td class="px-0">600</td>
                          <td class="px-0">
                            <span class="badge bg-info">92%</span>
                          </td>
                          <td class="px-0 text-dark fw-medium text-end">
                            19mins
                          </td>
                          <td class="px-0  fw-medium text-end">
                            very good
                          </td>
                           <td class="px-0  fw-medium text-end">
                           95k per month
                          </td>
                        </tr>
                         <tr>
                          <td class="px-0">
                            <div class="d-flex align-items-center">
                              <img src="./assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                                alt="flexy" />
                              <div class="ms-3">
                                <h6 class="mb-0 fw-bolder">zoya malik</h6>
                                <span class="text-muted">since: 2 years</span>
                              </div>
                            </div>
                          </td>
                          <td class="px-0">760</td>
                          <td class="px-0">
                            <span class="badge bg-info">85%</span>
                          </td>
                          <td class="px-0 text-dark fw-medium text-end">
                          24mins
                          </td>
                          <td class="px-0  fw-medium text-end">
                          good
                          </td>
                           <td class="px-0  fw-medium text-end">
                        83k per month
                          </td>
                        </tr>
                         <tr>
                          <td class="px-0">
                            <div class="d-flex align-items-center">
                              <img src="./assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                                alt="flexy" />
                              <div class="ms-3">
                                <h6 class="mb-0 fw-bolder">rizwan alir</h6>
                                <span class="text-muted">since: 6 years</span>
                              </div>
                            </div>
                          </td>
                          <td class="px-0">950</td>
                          <td class="px-0">
                            <span class="badge bg-info">88%</span>
                          </td>
                          <td class="px-0 text-dark fw-medium text-end">
                          21mins
                          </td>
                          <td class="px-0  fw-medium text-end">
                           very good
                          </td>
                           <td class="px-0  fw-medium text-end">
                           1.1lacs per month
                          </td>
                        </tr>
                         <tr>
                          <td class="px-0">
                            <div class="d-flex align-items-center">
                              <img src="./assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                                alt="flexy" />
                              <div class="ms-3">
                                <h6 class="mb-0 fw-bolder">hamza tariq</h6>
                                <span class="text-muted">since: 1 year</span>
                              </div>
                            </div>
                          </td>
                          <td class="px-0">610</td>
                          <td class="px-0">
                            <span class="badge bg-info">72%</span>
                          </td>
                          <td class="px-0 text-dark fw-medium text-end">
                           27mins
                          </td>
                          <td class="px-0  fw-medium text-end">
                           average
                          </td>
                           <td class="px-0  fw-medium text-end">
                          65k per month
                          </td>
                        </tr>
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Recent Comments</h4>
                </div>
                <div class="comment-widgets scrollable mb-2 common-widget" style="height: 465px" data-simplebar="">
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row border-bottom p-3 gap-3">
                    <div>
                      <span><img src="./assets/images/profile/user-3.jpg" class="rounded-circle" alt="user"
                          width="50" /></span>
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="fw-medium">James Anderson</h6>
                      <p class="mb-1 fs-2 text-muted">
                        Lorem Ipsum is simply dummy text of the printing and
                        type etting industry
                      </p>
                      <div class="comment-footer mt-2">
                        <div class="d-flex align-items-center">
                          <span class="
                              badge
                              bg-info-subtle
                              text-info
                              
                            ">Pending</span>
                          <span class="action-icons">
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-edit fs-5"></i></a>
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-check fs-5"></i></a>
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-heart fs-5"></i></a>
                          </span>
                        </div>
                        <span class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            d-block
                            mt-2
                            text-end
                          ">April 14, 2025</span>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row border-bottom active p-3 gap-3">
                    <div>
                      <span><img src="./assets/images/profile/user-5.jpg" class="rounded-circle" alt="user"
                          width="50" /></span>
                    </div>
                    <div class="comment-text active w-100">
                      <h6 class="fw-medium">Michael Jorden</h6>
                      <p class="mb-1 fs-2 text-muted">
                        Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </p>
                      <div class="comment-footer mt-2">
                        <div class="d-flex align-items-center">
                          <span class="
                              badge
                              bg-success-subtle
                              text-success
                              
                            ">Approved</span>
                          <span class="action-icons active">
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-edit fs-5"></i></a>
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-circle-x fs-5"></i></a>
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-heart text-danger fs-5"></i></a>
                          </span>
                        </div>
                        <span class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            text-end
                            mt-2
                            d-block
                          ">April 14, 2025</span>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row border-bottom p-3 gap-3">
                    <div>
                      <span><img src="./assets/images/profile/user-6.jpg" class="rounded-circle" alt="user"
                          width="50" /></span>
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="fw-medium">Johnathan Doeting</h6>
                      <p class="mb-1 fs-2 text-muted">
                        Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </p>
                      <div class="comment-footer mt-2">
                        <div class="d-flex align-items-center">
                          <span class="
                              badge
                              bg-danger-subtle
                              text-danger
                              
                            ">Rejected</span>
                          <span class="action-icons">
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-edit fs-5"></i></a>
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-check fs-5"></i></a>
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-heart fs-5"></i></a>
                          </span>
                        </div>
                        <span class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            d-block
                            mt-2
                            text-end
                          ">April 14, 2025</span>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row p-3 gap-3">
                    <div>
                      <span><img src="./assets/images/profile/user-4.jpg" class="rounded-circle" alt="user"
                          width="50" /></span>
                    </div>
                    <div class="comment-text w-100">
                     <h6 class="fw-medium">Areeba Khan</h6>
<p class="mb-1 fs-2 text-muted">
Delivered 25 parcels today with zero delays. Rider requested an app upgrade for live traffic.
</p>
<span class="badge bg-info-subtle text-info">Pending</span>
<span class="text-muted ms-auto fw-normal fs-2 d-block mt-2 text-end">June 30, 2025</span>

                          <span class="action-icons">
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-edit fs-5"></i></a>
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-check fs-5"></i></a>
                            <a href="javascript:void(0)" class="ps-3"><i class="ti ti-heart fs-5"></i></a>
                          </span>
                        </div>
                        <span class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            d-block
                            text-end
                            mt-2
                          ">April 14, 2025</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
          
        </div>
      </div>
    </div>
@endsection