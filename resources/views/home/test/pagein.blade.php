<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>数据分页</title>
</head>
<style>
	<style type="text/css">
						  #pull_right{
							  text-align:center;
						  }
	.pull-right {
		/*float: left!important;*/
	}
	.pagination {
		display: inline-block;
		padding-left: 0;
		margin: 20px 0;
		border-radius: 4px;
	}
	.pagination > li {
		display: inline;
	}
	.pagination > li > a,
	.pagination > li > span {
		position: relative;
		float: left;
		padding: 6px 12px;
		margin-left: -1px;
		line-height: 1.42857143;
		color: #428bca;
		text-decoration: none;
		background-color: #fff;
		border: 1px solid #ddd;
	}
	.pagination > li:first-child > a,
	.pagination > li:first-child > span {
		margin-left: 0;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
	}
	.pagination > li:last-child > a,
	.pagination > li:last-child > span {
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
	}
	.pagination > li > a:hover,
	.pagination > li > span:hover,
	.pagination > li > a:focus,
	.pagination > li > span:focus {
		color: #2a6496;
		background-color: #eee;
		border-color: #ddd;
	}
	.pagination > .active > a,
	.pagination > .active > span,
	.pagination > .active > a:hover,
	.pagination > .active > span:hover,
	.pagination > .active > a:focus,
	.pagination > .active > span:focus {
		z-index: 2;
		color: #fff;
		cursor: default;
		background-color: #428bca;
		border-color: #428bca;
	}
	.pagination > .disabled > span,
	.pagination > .disabled > span:hover,
	.pagination > .disabled > span:focus,
	.pagination > .disabled > a,
	.pagination > .disabled > a:hover,
	.pagination > .disabled > a:focus {
		color: #777;
		cursor: not-allowed;
		background-color: #fff;
		border-color: #ddd;
	}
	.clear{
		clear: both;
	}
</style>

<body>
	<table style="border: 1px solid red">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>age</th>
				<th>email</th>
				<th>image</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $val)
				<tr>
					<th>{{$val -> id}}</th>
					<th>{{$val -> name}}</th>
					<th>{{$val -> age}}</th>
					<th>{{$val -> email}}</th>
					<th>{{$val -> avata}}</th>
				</tr>
			@endforeach
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	{{$data ->links()}}
</body>
</html>