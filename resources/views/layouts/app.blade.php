@include('inc.header')
@include('inc.navbar')
<div class="container">
<br>
@include('inc.messages')
<div class="row">
<div class="col-md-12 col-lg-12">
@yield('content')
</div>

</div>
</div>
@include('inc.footer')
