<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task</title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	    <h2 class="test-xs-center">Task List</h2>
	</div>
	<div class="container">
	    <div class="row">
	    <div class="col-sm-8 push-sm-2">
	        <form action="<?php echo e(url('InsertData')); ?>"  method="post" class="form-horizontal">
	            <input type="hidden" name="_token" value="{{csrf_token()}}">
	            <div class="card">
	                <div class="card-block">
	                    <div class="panel panel-default">
	                        <div class="panel-heading">
	                            <fieldset class="form-group">
	                                <table>
	                                    <tr>
	                                        <td>
	                                            <label for="formGroupExampleInput">Add Task</label>
	                                            <input id="name" name="name" type="text"  class="form-control" >
	                                        </td>
	                                    </tr>
	                                </table>
	                            </fieldset>
	                            <input type="submit" class="btn btn-success" value="+Add task">
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </form>
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Current task
	                    <tbody>
	                        @foreach ($tasks as $key =>$value)
	                            <tr>
	                                <!-- Task Name -->
	                                <td class="table-text">
	                                    <div>{{ $value->name }}</div>
	                                </td>
	                                <td>
	                                    <form action="<?php echo e(url('delete/'.$value->id)) ?>" method="post">
	                                     	<input type="hidden" name="_token" value="{{csrf_token()}}">
	                                            {{ csrf_field() }}
	                                            {{ method_field('DELETE') }}
	                                    <button type="submit" class="btn btn-danger" >
	                                    <i class="fa fa-trash">Delete</i>
	                                    </button>
	                                    </form>
	                                </td>
	                            </tr>
	                        @endforeach
	                    </tbody>
	                </div>
	            </div>	
	    </div>
	    </div>
	</div>
</body>
</html>
