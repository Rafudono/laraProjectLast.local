@extends('layout')
@section('single')
    <div class="container-fluid">
        <main class="tm-main">
<div class="row tm-row">
    <div class="col-lg-8 tm-post-col">
        <div class="tm-post-full">
            <div class="mb-4">
                <h2 class="pt-2 tm-color-primary tm-post-title">{{$post->title}}</h2>

                @foreach($categories as $cat)
                    @if($post->category_id == $cat->id)
                        <p class="tm-mb-40">{{$cat->name}}</p>
                    @endif
                @endforeach
                <p>{{$post->text}}</p>
                <p>                </p>
                <span class="d-block text-right tm-color-primary">Creative . Design . Business</span>
            </div>

            <!-- Comments -->
{{--            <div>--}}
{{--                <h2 class="tm-color-primary tm-post-title">Comments</h2>--}}
{{--                <hr class="tm-hr-primary tm-mb-45">--}}
{{--                <div class="tm-comment tm-mb-45">--}}
{{--                    <figure class="tm-comment-figure">--}}
{{--                        <img src="/img/comment-1.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">--}}
{{--                        <figcaption class="tm-color-primary text-center">Mark Sonny</figcaption>--}}
{{--                    </figure>--}}
{{--                    <div>--}}
{{--                        <p>--}}
{{--                            Praesent aliquam ex vel lectus ornare tritique. Nunc et eros--}}
{{--                            quis enim feugiat tincidunt et vitae dui. Nullam consectetur--}}
{{--                            justo ac ex laoreet rhoncus. Nunc id leo pretium, faucibus--}}
{{--                            sapien vel, euismod turpis.--}}
{{--                        </p>--}}
{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <a href="#" class="tm-color-primary">REPLY</a>--}}
{{--                            <span class="tm-color-primary">June 14, 2020</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tm-comment-reply tm-mb-45">--}}
{{--                    <hr>--}}
{{--                    <div class="tm-comment">--}}
{{--                        <figure class="tm-comment-figure">--}}
{{--                            <img src="/img/comment-2.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">--}}
{{--                            <figcaption class="tm-color-primary text-center">Jewel Soft</figcaption>--}}
{{--                        </figure>--}}
{{--                        <p>--}}
{{--                            Nunc et eros quis enim feugiat tincidunt et vitae dui.--}}
{{--                            Nullam consectetur justo ac ex laoreet rhoncus. Nunc--}}
{{--                            id leo pretium, faucibus sapien vel, euismod turpis.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <span class="d-block text-right tm-color-primary">June 21, 2020</span>--}}
{{--                </div>--}}
                @foreach($comments as $com)
                    @if($com->post_id==$post->id)
                            <div class="tm-comment tm-mb-45">
                                <figure class="tm-comment-figure">
                                    <img src="/img/comment-3.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                                    @foreach($users as $user)
                                        @if($user->id==$com->user_id)
                                            <figcaption class="tm-color-primary text-center">{{$user->name}}</figcaption>
                                        @endif
                                    @endforeach

                                </figure>
                                <div>
                                    <p>{{$com->text}}</p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="tm-color-primary">REPLY</a>
                                        <span class="tm-color-primary">June 14, 2020</span>
                                    </div>
                                </div>
                            </div>

                    @endif
                @endforeach

                <form action="" class="mb-5 tm-comment-form">
                    <h2 class="tm-color-primary tm-post-title mb-4">Your comment</h2>
                    <div class="mb-4">
                        <input class="form-control" name="name" type="text">
                    </div>
                    <div class="mb-4">
                        <input class="form-control" name="email" type="text">
                    </div>
                    <div class="mb-4">
                        <textarea class="form-control" name="message" rows="6"></textarea>
                    </div>
                    <div class="text-right">
                        <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
            </main>
    </div>
@endsection
