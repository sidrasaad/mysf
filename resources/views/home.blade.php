@extends('layouts.mysf')

@section('page', 'Dashboard')

@section('content')
    <section>
        <div class="row">
            <div class="col-md-8">
                <div class="section-body">
                    <!-- Todo List !-->
                    <div class="section-body mt-3">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-header bline">
                                    <h3 class="card-title">To Do List</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row clearfix row-deck">
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Active Cases</h3>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="number mb-0 font-32 counter">31</h5>
                                                    <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Pending Tasks</h3>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="number mb-0 font-32 counter">245</h5>
                                                    <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Pending Tasks</h3>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="number mb-0 font-32 counter">245</h5>
                                                    <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bline">
                                    <h3 class="card-title">Life @ SF</h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i
                                                class="fe fe-maximize"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <!-- Chatta card body -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="summernote">

                                                <input type="text" placeholder="What's on Your Mind"
                                                    style="padding: 7px ; margin-top:-20px; width:400px; border:none;outline:none;">

                                            </div>
                                            <div class="mt-4 text-right">
                                                <button class="btn btn-warning"><i class="icon-link"></i></button>
                                                <button class="btn btn-warning"><i class="icon-camera"></i></button>
                                                <button class="btn btn-primary">Post</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="timeline_item " style="border:0px;margin:0 30px; padding-left:50px">
                                    <img class="tl_avatar" src="assets/images/xs/avatar4.jpg" alt=""
                                        style="width: 50px; height:50px">
                                    <span><a href="javascript:void(0);" title="">Dessie Parks</a>
                                        Oakland, CA <small class="float-right text-right">19-April-2019
                                            - Yesterday</small></span>

                                    <div class="msg">
                                        <p>I'm speaking with myself, number one, because I have a very
                                            good brain
                                            and I've said a lot of things. on the web by far... While
                                            that's
                                            mock-ups and this is politics.</p>
                                        <div class="timeline_img mb-20">
                                            <img class="width100" src="assets/images/gallery/1.jpg" alt="Awesome Image"
                                                style="width: 200px;">
                                            <img class="width100" src="assets/images/gallery/2.jpg" alt="Awesome Image"
                                                style="width: 200px;">
                                        </div>
                                        <a href="javascript:void(0);" class="mr-20 text-muted"><i
                                                class="fa fa-heart text-pink"></i> 23 Love</a>
                                        <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample1"
                                            aria-expanded="false" aria-controls="collapseExample1"><i
                                                class="fa fa-comments"></i style="padding:6px"> 2
                                            Comment</a>
                                        <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample1"
                                            aria-expanded="false" aria-controls="collapseExample1"><i
                                                class="fa fa-comments"></i> 2
                                            Comment</a>
                                        <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample1"
                                            aria-expanded="false" aria-controls="collapseExample1"><i
                                                class="fa fa-comments"></i> 2
                                            Comment</a>
                                        <div class="collapse p-4 section-gray mt-2" id="collapseExample1">
                                            <form class="well">
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize"
                                                        placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                            <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                <li>
                                                    <div class="avatar_img">
                                                        <img class="rounded img-fluid" src="assets/images/xs/avatar4.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="comment_body">
                                                        <h6>Donald Gardner <small class="float-right font-14">Just
                                                                now</small></h6>
                                                        <p>Lorem ipsum Veniam aliquip culpa laboris
                                                            minim tempor</p>
                                                        <div class="timeline_img mb-20">
                                                            <img class="width150" src="assets/images/gallery/7.jpg"
                                                                alt="Awesome Image">
                                                            <img class="width150" src="assets/images/gallery/8.jpg"
                                                                alt="Awesome Image">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar_img">
                                                        <img class="rounded img-fluid" src="assets/images/xs/avatar3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="comment_body">
                                                        <h5>Dessie Parks <small class="float-right font-14">1min
                                                                ago</small></h5>
                                                        <p>It is a long established fact that a reader
                                                            will be
                                                            distracted by the readable content of a page
                                                            when
                                                            looking</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card" style="border-radius: 50px; height:65px">
                                        <div class="card-body"
                                            style="display: flex; justify-content: space-between; text-align:center">
                                            <div class="summernote">

                                                <input type="text" placeholder="send your comment"
                                                    style="padding: 7px ; margin-top:-20px; width:400px; border:none;outline:none;">


                                            </div>
                                            <div class="mt-4 text-right">
                                                <button class="btn btn-warning" style="margin-top: -55px;"><i
                                                        class="icon-link"></i></button>
                                                <button class="btn btn-warning" style="margin-top: -55px;"><i
                                                        class="icon-camera"></i></button>
                                                <!-- <button class="btn btn-primary" style="margin-top: -55px;">submit</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side bar !-->

            <div class="col-md-4">
                <div class="section-body mt-3">

                    <div class="card">
                        <div class="card-header bline">
                            <h3 class="card-title">Event Calender</h3>

                        </div>
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar4.jpg" alt="">
                            <h6 class="mt-3 mb-0">Happy Birthday</h6>
                            <h6 class="mt-3 mb-0">Michelle Green</h6><br>
                            <h6>31-dec-21</h6>


                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bline">
                            <h3 class="card-title">Up Comming Birthday</h3>
                        </div>
                        <div class="card-body">
                            <ul class="right_chat list-unstyled list">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object" src="assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Matt Parker</span>
                                                <span class="message">How is the project coming</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object" src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Sara ahmed</span>
                                                <span class="message">Update Code</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object" src="assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Naila Khan</span>
                                                <span class="message">3 New design bug</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>
@endsection
