<!DOCTYLE html>
<html lang="en"><head>
  <script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-2040865810414258.js"></script><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-2040865810414258",
              enable_page_level_ads: true
         });
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://namcoi.com/projects/laravel-crud/./favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php final examinate</title>
  <link rel="stylesheet" href="https://namcoi.com/projects/laravel-crud/./css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://namcoi.com/projects/laravel-crud/./css/styles.css">
    <link rel="preload" href="https://adservice.google.com.vn/adsid/integrator.js?domain=namcoi.com" as="script"><script type="text/javascript" src="https://adservice.google.com.vn/adsid/integrator.js?domain=namcoi.com"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=namcoi.com" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=namcoi.com"></script><link rel="preload" href="https://pagead2.googlesyndication.com/pagead/js/r20190114/r20180604/show_ads_impl.js" as="script"></head>

<body>
  <div class="container my-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <div class="d-flex flex-row align-items-center">
        <div class="col-1 pl-0">
          <form action="{{route('users.index')}}" method="get">
            <button class="btn btn-primary rounded-0 font-weight-bold">Home</button>
          </form>
        </div>
        <div class="col-10">
          <h1 class="text-center font-weight-bold text-uppercase">php final examinate</h1>
        </div>
        <div class="col-1">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <hr> 

<h1 class="text-danger text-center text-uppercase">User Profile</h1>


<div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <table class="table table-hover table-bordered">
          <thead>
            <tr class="text-center">
              <th scope="col" class="">#</th>
              <th scope="col" class="">Name</th>
              <th scope="col" class="">Email</th>
              <th scope="col" class="">Created At</th>
              <th scope="col" class="">Updated At</th>
              <th scope="col" class="">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($user as $user)
            <tr class="text-center">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td class="d-flex align-items-center justify-content-around">
            <form action="{{route('users.edit', ['id' => $user->id])}}" method="get">
                <button class="btn btn-sm btn-warning   rounded-0">
                    Edit
                </button>
            </form>
            <form action="{{route('users.destroy', ['id' => $user->id])}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger   rounded-0" onclick="return confirm('Are you sure to delete this user?')">
                    Delete
                </button>
            </form>
            </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <div class="d-flex justify-content-center"></div>
    </div>
  </div>

  <hr>
  <div class="container mb-5">
  <div class="row">
    <div class="col-12">
      <div class="d-flex justify-content-between align-items-center">
        <form action="{{route('users.create')}}" method="get">
          <button type="submit" class="btn btn-info text-uppercase font-weight-bold rounded-0">
        create an user
          </button>
        </form>
      </div>
    </div>
  </div>
</div>



<ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><ins id="aswift_0_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0px;width:0px;height:0px;"></iframe></ins></ins></ins><iframe id="google_osd_static_frame_7965741696956" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe></body><iframe id="google_shimpl" style="display: none;"></iframe><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20190114/r20180604/zrt_lookup.html#" data-ad-client="ca-pub-2040865810414258" style="display: none;"></iframe></html>