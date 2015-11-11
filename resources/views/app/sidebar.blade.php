 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              

              	  <h5 class="centered">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h5>
              	  	
                  <li class="mt" {{ Request::is( '/app*') ? 'class="active"' : '' }}>
                      <a href="/app">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Find Food</span>
                      </a>
                      <ul class="sub">
                          <li {{ Request::is( '/map*') ? 'class="active"' : '' }}><a  href="/map">Maps</a></li>
                          <li {{ Request::is( '/list*') ? 'class="active"' : '' }}><a  href="/list">Directory</a></li>
                      </ul>
                  </li>

                  <li {{ Request::is( '/settings*') ? 'class="active"' : '' }} class="sub-menu">
                      <a href="/settings" >
                          <i class="fa fa-cogs"></i>
                          <span>Settings</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->