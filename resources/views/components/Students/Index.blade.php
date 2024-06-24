

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
                    <th  class="text-center">Course</th>
                    <th  class="text-center">Supervisor</th>
                    {{-- <th  class="text-center">Show</th> --}}
                    <th  class="text-center">Modify</th>
                    <th  class="text-center">Delete</th>
                </tr>
            </thead>



            @foreach($data as $student)
            <tr class="row{{$student->id}}">
                <td class="text-center">{{$student -> created_at->toFormattedDateString()}}</td>
                <td class="text-center">{{$student -> fullName}}</td>
                <td class="text-center">{{$student -> regNum}}</td>
                <td class="text-center">{{$student -> course}}</td>
                <td class="text-center">{{$student -> supervisor}}</td>
                {{-- <td class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-id="{{ $student->id }}" data-bs-target="#showModal"
                    >Show</button>
                </td> --}}
                <td class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-id="{{ $student->id }}" data-bs-target="#editModal"
                        >Edit</button>
                </td>
                <td class="text-center">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-id="{{ $student->id }}" data-bs-target="#deleteModal"
                    >Delete</button>
                </td>
        

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






<!-- The create Modal -->
<div class="modal fade modal-lg " id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-text-style">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center" >
                    {{trans_choice('general.create',2)}} 
                    {{trans_choice('general.detail',2)}}
                </h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="{{route('students.store')}}" >
                    {{ csrf_field() }}
                <div class="my-grid-container-3-columns">
                    <input type="hidden" value="store"  class="form-control" name="store">
    
                    <div class="my-grid-item">
                        <label class="input-labels" >Full Name</label>
                        <input type="text"  class="form-control" name="fullName" placeholder="Student Full Name" autocomplete="off">
                    </div>
                
                    <div class="my-grid-item">
                        <label class="input-labels" >Cours</label>
                        <input name="course" type="text" required class="form-control" placeholder="Course Name"  autocomplete="off">
                    </div>
                
                    <div class="my-grid-item">
                        <label class="input-labels" >Reg No</label>
                        <input name="regNum" type="text" required class="form-control" autocomplete="off">
                    </div>
                    
                    <div class="my-grid-item">
                        <label class="input-labels" >Date Of Birth</label>
                        <input type="date" name="dob" required class="form-control"   autocomplete="off">
                    </div>
                    
                    <div class="my-grid-item">
                        <label class="input-labels" >Supervisor</label>
                        <select name="supervisor" class="form-control" >
                            <option>-- Select --</option>
                            @foreach ( $supervisors as $supervisor)
                                <option   type="text" value="{{$supervisor->name}}" >{{$supervisor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br><br>
                <center>
                    <button  type="submit"  class="btn btn-primary submit-btn">{{trans_choice('general.save',1)}}{{trans_choice('general.detail',2)}}</button>
                </center>
            </form>
                
            </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

  <!-- The edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-text-style">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="editModalLabel">
                {{trans_choice('general.edit',2)}} 
                {{trans_choice('general.record',1)}}
                {{trans_choice('general.detail',2)}}
            </h4>
        </div>
        
        <!-- Modal body -->
        <div class="delete-modal-body">
                <form method="post" action="{{route('students.update','null')}}" >
                    {{method_field('patch')}}
                    {{ csrf_field() }}
                    <input type="hidden" id="editId" name="editId" value="editId" >
                    <div class="my-grid-container-3-columns">

                        <div class="my-grid-item">
                            <label class="input-labels" >Full Name</label>
                            <input type="text" id="fullName"  class="form-control" name="fullName" placeholder="Student Full Name" autocomplete="off">
                        </div>
                    
                        <div class="my-grid-item">
                            <label class="input-labels" >Cours</label>
                            <input name="course" id="course" type="text" required class="form-control" placeholder="Course Name"  autocomplete="off">
                        </div>
                    
                        <div class="my-grid-item">
                            <label class="input-labels" >Reg No</label>
                            <input name="regNum" id="regNum" type="text" required class="form-control" autocomplete="off">
                        </div>
                        
                        <div class="my-grid-item">
                            <label class="input-labels" >Date Of Birth</label>
                            <input type="date" name="dob" id="dob" required class="form-control"   autocomplete="off">
                        </div>
                        
                        <div class="my-grid-item">
                            <label class="input-labels" >Supervisor</label>
                            <select name="supervisor" id="supervisor" class="form-control" >
                                <option>-- Select --</option>
                                @foreach ( $supervisors as $supervisor)
                                    <option   type="text" value="{{$supervisor->name}}" >{{$supervisor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <br><br>
                <center>
                    <button  type="submit"  class="btn btn-primary submit-btn">{{trans_choice('general.save',1)}}{{trans_choice('general.detail',2)}}</button>
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
                <form  action="{{route('students.destroy','null')}}" method="post">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button  type="submit" class="btn btn-primary" data-bs-dismiss="modal">Yes Delete</button>
                    <input type="hidden"  id="deleteId" name="deleteId" >
                    <input  value="{{Auth::User()->id}}"  type="hidden"  name="User">
                    <input value="" type="hidden" name="organization" >
                </form>
            </div>
            </div>
        </div>
    </div>

    
    <script>

$(document).ready(function() { 
    $('#table').DataTable();
    $('#createModal,#showModal,#editModal,#deleteModal').modal({backdrop: 'static',keyboard: false})
});
$('#editModal').on('show.bs.modal', function (event) {
        var target = jQuery(event.relatedTarget)
        var id = target.attr('data-bs-id');
        var modal = $(this)
        $.ajax({
            url: '/students/data/' + id,
            method: 'GET',
            success: function(response) {
                $('#fullName').val(response.fullName);
                $('#dob').val(response.dob);
                $('#course').val(response.course);
                $('#regNum').val(response.regNum);
                $('#supervisor').val(response.supervisor);
                $('#editId').val(response.id);
            }
        });
    });



    $('#deleteModal').on('show.bs.modal', function (event) {
        var target = jQuery(event.relatedTarget)
        var id = target.attr('data-bs-id');
        var modal = $(this)
        $.ajax({
            url: '/students/data/' + id,
            method: 'GET',
            success: function(response) {
                $('#deleteId').val(response.id);
                $('#Delete-Name').html(response.fullName);
            }
        });
    });


</script>
</x-app-layout>
