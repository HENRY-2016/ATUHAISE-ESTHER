<x-app-layout>
<main id="main" class="main">


<section class="section profile">
    <center>
        <div >
            <img src="{{asset('assets/img/male.png')}}" class="user-account-img"><br>
        </div>
        <div >
            <h4> Name</h4>
            <h4>{{Auth::User()->name}}</h4>

            <h4> Email</h4>
            <h4>{{Auth::User()->email}}</h4>
            <h4> Role :: {{Auth::User()->role}} </h4>
        </div>
    </center>
    <div class="row">
    <div class="w3-row">
          
            <div class="w3-col s4  w3-center">
                <br><br>
                {{-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#emailModal">
                    {{trans_choice('general.update',1)}}  Email
                </button><br><br>

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#nameModal">
                    {{trans_choice('general.update',1)}}  Name
                </button><br><br>

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#passwordModal">
                    {{trans_choice('general.update',1)}}  Password
                </button><br><br> --}}

                {{-- <button type="submit" class="btn btn-danger submit-btn" style="width: 50%;">
                    Log Out
                </button> --}}
            </div>
        </div>
    </div>
</section>

</main><!-- End #main -->

    <!-- The email Modal -->
    <div class="modal fade modal-sm" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-text-style">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center black-text" >
                    {{trans_choice('general.change',2)}} 
                    {{trans_choice('general.user',1)}}
                    
                </h4>
            </div>

            <!-- Modal body -->
            <div class="edit-modal-body">
                <center>
                    <form action="{{ route('register') }}" method="post">
                    {{ csrf_field() }}
                    <p class="black-text main-label-text-1"><b>Current Email</b></p>
                    <p  class="black-text main-label-text-1">
                    {{Auth::User()->email}}
                    </p>
                    <input value="email"  type="hidden" name="email">
                    <input value="{{Auth::User()->id}}"  type="hidden" name="editId">
                    <div class="my-grid-item">
                        <input class="form-control" type="text"  name="email"  autocomplete="off" required="required" placeholder="New Email">
                        <br><br><br>
                        <button type="submit" class="btn btn-primary submit-btn">
                        {{trans_choice('general.update',1)}}  Email
                        </button> 
                    </div>
                    </form>
                </center>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>




    <!-- The name Modal -->
    <div class="modal fade modal-sm" id="nameModal" tabindex="-1" aria-labelledby="nameModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-text-style">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center black-text" >
                    {{trans_choice('general.change',2)}} 
                    {{trans_choice('general.user',1)}}
                    
                </h4>
            </div>

            <!-- Modal body -->
            <div class="edit-modal-body">
                <center>
                    <form action="{{ route('register') }}" method="post">
                    {{ csrf_field() }}
                    <p class="black-text main-label-text-1"><b>Current Name</b></p>
                    <p  class="black-text main-label-text-1">
                    {{Auth::User()->name}}
                    </p>
                    <input value="name"  type="hidden" name="name">
                    <input value="{{Auth::User()->id}}"  type="hidden" name="editId">
                    <div class="my-grid-item">
                        <input class="form-control" type="text"  name="FName"  autocomplete="off" required="required" placeholder="First Name">
                        <br><br>
                        <input class="form-control" type="text"  name="LName"  autocomplete="off" required="required" placeholder="Last Name">
                        <br><br><br>
                        <button type="submit" class="btn btn-primary submit-btn">
                        {{trans_choice('general.update',1)}}  Name
                        </button> 
                    </div>
                    </form>
                </center>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>




    <!-- The password Modal -->
    <div class="modal fade " id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-text-style">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center black-text" >
                    {{trans_choice('general.change',2)}} 
                    {{trans_choice('general.user',1)}}
                    
                </h4>
            </div>

                <!-- Modal body -->
                <div class="edit-modal-body">
                    <center>
                        @include('profile.partials.update-password-form')
                    </center>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
