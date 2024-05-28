<!DOCTYPE html>
<html lang="en">
    @include('template.script_top') 
    <body>
        <div class="container-scroller">
            @include('components.navbar')
            <div class="container-fluid page-body-wrapper">
                @include('components.sidebar')
                <div class="main-panel">
                    @yield('content')
                    @include('components.footer')
                </div>
            </div>
        </div>
        @include('template.script_bot') 
    </body>
</html>