
<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <title>@yield('title') || Bauda Cosmetic</title>
    @include('FrontEnd.Style.Link')

</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
       <!-- Banner Popup Start -->
        @include('FrontEnd.Header')
        <!-- Categorie Menu & Slider Area Start Here -->
        <div class="main-page-banner home-3">
            <div class="container">
                <div class="row">
                    <!-- Vertical Menu Start Here -->
                    @include('FrontEnd.Menu')
                    <!-- Vertical Menu End Here -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Categorie Menu & Slider Area End Here -->
        @yield('content-layout')
        <!-- Support Area Start Here -->
        @include('FrontEnd.Footer')


    </div>
    <!-- Main Wrapper End Here -->

   @include('FrontEnd.Style.Script')
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "101290012639524");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v14.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</body>

</html>
