<!DOCTYPE HTML>
<html>

<head>
  <title>Teknik &amp; Informatika</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
    <div id="header">
        @include('layout.header')
    
    <div id="site_content">
        @include('layout.sidebar')

    <div class="content">
        @yield('content')   </div>
    
    <div id="content_footer">
        @include('layout.footer')

    </div>
</body>
</html>
