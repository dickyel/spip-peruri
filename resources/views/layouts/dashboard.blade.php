<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Menarra Finance Dashboard Page" />
    <meta
      name="keywords"
      content="HTML, CSS, JavaScript, Bootstrap, Chart JS"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Rachma | @rachmadzii" />

    <title>@yield('title')</title>


    @stack('before-styles')
    @include('components.styles-dashboard')
    @stack('after-styles')


  </head>
  <body>
    <!-- Nav Sidebar -->

   
    <nav
    class="sidebar offcanvas-md offcanvas-start"
    data-bs-scroll="true"
    data-bs-backdrop="false"
    >
  
      <div class="d-flex justify-content-end m-3 d-block d-md-none">
        <button
          aria-label="Close"
          data-bs-dismiss="offcanvas"
          data-bs-target=".sidebar"
          class="btn p-0 border-0 fs-4"
        >
          <i class="fas fa-close"></i>
        </button>
      </div>
      <div class="d-flex justify-content-center mt-md-5 mb-5">
        <img
          src="{{ asset('/spip/dashboard/assets/images/peruri-logo.png') }}"
          alt="Logo"
          width="140px"
          height="40px"
        />
      </div>
    
      <div class="pt-2 d-flex flex-column gap-5">

        
          <div class="menu p-0" style="max-height: calc(100vh - 180px); overflow-y: auto;">
            <p>Main Menu </p>
            <ul class="list-unstyled mb-4">
              <li>
                <a href="#" class="item-menu active">
                  Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="item-menu">
          
                  Metodologi SPIP
                </a>
              </li>
              <li>
                <a href="#assesMenu " data-bs-toggle="collapse" aria-expanded="false" class="item-menu dropdown-toggle">
          
                  Asessment SPIP
                </a>
                <ul class="collapse list-unstyled" id="assesMenu">
                  <li>
                      <a href="#assesMenu2" class="item-menu" data-bs-toggle="collapse" aria-expanded="false" class="item-menu dropdown-toggle">Menu All Divisi</a>
                      <ul class="collapse list-unstyled" id="assesMenu2">
                        <li>
                          <a href="" class="item-menu">Kuesioner</a>
                        </li>
                        <li>
                          <a href="" class="item-menu">Status</a>
                        </li>
                        <li>
                          <a href="" class="item-menu">Skor Card</a>
                        </li>
                      </ul>
                  </li>
                  
                </ul>
              </li>
              
              
              <li>
              <li>
                <a href="#" class="item-menu ">
              
                  Surat Tugas 
                </a>
              </li>
              <li>
                <a href="#" class="item-menu">
              
                  Sampel Divisi
                </a>
              </li>
              <li>
                <a href="#" class="item-menu">
              
                  Entry Meet
                </a>
              </li>
              <li>
                <a href="#kuesioner" data-bs-toggle="collapse" aria-expanded="false" class="item-menu dropdown-toggle">
              
                  Internal Control Quisioner
                </a>
                <ul class="collapse list-unstyled" id="kuesioner">
                  <li>
                    <a href="#" class="item-menu">Lembar</a>
                  </li>
                  <li>
                    <a href="#" class="item-menu">Upload Data</a>
                  </li>
                  <li>
                    <a href="#" class="item-menu">Permintaan Dokumen</a>
                  </li>
                  <li>
                    <a href="#" class="item-menu">Expose Meet & Exit Meet</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" class="item-menu">
              
                  Laporan
                </a>
              </li>
            </ul>
          </div>
        
      
      </div>

    
    </nav>

    <!-- Main Content -->
    <main class="content">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div>
            <button
              class="sidebarCollapseDefault btn p-0 border-0 d-none d-md-block"
              aria-label="Hamburger Button"
            >
              <i class="fa-solid fa-bars"></i>
            </button>
            <button
              data-bs-toggle="offcanvas"
              data-bs-target=".sidebar"
              aria-controls="sidebar"
              aria-label="Hamburger Button"
              class="sidebarCollapseMobile btn p-0 border-0 d-block d-md-none"
            >
              <i class="fa-solid fa-bars"></i>
            </button>
          </div>
          <div class="d-flex align-items-center justify-content-end gap-4">
            Hallo , Muhammad Dikky Purwanto  
            <img
              src="{{ asset('./spip/dashboard/assets/images/avatar.jpg') }}"
              alt="Photo Profile"
              class="avatar"
              
            />

          </div>
        </div>
      </nav>

      @yield('content')
    </main>

    @stack('before-scripts')
    @include('components.scripts-dashboard')
    @stack('after-styles')
  </body>
</html>
