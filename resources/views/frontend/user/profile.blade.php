@extends('layouts.frontend.master')

@section('content')

<section class="short-image no-padding blog-short-title">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-lg-12 short-image-title">
        <h5 class="subtitle-margin second-color">dashboard</h5>
        <h1 class="second-color">my account</h1>
        <div class="short-title-separator"></div>
      </div>
    </div>
  </div>
</section>

<section class="section-light section-top-shadow">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-9 col-md-push-3">
        <div class="row">
          <div class="col-xs-12">
            <h5 class="subtitle-margin">edit</h5>
            <h1>Profile<span class="special-color">.</span></h1>
            <div class="title-separator-primary"></div>
          </div>
        </div>	
        <form name="agent-from" action="#" enctype="multipart/form-data">
          <div class="row margin-top-60">
            <div class="col-xs-6 col-xs-offset-3 col-sm-offset-0 col-sm-3 col-md-4">	
              <div class="agent-photos">
                <img src="frontend/images/agent3.jpg" id="agent-profile-photo" class="img-responsive" alt="" />
                <div class="change-photo">
                  <i class="fa fa-pencil fa-lg"></i>
                  <input type="file" name="agent-photo" id="agent-photo" />
                </div>
                <input type="text" disabled="disabled" id="agent-file-name" class="main-input" />
              </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-8">
              <div class="labelled-input">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" class="input-full main-input" placeholder="Enter your Name" value="{{ Auth::user()->name }}"/>
                <div class="clearfix"></div>
              </div>
              <div class="labelled-input">
                <label for="email">Email</label><input id="email" name="email" type="email" class="input-full main-input" placeholder="Enter your Email Address" value="{{ Auth::user()->email }}"/>
                <div class="clearfix"></div>
              </div>
              <div class="labelled-input">
                <label for="phone">Phone</label><input id="phone" name="phone" type="tel" class="input-full main-input" placeholder="Enter your Phone" value="{{ Auth::user()->phone }}"/>
                <div class="clearfix"></div>
              </div>
              <div class="labelled-input last">
                <label for="address">Location</label><input id="address" name="address" type="text" class="input-full main-input" placeholder="Enter your Location" value="{{ Auth::user()->location }}"/>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="row margin-top-15">
            <div class="col-xs-12">
              <div class="labelled-textarea">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="input-full main-input">{{ Auth::user()->bio }}</textarea>
              </div>
            </div>
          </div>
          <div class="row margin-top-30">
            <div class="col-xs-12">
              <div class="info-box">
                <p>Fill this fields only if you want to change your password</p>
                <div class="small-triangle"></div>
                <div class="small-icon"><i class="fa fa-info fa-lg"></i></div>
              </div>
            </div>
          </div>
          <div class="row margin-top-15">
            <div class="col-xs-12 col-lg-6">
              <div class="labelled-input-short">
                <label for="first-name">New Password</label>
                <input id="password" name="password" type="password" class="input-full main-input" placeholder="" value=""/>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-xs-12 col-lg-6">
              <div class="labelled-input-short">
                <label for="first-name">Repeat Password</label>
                <input id="repeat-password" name="repeat-password" type="password" class="input-full main-input" placeholder="" value=""/>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="row margin-top-15">
            <div class="col-xs-12">
              <div class="center-button-cont center-button-cont-border">
                <a href="#" class="button-primary button-shadow">
                  <span>save</span>
                  <div class="button-triangle"></div>
                  <div class="button-triangle2"></div>
                  <div class="button-icon"><i class="fa fa-lg fa-floppy-o"></i></div>
                </a>
              </div>
            </div>
          </div>
        </form>
        <div class="row margin-top-60"></div>
      </div>			
      <div class="col-xs-12 col-md-3 col-md-pull-9">
        <div class="sidebar-left">
          <h3 class="sidebar-title">Welcome back<span class="special-color">.</span></h3>
          <div class="title-separator-primary"></div>

          <div class="profile-info margin-top-60">
            <div class="profile-info-title negative-margin">{{ Auth::user()->name }}</div>
            <img src="frontend/images/comment-photo2.jpg" alt="" class="pull-left" />
            <div class="profile-info-text pull-left">
              <p class="subtitle-margin">Agent</p>
              <p class="">42 Estates</p>

              <a href="{{ url('/logout') }}" class="logout-link margin-top-30" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-lg fa-sign-out"></i>Logout</a>

              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>

            </div>
            <div class="clearfix"></div>
          </div>
          <div class="center-button-cont margin-top-30">
            <a href="{{ url('/change-password') }}" class="button-primary button-shadow button-full">
              <span>My offers</span>
              <div class="button-triangle"></div>
              <div class="button-triangle2"></div>
              <div class="button-icon"><i class="fa fa-th-list"></i></div>
            </a>
          </div>
          <div class="center-button-cont margin-top-15">
            <a href="{{ url('/profile') }}" class="button-primary button-shadow button-full">
              <span>My profile</span>
              <div class="button-triangle"></div>
              <div class="button-triangle2"></div>
              <div class="button-icon"><i class="fa fa-user"></i></div>
            </a>
          </div>
          <div class="center-button-cont margin-top-15">
            <a href="{{ url('/add-property') }}" class="button-alternative button-shadow button-full">
              <span>add property</span>
              <div class="button-triangle"></div>
              <div class="button-triangle2"></div>
              <div class="button-icon"><i class="jfont fa-lg">&#xe804;</i></div>
            </a>
          </div>          
        </div>
      </div>
    </div>
  </div>
</section>

@endsection