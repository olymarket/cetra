@extends('Components.Admin.Navigations.Master')

@section('content')
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            @include('Components.Admin.Navigations.MessageAlert')

            <div class="pd-20 card-box mb-30">

                <form id="blogForm" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label class="">Statu *</label>
                                <select id="idStatu" name="idStatu" class="custom-select">
                                    <option value="">Select an option</option>
                                </select>
                                <div id="messageStatu"></div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label class="">Category *</label>
                                <select id="idCategori" name="idCategori" class="custom-select">
                                    <option value="">Select an option</option>
                                </select>
                                <div id="messageCategori"></div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label class="col-form-label">Title *</label>
                                <div class="">
                                    <input id="title" type="text" name="title" class="form-control" maxlength="80"
                                        value="" placeholder=" ...">
                                </div>
                                <div id="messageTitle">
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input id="image" type="file" name="image" class="custom-file-input"
                                        accept=".jpeg, .jpg, .jpe, .webp" />
                                    <label class="custom-file-label">Select image</label>
                                    <div id="messageImage"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label>Description *</label>
                                <textarea id="description" type="text" name="description" class="form-control" placeholder=" ..."></textarea>
                                <div id="messageDescription"></div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label>Content *</label>
                                <textarea id="content" type="text" name="content" class="form-control" placeholder=" ..."></textarea>
                                <div id="messageContent"></div>
                            </div>
                        </div>
                    </div>
                    <div id="messageForm"></div>
                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <div id="urlBack" class="btn btn-secondary">Back</div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('/validation/admin/blogEdit.js') }}"></script>
@endsection
