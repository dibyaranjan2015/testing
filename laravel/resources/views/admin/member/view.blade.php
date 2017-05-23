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

/*Blue
==========================*/
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
                            <?php
                                $i=0;
                                $array=['Executive','Team','Company','Retailer'];
                            ?>
                            <table>
                                  <tr>
                                  <th>S.No.</th>
                                  <th>Member Name</th>
                                  <th>Email Id</th>
                                  <th>Type</th>
                                  <th>Action</th>
                              </tr>
                              @foreach ($members as $member)
                              <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $member->m_name }}</td>
                                    <td>{{ $member->m_email }}</td>
                                    <td>{{$array[$member->m_type-1]}}</td>
                                    <td>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="ph-float">
                                                <a href="/admin/member/{{$member->m_id}}/edit" class='ph-button ph-btn-grey'>Edit</a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="ph-float">
                                                <a href="/admin/member/{{$member->m_id}}/remove" class='ph-button ph-btn-red'>Remove</a>
                                            </div>
                                        </div>
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
