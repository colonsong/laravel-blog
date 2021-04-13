<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel Vue — CRUD DOCTOR</title>
<! — Fonts →
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>


    <div class="container-fluid">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
              <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
              </div>
              <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Waterdrop</a>
              </div>
              <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
              </div>
            </div>
          </header>
        <section>
            <artile>
            @foreach ($posts as $post)
                <h2>{{ $post->title }}</h2>
                <time>{{ $post->created_at }}</time>
                {{ $post->content }}
            @endforeach
            </artile>
        </section>
        {{ $posts->links() }}
    </div>


    <!-- 載入打包後的 js 檔 -->
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>

</body>
</html>
