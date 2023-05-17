<!doctype html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Task Management</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery-ui.css') }}">
</head>
@if (request()->route()->uri == 'admin')
@php $user = 0; @endphp
@else
@php $user = 1; @endphp
@endif

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center pb-3 pt-1">Task Management</h2>
                <div class="row">
                    <div class="col-md-12 p-3 offset-md-1">
                        <div class="form-group">
                            <label for="select_project">Select Project:</label>
                            <select class="form-control" id="select_project">
                                @if(!empty($project_data) && $project_data->count())
                                <option value="0">-----Select Project-----</option>
                                @foreach($project_data as $key=>$value)
                                <option value="{{ $value->id }}">{{ $value->project_name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 p-3 offset-md-1 shadow-lg complete-item">
                        <ul class="list-group  connectedSortable" id="task-data">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('/js/jquery.js') }}"></script>
<script src="{{ asset('/js/jquery.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/jquery-ui.js') }}"></script>
<script>
var user = '<?php echo $user; ?>';
</script>
<script src="{{ asset('/js/task.js') }}"></script>

</html>