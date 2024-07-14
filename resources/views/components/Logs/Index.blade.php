

<x-app-layout>
    <main id="main" class="main">

    <div class="pagetitle">
    <h5>
        <b>
        
        {{trans_choice('general.student',0)}} 
        {{trans_choice('general.titleView',2)}} 
        </b>
    </h5>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
    <div class="col-lg-12">

    <div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-dark mb-2">
            {{trans_choice('general.total',1)}} 
            {{trans_choice('general.record',2)}}
            <span class="w3-badge w3-margin-left w3-red">{{$total}}</span>
        </button>
        <button type="button" class="btn btn-success" data-bs-toggle="modal"  data-bs-target="#createModal">
            {{trans_choice('general.create',1)}}
        </button>
        <br>

        @if ($message = Session::get('success'))
                <center>
                    <div class="alert alert-primary" style="width: 40% !important;" role="alert" >
                        <p class="text-center">{{$message}}</p>
                    </div>
                </center>
            @endif
                
            @if ($errors -> any())
                <center>
                    <div  class="alert alert-danger" style="width: 40% !important;" role="alert">
                        <ul>
                        @foreach($errors -> all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                <center>
            @endif
        <!-- Table with stripped rows -->
        <table class="table table-hover"  id="table">
        {{ csrf_field() }}

            <thead>
                <tr>
                    <th  class="text-center">Created</th>
                    <th  class="text-center">Name</th>
                    <th  class="text-center">Reg Number</th>
                    <th  class="text-center">Status</th>
                    <th  class="text-center">Supervisor</th>
                    <th  class="text-center">Show</th>
                    <th  class="text-center">Modify</th>
                    @if (Auth::User()->role == 'Admin')
                    <th  class="text-center">Delete</th>
                    @endif
                </tr>
            </thead>



            @foreach($data as $student)
            <tr class="row{{$student->id}}">
                <td class="text-center">{{$student -> created_at->toFormattedDateString()}}</td>
                <td class="text-center">{{$student -> fullName}}</td>
                <td class="text-center">{{$student -> regNum}}</td>
                @if ($student  -> status == "Pending")
                <td class="text-center"><b><span class="badge bg-success">{{ $student  -> status }}</span></b></td>
                @endif
                @if ($student  -> status == "Approved")
                <td class="text-center"><b><span class="badge bg-primary">{{ $student  -> status }}</span></b></td>
                @endif
                <td class="text-center">{{$student -> supervisor}}</td>
                <td class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-created="{{$student -> created_at->toFormattedDateString()}}" data-bs-id="{{ $student->id }}" data-bs-target="#showModal"
                    >Show</button>
                </td>
                <td class="text-center">
                    <button type="button" class="btn btn-success" data-bs-created="{{$student -> created_at->toFormattedDateString()}}" data-bs-toggle="modal" data-bs-id="{{ $student->id }}" data-bs-target="#editModal"
                        >Comment</button>
                </td>
                @if (Auth::User()->role == 'Admin')
                <td class="text-center">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-id="{{ $student->id }}" data-bs-target="#deleteModal"
                    >Delete</button>
                </td>
                @endif

            </tr>
            @endforeach
        </table>
        <!-- End Table with stripped rows -->

    </div>
    </div>

    </div>
    </div>
    </section>

    </main><!-- End #main -->




<!-- The show Modal -->
<div class="modal fade modal-lg" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-text-style">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center" >
                    {{trans_choice('general.view',2)}} 
                    {{trans_choice('general.detail',2)}}
                </h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <table class="table" >
                    <tr>
                        <td>
                            <b><p class="text-start">Created</p></b>
                            <p class="text-start" id="show-created-id" ></p>
                        </td>
                        <td>
                            <b><p class="text-start">Name</p></b>
                            <p class="text-start" id="show-full-name" ></p>
                        </td>
                        <td>
                            <b><p class="text-start">Reg No</p></b>
                            <p class="text-start" id="show-reg-num" ></p>
                        </td>
                        <td>
                            <b><p class="text-start">Course</p></b>
                            <p class="text-start" id="show-course" ></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b><p class="text-start">Week  :: &nbsp;&nbsp;<span id="show-week" ></span></p></b>
                        </td>
                        <td>
                            <b><p class="text-start">Day  :: &nbsp;&nbsp;<span id="show-day"></span></p></b>
                        </td>
                    </tr>
                </table>
                <table class="table">
                    <tr class="table-dark">
                        <td >Activities Done Details</td>
                    </tr>
                </table >
                <table class="table">
                    <tbody id="activities_table"></tbody>
                </table>

                <table class="table">
                    <tr class="table-dark">
                        <td >Skills Attained Details</td>
                    </tr>
                </table >
                <table class="table">
                    <tbody id="skills_table"></tbody>
                </table>

                <table class="table">
                    <tr class="table-dark">
                        <td >Challenges Details</td>
                    </tr>
                </table >
                <table class="table">
                    <tbody id="challenges_table"></tbody>
                </table>

                <table class="table">
                    <tr class="table-dark">
                        <td >Notes Taken Details</td>
                    </tr>
                </table >
                <table class="table">
                    <tbody id="notes_table"></tbody>
                </table>
                
                <button type="button" class="btn btn-primary" style="width: 100%" >Supervisor Comments</button><br><br>
                    <b><p class="text-start" id="show-supervisor" ></p></b>
                <table class="table">
                    <tbody id="comments_table"></tbody>
                </table>
            </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>



  <!-- The edit Modal -->
  <div class="modal fade modal-lg" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-text-style">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="editModalLabel">
                {{trans_choice('general.comment',2)}} 
                {{trans_choice('general.record',1)}}
                {{trans_choice('general.detail',2)}}
            </h4>
        </div>
        
        <!-- Modal body -->
        <div class="delete-modal-body">
                <form method="post" action="{{route('students-logs.update','null')}}" >
                    {{method_field('patch')}}
                    {{ csrf_field() }}
                    <input type="hidden" name="editId" id="edit-editId" >
                    <table class="table" >
                        <tr>
                            <td>
                                <b><p class="text-start">Created</p></b>
                                <p class="text-start" id="edit-created-id" ></p>
                            </td>
                            <td>
                                <b><p class="text-start">Name</p></b>
                                <p class="text-start" id="edit-full-name" ></p>
                            </td>
                            <td>
                                <b><p class="text-start">Reg No</p></b>
                                <p class="text-start" id="edit-reg-num" ></p>
                            </td>
                            <td>
                                <b><p class="text-start">Course</p></b>
                                <p class="text-start" id="edit-course" ></p>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <b><p class="text-start">Week  :: &nbsp;&nbsp;<span id="edit-week" ></span></p></b>
                            </td>
                            <td>
                                <b><p class="text-start">Day  :: &nbsp;&nbsp;<span id="edit-day"></span></p></b>
                            </td>
                        </tr>
                    </table>
                    <table class="table">
                        <tr class="table-dark">
                            <td >Activities Done Details</td>
                        </tr>
                    </table >
                    <table class="table">
                        <tbody id="edit-activities_table"></tbody>
                    </table>
    
                    <table class="table">
                        <tr class="table-dark">
                            <td >Skills Attained Details</td>
                        </tr>
                    </table >
                    <table class="table">
                        <tbody id="edit-skills_table"></tbody>
                    </table>
    
                    <table class="table">
                        <tr class="table-dark">
                            <td >Challenges Details</td>
                        </tr>
                    </table >
                    <table class="table">
                        <tbody id="edit-challenges_table"></tbody>
                    </table>
    
                    <table class="table">
                        <tr class="table-dark">
                            <td >Notes Taken Details</td>
                        </tr>
                    </table >
                    <table class="table">
                        <tbody id="edit-notes_table"></tbody>
                    </table>

        
                <button type="button" class="btn btn-success" style="width: 100%" >Your Comments</button><br><br>
                <div style="margin-right: 15px">
                    <div id="ActivityInputContainer">
                        <div id="row"> <div class="input-group m-1">
                            <div class="input-group-prepend">
                                <button class="btn btn-danger" type="button">
                                <i class="bi bi-trash"></i></button> 
                            </div>
                            <input type="text" name="comments[]" placeholder="Comment" id="DefualtActivity" class="form-control m-input"> </div> 
                        </div>
                        <div id="ActivityNewinput"></div>
                    </div>
                    <button id="CommentRowAdder" type="button" class="btn btn-dark">
                        + ADD
                    </button>
                </div>
                <center>
                    <button  type="submit"  class="btn btn-primary submit-btn" >{{trans_choice('general.save',1)}}{{trans_choice('general.detail',2)}}</button>
                </center>
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No Close</button>
            
        </div>
        </div>
    </div>
</div>

    <!-- The delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-text-style">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="deleteModalLabel">
                    {{trans_choice('general.delete',2)}} 
                    {{trans_choice('general.record',1)}}
                    {{trans_choice('general.detail',2)}}
                </h4>
            </div>
            
            <!-- Modal body -->
            <div class="delete-modal-body">
                <br><p class="modal-title text-center red-text" >Are Sure You Want To Delete</p><br>
                <p id="Delete-Name" class="text-center" ></p>
                <p class="text-center red-text" >{{trans_choice('general.detail',2)}} {{trans_choice('general.record',1)}}</p>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No Close</button>
                <form  action="{{route('students-logs.destroy','null')}}" method="post">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button  type="submit" class="btn btn-primary" data-bs-dismiss="modal">Yes Delete</button>
                    <input type="hidden"  id="deleteId" name="deleteId" >
                </form>
            </div>
            </div>
        </div>
    </div>

    
    <script>

$(document).ready(function() { 
    $('#table').DataTable();
    $('#showModal,#editModal,#deleteModal').modal({backdrop: 'static',keyboard: false})
    
});

$("#CommentRowAdder").click(function () {
        newRowAdd =
            '<div id="row"> <div class="input-group m-1">' +
            '<div class="input-group-prepend">' +
            '<button class="btn btn-danger" id="DeleteRow" type="button">' +
            '<i class="bi bi-trash"></i> Delete</button> </div>' +
            '<input type="text" name="comments[]" placeholder="Comment" class="form-control m-input"> </div> </div>';
        $('#ActivityNewinput').append(newRowAdd);
    });
    $("body").on("click", "#DeleteRow", function () {$(this).parents("#row").remove();})

$('#showModal').on('show.bs.modal', function (event) {
        var target = jQuery(event.relatedTarget)
        var id = target.attr('data-bs-id');
        var created = target.attr('data-bs-created');
        var modal = $(this)
        $.ajax({
            url: '/students/logs/data/' + id,
            method: 'GET',
            success: function(response) {
                $('#show-created-id').html(created);
                $('#show-full-name').html(response.fullName);
                $('#show-reg-num').html(response.regNum);
                $('#show-week').html(response.week);
                $('#show-day').html(response.day);
                $('#show-course').html(response.course);
                $('#show-supervisor').html(response.supervisor);

                
                var activitiesList = response.activities;
                var challengesList = response.challenges;
                var skillsList = response.skills;
                var notesList = response.notes;
                var commentsList = response.comments;
                
                var activitiesJson = JSON.parse(activitiesList);
                var challengesJson = JSON.parse(challengesList);
                var skillsJson = JSON.parse(skillsList);
                var notesJson = JSON.parse(notesList);
                var commentsJson = JSON.parse(commentsList);
            
                var activitiesTrHTML = '';
                var challengesTrHTML = '';
                var skillsTrHTML = '';
                var notesTrHTML = '';
                var commentsTrHTML = '';
                var activityCount = 1;
                var challengesCount = 1;
                var skillsCount = 1;
                var notesCount = 1;
                var commentsCount = 1;


                $.each(activitiesJson, function (i, item) {
                    activitiesTrHTML += '<tr><td>' +'<span class="w3-badge">'+activityCount++ +'</span> &nbsp;&nbsp;&nbsp;' + item.data+ '</td><td>';
                });
                $('#activities_table').html(" "); 
                $('#activities_table').append(activitiesTrHTML);

                $.each(skillsJson, function (i, item) {
                    skillsTrHTML += '<tr><td>' + '<span class="w3-badge">'+skillsCount++ +'</span> &nbsp;&nbsp;&nbsp;' + item.data+ '</td><td>';
                });
                $('#skills_table').html(" "); 
                $('#skills_table').append(skillsTrHTML);


                $.each(challengesJson, function (i, item) {
                    challengesTrHTML += '<tr><td>' + '<span class="w3-badge">'+challengesCount++ +'</span> &nbsp;&nbsp;&nbsp;' + item.data+ '</td><td>';
                });
                $('#challenges_table').html(" "); 
                $('#challenges_table').append(challengesTrHTML);

                $.each(notesJson, function (i, item) {
                    notesTrHTML += '<tr><td>' + '<span class="w3-badge">'+notesCount++ +'</span> &nbsp;&nbsp;&nbsp;' + item.data+ '</td><td>';
                });
                $('#notes_table').html(" "); 
                $('#notes_table').append(notesTrHTML);


                $.each(commentsJson, function (i, item) {
                    commentsTrHTML += '<tr><td>' + '<span class="w3-badge w3-blue">'+commentsCount++ +'</span> &nbsp;&nbsp;&nbsp;' + item+ '</td><td>';
                });
                $('#comments_table').html(" "); 
                $('#comments_table').append(commentsTrHTML);

            
            }
        });
    });



    $('#editModal').on('show.bs.modal', function (event) {
        var target = jQuery(event.relatedTarget)
        var id = target.attr('data-bs-id');
        var created = target.attr('data-bs-created');
        var modal = $(this)
        $.ajax({
            url: '/students/logs/data/' + id,
            method: 'GET',
            success: function(response) {
                $('#edit-created-id').html(created);
                $('#edit-full-name').html(response.fullName);
                $('#edit-reg-num').html(response.regNum);
                $('#edit-course').html(response.course);
                $('#edit-week').html(response.week);
                $('#edit-day').html(response.day);
                $('#edit-editId').val(response.id);

                
                var activitiesList = response.activities;
                var challengesList = response.challenges;
                var skillsList = response.skills;
                var notesList = response.notes;
                
                var activitiesJson = JSON.parse(activitiesList);
                var challengesJson = JSON.parse(challengesList);
                var skillsJson = JSON.parse(skillsList);
                var notesJson = JSON.parse(notesList);
            
                var activitiesTrHTML = '';
                var challengesTrHTML = '';
                var skillsTrHTML = '';
                var notesTrHTML = '';
                var activityCount = 1;
                var challengesCount = 1;
                var skillsCount = 1;
                var notesCount = 1;


                $.each(activitiesJson, function (i, item) {
                    activitiesTrHTML += '<tr><td>' +'<span class="w3-badge">'+activityCount++ +'</span> &nbsp;&nbsp;&nbsp;' + item.data+ '</td><td>';
                });
                $('#edit-activities_table').html(" "); 
                $('#edit-activities_table').append(activitiesTrHTML);

                $.each(skillsJson, function (i, item) {
                    skillsTrHTML += '<tr><td>' + '<span class="w3-badge">'+skillsCount++ +'</span> &nbsp;&nbsp;&nbsp;' + item.data+ '</td><td>';
                });
                $('#edit-skills_table').html(" "); 
                $('#edit-skills_table').append(skillsTrHTML);


                $.each(challengesJson, function (i, item) {
                    challengesTrHTML += '<tr><td>' + '<span class="w3-badge">'+challengesCount++ +'</span> &nbsp;&nbsp;&nbsp;' + item.data+ '</td><td>';
                });
                $('#edit-challenges_table').html(" "); 
                $('#edit-challenges_table').append(challengesTrHTML);

                $.each(notesJson, function (i, item) {
                    notesTrHTML += '<tr><td>' + '<span class="w3-badge">'+notesCount++ +'</span> &nbsp;&nbsp;&nbsp;' + item.data+ '</td><td>';
                });
                $('#edit-notes_table').html(" "); 
                $('#edit-notes_table').append(notesTrHTML);

            
            }
        });
    });


    $('#deleteModal').on('show.bs.modal', function (event) {
        var target = jQuery(event.relatedTarget)
        var id = target.attr('data-bs-id');
        var modal = $(this)
        $.ajax({
            url: '/students/logs/data/' + id,
            method: 'GET',
            success: function(response) {
                $('#deleteId').val(response.id);
                $('#Delete-Name').html(response.fullName);
            }
        });
    });



</script>
</x-app-layout>
