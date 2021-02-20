<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('template')}}/assets/img/avatar.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{request()->is('/') ? 'active' : ''}} ">
                <a class="nav-link" href="javascript:void(0)">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <!-- your sidebar here -->
            <li class="nav-item {{request()->is('mahasiswa') ? 'active' : ''}}" href="mahasiswa">
                <a class="nav-link">
                    <i class="material-icons">person</i>
                    <p>Mahasiswa</p>
                </a>
            </li>
            <li class="nav-item {{request()->is('dosen') ? 'active' : ''}}">
                <a class="nav-link" href="dosen">
                    <i class="material-icons">person</i>
                    <p>Dosen</p>
                </a>
            </li>
        </ul>
    </div>
</div>