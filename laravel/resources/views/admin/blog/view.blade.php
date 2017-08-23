@extends('admin.master')
@section('head')
<style type="text/css">
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.ph-button {
	
    border-style: solid;
    border-width: 0px 0px 3px;
    box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
    color: #FFFFFF;	   
    border-radius: 6px;
    cursor: pointer;
    display: inline-block;
    font-style: normal;
    overflow: hidden;
    text-align: center;
    text-decoration: none;
    text-overflow: ellipsis;
    transition: all 200ms ease-in-out 0s;
    white-space: nowrap;	
    font-family: "Gotham Rounded A","Gotham Rounded B",Helvetica,Arial,sans-serif;
    font-weight: 100;	
    padding: 0px 19px 0px;
    font-size: 13px;
	
}
.ph-button:hover
{
	color: #000;
	text-decoration: none;
}
.ph-btn-green {

    border-color: #3AC162;
    background-color: #5FCF80;

}
.ph-btn-green:hover, .ph-btn-green:focus, .ph-btn-green:active {
    background-color: #4BC970;
    border-color: #3AC162;    
}
.ph-btn-blue {

    border-color: #326E99;
    background-color: #3F8ABF;
}

.ph-btn-blue:hover, .ph-btn-blue:focus, .ph-btn-blue:active {
    background-color: #397CAC;
    border-color: #326E99;   
}

/*Grey
==========================*/
.ph-btn-grey {

     background-color: #C6CCD2;
     border-color: #AAB3BB;
}
.ph-btn-grey:hover, .ph-btn-grey:focus, .ph-btn-grey:active {
    background-color: #B8BFC7;
    border-color: #AAB3BB; 
}


/*Red
==========================*/
.ph-btn-red {

    background-color: #ED5A5A !important;
    border-color: #EA4343 !important;

}
.ph-btn-red:hover, .ph-btn-red:focus, .ph-btn-red:active {
    background: none repeat scroll 0 0 #EB4848 !important;
    border-color: #E83131 !important;    
}

.ph-float {
  
  float: left;
  width: 22%;
  padding: 0px;  
  padding-top: 0px;  
  text-align: center;

}

.ph-clear {
  
  clear: both;
   
}

</style>
@stop
@section('body')
<section class="light-gray-bg pv-30 clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center"> <strong>All Blogs</strong></h2>
							<div class="separator"></div>

							<table>
							  <tr>
							    <th>Title</th>
							    <th>Content</th>
							    <th>Editor</th>
							    <th>Publishing Date</th>
							    <th></th>
							  </tr>
							  @foreach($blogs as $blog)
							  <tr>
							    <td>{{$blog->subject}}</td>
							    <td>
							    	<div class="ph-float">
										<a data-toggle="modal" data-target="#myModal{{$blog->id}}" class='ph-button ph-btn-green'>Preview</a>
									</div>
							    </td>
							    <td>{{$blog->name}}</td>
							    <td>{{$blog->created_at}}</td>
							    <td width="20%">
							    	<div class="row">
							    	<div class="col-md-4">
							    	<div class="ph-float">
										<a href="/admin/blog/{{$blog->id}}/edit" class='ph-button ph-btn-grey'>Edit</a>
									</div>
									</div>
									<div class="col-md-8">
									<div class="ph-float">
										<a data-toggle="modal" data-target="#myModal{{$blog->id}}delete" class='ph-button ph-btn-red'>Delete</a>
									</div>
									</div>
									</div>
								</td>
							  </tr>

							  @endforeach
							</table>
							</div>
					</div>
					@foreach($blogs as $blog)
					<div id="myModal{{$blog->id}}" class="modal fade" role="dialog">
					  	<div class="modal-dialog">

					    <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">{{$blog->subject}}</h4>
							    </div>
						        <div class="modal-body">
						        	<div class="row">
								      	<div class= "col-md-6" style="text-align: left;">
											{{$blog->created_at}}
										</div>
										<div class= "col-md-6"  style="text-align: right;">
											- {{$blog->name}}
										</div>
								    </div>
							    	<p style="text-indent: 100px;"> <?php echo html_entity_decode($blog->message)?></p>
							    </div>
								<div class="modal-footer">
						   	        <a href="/admin/blog/{{$blog->id}}/edit">
										<button type="button" class="btn btn-warning" style="margin-bottom: 0;"> Edit</button>
									</a>
									<a href="/admin/blog/{{$blog->id}}/remove">
										<button type="button" class="btn btn-danger" style="margin-bottom: 0;"> Remove</button>
									</a>
							        <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-bottom: 0;">Close</button>
								</div>
						    </div>

						</div>
					</div>
					<div id="myModal{{$blog->id}}delete" class="modal fade" role="dialog">
					  	<div class="modal-dialog">

					    <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">{{$blog->subject}}</h4>
							    </div>
						        <div class="modal-body">
						        	<h3>Are you sure to delete the blog</h3>
								<div class="modal-footer">
						   	        <a href="/admin/blog/{{$blog->id}}/delete">
										<button type="button" class="btn-sm btn-warning" style="margin-bottom: 0;">Yes</button>
									</a>
							        <button type="button" class="btn-sm btn-default" data-dismiss="modal" style="margin-bottom: 0;">No</button>
								</div>
						    </div>

						</div>
					</div>
					@endforeach

				</div>	
			</section>   

@stop