

<x-app-layout>
    <main id="main" class="main">

    <div class="pagetitle">
    <h5>
        <b>
        
        {{trans_choice('general.student',0)}} 
        {{trans_choice('general.edit',2)}} 
        </b>
    </h5>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
    <div class="col-lg-12">

    <div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-dark mb-2">
            Edit A Student
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
            
            <form method="post" action="{{route('students.update',$student->id)}}" >
                {{method_field('patch')}}
                {{ csrf_field() }}
                <div class="my-grid-container-3-columns">

                    <div class="my-grid-item">
                        <label class="input-labels" >Full Name</label>
                        <input type="text" id="fullName" value="{{$student->fullName}}"  class="form-control" name="fullName" placeholder="Student Full Name" autocomplete="off">
                    </div>
                
                    <div class="my-grid-item">
                        <label class="input-labels" >Course</label>
                        <select name="course" id="supervisor" class="form-control" >
                            <option value="{{$student->course}}" >{{$student->course}}</option>
                            @foreach ( $courses as $course)
                                <option   type="text" value="{{$course->name}}" >{{$course->name}}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="my-grid-item">
                        <label class="input-labels" >Reg No</label>
                        <input name="regNum" value="{{$student->regNum}}" id="regNum" type="text" placeholder="Reg Number" required class="form-control" autocomplete="off">
                    </div>
                    
                    <div class="my-grid-item">
                        <label class="input-labels" >Email</label>
                        <input type="text" value="{{$student->email}}" name="email" required class="form-control" placeholder="Email"  autocomplete="off">
                    </div>
                    
                    <div class="my-grid-item">
                        <label class="input-labels" >Supervisor</label>
                        <select name="supervisor" id="supervisor" class="form-control" >
                            <option value="{{$student->supervisor}}">{{$student->supervisor}}</option>
                            @foreach ( $supervisors as $supervisor)
                                <option   type="text" value="{{$supervisor->name}}" >{{$supervisor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-grid-item">
                        <label class="input-labels" >Place</label>
                        <input type="text" value="{{$student->place}}" name="palace" id="place" required class="form-control" placeholder="Interniship Place"   autocomplete="off">
                    </div>
                </div>
            <br><br>
            <center>
                <a  href="{{route('students.index')}}"  class="btn btn-danger">Cancle</a>
                <button  type="submit"  class="btn btn-primary submit-btn">{{trans_choice('general.save',1)}}{{trans_choice('general.detail',2)}}</button>
            </center>
        </form>

    </div>
    </div>

    </div>
    </div>
    </section>

    </main><!-- End #main -->

    <script>


</script>
</x-app-layout>
