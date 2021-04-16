@extends('layouts.app')
@section('content')
<div class="main_content_iner ">
<div class="container-fluid p-0">
   <div class="row justify-content-center">
      <div class="col-lg-12">
         <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
               <div class="box_header m-0">
                  <div class="main-title">
                     <h3 class="m-0"><Covid-19></Covid-19></h3>
                  </div>
               </div>
            </div>
            <div class="white_card_body">
               <div class="QA_section">
                  <div class="white_box_tittle list_header">
                     <h4>Overview</h4>
                     <div class="box_right d-flex lms_block">
                        <div class="serach_field_2">
                           <div class="search_inner">
                              <form active="#">
                                 <div class="search_field">
                                    <input type="text" placeholder="Search content here...">
                                 </div>
                                 <button type="submit"> <i class="ti-search"></i> </button>
                              </form>
                           </div>
                        </div>
                        
                     </div>
                  </div>
                  
                  <div class="QA_table mb_30">
                     <!-- table-responsive -->
                     <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper no-footer">
                        <table class="table lms_table_active3 dataTable no-footer dtr-inline" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info" style="width: 1522px;">
                           <thead>
                              <tr role="row">
                                 <th scope="col" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 161px;" aria-sort="ascending" aria-label="title: activate to sort column descending">Date</th>
                                 <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 236px;" aria-label="Category: activate to sort column ascending">Time</th>
                                 <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 234px;" aria-label="Teacher: activate to sort column ascending">Duration</th>
                                 <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 228px;" aria-label="Lesson: activate to sort column ascending">Longitude</th>
                                 <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 144px;" aria-label="Enrolled: activate to sort column ascending">Latitude</th>
                                 <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 182px;" aria-label="Status: activate to sort column ascending">Status</th>
                              </tr>
                           </thead>
                           <tbody>
                           @foreach($visit as $item ) 
                              <tr role="row" class="odd">
                                 
                                 <td>{{$item->date}}</td>
                                 <td>{{$item->time}}</td>
                                 <td>{{$item->duration}}</td>
                                 <td>{{$item->longitude}}</td>
                                 <td>{{$item->latitude}}</td>
                                 <td><a href="#" class="status_btn">Active</a></td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection