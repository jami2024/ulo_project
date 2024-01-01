@extends('layout.backend_master')

@section('content')

<div>
    <section class="section dashboard">
        <div class="row">
            <!-- Right side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">পূর্বোক্ত নোটিফিকেশান সমূহ <span><a class="small float-right" href="{{ route('notifications.create') }}"><i class="bi bi-back"></i> নোটিফিকেশান পাঠান </a></span></h5>
                                <ul class="sidebar-nav" id="sidebar-nav">
                                    @foreach($notifications as $notification)
                                        <button class="collapsible">
                                            <i class="bi bi-person"></i> Message ID:  {{ $notification->id }} <br><small class="small text-muted">{{ $notification->status }} | {{ $notification->created_at }}</small>
                                        </button>
                                        <div class="content">
                                            <p class="content-wrap">{!! $notification->content !!}
                                            <button class="btn btn-danger">Terminate</button></p>
                                        </div>
                                    @endforeach
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