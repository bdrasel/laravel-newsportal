    @php
       $editData = DB::table('users')->where('id',Auth::user()->id)->first();
   @endphp

  <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{ (!empty($editData->image)) ? url('uploads/user/'.$editData->image) : url('uploads/avatar.png') }}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                  <span>{{ Auth::user()->email }}</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="{{ route('user.account') }}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('show.password') }}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          @if(Auth::user()->category == 1)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('categories') }}">Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('subcategories.index') }}">Subctegory</a></li>
              </ul>
            </div>
          </li>
          @else

          @endif

          @if(Auth::user()->district == 1)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#district" aria-expanded="false" aria-controls="district">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">District</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="district">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('distracts.index') }}"> District </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('subdistracts.index') }}"> Subdistrict </a></li>
              </ul>
            </div>
          </li>
          @else

          @endif

          @if(Auth::user()->post == 1)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
              <span class="menu-icon">
                <i class="mdi mdi-hackernews"></i>
              </span>
              <span class="menu-title">Post</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="post">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('posts.index') }}"> All Post </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('posts.create') }}"> Add Post </a></li>
              </ul>
            </div>
          </li>
          @else

          @endif

          @if(Auth::user()->setting == 1)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">
              <span class="menu-icon">
                <i class="mdi mdi-account-settings"></i>
              </span>
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="setting">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('social') }}"> Social Link </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('seo.setting') }}"> Seo Setting </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('prayer.setting') }}"> Prayer Setting </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('livetv.setting') }}"> Live Tv </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('notice.setting') }}"> Notice Setting </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('mainwebsite.setting') }}"> Website Setting </a></li>
              </ul>
            </div>
          </li>
          @else

          @endif

          @if(Auth::user()->website == 1)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#website" aria-expanded="false" aria-controls="website">
              <span class="menu-icon">
                <i class="mdi mdi-application"></i>
              </span>
              <span class="menu-title">Website</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="website">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('all.website') }}"> All Website Link</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('add.website') }}"> Add Website Link</a></li>
              </ul>
            </div>
          </li>
          @else

          @endif

          @if(Auth::user()->gallery == 1)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="false" aria-controls="gallery">
              <span class="menu-icon">
                <i class="mdi mdi-arrange-bring-forward"></i>
              </span>
              <span class="menu-title">Gallery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="gallery">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('all.photo') }}"> Photo Gallery</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('videos.index') }}"> Video Gallery</a></li>
              </ul>
            </div>
          </li>
          @else

          @endif

          @if(Auth::user()->ads == 1)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#advertisement" aria-expanded="false" aria-controls="advertisement">
              <span class="menu-icon">
                <i class="mdi mdi-arrange-bring-forward"></i>
              </span>
              <span class="menu-title">Advertisement</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="advertisement">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('list.ads') }}">Ads List</a></li>
              </ul>
            </div>
          </li>
          @else

          @endif

          @if(Auth::user()->role == 1)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#userRole" aria-expanded="false" aria-controls="userRole">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">User Role</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="userRole">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('add.user') }}">Add User</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('user.index') }}">All User</a></li>
              </ul>
            </div>
          </li>
          @else

          @endif

        </ul>