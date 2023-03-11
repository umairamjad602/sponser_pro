@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')
<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div style="padding:2%;">
			    <div class="row title-row g-3 py-3 mb-4 d-flex align-items-center justify-content-between">
				    <div class="col-lg-1 col-md-2 col-12 mt-0">
			            <h1 class="app-page-title mb-0">CHAT</h1>
				    </div>
                    <div class=" col-12  col-sm-auto mt-0">
                        <form class="app-search-form docs-search">
                            <input type="text" placeholder="job title, keywords" name="search" class="form-control search-input">
                            <button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div><!--//search-box-->

			    </div><!--//row-->
                <!-- chat-box -->
                <!-- for-desktop -->
                <div class="d-lg-flex align-items-start chat d-none ">
                    <div class="nav flex-column nav-pills chat-names-col me-3 col-md-5 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active text-start" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <ul class="list-unstyled mb-0">
                            <li class="p-2 " >
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold chat-person-name mb-0">Courtney Henry</p>
                                    <p class="small text-muted">Hello, Are you there?</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1">Just now</p>
                                </div>
                              </a>
                            </li>
                            </ul>
                      </button>
                      <button class="nav-link text-start" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <ul class="list-unstyled mb-0">
                            <li class="p-2 " >
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold chat-person-name mb-0">Courtney Henry</p>
                                    <p class="small text-muted">Hello, Are you there?</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1"> Today 11:30 PM</p>
                                </div>
                              </a>
                            </li>
                            </ul>
                      </button>
                      <button class="nav-link text-start" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <ul class="list-unstyled mb-0">
                            <li class="p-2" >
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold chat-person-name mb-0">Courtney Henry</p>
                                    <p class="small text-muted">Hello, Are you there?</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1">Just now</p>
                                </div>
                              </a>
                            </li>
                            </ul>
                      </button>
                      <button class="nav-link text-start" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <ul class="list-unstyled mb-0">
                            <li class="p-2 " >
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold chat-person-name mb-0">Courtney Henry</p>
                                    <p class="small text-muted">Hello, Are you there?</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1"> Today 11:30 PM</p>
                                </div>
                              </a>
                            </li>
                            </ul>
                      </button>
                    </div>
                    <div class="tab-content col-md-7" id="v-pills-tabContent">
                      <div class="tab-pane fade show active chat-box" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       <div class="d-flex align-items-center chat-head">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                        alt="avatar 1" style="width: 50px; height: 100%;" class="rounded-circle">
                        <p class="fw-bold mb-0 chat-person-name px-3">Courtney Henry</p>

                       </div>
                        <div class=" mesages-container">
                        <div class="  chat-card  ">

                            <div class="chat-card-body p-3 has-card-actions">

                                <div class="d-flex flex-row justify-content-start">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                      alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle ">
                                    <div>
                                      <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                        dolor
                                        sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore
                                        magna aliqua.</p>
                                      <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                    </div>
                                  </div>


                                <div class="chat-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg>
                                        </div><!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Reply</a></li>
                                            <li><a class="dropdown-item" href="#">Copy text</a></li>
                                            <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                        </ul>
                                    </div><!--//dropdown-->
                                </div><!--//app-card-actions-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                        <div class="  chat2-card ">

                            <div class="chat2-card-body p-3 has-card-actions">

                                <div class="d-flex flex-row justify-content-end">
                                    <div>
                                      <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                        quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                      <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                    </div>
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                      alt="avatar 1" style="width: 45px; height: 100%;">
                                  </div>


                                <div class="chat2-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg>
                                        </div><!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Reply</a></li>
                                            <li><a class="dropdown-item" href="#">Copy text</a></li>
                                            <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                        </ul>
                                    </div><!--//dropdown-->
                                </div><!--//app-card-actions-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                        <div class="  chat-card  ">

                            <div class="chat-card-body p-3 has-card-actions">

                                <div class="d-flex flex-row justify-content-start">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                      alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle ">
                                    <div>
                                      <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                        dolor
                                        sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore
                                        magna aliqua.</p>
                                      <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                    </div>
                                  </div>


                                <div class="chat-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg>
                                        </div><!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Reply</a></li>
                                            <li><a class="dropdown-item" href="#">Copy text</a></li>
                                            <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                        </ul>
                                    </div><!--//dropdown-->
                                </div><!--//app-card-actions-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                        <div class="  chat2-card ">

                            <div class="chat2-card-body p-3 has-card-actions">

                                <div class="d-flex flex-row justify-content-end">
                                    <div>
                                      <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                        quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                      <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                    </div>
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                      alt="avatar 1" style="width: 45px; height: 100%;">
                                  </div>


                                <div class="chat2-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg>
                                        </div><!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Reply</a></li>
                                            <li><a class="dropdown-item" href="#">Copy text</a></li>
                                            <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                        </ul>
                                    </div><!--//dropdown-->
                                </div><!--//app-card-actions-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                        <div class="  chat-card  ">

                            <div class="chat-card-body p-3 has-card-actions">

                                <div class="d-flex flex-row justify-content-start">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                      alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle ">
                                    <div>
                                      <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                        dolor
                                        sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore
                                        magna aliqua.</p>
                                      <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                    </div>
                                  </div>


                                <div class="chat-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg>
                                        </div><!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Reply</a></li>
                                            <li><a class="dropdown-item" href="#">Copy text</a></li>
                                            <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                        </ul>
                                    </div><!--//dropdown-->
                                </div><!--//app-card-actions-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                        <div class="  chat2-card ">

                            <div class="chat2-card-body p-3 has-card-actions">

                                <div class="d-flex flex-row justify-content-end">
                                    <div>
                                      <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                        quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                      <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                    </div>
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                      alt="avatar 1" style="width: 45px; height: 100%;">
                                  </div>


                                <div class="chat2-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg>
                                        </div><!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Reply</a></li>
                                            <li><a class="dropdown-item" href="#">Copy text</a></li>
                                            <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                        </ul>
                                    </div><!--//dropdown-->
                                </div><!--//app-card-actions-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                    </div>
                    <div class="text-muted d-flex send-input justify-content-start align-items-center px-4 mx-4">

                        <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                          placeholder="Type message">
                        <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                        <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                        <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                      </div>
                      </div>
                      <div class="tab-pane fade chat-box" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="d-flex align-items-center chat-head">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp"
                            alt="avatar 1" style="width: 50px; height: 100%;" class="rounded-circle">
                            <p class="fw-bold chat-person-name mb-0 px-3">Courtney Henry</p>

                           </div>
                            <div class="mesages-container">
                            <div class="  chat-card  ">

                                <div class="chat-card-body p-3 has-card-actions">

                                    <div class="d-flex flex-row justify-content-start">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp"
                                          alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                                        <div>
                                          <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                            dolor
                                            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore
                                            magna aliqua.</p>
                                          <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                        </div>
                                      </div>


                                    <div class="chat-card-actions">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
                                            </div><!--//dropdown-toggle-->
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Reply</a></li>
                                                <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                            </ul>
                                        </div><!--//dropdown-->
                                    </div><!--//app-card-actions-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                            <div class="  chat2-card  ">

                                <div class="chat2-card-body p-3 has-card-actions">

                                    <div class="d-flex flex-row justify-content-end">
                                        <div>
                                          <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                            quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                          <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                        </div>
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                          alt="avatar 1" style="width: 45px; height: 100%;">
                                      </div>


                                    <div class="chat2-card-actions">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
                                            </div><!--//dropdown-toggle-->
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Reply</a></li>
                                                <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                            </ul>
                                        </div><!--//dropdown-->
                                    </div><!--//app-card-actions-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                        <div class="text-muted d-flex send-input justify-content-start align-items-center px-4 mx-4">

                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                              placeholder="Type message">
                            <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                            <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                            <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                          </div>
                      </div>
                      <div class="tab-pane fade chat-box" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="d-flex align-items-center chat-head">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp"
                            alt="avatar 1" style="width: 50px; height: 100%;" class="rounded-circle">
                            <p class="fw-bold chat-person-name mb-0 px-3">Courtney Henry</p>

                           </div>
                            <div class="mesages-container">
                            <div class="  chat-card  ">

                                <div class="chat-card-body p-3 has-card-actions">

                                    <div class="d-flex flex-row justify-content-start">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp"
                                          alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                                        <div>
                                          <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                            dolor
                                            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore
                                            magna aliqua.</p>
                                          <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                        </div>
                                      </div>


                                    <div class="chat-card-actions">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
                                            </div><!--//dropdown-toggle-->
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Reply</a></li>
                                                <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                            </ul>
                                        </div><!--//dropdown-->
                                    </div><!--//app-card-actions-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                            <div class="  chat2-card  ">

                                <div class="chat2-card-body p-3 has-card-actions">

                                    <div class="d-flex flex-row justify-content-end">
                                        <div>
                                          <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                            quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                          <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                        </div>
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                          alt="avatar 1" style="width: 45px; height: 100%;">
                                      </div>


                                    <div class="chat2-card-actions">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
                                            </div><!--//dropdown-toggle-->
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Reply</a></li>
                                                <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                            </ul>
                                        </div><!--//dropdown-->
                                    </div><!--//app-card-actions-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                        <div class="text-muted d-flex send-input justify-content-start align-items-center px-4 mx-4">

                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                              placeholder="Type message">
                            <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                            <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                            <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                          </div>
                      </div>
                      <div class="tab-pane fade chat-box" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="d-flex align-items-center chat-head">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp"
                            alt="avatar 1" style="width: 50px; height: 100%;" class="rounded-circle">
                            <p class="fw-bold chat-person-name mb-0 px-3">Courtney Henry</p>

                           </div>
                            <div class="mesages-container">
                            <div class="  chat-card ">

                                <div class="chat-card-body p-3 has-card-actions">

                                    <div class="d-flex flex-row justify-content-start">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp"
                                          alt="avatar 1" style="width: 45px; height: 100%;">
                                        <div>
                                          <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                            dolor
                                            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore
                                            magna aliqua.</p>
                                          <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                        </div>
                                      </div>


                                    <div class="chat-card-actions">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
                                            </div><!--//dropdown-toggle-->
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Reply</a></li>
                                                <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                            </ul>
                                        </div><!--//dropdown-->
                                    </div><!--//app-card-actions-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                            <div class="  chat2-card  ">

                                <div class="chat2-card-body p-3 has-card-actions">

                                    <div class="d-flex flex-row justify-content-end">
                                        <div>
                                          <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                            quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                          <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                        </div>
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                          alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                                      </div>


                                    <div class="chat2-card-actions">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
                                            </div><!--//dropdown-toggle-->
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Reply</a></li>
                                                <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                            </ul>
                                        </div><!--//dropdown-->
                                    </div><!--//app-card-actions-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                        <div class="text-muted d-flex send-input justify-content-start align-items-center px-4 mx-4">

                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                              placeholder="Type message">
                            <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                            <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                            <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                          </div>
                      </div>
                    </div>
                  </div>































                  <!-- for-mobile -->
                  <div class="d-lg-none d-md-block chat-box">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <ul class="list-unstyled mb-0">
                                    <li class="p-2 " >
                                      <a href="#!" class="d-flex justify-content-between">
                                        <div class="d-flex flex-row">
                                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar"
                                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                          <div class="pt-1">
                                            <p class="fw-bold chat-person-name mb-0">Courtney Henry</p>
                                            <p class="small text-muted">Hello, Are you there?</p>
                                          </div>
                                        </div>
                                        <div class="pt-1">
                                          <p class="small text-muted mb-1">Just now</p>
                                        </div>
                                      </a>
                                    </li>
                                    </ul>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body chat-box">

                                    <div class="mesages-container">
                                    <div class="  chat-card  ">

                                        <div class="chat-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle ">
                                                <div>
                                                  <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                  <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                                </div>
                                              </div>


                                            <div class="chat-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                    <div class="  chat2-card   ">

                                        <div class="chat2-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                  <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                  <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                                </div>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;">
                                              </div>


                                            <div class="chat2-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                    <div class="  chat-card  ">

                                        <div class="chat-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle ">
                                                <div>
                                                  <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                  <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                                </div>
                                              </div>


                                            <div class="chat-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                    <div class="  chat2-card   ">

                                        <div class="chat2-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                  <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                  <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                                </div>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;">
                                              </div>


                                            <div class="chat2-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                    <div class="  chat-card  ">

                                        <div class="chat-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle ">
                                                <div>
                                                  <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                  <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                                </div>
                                              </div>


                                            <div class="chat-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                    <div class="  chat2-card   ">

                                        <div class="chat2-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                  <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                  <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                                </div>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;">
                                              </div>


                                            <div class="chat2-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                    <div class="  chat-card  ">

                                        <div class="chat-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle ">
                                                <div>
                                                  <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                  <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                                </div>
                                              </div>


                                            <div class="chat-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                    <div class="  chat2-card   ">

                                        <div class="chat2-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                  <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                  <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                                </div>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;">
                                              </div>


                                            <div class="chat2-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                </div>
                                <div class="text-muted d-flex send-input justify-content-start align-items-center px-4 mx-4">

                                    <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                                      placeholder="Type message">
                                    <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                                    <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                                    <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                                  </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <ul class="list-unstyled mb-0">
                                    <li class="p-2 " >
                                      <a href="#!" class="d-flex justify-content-between">
                                        <div class="d-flex flex-row">
                                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp" alt="avatar"
                                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                          <div class="pt-1">
                                            <p class="fw-bold chat-person-name mb-0">Courtney Henry</p>
                                            <p class="small text-muted">Hello, Are you there?</p>
                                          </div>
                                        </div>
                                        <div class="pt-1">
                                          <p class="small text-muted mb-1"> Today 11:30 PM</p>
                                        </div>
                                      </a>
                                    </li>
                                    </ul>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body chat-box">
                                <div class="mesages-container">
                                    <div class="  chat-card  ">

                                        <div class="chat-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                                                <div>
                                                  <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                  <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                                </div>
                                              </div>


                                            <div class="chat-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                    <div class="  chat2-card   ">

                                        <div class="chat2-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                  <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                  <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                                </div>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;">
                                              </div>


                                            <div class="chat2-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                </div>
                                <div class="text-muted d-flex send-input justify-content-start align-items-center px-4 mx-4">

                                    <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                                      placeholder="Type message">
                                    <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                                    <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                                    <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                                  </div>
                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                                <ul class="list-unstyled mb-0">
                                    <li class="p-2 " >
                                      <a href="#!" class="d-flex justify-content-between">
                                        <div class="d-flex flex-row">
                                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp" alt="avatar"
                                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                          <div class="pt-1">
                                            <p class="fw-bold chat-person-name mb-0">Courtney Henry</p>
                                            <p class="small text-muted">Hello, Are you there?</p>
                                          </div>
                                        </div>
                                        <div class="pt-1">
                                          <p class="small text-muted mb-1"> Today 11:30 PM</p>
                                        </div>
                                      </a>
                                    </li>
                                    </ul>
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                              <div class="accordion-body">
                                <div class="mesages-container">
                                    <div class="  chat-card   ">

                                        <div class="chat-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                                                <div>
                                                  <p class="small p-2 pe-5 ms-3 text-white mb-1 rounded-3" style="background-color: #63AF31;">Lorem ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                  <p class="small ms-3 mb-3 rounded-3 text-muted ">12:00 PM | Aug 13</p>
                                                </div>
                                              </div>


                                            <div class="chat-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                    <div class="  chat2-card    ">

                                        <div class="chat2-card-body p-3 has-card-actions">

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                  <p class="small p-2 ps-5 me-3 mb-1  rounded-3 "  style="background-color: #FAFAFA;">Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                  <p class="small me-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                                </div>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                  alt="avatar 1" style="width: 45px; height: 100%;">
                                              </div>


                                            <div class="chat2-card-actions">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                                                    </div><!--//dropdown-toggle-->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Reply</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy text</a></li>
                                                        <li><a class="dropdown-item" href="#">Pin messages</a></li>

                                                    </ul>
                                                </div><!--//dropdown-->
                                            </div><!--//app-card-actions-->

                                        </div><!--//app-card-body-->

                                    </div><!--//app-card-->
                                </div>
                                <div class="text-muted d-flex send-input justify-content-start align-items-center px-4 mx-4">

                                    <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                                      placeholder="Type message">
                                    <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                                    <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                                    <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                                  </div>
                            </div>
                            </div>
                          </div>
                      </div>
                  </div>










			 <!-- chat-box -->
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

@endsection
@section('script')
@endsection
