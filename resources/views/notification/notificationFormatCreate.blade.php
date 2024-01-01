@extends('layout.backend_master')

@section('content')

<div>
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
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
                                <h5 class="card-title">সংরক্ষিত নোটিফিকেশান বিবরণী <span class="float-right"><a href="{{ route('notifications.create') }}"><i class="bi bi-back"></i> নোটিফিকেশান পাঠান </a></span></h5>
                                <div id="reportsChart">
                                    <form method="post" id="notification_format_entry_form" action="{{ route('notifications.format_create') }}" enctype="multipart/form-data" onsubmit="return validateNotificationFormatForm();">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">নোটিফিকেশান শিরোনাম</label>
                                            <input type="text" name="title" id="title" class="form-control" placeholder="এখানে লিখুন..." />
                                        </div>
                                        <div class="mb-3">
                                            <label for="body" class="form-label">নোটিফিকেশান বিবরণী</label>
                                            <select id="type" name="type" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                <option value="panel_email_notification" selected>প্যানেল নোটিফিকেশান/ই মেইল</option>
                                                <option value="sms">এস এম এস</option>
                                            </select>
                                            <textarea class="tinymce-editor form-control" name="body" id="body" placeholder="এখানে লিখুন..." hidden></textarea>
                                            <textarea class="msg-text form-control" name="msg_body" id="msg_body" placeholder="এখানে লিখুন..." hidden></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" id="send_notification" class="btn btn-primary float-right"> <i class="bi bi-save"></i> সংরক্ষণ করুন</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Reports -->
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>
        
</div>

@endsection