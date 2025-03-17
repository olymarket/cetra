@extends('Components.Admin.Navigations.Master')

@section('content')

    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            @include('Components.Admin.Navigations.MessageAlert')
            <div class="title pb-20">
                <h2 class="h3 mb-0">List Post</h2>
            </div>

            <div class="card-box pb-10">
                <table id="data-table" class="data-table table nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus">Register</th>
                            <th>Status</th>
                            <th>User</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th class="datatable-nosort">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('/validation/admin/blogList.js') }}"></script>

@endsection
