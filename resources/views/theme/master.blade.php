<!DOCTYPE html>
<html lang="en">
@include('theme.layout.head')
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('theme.layout.spinner')
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        @include('theme.layout.nav')
        {{-- all without home  --}}
        <!-- Navbar & Hero End -->


        <!-- About Start -->
                {{-- مش مشتركة --}}
        <!-- About End -->


        <!-- Features Start -->
                {{-- مش مشتركة --}}
        <!-- Features End -->


        <!-- Team Start -->
        {{-- مش مشتركة --}}
        <!-- Team End -->
        

        <!-- Footer Start -->
        @include('theme.layout.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        @include('theme.layout.up')
    </div>

@include('theme.layout.scripts')
</body>

</html>