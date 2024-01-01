@extends('layout.backend_master')

@section('content')

<div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">নোটিফিকেশান গ্রুপ</h5>
                                <span class="small float-right"><a class="float-right" href="{{ route('notifications.create') }}"> নোটিফিকেশান প্যানেল </a></span>
                                <div id="reportsChart">
                                    <div class="mb-3">
                                        <label for="scrollable-container" class="text-muted">প্রাপক বিস্তারিত দেখার জন্যে গ্রুপ নির্বাচন করুন</label>
                                        <div class="scrollable-container">
                                            <div class="scrollable-content" id="editable_recipient_section"></div>
                                            <input type="hidden" name="project_name" id="project_name">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div id="recipient-add-area">
                                            <form class="row g-3" enctype="multipart/form-data" onsubmit="return validateRecipientSubmission();">
                                                @csrf
                                                <label for="recipient-select">Add Recipients to this Group</label>
                                                <select id="mouja-select" class="form-control"></select>
                                                <select id="recipient-select" class="form-control"></select>
                                                <input type="hidden" id="groupid" />
                                                <button class="btn btn-success float-right">Add Recipient</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-table" class="text-muted"></label>
                                        <table id="recipient-table" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Recipient Name</th>
                                                    <th>Address</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Holding No</th>
                                                    <th>Due Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
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