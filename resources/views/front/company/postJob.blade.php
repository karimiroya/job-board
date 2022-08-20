<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="front/css/app.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <br>

    <div class="container mt-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Nav tabs -->
                    <ul class=" lead nav nav-tabs " role="tablist">
                        <li class="nav-item col-md-6 p-0">
                            <a class="nav-link active " data-bs-toggle="tab" href="#infCompany">Company Information
                            </a>
                        </li>
                        <li class="nav-item col-md-6 p-0">
                            <a class="nav-link" data-bs-toggle="tab" href="#postJob">Post Job</a>
                        </li>

                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="infCompany" class="container tab-pane active"><br>
                        <div class="row">
                            <h3>Company Information</h3>
                            <form id="sendcominfo">
                                @csrf
                                <div class="text-danger" id="requeird"> </div>
                                <div class="mt-10">
                                    <label>Name company:</label>
                                    <input type="text" name="nameCompany" class="single-input"
                                        value="{{ $companyes->nameCompany ?? '' }}">
                                </div>
                                <div class="mt-10">
                                    <label>Web company:</label>
                                    <input type="text" name="webCompany" class="single-input"
                                        value="{{ $companyes->emailCompany ?? '' }}">
                                </div>
                                <div class="mt-10">
                                    <label>Email company:</label>
                                    <input type="email" name="EmailCompany" class="single-input"
                                        value="{{ $companyes->web ?? '' }}">
                                </div>

                                <div class="mt-10">
                                    <label>Country:</label>
                                    <input type="text" name="country" class="single-input"
                                        value="{{ $companyes->country ?? '' }}">
                                </div>
                                <div class="mt-10">
                                    <label>City:</label>
                                    <input type="text" name="city" class="single-input"
                                        value="{{ $companyes->city ?? '' }}">
                                </div>
                                <div class="mt-10">
                                    <label>Address:</label>
                                    <input type="text" name="address" class="single-input"
                                        value="{{ $companyes->address ?? '' }}">
                                </div>
                                <div class="mt-10">
                                    <label> company Description:</label>
                                    <textarea class="single-textarea" name="desCompany">{{ $companyes->descriptionCompany ?? '' }}</textarea>
                                </div>
                                <br>
                                <div class="button-group-area mt-10">
                                    <button type="button" id="saveInfo" class="genric-btn info">
                                        Send Information</button>
                            </form>
                            <button type="reset" class="genric-btn danger">
                                Cancle</button>
                        </div>
                    </div>
                </div>


                <div id="postJob" class="container tab-pane fade">
                    <br>
                    <h3>Post Job</h3>

                    @if ($companyes !== null)
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                            Add new job
                        </button>
                        <div id="table_data">
                            @include('front.company.jobComanytable')
                        </div>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Job information</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form id="sendjobinfo">
                                            @csrf
                                            <div class="text-danger" id="requeirdjob"> </div>
                                            <div class="mt-10">
                                                <label>Name job:</label>
                                                <input type="text" name="namejob" class="single-input">
                                            </div>
                                            <div class="mt-10">

                                                <select name="Salary">
                                                    <option>Salary:</option>
                                                    <option value="0-400">0 to 400</option>
                                                    <option value="400-800">400 to 800</option>
                                                    <option value="800-1500">800 to 1500</option>
                                                    <option value="1500-up">1500 to up</option>

                                                </select>
                                            </div>
                                            <div class="mt-10">

                                                <select name="nature">
                                                    <option>Nature:</option>
                                                    <option value="full time">full time</option>
                                                    <option value="part time">part time</option>
                                                    <option value="remote">remote</option>
                                                    <option value="freelance">freelance</option>

                                                </select>
                                            </div>
                                            <div class="mt-10">

                                                <select name="category">
                                                    <option>Category:</option>
                                                    <option value="Design & Creative">Design & Creative</option>
                                                    <option value="Design & Development">Design & Development</option>
                                                    <option value="Sales & Marketing">Sales & Marketing</option>
                                                    <option value="Mobile Application">Mobile Application</option>
                                                    <option value="Construction">Construction</option>
                                                    <option value="Information Technology">Information Technology
                                                    </option>
                                                    <option value="Real Estate">Real Estate</option>
                                                    <option value="Content Writer">Content Writer</option>

                                                </select>
                                            </div>

                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="mt-10">
                                                <label>job Description:</label>
                                                <textarea class="single-textarea" name="desJob"></textarea>
                                            </div>
                                            <div class="mt-10">
                                                <label> job knowledge:</label>
                                                <textarea class="single-textarea" name="knowledge"></textarea>
                                            </div>
                                            <div class="mt-10">
                                                <label>job experience:</label>
                                                <textarea class="single-textarea" name="experience"></textarea>
                                            </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>

                                        <button type="submit" id="saveInfoJob" class="genric-btn info">
                                            Send Information</button>
                                    </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    @else
                        <div>
                            <p class="text-danger">please enter your company information</p>
                        </div>
                    @endif



                </div>
            </div>
        </div>
    </div>
    <script src="./front/js/app.js"></script>
    <script>
        $(document).on('click', '#saveInfo', function(event) {
            event.preventDefault();



            $.ajax({
                url: "/saveCompanyInfo",
                type: "POST",

                data: $('#sendcominfo').serialize(),

                success: function(response) {
                        Swal.fire(
                                'Good!', 'change Exchange succesfully.', 'success'
                            ),
                            window.location.replace("/postJob");


                    }

                    ,
                error: function(response) {
                    var str = "";
                    $.each(response.responseJSON.errors, function(index, value) {
                        str += (value + "<br>");
                    })
                    $('#requeird').empty();
                    $('#requeird').html(str);

                }
            });

        });
        $(document).on('click', '#saveInfoJob', function(event) {
            event.preventDefault();



            $.ajax({
                url: "/saveJobInfo",
                type: "POST",

                data: $('#sendjobinfo').serialize(),

                success: function(response) {

                        $('#table_data').empty();
                        $('#table_data').html(response.table);
                        Swal.fire(
                            'Good!', 'save job', 'success'
                        )


                    }

                    ,
                error: function(response) {
                    var str = "";
                    $.each(response.responseJSON.errors, function(index, value) {
                        str += (value + "<br>");
                    })
                    $('#requeirdjob').empty();
                    $('#requeirdjob').html(str);

                }
            });

        });

        // 'user_id': $('#user_id').val()


        // success: function(response) {
        //     // $('#table_data').empty();
        //     // $('#table_data').html(response.table);

        //     Swal.fire(
        //         'Good!'
        //         , 'change Exchange succesfully.'
        //         , 'success'
        //     )

        // }
        // , error: function(response) {
        //     Swal.fire(
        //         'Ops!'
        //         , 'sorry...something went worg.'
        //         , 'error'
        //     )


        //         // }
        //     });
        // });
    </script>
</body>

</html>
