@extends('layout.backend_master')

@section('content')

<div>
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        @if (isset($errors) && $errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif (!isset($errors))
                            <div class="alert alert-success" id="success-store-msg">
                                <ul>
                                    <li>নোটিফিকেশান তথ্যটি সফলতার সাথে সংরক্ষণ করা হয়েছে</li>
                                </ul>
                            </div>
                        @endif
                    </div><!-- End Reports -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">নোটিফিকেশান <span> (সংযুক্তিকরণ প্যানেল)</span></h5>
                                <div id="reportsChart">                                    
                                    <form method="post" id="notification_entry_form" action="{{ route('notifications.store') }}" enctype="multipart/form-data" onsubmit="return validateNotificationForm();">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">নোটিফিকেশান শিরোনাম</label>
                                            <input type="text" name="title" id="title" class="form-control" placeholder="এখানে লিখুন..." />
                                        </div>
                                        <div class="mb-3">
                                            <label for="scrollable-container" class="form-label">নোটিফিকেশান প্রাপক গ্রুপ</label> <span class="text-muted float-right"> <a href="{{ route('notifications.group_list_view') }}"> ম্যানেজ </a> </span> 
                                            <div class="scrollable-container">
                                                <div class="scrollable-content" id="recipient_section"></div>
                                                <input type="hidden" name="recipient_group_id" id="recipient_group_id">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="body" class="form-label">নোটিফিকেশান বিবরণী  </label>
                                            <span class="text-muted float-right modal-button" type="button" id="modal-format-button" > সংরক্ষিত বিবরণী / ফরম্যাট </span>
                                            <select id="type" name="type" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                <option value="panel_email_notification" selected>প্যানেল নোটিফিকেশান/ই মেইল</option>
                                                <option value="sms">এস এম এস</option>
                                            </select>
                                            <textarea class="tinymce-editor form-control" name="body" id="body" placeholder="এখানে লিখুন..." hidden></textarea>
                                            <textarea class="msg-text form-control" name="msg_body" onkeyup="charCountFunction(this)" id="msg_body" placeholder="এখানে লিখুন..." hidden></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-8">
                                                    @foreach($variables as $variable)
                                                        <span class="variable-buttons" onclick="insertVariable('{{ $variable['title'] }}')" title="{{ $variable['description'] }}">{{ $variable['title'] }}</span>
                                                    @endforeach
                                                </div>
                                                <div class="col-4">
                                                    <h4 id="char-count-area" hidden><span id="char-count">0</span>/<span id="msg-count" class="small text-muted">1</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" id="send_notification" class="btn btn-primary float-right"><i class="bi bi-send"></i> প্রকাশ করুন</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Reports -->
                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">
                <div class="row">
                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="sidebar-nav" id="sidebar-nav">
                                    @foreach($notifications as $notification)
                                        <button class="collapsible">
                                            {{ $notification->title }} <br><small class="small text-muted">{{ $notification->created_at }}</small>
                                        </button>
                                        <div class="content">
                                            <p class="content-wrap">{!! $notification->body !!}
                                            <span class="small text-muted float-right">
                                                {{ $notification->type }} | 
                                                <span type="button" data-toggle="modal" data-target="#modal-to-update" onclick="updatenotification('{{ $notification->id }}','{{ $notification->title }}','{!! $notification->body !!}','{{ $notification->project_name }}')"><i class="bi bi-pen"></i> Edit</span>
                                            </span></p>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title"></p>
                                <ul class="sidebar-nav" id="sidebar-nav">
                                    <a href="{{ route('notifications.notification_history_view') }}"><i class="bi bi-back"></i> পূর্বোক্ত নোটিফিকেশান সমূহ </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Right side columns -->
        </div>
    </section>


</div>

@endsection