$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 750) {
      $(this).addClass("slide");
    }
  });
});
/* Navbar */
$("header").html('<nav class="navbar navbar-fixed-top"><font size="3"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><img src="https://www.concords.com.tw/home/img/logo-ch011b.png"><a class="navbar-brand" href="index.html"></a></div><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav navbar-right"><li><a href="index.html">首頁<li><a href="#">公司簡介<li><a href="new.html">新聞<span class="sr-only">(current)</span></a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> 登入/註冊</span></a><ul class="dropdown-menu"><li><a href="signin_customer.html">客戶</a></li><li><a href="signin_CB.html">券商</a></li></ul></li></ul><form class="navbar-form navbar-right"><div class="form-group"><label class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;</label><input type="text" class="form-control" placeholder="Search..."></div></form></nav>')
/* Footer */
$("#footer").html('<h2>康和綜合證券</h2>&nbsp;<p><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;Taipei, Taiwan</p><p><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;(02) 8787-1888</p><p><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;<a href="mailto:service@6016.com">service@6016.com</a></p>')
