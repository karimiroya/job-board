

@foreach ($allCompany as $company)

@foreach($company->job as $jobDetails)

<div class="single-job-items mb-30">
<div class="job-items">
    <div class="company-img">
        <a><img src="assets/img/icon/job-list1.png" alt=""></a>
    </div>
    <div class="job-tittle job-tittle2">
        <a href="{{route('job_details',$jobDetails->id)}}">
            <h4>{{$jobDetails->nameJob}}</h4>
        </a>
        <ul>
            <li>{{$company->nameCompany}}</li>
            <li><i class="fas fa-map-marker-alt"></i>{{$company->country}},{{$company->city}}</li>
            <li>{{$jobDetails->salary}}</li>
        </ul>
    </div>
</div>
<div class="items-link items-link2 f-right">
    <a href="{{route('job_details',$jobDetails->id)}}">{{$jobDetails->nature}}</a>
    <span>{{$jobDetails->created_at}}</span>
</div>
</div>

@endforeach
@endforeach
