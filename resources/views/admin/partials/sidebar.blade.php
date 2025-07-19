<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
          <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87  " />
            <polygon class="st0" points="96,69 33,69 42,51 105,51  " />
            <polygon class="st0" points="78,33 15,33 24,15 87,15  " />
          </g>
        </svg>
      </a>
    </div>

                                 {{-- dashboard-nav --}}
        <x-side-bar  title="dashboard"  href="{{ route('index') }} " icon=" fe-home"></x-side-bar>


    <p class="text-muted nav-heading mt-4 mb-1">
      <span>{{ __('keywords.components') }}</span>
    </p>
                            {{-- services-nav --}}
        <x-side-bar  title="services"  href="{{ route('services.index') }} " icon=" fe-grid"></x-side-bar>
                            {{-- features-nav --}}
                            <x-side-bar  title="features"  href="{{ route('features.index') }} " icon="fe-monitor"></x-side-bar>
                            {{-- settings-nav --}}
        <x-side-bar  title="settings"  href="{{ route('settings.index') }} " icon="fe-settings"></x-side-bar>

      </aside>