<x-app-layout>
    <center>
        <br><br><br><br>
        <button type="button" class="btn btn-success" data-bs-toggle="modal"  data-bs-target="#dbModal" >BackUp My Data Base</button>
        <button type="button" class="btn btn-success" data-bs-toggle="modal"  data-bs-target="#dbModal" >BackUp My Image Data</button>
        <br><br>
    </center>

    <!-- The edit Modal -->
    <div class="modal fade modal-sm" id="dbModal" tabindex="-1" aria-labelledby="dbModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-text-style">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center" >
                    Backing Up DataBase
                </h4>
            </div>

            <!-- Modal body -->
            <div class="edit-modal-body">
                <center>
                <br><p class="modal-title text-center blue-text" >Downloads Will Take Few Seconds</p>

                <br><br>
                <a href="{{url('export-db')}}" class="btn btn-success" >Download DataBase Now</a>
                <br><br>
                </center>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>



<div class="modal fade modal-sm" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-text-style">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center" >
                    Backing Up DataBase
                </h4>
            </div>

            <!-- Modal body -->
            <div class="edit-modal-body">
                <center>
                <br><p class="modal-title text-center blue-text" >Downloads Will Take Few Seconds</p>

                <br><br>
                <a class="btn btn-success" >Download My Image Data Now</a>
                <br><br>
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

