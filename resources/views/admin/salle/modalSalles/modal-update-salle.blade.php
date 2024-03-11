<!-- Modal update user-->
<div class="modal fade" id="UpdateSalleModel" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content rounded-0" style="background-color:rgba(40, 57, 101, 0.774);">
        <div class="modal-header w-100 border-0">
          <h5 style="color:#fd5234;" class="modal-title w-100 text-center" id="muModalLabel">EDIT_SALLE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          


            <form id="UpdateSalleForm">
                @csrf
                @method('PUT')

                <input type="hidden" 
                         class="form-control" 
                         id="id" >

                <div class="mb-3">
                  <label style="color:#fd5234;"for="type_salle">type_salle :</label>
                  <input type="text"
                         style="border:solid 0.3px #fd5234; background:rgba(223, 223, 223, 0.705); min-height:45px;" 
                         class="form-control rounded-0" 
                         id="type_salle" 
                         name="type_salle" 
                         placeholder="donner le type_salle ...">
                </div>
                <div class="mb-3">
                  <label style="color:#fd5234;"for="nom_faculte">nom_faculte :</label>
                  <input type="text"
                         style="border:solid 0.3px #fd5234; background:rgba(223, 223, 223, 0.705); min-height:45px;" 
                         class="form-control rounded-0" 
                         id="nom_faculte" 
                         name="nom_faculte" 
                         placeholder="donner le nom_faculte ...">
                </div>
                <div class="mb-3">
                  <label style="color:#fd5234;"for="nbr_places">nbr_places :</label>
                  <input type="number"
                         style="border:solid 0.3px #fd5234; background:rgba(223, 223, 223, 0.705); min-height:45px;" 
                         class="form-control rounded-0" 
                         id="nbr_places" 
                         name="nbr_places" 
                         placeholder="donner le nbr_places ...">
                </div>



                <div class="modal-footer border-0 w-100 justify-content-around">
                  <button type="button"style='min-width:46%;' class="btn btn-secondary rounded-0" data-bs-dismiss="modal">CLOSE</button>
                  <button type="submit" style="background-color:#fd5234; min-width:46%;"  class="btn text-light rounded-0">EDIT</button> 
              </div>
                
            </form>     
        
            
              
        </div>
   
      </div>
    </div>
  </div>