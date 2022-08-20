 <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
            <tr>
                <th>name company</th>
                <th>name job</th>
                 <th>created at</th>
                
            </tr>
        </thead>
        <tbody>
          
            @forelse ($jobs as $job)
                <tr>
                    <td>{{ $companyes->nameCompany ?? ''}}</td>
                    <td>{{ $job->nameJob ?? ''  }}</td>
                    <td>{{ $job->created_at ?? '' }}</td>
                    
                </tr>
                @empty
                <tr>
                <td colspan="6">    <div class="alert alert-danger">there is not job</div>                </td>
                </tr>
            @endforelse


        </tbody>
    </table>
    {{$jobs->links()}}

