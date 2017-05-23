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
							    <td></td>
							    <td>{{$blog->name}}</td>
							    <td>{{$blog->created_at}}</td>
							    <td>
							    	<div class="ph-float">
										<a href="/admin/blog/{{$blog->id}}/edit" class='ph-button ph-btn-red'>Edit</a>
									</div>
								</td>
							  </tr>
							  @endforeach
							</table>
							</div>
					</div>
				</div>	
			</section>   

@stop