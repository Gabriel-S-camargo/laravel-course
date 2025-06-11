@props(['form_content' => '', 'page_type' => '', 'footer_link' => ''])

<div class="container-small page-login">
    <div class="flex" style="gap: 5rem">
        <div class="auth-page-form">
            <div class="text-center">
                <a href="/">
                    <img src="/img/logoipsum-265.svg" alt="" />
                </a>
            </div>

            <h1 class="auth-page-title">{{ $page_type }}</h1>
            <form action="" method="post">
                {{$form_content}}
                {{$footer_link}}
            </form>

        </div>
        <div class="auth-page-image">
            <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
        </div>
    </div>
</div>
