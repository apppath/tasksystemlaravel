@include('inc.header')
@include('inc.navbar')
<div class="container">
<br>
@include('inc.messages')
<div class="row">
<div class="col-md-9 col-lg-9">
@yield('content')
</div>

<div class="col-md-3 col-lg-3">
<br>
@include('inc.sidebar')
</div>

</div>
</div>
@include('inc.footer')
