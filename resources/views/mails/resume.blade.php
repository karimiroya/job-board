<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
</head>
<body>
    <div class="row" > 
        <div class="mt-10">
            
                <div class="text-danger" id="requeird"> </div>
            <label>full name:</label>
            <input type="text" name="fullName" class="single-input"
                value="{{ $fullName  }}">
        </div>
        <div class="mt-10">
            <label>email:</label>
            <input type="text" name="emailUser" class="single-input"
                value="{{ $emailUser  }}">
        </div>
        <div class="mt-10">
            <label>phone number:</label>
            <input type="text" name="phoneNumber" class="single-input"
                value="{{ $phoneNumber  }}">
        </div>
        <div class="mt-10">
            <label>country:</label>
            <input type="text" name="country" class="single-input"
                value="{{ $country  }}">
        </div>
        <div class="mt-10">
            <label>city:</label>
            <input type="text" name="city" class="single-input"
                value="{{ $city  }}">
        </div>
        <div class="mt-10">
            <label>address:</label>
            <input type="text" name="address" class="single-input"
                value="{{ $address  }}">
        </div>
        <div class="mt-10">
            <label>description user:</label>
            <textarea class="single-textarea" name="descriptionUser">{{ $descriptionUser  }}</textarea>
        </div>
        <div class="mt-10">
            <label>Expertise:</label>
            <textarea class="single-textarea" name="Expertise">{{ $Expertise  }}</textarea>
        </div>
        <div class="mt-10">
            <label> CareerRecords:</label>
            <textarea class="single-textarea" name="CareerRecords">{{ $CareerRecords  }}</textarea>
        </div>
        <div class="mt-10">
            <label>EducationalRecords:</label>
            <textarea class="single-textarea" name="EducationalRecords">{{ $EducationalRecords  }}</textarea>
        </div>
        
      
            
            
            
        </div>
</body>
</html>