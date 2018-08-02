@extends('admin.superadmin.dashboard')

@section('content')
    <div class="page-header">
        <h1>
           Setup Gradebook Activities
         
            @include('flash::message')
                                            
        </h1>
    </div><!-- /.page-header -->
    <div class="row">
    <div class="col-md-6 col-sm-6">

        <button type="button" class="btn btn-primary">Add New Activity</button>
    </div>
</div>
    <div class="row">
        <div class="col-sm-6">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title"> <strong style="color:darkred;">Showing <mark>{{ $current_school_year->school_year}}</mark>Activities and Maximum Points Allowed</strong></h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main">

                       <table class="table table-striped table-bordered">
                            <thead>
                                <th>#</th>
                                <th>Activity Name</th>
                                <th>Max Point Allowed</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </thead>
                            <tbody>
                                @foreach ($terms as $term)

                                <tr>
                                    <td>{{ $term->term }}</td>
                                    <td>{{ $term->start_date->toFormattedDateString() }}</td>
                                    <td>{{ $term->end_date->toFormattedDateString() }}</td>
                                    <td><strong><a href="{{asset('/schoolsetup/editterm/'.$term->id) }}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></strong>
                                    </td>
                                    <td><strong><a href="{{asset('/schoolsetup/posttermdelete/'.$term->id) }}" onclick="return confirm('Are you sure you want to Delete this record?')"><i class="danger fa fa-trash-o fa-2x" aria-hidden="true" style="color:red"></i></a></strong>
                                    </td>
                                   
                                </tr>
                             @endforeach
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>

	<div class="alert-danger">
		
		<ul>
			@foreach($errors->all() as $error)

				<li> {{ $error }}</li>

			@endforeach

		</ul>

	</div>


@endsection
