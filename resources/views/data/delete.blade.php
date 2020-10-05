          <style>
              a{
                  text-decoration: none!important;
              }
          </style>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
 integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
 crossorigin="anonymous">
         <!-- Button trigger modal -->
         <a type="button" data-toggle="modal" data-target="#exampleModald{{$data->id}}">
            <i class="fas fa-trash text-danger"></i>
         </a>
           
           <!-- Modal -->
           <div class="modal fade" id="exampleModald{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabeld{{$data->id}}" aria-hidden="true">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabeld{{$data->id}}">Delete Details</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                   <div class="row"> <div class="mx-auto"><a href="/delete-details/{{$data->id}}" class="text-danger pt-5">Delete</a></div></div>
                 </div>
                
               </div>
             </div>
           </div>