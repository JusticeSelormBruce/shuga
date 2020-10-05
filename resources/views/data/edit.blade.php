         <!-- Button trigger modal -->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
         integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
         crossorigin="anonymous">
         <a type="button"  data-toggle="modal"
             data-target="#exampleModal{{ $data->id }}">
             <i class="fas fa-edit text-info"></i>
        </a>

         <!-- Modal -->
         <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1"
             aria-labelledby="exampleModalLabel{{ $data->id }}" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel{{ $data->id }}">Edit details</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <form action="/edit-details" method="POST">
                            @method('PATCH')
                             @csrf
                             <input type="hidden" name="id" value="{{$data->id}}">
                             @include('data.form')
                             <div class="row">
                                 <div class="mx-auto"> <button class="btn btn-success btn-sm" type="submit"> <span
                                             class="mx-3">Update</span></button></div>
                             </div>
                         </form>
                     </div>
                    
                 </div>
             </div>
         </div>
