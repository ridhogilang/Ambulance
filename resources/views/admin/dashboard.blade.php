@extends('layouts.mainadmin')

@push('header_dashboard')
<link rel="stylesheet" href="css/dashboard.css">
@endpush

@section('container')
<div class="app-container">
    <div class="app-header">
      <div class="app-header-left">
        <span class="app-icon"></span>
        <p class="app-name">Dashboard My Ambulcance</p>
        <div class="search-wrapper">
          <input class="search-input" type="text" placeholder="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
            <defs></defs>
            <circle cx="11" cy="11" r="8"></circle>
            <path d="M21 21l-4.35-4.35"></path>
          </svg>
        </div>
      </div>
      <div class="app-header-right">
        <button class="mode-switch" title="Switch Theme">
          <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
          </svg>
        </button>
        <button class="add-btn" title="Add New Project">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" /></svg>
        </button>
        <button class="notification-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
            <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
          </button>
          <li class="profile-btn nav-item dropdown">
              <img src="https://i.postimg.cc/HW31Mkb1/ridho.jpg" />
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item ml-0">Log Out</button>
                  </form>
                </li>
              </ul>
            </li>

      </div>
      <button class="messages-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
          <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" /></svg>
      </button>
    </div>
    <div class="app-content">
      <div class="app-sidebar">
        <a href="" class="app-sidebar-link active">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
            <polyline points="9 22 9 12 15 12 15 22" /></svg>
        </a>
        <a href="" class="app-sidebar-link">
          <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-pie-chart" viewBox="0 0 24 24">
            <defs />
            <path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z" />
          </svg>
        </a>
        <a href="" class="app-sidebar-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
            <line x1="16" y1="2" x2="16" y2="6" />
            <line x1="8" y1="2" x2="8" y2="6" />
            <line x1="3" y1="10" x2="21" y2="10" /></svg>
        </a>
        <a href="" class="app-sidebar-link">
          <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-settings" viewBox="0 0 24 24">
            <defs />
            <circle cx="12" cy="12" r="3" />
            <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
          </svg>
        </a>
      </div>
      <div class="projects-section">
        <div class="projects-section-header">
          <p>Projects</p>
          <p class="time">December, 12</p>
        </div>
        <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Profile Datatable</h4>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table id="example3" class="display min-w850">
                          <thead>
                              <tr>
                                  <th></th>
                                  <th>Name</th>
                                  <th>Department</th>
                                  <th>Gender</th>
                                  <th>Education</th>
                                  <th>Mobile</th>
                                  <th>Email</th>
                                  <th>Joining Date</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                  <td>Tiger Nixon</td>
                                  <td>Architect</td>
                                  <td>Male</td>
                                  <td>M.COM., P.H.D.</td>
                                  <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                  <td>2011/04/25</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>												
          </td>												
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                  <td>Garrett Winters</td>
                                  <td>Accountant</td>
                                  <td>Female</td>
                                  <td>M.COM., P.H.D.</td>
                                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
          <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2011/07/25</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                  <td>Ashton Cox</td>
                                  <td>Junior Technical</td>
                                  <td>Male</td>
                                  <td>B.COM., M.COM.</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
          <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2009/01/12</td>
          <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                  <td>Cedric Kelly</td>
                                  <td>Developer</td>
                                  <td>Male</td>
          <td>B.COM., M.COM.</td>
                                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2012/03/29</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                  <td>Airi Satou</td>
                                  <td>Accountant</td>
                                  <td>Female</td>
          <td>B.A, B.C.A</td>
                                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2008/11/28</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                  <td>Brielle Williamson</td>
                                  <td>Specialist</td>
                                  <td>Male</td>
          <td>B.COM., M.COM.</td>
                                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2012/12/02</td>
          <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                  <td>Herrod Chandler</td>
                                  <td>Sales Assistant</td>
                                  <td>Female</td>
          <td>B.A, B.C.A</td>
                                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2012/08/06</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                  <td>Rhona Davidson</td>
                                  <td>Integration</td>
                                  <td>Male</td>
          <td>B.TACH, M.TACH</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2010/10/14</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                  <td>Colleen Hurst</td>
                                  <td>Javascript Developer</td>
                                  <td>Female</td>
          <td>B.A, B.C.A</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2009/09/15</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                  <td>Sonya Frost</td>
                                  <td>Software Engineer</td>
                                  <td>Male</td>
          <td>B.COM., M.COM.</td>
                                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2008/12/13</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                  <td>Jena Gaines</td>
                                  <td>Office Manager</td>
                                  <td>Female</td>
          <td>B.TACH, M.TACH</td>
                                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2008/12/19</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                  <td>Quinn Flynn</td>
                                  <td>Support Lead</td>
                                  <td>Male</td>
          <td>B.TACH, M.TACH</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2013/03/03</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                  <td>Charde Marshall</td>
                                  <td>Regional Director</td>
                                  <td>Female</td>
          <td>B.A, B.C.A</td>
                                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2008/10/16</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                  <td>Haley Kennedy</td>
                                  <td>Senior Marketing</td>
                                  <td>Male</td>
          <td>B.COM., M.COM.</td>
                                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2012/12/18</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                  <td>Tatyana Fitzpatrick</td>
                                  <td>Regional Director</td>
                                  <td>Male</td>
          <td>B.TACH, M.TACH</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2010/03/17</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                  <td>Michael Silva</td>
                                  <td>Marketing Designer</td>
                                  <td>Female</td>
          <td>B.A, B.C.A</td>
                                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
          <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
          <td>2012/11/27</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                  <td>Paul Byrd</td>
                                  <td>Financial Officer</td>
                                  <td>Male</td>
          <td>B.TACH, M.TACH</td>
                                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
          <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2010/06/09</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                  <td>Gloria Little</td>
                                  <td>Systems Administrator</td>
                                  <td>Female</td>
          <td>B.A, B.C.A</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2009/04/10</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                  <td>Bradley Greer</td>
                                  <td>Software Engineer</td>
                                  <td>Male</td>
          <td>B.COM., M.COM.</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2012/10/13</td>
          <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                  <td>Dai Rios</td>
                                  <td>Personnel Lead</td>
                                  <td>Male</td>
          <td>B.TACH, M.TACH</td>
                                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2012/09/26</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                  <td>Jenette Caldwell</td>
                                  <td>Development Lead</td>
                                  <td>Female</td>
          <td>B.A, B.C.A</td>
                                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2011/09/03</td>
          <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                  <td>Yuri Berry</td>
                                  <td>Marketing Officer</td>
                                  <td>Male</td>
          <td>B.TACH, M.TACH</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2009/06/25</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                  <td>Caesar Vance</td>
                                  <td>Pre-Sales Support</td>
                                  <td>Male</td>
          <td>B.TACH, M.TACH</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2011/12/12</td>
          <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                  <td>Doris Wilder</td>
                                  <td>Sales Assistant</td>
                                  <td>Female</td>
          <td>B.A, B.C.A</td>
                                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2010/09/20</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                  <td>Angelica Ramos</td>
                                  <td>Executive Officer</td>
                                  <td>Male</td>
          <td>B.COM., M.COM.</td>
                                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2009/10/09</td>
          <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                  <td>Gavin Joyce</td>
                                  <td>Developer</td>
                                  <td>Female</td>
          <td>B.TACH, M.TACH</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2010/12/22</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                  <td>Jennifer Chang</td>
                                  <td>Regional Director</td>
                                  <td>Male</td>
          <td>B.A, B.C.A</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2010/11/14</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                  <td>Brenden Wagner</td>
                                  <td>Software Engineer</td>
                                  <td>Female</td>
          <td>B.TACH, M.TACH</td>
                                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2011/06/07</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                  <td>Fiona Green</td>
                                  <td>Operating Officer</td>
                                  <td>Male</td>
          <td>B.A, B.C.A</td>
                                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2010/03/11</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                              <tr>
          <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                  <td>Shou Itou</td>
                                  <td>Regional Marketing</td>
                                  <td>Female</td>
          <td>B.COM., M.COM.</td>
                                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                  <td>2011/08/14</td>
                                  <td>
            <div class="d-flex">
              <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
          </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

@endsection

{{-- <form action="/logout" method="POST">
    @csrf
    <button type="submit" class="btn mt-4">Log out</button>
</form> --}}