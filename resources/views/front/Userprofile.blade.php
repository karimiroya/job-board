<!DOCTYPE html>
<html lang="en">

    <link rel="stylesheet" href="/front/css/app.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <br>

    <div class="container mt-12" >
        <div class="container" id="resume">
            <div class="row" > 
                <div class="mt-10">
                    <form id="savePro">
                        @csrf
                        <div class="text-danger" id="requeird"> </div>
                    <label>full name:</label>
                    <input type="text" name="fullName" class="single-input"
                        value="{{ $profileUser->fullName ?? '' }}">
                </div>
                <div class="mt-10">
                    <label>email:</label>
                    <input type="text" name="emailUser" class="single-input"
                        value="{{ $profileUser->emailUser ?? '' }}">
                </div>
                <div class="mt-10">
                    <label>phone number:</label>
                    <input type="text" name="phoneNumber" class="single-input"
                        value="{{ $profileUser->phoneNumber ?? '' }}">
                </div>
                <div class="mt-10">
                    <label>country:</label>
                    <input type="text" name="country" class="single-input"
                        value="{{ $profileUser->country ?? '' }}">
                </div>
                <div class="mt-10">
                    <label>city:</label>
                    <input type="text" name="city" class="single-input"
                        value="{{ $profileUser->city ?? '' }}">
                </div>
                <div class="mt-10">
                    <label>address:</label>
                    <input type="text" name="address" class="single-input"
                        value="{{ $profileUser->address ?? '' }}">
                </div>
                <div class="mt-10">
                    <label>description user:</label>
                    <textarea class="single-textarea" name="descriptionUser">{{ $profileUser->descriptionUser ?? '' }}</textarea>
                </div>
                <div class="mt-10">
                    <label>Expertise:</label>
                    <textarea class="single-textarea" name="Expertise">{{ $profileUser->Expertise ?? '' }}</textarea>
                </div>
                <div class="mt-10">
                    <label> CareerRecords:</label>
                    <textarea class="single-textarea" name="CareerRecords">{{ $profileUser->CareerRecords ?? '' }}</textarea>
                </div>
                <div class="mt-10">
                    <label>EducationalRecords:</label>
                    <textarea class="single-textarea" name="EducationalRecords">{{ $profileUser->EducationalRecords ?? '' }}</textarea>
                </div>
                
              
                    
                    
                    
                </div>



        </div>
        <button type="button" id="saveuser" class="genric-btn info">
            Send Information</button>
            <button type="button" id="download" class="genric-btn info">
                download resume</button>
            </form>
    </div>
    <script src="./front/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script>
        $(document).on('click', '#saveuser', function(event) {
            event.preventDefault();



            $.ajax({
                url: "/saveUserInfo",
                type: "POST",

                data: $('#savePro').serialize(),

                success: function(response) {
                        Swal.fire(
                                'Good!', 'succesfully.', 'success'
                            );
                            // window.location.replace("/postJob");


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
        window.onload=function(){
            document.getElementById("download").addEventListener("click",()=>{
                const resume =this.document.getElementById("resume");
                console.log(resume);
                console.log(window);
                html2pdf().from(resume).save();

            })
        }
    </script>
</body>

    </html>
    