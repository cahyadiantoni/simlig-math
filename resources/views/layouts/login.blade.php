<!DOCTYPE html>
<html lang="en">
    @include('template.script_top') 
    <body>
        <div class="container-scroller">
            @yield('content')    
        </div>
        @include('template.script_bot') 
    </body>
</html>