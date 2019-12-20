@component('layouts/partials/html-header')
@endcomponent

@component('layouts/partials/header')
@endcomponent

@component('layouts/partials/main')
    @yield('breadcrumb')
    @yield('content')
@endcomponent

@component('layouts/partials/footer')
@endcomponent

@component('layouts/partials/html-footer')
@endcomponent
